<?php
    
    //connexion BDD via un include
    include ('connect.php');

    if (isset($_GET['series'])) {
        $series = trim($_GET['series']);

        $req = $bdd->prepare('SELECT * FROM Serie 
        WHERE nomSerie LIKE "%":series"%"
        LIMIT 5');
        $req->bindValue(':series', $series);
        $req->execute();

       $req = $req->fetchAll();
       foreach ($req as $r ) 
       {
           ?>

           <?= $r['nomSerie'].'<br>' ?>
           <?php
           // var_dump($series);
        }
    }

?>