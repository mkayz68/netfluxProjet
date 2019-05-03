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

    // déclaration d'un nouvel objet smarty
    $smarty = new Smarty();

    $serieManager = new SerieManager($bdd);
    $smarty->assign('tabSeries', $serieManager->getList());

    $imageManager = new ImageManager($bdd);
    $smarty->assign('tabImages', $imageManager->getList());


    $categorieManager = new CategorieManager ($bdd);
    $smarty->assign('tabCategories', $categorieManager->getList());


    $categoriserSerieManager = new CategoriserSerieManager($bdd);
    $smarty->assign('tabCategoriserSerie', $categoriserSerieManager->getList());

    $link = new Link();
    $smarty->assign('link', $link);

    $smarty->display('template/netflux.tpl');

    //===============================================================================


    //==============================================================================
?>