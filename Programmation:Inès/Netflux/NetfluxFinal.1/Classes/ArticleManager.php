<?php

    class ArticleManager
    {
        // attribut contenant l'objet PDO de la connexion à la BDD
        private $_bdd;

    	// constructeur pour appeler le setter bdd
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

        //Method pour lister les articles 
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

        //method pour récuperer les articles d'une serie via l'ID de celle-ci
        public function getListArticlesSerieById($idSerie)
        {
            $idSerie = (int) $idSerie;
            $articles = [];

            $sql = $this->_bdd->query('SELECT Article.*, Serie.* FROM Article 
                                       INNER JOIN Serie ON Article.idSerie=Serie.idSerie 
                                       WHERE Article.idSerie = '.$idSerie.' 
                                       ORDER BY idArticle DESC');

            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $articles[] = $donnees;
            }

            return $articles;

        }
        
        //Method pour récuperer le nom d'une série via les articles
        public function getNomSerieByArticle($idSerie)
        {
            $nomSerie = [];

            $sql = $this->_bdd->query('SELECT nomSerie, synopSerie FROM Serie INNER JOIN Article 
                                       ON Serie.idSerie=Article.idSerie 
                                       WHERE Article.idSerie = '.$idSerie.' LIMIT 1');

            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $nomSerie[] = $donnees;
            }

            return $nomSerie;
        }

        //Method pour récupérer les articles d'une série via son ID
        public function getNomArticleAndNomSerie()
        {
            $nomSerie = [];

            $sql = $this->_bdd->query('SELECT Article.*, Serie.nomSerie, Serie.idSerie FROM Article 
                                       INNER JOIN Serie ON Article.idSerie=Serie.idSerie');

            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $nomSerie[] = $donnees;
            }

            return $nomSerie;
        }


        // OTHERS  ============================================================

        //Method pour ajouter un article
        public function add(Article $article)
        {
            if ($article->getIdArticle() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Article (nomArticle, dateArticle, articleSerie, auteurArticle, idSerie) VALUES (:nomArticle, :dateArticle, :articleSerie, :auteurArticle, :idSerie)');

                $reqAdd->bindValue(':nomArticle', $article->getNomArticle());
                $reqAdd->bindValue(':dateArticle', $article->getDateArticle());
                $reqAdd->bindValue(':articleSerie', $article->getArticleSerie());
                $reqAdd->bindValue(':auteurArticle', $article->getAuteurArticle());
                $reqAdd->bindValue(':idSerie', $article->getIdSerie(), PDO::PARAM_INT);

                $reqAdd->execute();

                $article->setIdArticle($this->_bdd->lastInsertId());

                $reqAdd->closeCursor();

                $_refreshEnabled = true;
            }
        }

        //Method pour effacer un article
        public function delete(Article $article)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Article WHERE idArticle = :idArticle');
            $reqDelete->bindValue(':idArticle', $article->getIdArticle(), PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }
        //Method pour effacer un article via son id
        public function deleteByIdArticle($idArticle)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Article WHERE idArticle = :idArticle');
            $reqDelete->bindValue(':idArticle', $idArticle, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        //Method pour effacer un article via l'id série
        public function deleteByIdSerie($idSerie)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Article WHERE idSerie = :idSerie');
            $reqDelete->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        //Method pour modifier un article
        public function update(Article $article)
        {
            $reqModif = $this->_bdd->prepare('UPDATE Article SET nomArticle = :nomArticle, dateArticle = :dateArticle, articleSerie = :articleSerie, auteurArticle = :auteurArticle, idSerie = :idSerie WHERE idArticle LIKE :idArticle');

            $reqModif->bindValue(':idArticle', $article->getIdArticle(), PDO::PARAM_INT);
            $reqModif->bindValue(':nomArticle', $article->getNomArticle());
            $reqModif->bindValue(':dateArticle', $article->getDateArticle());
            $reqModif->bindValue(':articleSerie', $article->getArticleSerie());
            $reqModif->bindValue(':auteurArticle', $article->getAuteurArticle());
            $reqModif->bindValue(':idSerie', $article->getIdSerie(), PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
        }

        //Method pour modifier une série par champs
        public function updateByChamps($idSerie, $idArticle, array $tabChamps, array $tabValues)
        {
            $set = "";

            for($i = 0; $i != count($tabChamps); ++$i)
            {
                $set .= $tabChamps[$i].' = "'.$tabValues[$i].'",';
            }

            $set = substr($set, 0, -1);

            $reqModif = $this->_bdd->prepare('UPDATE Article SET '.$set.' WHERE idSerie LIKE :idSerie AND idArticle LIKE :idArticle');

            $reqModif->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
            $reqModif->bindValue(':idArticle', $idArticle, PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
        }
        
    }
?>

