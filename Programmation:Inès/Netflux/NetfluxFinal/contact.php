<?php

// On inclut la classe Smarty
    require 'Smarty/libs/Smarty.class.php'; 

    
    // function de chargement 
    function changerClass($classe)
    {
        require 'Classes/'.$classe.'.php';
    }

    //function chargerClass en autoload
    spl_autoload_register('changerClass');

    //connexion BDD via un include
    include ('connect.php');

    // déclaration des nouveaux objets
    $smarty = new Smarty();

    $serieManager = new SerieManager($bdd);
    $categorieManager = new CategorieManager($bdd);
    $link = new Link();


//Assignation Smarty===========================================================================================================================================

    //Récupération des requêtes + affichages
    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'tabSeries' => $serieManager->getList(),
        'tabTypeCat' => $categorieManager->getListCat(),
        'link' => $link
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

    $smarty->display('template/contact.tpl');

?>