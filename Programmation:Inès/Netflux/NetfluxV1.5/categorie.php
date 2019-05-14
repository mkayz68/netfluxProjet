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

    //connexion BDD en créant un objet de la class native PDO
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=NetfluxProjet2;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    //déclaration des nouveaux objets
    $smarty = new Smarty();

    $serieManager = new SerieManager($bdd);
    $imageManager = new ImageManager($bdd);
    $categorieManager = new CategorieManager ($bdd);
    $link = new Link();

    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'tabImages' => $imageManager->getList(),
        'tabTypeCat' => $categorieManager->getListCat(),
        'link' => $link
    ));

    if(isset($_GET['id']) AND !empty($_GET['id']) AND $_GET['id'] > 0)
    {
        $id = intval($_GET['id']);
        $tabSeries = $serieManager->getListSerieByCat($id);
        $smarty->assign('tabSeries', $tabSeries);
    }
    else
    {
        $tabSeries = $serieManager->getListSerieByCat(1);
        $smarty->assign('tabSeries', $tabSeries);
    }


    //Pagination=====================================================================================================================

    $seriesParPage = 6;
    $seriesTotalesReq = $bdd->query('SELECT Serie.*,categoriserSerie.idCategorie 
                                     FROM Serie INNER JOIN categoriserSerie 
                                     ON Serie.idSerie=categoriserSerie.idSerie 
                                     WHERE idCategorie ='.$id);
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
                                <a class="page-link" href= "categorie.php?id='.$_GET["id"].'&page='.$i.'">'.$i.'</a>
                            </li>';
    }

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

    
    //Appel de la page TPL
    $smarty->display('template/categorie.tpl');