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

    if(isset($_GET['id']))
    {
        $tabSeries = $serieManager->getListSerieByCat($_GET['id']);
        $smarty->assign('tabSeries', $tabSeries);

    }
    
    //Appel de la page TPL
    $smarty->display('template/categorie.tpl');