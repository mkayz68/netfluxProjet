<?php

    class SerieManager
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

        //Method pour avoir les information d'une série via son ID
        public function get()
        {
            $idSerie = (int)$idSerie;

	        $sql = $this->_bdd->query('SELECT * FROM Serie WHERE id = '.$idSerie);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);

	        return new Serie($donnees);
        }

        //Method pour lister les informations des séries par ordre décroissant d'ajout et pagination
        public function getListPagination($depart, $seriesParPage)
        {
            $tabSeries = [];

            $sql = $this->_bdd->query("SELECT * FROM Serie ORDER BY idSerie DESC LIMIT ".$depart.",".$seriesParPage);
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabSeries[] = new Serie($donnees);
            }
    
            return $tabSeries;
        }


        //Method pour lister les series par categorie
        public function getListSerieByCat($id)
        {
            $id = (int) $id;
            $tabSeries = [];

            $sql = $this->_bdd->query("SELECT Serie.*,categoriserSerie.idCategorie 
                                       FROM Serie INNER JOIN categoriserSerie 
                                       ON Serie.idSerie=categoriserSerie.idSerie 
                                       WHERE idCategorie =".$id);
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabSeries[] = new Serie($donnees);
            }
    
            return $tabSeries;
        }

        //Method pour lister les series par categorie par ordre decroissant d'ajout avec pagination
        public function getListSerieByCatPagination($id, $depart, $seriesParPage)
        {
            $id = (int) $id;
            $tabSeries = [];

            $sql = $this->_bdd->query("SELECT Serie.*,categoriserSerie.idCategorie 
                                       FROM Serie INNER JOIN categoriserSerie 
                                       ON Serie.idSerie=categoriserSerie.idSerie 
                                       WHERE idCategorie =".$id." ORDER BY idSerie DESC LIMIT ".$depart.",".$seriesParPage);
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabSeries[] = new Serie($donnees);
            }
    
            return $tabSeries;
        }


        // OTHERS  ============================================================

        //Method pour ajouter une série
        public function add(Serie $serie)
        {
            if ($serie->getIdSerie() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Serie(nomSerie, dateDebut, nbrSaisons, synopSerie) VALUES (:nomSerie, :dateDebut, :nbrSaisons, :synopSerie)');

                $reqAdd->bindValue(':nomSerie', $serie->getNomSerie());
                $reqAdd->bindValue(':dateDebut', $serie->getDateDebut());
                $reqAdd->bindValue(':nbrSaisons', $serie->getNbrSaisons(), PDO::PARAM_INT);
                $reqAdd->bindValue(':synopSerie', $serie->getSynopSerie());

                $reqAdd->execute();

                $serie->setIdSerie($this->_bdd->lastInsertId());

                $reqAdd->closeCursor();

                $_refreshEnabled = true;
            }
        }

        //Method pour ajouter une série
        public function addWithDateFin(Serie $serie)
        {
            if ($serie->getIdSerie() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Serie(nomSerie, dateDebut, dateFin, nbrSaisons, synopSerie) VALUES (:nomSerie, :dateDebut, :dateFin, :nbrSaisons, :synopSerie)');

                $reqAdd->bindValue(':nomSerie', $serie->getNomSerie());
                $reqAdd->bindValue(':dateDebut', $serie->getDateDebut());
                $reqAdd->bindValue(':dateFin', $serie->getDateFin());
                $reqAdd->bindValue(':nbrSaisons', $serie->getNbrSaisons(), PDO::PARAM_INT);
                $reqAdd->bindValue(':synopSerie', $serie->getSynopSerie());

                $reqAdd->execute();

                $serie->setIdSerie($this->_bdd->lastInsertId());

                $reqAdd->closeCursor();

                $_refreshEnabled = true;
            }
        }

        //Method pour effacer une série
        public function delete(Serie $serie)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Serie WHERE idSerie = :idSerie');
            $reqDelete->bindValue(':idSerie', $serie->getIdSerie(), PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        //Method pour effacer une série via son ID
        public function deleteByIdSerie($idSerie)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Serie WHERE idSerie = :idSerie');
            $reqDelete->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        //Method pour modifier une série
        public function update(Serie $serie)
        {
            $reqModif = $this->_bdd->prepare('UPDATE Serie SET nomSerie = :nomSerie, dateDebut = :dateDebut, dateFin = :dateFin, nbrSaisons = :nbrSaisons WHERE idSerie LIKE :idSerie');

            $reqModif->bindValue(':idSerie', $serie->getIdSerie(), PDO::PARAM_INT);
            $reqModif->bindValue(':nomSerie', $serie->getNomSerie());
            $reqModif->bindValue(':dateDebut', $serie->getDateDebut());
            $reqModif->bindValue(':dateFin', $serie->getDateFin());
            $reqModif->bindValue(':nbrSaisons', $serie->getNbrSaisons(), PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
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