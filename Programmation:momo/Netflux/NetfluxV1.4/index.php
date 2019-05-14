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

    //Récupération des requêtes + affichages
    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'tabImages' => $imageManager->getList(),
        'tabSeries' => $serieManager->getList(),
        'tabTypeCat' => $categorieManager->getListCat(),
        'link' => $link
    ));

    //Appel de la page TPL

    $smarty->display('template/netflux.tpl');

    //===============================================================================

    //==============================================================================

