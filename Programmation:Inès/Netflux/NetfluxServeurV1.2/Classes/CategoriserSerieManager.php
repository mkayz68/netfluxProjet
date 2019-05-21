<?php

    class CategoriserSerieManager
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


        //Method pour ajouter les catégories aux séries
        public function add(CategoriserSerie $categoriserSerie )
        {
            $reqAdd = $this->_bdd->prepare('INSERT INTO CategoriserSerie (idCategorie, idSerie) 
                                            VALUES (:idCategorie, (SELECT idSerie FROM Serie ORDER BY idSerie DESC LIMIT 1))');


            $reqAdd->bindValue(':idCategorie', $categoriserSerie->getIdCategorie(), PDO::PARAM_INT);

            $reqAdd->execute();

            $reqAdd->closeCursor();

            $_refreshEnabled = true;
        }

        //Method pour supprimer une categorie via un id Serie
        public function deleteByIdSerie($idSerie)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM CategoriserSerie WHERE idSerie = :idSerie');
            $reqDelete->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        //Method pour modifier une série par champs
        public function updateByChamps($id, array $tabChamps, array $tabValues)
        {
            $set = "";

            for($i = 0; $i != count($tabChamps); ++$i)
            {
                $set .= $tabChamps[$i].' = "'.$tabValues[$i].'",';
            }

            $set = substr($set, 0, -1);

            $reqModif = $this->_bdd->prepare('UPDATE Serie SET '.$set.' WHERE idSerie LIKE :idSerie');

            $reqModif->bindValue(':idSerie', $id, PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
        }
    }

?>