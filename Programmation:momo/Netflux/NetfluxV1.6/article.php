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

    $articleManager = new ArticleManager($bdd);
    $serieManager = new SerieManager($bdd);
    $categorieManager = new CategorieManager($bdd);
    $link = new Link();

    if(isset($_GET['id']))
    {
        $articles = $articleManager->getListArticlesSerieById($_GET['id']);
        $smarty->assign('articles', $articles);

    }
    
    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'link' => $link,
        'nomSerie' => $articleManager->getNomSerieByArticle($_GET['id'])
    ));

    //Appel de la page TPL
    $smarty->display('template/article.tpl');

?>