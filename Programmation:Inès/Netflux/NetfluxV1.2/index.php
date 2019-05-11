<?php
    require ('class/SerieManager.php');
    require ('Smarty/libs/Smarty.class.php');

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=NetfluxProjet2;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $smarty = new Smarty();

    $serieManager = new SerieManager($bdd);
    $smarty->assign('tabSeries', $serieManager->getList());

    $smarty->display('template/netflux.tpl');
?>