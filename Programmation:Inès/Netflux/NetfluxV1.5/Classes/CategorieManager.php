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
        public function get()
        {
            $idCategorie = (int)$idCategorie;

	        $sql = $this->_bdd->query('SELECT * FROM Categorie WHERE id = '.$idCategorie);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);

	        return new Categorie($donnees);
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

            $sql = $this->_bdd->query('SELECT typeCategorie, categoriserSerie.idSerie 
                                       FROM Categorie INNER JOIN categoriserSerie 
                                       ON Categorie.idCategorie=categoriserSerie.idCategorie');

            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabTypeCat[] = $donnees;
            }

            return $tabTypeCat;
        }


        
    }

?>