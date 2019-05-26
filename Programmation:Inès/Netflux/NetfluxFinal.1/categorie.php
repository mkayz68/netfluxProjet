<?php

    // On inclut la classe Smarty
    require 'Smarty/libs/Smarty.class.php';
    
    //function de chargement
    function changerClass($classe)
    {
        require 'Classes/'.$classe.'.php';
    }

    //function chargerClass en autoload
    spl_autoload_register('changerClass');

    //connexion BDD via un include
    include ('connect.php');

    //déclaration des nouveaux objets
    $smarty = new Smarty();

    $serieManager = new SerieManager($bdd);
    $imageManager = new ImageManager($bdd);
    $categorieManager = new CategorieManager ($bdd);
    $link = new Link();


//Récupération ID catégorie=================================================================================================================

    if(isset($_GET['id']) AND !empty($_GET['id']) AND $_GET['id'] > 0 AND $_GET['id'] < 7)
    {
        $id = intval($_GET['id']);
        $typeCat = $categorieManager->get($id);
        $tabSeries = $serieManager->getListSerieByCat($id);
        $smarty->assign(array
            (
            'tabSeries' => $tabSeries,
            'typeCat' => $typeCat
            )
        );
    }
    else
    {
        $id = 1;
        $typeCat = $categorieManager->get($id);
        $tabSeries = $serieManager->getListSerieByCat($id);
        $smarty->assign(array
            (
            'tabSeries' => $tabSeries,
            'typeCat' => $typeCat
            )
        );
    }


//Pagination================================================================================================================================
    if(!empty($id))
    {
        $seriesTotalesReq = $bdd->query('SELECT Serie.*, CategoriserSerie.idCategorie 
                                     FROM Serie INNER JOIN CategoriserSerie 
                                     ON Serie.idSerie=CategoriserSerie.idSerie 
                                     WHERE idCategorie ='.$id);
    }
    elseif (!empty($id) AND $id < 1 AND $id > 7)
    {
        $id = 1;

        $seriesTotalesReq = $bdd->query('SELECT Serie.*,CategoriserSerie.idCategorie 
                                     FROM Serie INNER JOIN CategoriserSerie 
                                     ON Serie.idSerie=CategoriserSerie.idSerie 
                                     WHERE idCategorie ='.$id);
    }
    
    $seriesParPage = 6;
    $seriesTotales = $seriesTotalesReq->rowCount();
    $pageTotales = ceil($seriesTotales/$seriesParPage);

    if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
    {
        $_GET['page'] = intval($_GET['page']);

        $pageCourante = $_GET['page'];


        if(isset($_GET['precedente']))
        {
            $pageCourante--;
        }

        if(isset($_GET['suivante']))
        {
            $pageCourante++;
        }

        if ($pageCourante < 1)
        {
            $pageCourante =1;
        }
        elseif($pageCourante > $pageTotales)
        {
            $pageCourante = $pageTotales;
        }
    }
    else
    {
        $pageCourante = 1;
    }

    $depart = ($pageCourante-1)*$seriesParPage;

    for ($i=1; $i<=$pageTotales; $i++)
    {
        $tabPagination[] = '<li class="page-item">
                                <a class="page-link" href= "categorie.php?id='.$id.'&page='.$i.'">'.$i.'</a>
                            </li>';
    }



//Assignation Smarty===========================================================================================================================================


    //Récupération des requêtes + affichages
    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'tabImages' => $imageManager->getList(),
        'tabSeries' => $serieManager->getListSerieByCatPagination($id, $depart, $seriesParPage),
        'tabTypeCat' => $categorieManager->getListCat(),
        'tabPagination' => $tabPagination,
        'link' => $link,
        'pageCourante' => $pageCourante,
        'id' => $id
        )
    );


//Barre de Recherche=========================================================================================================================
    
    if (isset($_POST['recherche']))
    {
        $titreSerie = htmlspecialchars(trim($_POST['titreSerie']));

        if (!empty($_POST['titreSerie']))
        {
            $tabSeries = $serieManager->getListSerieByNom($titreSerie);
            $smarty->assign('titreSerie', $titreSerie);
            $smarty->assign('tabSeries', $tabSeries);    
        }
    }


//=======================================================================================================================================

    //Appel de la page TPL
    $smarty->display('template/categorie.tpl');