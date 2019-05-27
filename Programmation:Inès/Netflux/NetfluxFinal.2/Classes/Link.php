<?php

class Link
{
    //Function de liens pour récupérer l'Article Via l'ID série
    public function getArticleLink($id)
    {
        return 'article.php?id='.$id;
    }


    //Function de liens pour récupérer les séries par catégorie via l'ID catégorie 
    public function getSerieParCat($id)
    {
        return 'categorie.php?id='.$id;
    }

    //Function de liens pour accèder à la partie Administration
    public function getAdmin()
    {
        return 'admin.php';
    }

    //Function lien pour stocké le redimensionnement de l'image 
    public function getImageRedim($categorie, $dimensions, $nom)
    {
        return 'images/'.$categorie.'/'.$dimensions.'-'.str_replace(" ", "", $nom).'.jpg';
    }

    //Function lien pour récupérer les séries par catégorie via l'ID catégorie 
    public function getContact()
    {
        return 'contact.php';
    }

    //Function pour lien effacer une images (dossier)
    public function deleteLinkImage($image, $categorie)
    {
        return 'images/'.$categorie.'/'.$image;
    }

    //Function lien pour effacer l'image redimensionné (dossier)
    public function deleteLinkRedim($categorie, $dimensions, $nom)
    {
        return 'images/'.$categorie.'/'.$dimensions.'-'.$nom.'.jpg';
    }


}