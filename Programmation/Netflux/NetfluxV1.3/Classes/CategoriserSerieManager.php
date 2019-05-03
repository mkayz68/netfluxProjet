<?php
    require 'CategoriserSerie.php';

    class CategoriserSerieManager
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

        public function getList()
        {
            $tabCategoriserSerie = [];

            $sql = $this->_bdd->query('SELECT Categorie.typeCategorie, CategoriserSerie.* FROM Categorie LEFT JOIN CategoriserSerie ON Categorie.idCategorie = CategoriserSerie.idCategorie');
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabCategoriserSerie[] = $donnees;
            }
    
            return $tabCategoriserSerie;

        }

        ////method pour recuperer une entite
        public function get($typeCategorie)
        {

		    $typeCategorie = (string) $typeCategorie;

	        $sql = $this->_bdd->query('SELECT * FROM Serie INNER JOIN categoriserSerie 
                                       ON Serie.idSerie=categoriserSerie.idSerie INNER JOIN Categorie 
                                       ON categoriserSerie.idCategorie=Categorie.idCategorie 
                                       Where typeCategorie LIKE ' .$typeCategorie);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);


	        return new CategoriserSerie($donnees);
	    

	    }

        
    }
    
?>