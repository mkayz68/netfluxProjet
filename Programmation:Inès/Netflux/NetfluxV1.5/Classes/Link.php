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

    public function getImageRedimSynop($dimensions, $nom)
    {
        return 'images/Synopsis/'.$dimensions.'-'.str_replace(" ", "", $nom).'.jpg';
    }

    public function getImageRedimArticle($dimensions, $nom)
    {
        return 'images/Article/'.$dimensions.'-'.str_replace(" ", "", $nom).'.jpg';
    }


}