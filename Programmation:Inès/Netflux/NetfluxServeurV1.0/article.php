<?php

    //On inclut la classe Smarty
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

    //déclaration des nouveaux objets
    $smarty = new Smarty();

    $articleManager = new ArticleManager($bdd);
    $serieManager = new SerieManager($bdd);
    $categorieManager = new CategorieManager($bdd);
    $link = new Link();


//Récupération ID série pour l'affichage des articles===========================================================================================

if(isset($_GET['id']) AND !empty($_GET['id']) AND $_GET['id'] > 0)
    {
        $id = intval($_GET['id']);
        $articles = $articleManager->getListArticlesSerieById($id);
        $smarty->assign('articles', $articles);
    }
    else
    {
        $id = 1;
        $articles = $articleManager->getListArticlesSerieById($id);
        $smarty->assign('articles', $articles);
    }



//Assignation Smarty===========================================================================================================================================


    
    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'tabTypeCat' => $categorieManager->getListCat(),
        'link' => $link,
        'nomSerie' => $articleManager->getNomSerieByArticle($id)
    ));


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


//==================================================================================================================================================

    //Appel de la page TPL
    $smarty->display('template/article.tpl');

?>