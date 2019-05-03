<?php
    require 'Categorie.php';

    class CategorieManager
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
            $idCategorie = (int)$idCategorie;

	        $sql = $this->_bdd->query('SELECT * FROM Categorie WHERE id = '.$idCategorie);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);

	        return new Categorie($donnees);
        }

        public function getList()
        {
            $tabCategories = [];

            $sql = $this->_bdd->query('SELECT typeCategorie FROM Categorie');
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabCategories[] = new Categorie($donnees);
            }
    
            return $tabCategories;
        }

        
    }

?>