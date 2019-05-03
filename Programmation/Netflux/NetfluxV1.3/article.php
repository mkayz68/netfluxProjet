<?php
    require 'Smarty/libs/Smarty.class.php';
 
    function changerClass($classe)
    {
        require 'Classes/'.$classe.'.php';
    }

    spl_autoload_register('changerClass');


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=NetfluxProjet2;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $smarty = new Smarty();

    $articleManager = new ArticleManager($bdd);
    $serieManager = new SerieManager($bdd);

    if(isset($_GET['id']))
    {
        $articles = $articleManager->getListArticlesSerieById($_GET['id']);
        $smarty->assign('articles', $articles);

    }
    

    $smarty->display('template/article.tpl');

?>