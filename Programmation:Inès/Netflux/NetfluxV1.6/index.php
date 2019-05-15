<?php
    require 'Smarty/libs/Smarty.class.php'; // On inclut la classe Smarty

    
    // function de chargement 
    function changerClass($classe)
    {
        require 'Classes/'.$classe.'.php';
    }

    //function chargerClass en autoload
    spl_autoload_register('changerClass');

    //connexion BDD via un include
    include('connect.php');

    // déclaration des nouveaux objets
    $smarty = new Smarty();

    $serieManager = new SerieManager($bdd);
    $imageManager = new ImageManager($bdd);
    $categorieManager = new CategorieManager($bdd);
    $link = new Link();

//Pagination=============================================================================================================================

    $seriesParPage = 6;
    $seriesTotalesReq = $bdd->query('SELECT idSerie FROM Serie');
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
                                <a class="page-link" href= "index.php?page='.$i.'">'.$i.'</a>
                            </li>';
    }


//Assignation Smarty===========================================================================================================================================

    //Récupération des requêtes + affichages
    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'tabImages' => $imageManager->getList(),
        'tabSeries' => $serieManager->getListPagination($depart, $seriesParPage),
        'tabTypeCat' => $categorieManager->getListCat(),
        'tabPagination' => $tabPagination,
        'link' => $link,
        'pageCourante' => $pageCourante
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

//==========================================================================================================================================

    //Appel de la page TPL

    $smarty->display('template/netflux.tpl');


