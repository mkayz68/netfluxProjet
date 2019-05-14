<?php
    require 'Smarty/libs/Smarty.class.php'; // On inclut la classe Smarty

    
    // function de chargement 
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

    // déclaration des nouveaux objets
    $smarty = new Smarty();

    $serieManager = new SerieManager($bdd);
    $imageManager = new ImageManager($bdd);
    $categorieManager = new CategorieManager($bdd);
    $link = new Link();

    //Pagination=====================================================================================================================

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

    //Appel de la page TPL

    $smarty->display('template/netflux.tpl');

    //===============================================================================

    //==============================================================================

