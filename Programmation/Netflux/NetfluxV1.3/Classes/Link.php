<?php

class Link
{
    public function getArticleLink($id)
    {
        return 'article.php?id='.$id;
    }
}