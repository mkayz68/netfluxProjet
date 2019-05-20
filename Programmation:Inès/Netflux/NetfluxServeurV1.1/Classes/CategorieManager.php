<?php

    class CategorieManager
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


        //Method pour récupérer les categories via leurs ID
        public function get($idCategorie)
        {
            $idCategorie = (int)$idCategorie;

	        $sql = $this->_bdd->query('SELECT * FROM Categorie WHERE idCategorie = '.$idCategorie);

	        while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $typeCat[] = new Categorie($donnees);
            }
    
            return $typeCat;
        }

        //Method pour lister les categories
        public function getListByType()
        {
            $typeCategories = [];

            $sql = $this->_bdd->query('SELECT * FROM Categorie');
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $typeCategories[] = new Categorie($donnees);
            }
    
            return $typeCategories;
        }

        //Method pour lister les series par categorie
        public function getListCat()
        {
            $tabTypeCat = [];

            $sql = $this->_bdd->query('SELECT typeCategorie, CategoriserSerie.idSerie 
                                       FROM Categorie INNER JOIN CategoriserSerie 
                                       ON Categorie.idCategorie=CategoriserSerie.idCategorie');

            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabTypeCat[] = $donnees;
            }

            return $tabTypeCat;
        }


        
    }

?>