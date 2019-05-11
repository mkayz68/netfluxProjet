<?php
    //require 'Article.php';

    class ArticleManager
    {
        private $_bdd;

        public function __construct($bdd)
        {
            $this->setBdd($bdd);
        }
        
        // SET ================================================================

        public function setBdd(PDO $bdd)
        {
            $this->_bdd = $bdd;
        }

        // GET ================================================================

        public function get()
        {
            $idArticle = (int)$idArticle;

	        $sql = $this->_bdd->query('SELECT * FROM Serie WHERE id = '.$idArticle);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);

	        return new Article($donnees);
        }

        public function getList()
        {
            $tabArticles = [];

            $sql = $this->_bdd->query('SELECT * FROM Article');
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabArticles[] = new Article($donnees);
            }
            return $tabArticles;
        }

        //method pour récuperer les articles d'une serie
        public function getListArticlesSerieById($idSerie)
        {
            $idSerie = (int) $idSerie;
            $articles = [];

            $sql = $this->_bdd->query('SELECT Article.*, Serie.nomSerie FROM Article 
                                       INNER JOIN Serie ON Article.idArticle=Serie.idSerie 
                                       WHERE Serie.idSerie = '.$idSerie);

            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $articles[] = $donnees;
            }

            return $articles;

	    }

        // OTHERS  ============================================================

        public function add(Article $article)
        {
            if ($article->getIdArticle() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Article (nomArticle, dateArticle, articleSerie, auteurArticle) VALUES (:nomArticle, :dateArticle, :articleSerie, :auteurArticle)');

                $reqAdd->bindValue(':nomArticle', $article->getNomArticle());
                $reqAdd->bindValue(':dateArticle', $article->getDateArticle());
                $reqAdd->bindValue(':articleSerie', $article->getArticleSerie());
                $reqAdd->bindValue(':auteurArticle', $article->getAuteurArticle());

                $reqAdd->execute();

                $article->setIdArticle($this->_bdd->lastInsertId());

                $reqAdd->closeCursor();

                $_refreshEnabled = true;
            }
        }

        public function delete(Article $article)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Article WHERE idArticle = :idArticle');
            $reqDelete->bindValue(':idArticle', $article->getIdArticle(), PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function deleteById($idArticle)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Article WHERE idArticle = :idArticle');
            $reqDelete->bindValue(':idArticle', $idArticle, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function update(Article $article)
        {
            $reqModif = $this->_bdd->prepare('UPDATE Article SET nomArticle = :nomArticle, dateArticle = :dateArticle, articleSerie = :articleSerie, auteurArticle = :auteurArticle WHERE idArticle LIKE :idArticle');

            $reqModif->bindValue(':idArticle', $serie->getIdArticle(), PDO::PARAM_INT);
            $reqModif->bindValue(':nomArticle', $serie->getNomArticle());
            $reqModif->bindValue(':dateArticle', $serie->getDateArticle());
            $reqModif->bindValue(':articleSerie', $serie->getArticleSerie());
            $reqModif->bindValue(':auteurArticle', $serie->getAuteurArticle());

            $reqModif->execute();
            $reqModif->closeCursor();
        }
        
    }
?>

