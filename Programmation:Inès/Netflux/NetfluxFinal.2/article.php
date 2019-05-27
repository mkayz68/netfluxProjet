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


//Modification Article================================================================================================================================

    if(isset($_POST['modifierArticle']))
    {
        $nomArticle = htmlspecialchars(ucwords(trim($_POST['nomArticle'])));
        $auteurArticle = htmlspecialchars(ucfirst(trim($_POST['auteurArticle'])));
        $articleSerie = htmlspecialchars(trim($_POST['articleSerie']));
        $idArticle = htmlspecialchars($_POST['idArticle']);
        $idSerie = htmlspecialchars($_POST['idSerie']);

        // pour receuillir les messages d'erreur et de succes
        $tabMessage = [];
        
        
        //Condition pour le nom de l'article
        if(strlen($nomArticle) > 255)
        {
            $tabMessage[] = "Le nom de votre article ne doit pas dépasser 255 caractères";
        }
        elseif(!empty($nomArticle))
        {
            $articleManager->updateByChamps($idSerie, $idArticle, array('nomArticle'), array($nomArticle));
            $tabMessage[] = "Le nom de votre article a été modifié avec succès";
        }
    
        //Condition pour l'auteur de l'article
        if(strlen($auteurArticle) > 50)
        {
            $tabMessage[] = "Le nom de l'auteur de votre article ne doit pas dépasser 50 caractères";
        }
        elseif(!empty($auteurArticle))
        {
            $articleManager->updateByChamps($idSerie, $idArticle, array('auteurArticle'), array($auteurArticle));
            $tabMessage[] = "L'auteur de l'article a été modifié avec succès";
        }

        //Condition pour l'article
        if(!empty($articleSerie))
        {
            $articleManager->updateByChamps($idSerie, $idArticle, array('articleSerie'), array($articleSerie));
            $tabMessage[] = "Votre article a été modifié avec succès";
        }

        //Affichage des messages
        if(!empty($tabMessage))
        {
            $smarty->assign('tabMessage', $tabMessage);

            unset($tabMessage);
        }

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