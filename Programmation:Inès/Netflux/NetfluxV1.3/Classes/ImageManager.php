<?php
    require 'Image.php';

    class ImageManager
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
            $idImage = (int)$idImage;

	        $sql = $this->_bdd->query('SELECT * FROM Image WHERE id = '.$idImage);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);

	        return new Article($donnees);
        }

        public function getList()
        {
            $tabImages = [];

            $sql = $this->_bdd->query('SELECT * FROM Image');
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabImages[] = new Image($donnees);
            }
    
            return $tabImages;
        }

        // OTHERS  ============================================================

        public function add(Image $image)
        {
            if ($image->getIdImage() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Image (urlSynop, urlArticle, idSerie) VALUES (:urlSynop, :urlArticle, :idSerie)');

                $reqAdd->bindValue(':urlSynop', $image->getUrlSynop());
                $reqAdd->bindValue(':urlArticle', $image->getUrlArticle());
                $reqAdd->bindValue(':idSerie', $image->getIdSerie(), PDO::PARAM_INT);


                $reqAdd->execute();

                $article->setIdImage($this->_bdd->lastInsertId());

                $reqAdd->closeCursor();

                $_refreshEnabled = true;
            }
        }

        public function delete(Image $image)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Image WHERE idImage = :idImage');
            $reqDelete->bindValue(':idImage', $image->getIdImage(), PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function deleteById($idImage)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Image WHERE idImage = :idImage');
            $reqDelete->bindValue(':idImage', $idImage, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function update(Image $image)
        {
            $reqModif = $this->_bdd->prepare('UPDATE Image SET urlSynop = :urlSynop, urlArticle = :urlArticle, idSerie = :idSerie WHERE idImage LIKE :idImage');

            $reqModif->bindValue(':idImage', $image->getIdImage(), PDO::PARAM_INT);
            $reqModif->bindValue(':urlSynop', $image->getUrlSynop());
            $reqModif->bindValue(':urlArticle', $image->getUrlArticle());
            $reqModif->bindValue(':idSerie', $image->getIdSerie(), PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
        }
        
    }
?>