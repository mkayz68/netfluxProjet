<?php

    class ImageManager
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

        // GET ===================================================================

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

        public function getListImageSynopsis($idSerie)
        {
            $sql = $this->_bdd->query('SELECT image FROM Image WHERE idSerie = '.$idSerie.' ORDER BY idImage ASC LIMIT 0,1');

            $donnees = $sql->fetch();

            return $donnees;  
        }

        public function getListImageArticle($idSerie)
        {
            $sql = $this->_bdd->query('SELECT image FROM Image WHERE idSerie = '.$idSerie.' ORDER BY idImage DESC LIMIT 0,1');

            $donnees = $sql->fetch();

            return $donnees;

           
        }

        // OTHERS  ============================================================


        public function addSynop(Image $image)
        {
            $reqAdd = $this->_bdd->prepare('INSERT INTO Image (image, idSerie) VALUES (:image, (SELECT idSerie FROM Serie ORDER BY idSerie DESC LIMIT 1))');

            $reqAdd->bindValue(':image', $image->getImage());

            $reqAdd->execute();

            $image->setIdImage($this->_bdd->lastInsertId());

            $reqAdd->closeCursor();

            $_refreshEnabled = true;
        }


        public function addArticle(Image $image)
        {
            if ($image->getIdImage() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Image (image, idSerie) VALUES (:image, :idSerie)');

                $reqAdd->bindValue(':image', $image->getImage());
                $reqAdd->bindValue(':idSerie', $image->getIdSerie(), PDO::PARAM_INT);

                $reqAdd->execute();

                $image->setIdImage($this->_bdd->lastInsertId());

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


        public function deleteByIdSerie($idSerie)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Image WHERE idSerie = :idSerie');
            $reqDelete->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
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

        public function updateByChamps1($id, array $tabChamps, array $tabValues)
        {
            $set = "";

            for($i = 0; $i != count($tabChamps); ++$i)
            {
                $set .= $tabChamps[$i].' = "'.$tabValues[$i].'",';
            }

            $set = substr($set, 0, -1);

            $reqModif = $this->_bdd->prepare('UPDATE Image SET '.$set.' WHERE idSerie = :idSerie ORDER BY idImage ASC LIMIT 1');

            $reqModif->bindValue(':idSerie', $id, PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
        }

        public function updateByChamps2($id, array $tabChamps, array $tabValues)
        {
            $set = "";

            for($i = 0; $i != count($tabChamps); ++$i)
            {
                $set .= $tabChamps[$i].' = "'.$tabValues[$i].'",';
            }

            $set = substr($set, 0, -1);

            $reqModif = $this->_bdd->prepare('UPDATE Image SET '.$set.' WHERE idSerie = :idSerie ORDER BY idImage DESC LIMIT 1');

            $reqModif->bindValue(':idSerie', $id, PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
        }


    }
        
    ?>