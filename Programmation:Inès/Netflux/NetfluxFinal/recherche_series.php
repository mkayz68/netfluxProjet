<?php 
    header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\"?>";
    echo "<barreRecherche>";

    if (isset($_GET['series'])) {

        //connexion BDD via un include
        include ('connect.php');

        $series = trim($_GET['series']);

        $req = $bdd->prepare('SELECT nomSerie FROM Serie 
                              WHERE nomSerie LIKE "%":series"%"
                              ORDER BY 
                                CASE
                                    WHEN nomSerie LIKE :series"%" THEN 1
                                    WHEN nomSerie LIKE "%":series THEN 3
                                    ELSE 2
                                END');
        $req->bindValue(':series', $series);
        $req->execute();

        while ( $donnees = $req->fetch() )
        {
            $text = preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $donnees['nomSerie']);
            echo "<donnee>".$text."</donnee>";
        }

        $req->closeCursor();

    }
    echo "</barreRecherche>";
?>