<?php
    require 'Serie.php';

    class SerieManager
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
            $idSerie = (int)$idSerie;

	        $sql = $this->_bdd->query('SELECT * FROM Serie WHERE id = '.$idSerie);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);

	        return new Serie($donnees);
        }

        public function getList()
        {
            $tabSeries = [];

            $sql = $this->_bdd->query("SELECT * FROM Serie ORDER BY idSerie DESC");
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabSeries[] = new Serie($donnees);
            }
    
            return $tabSeries;
        }


        // OTHERS  ============================================================

        public function add(Serie $serie)
        {
            if ($serie->getIdSerie() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Serie(nomSerie, dateDebut, dateFin, nbrSaisons) VALUES (:nomSerie, :dateDebut, :dateFin, :nbrSaisons)');

                $reqAdd->bindValue(':nomSerie', $serie->getNomSerie());
                $reqAdd->bindValue(':dateDebut', $serie->getDateDebut());
                $reqAdd->bindValue(':dateFin', $serie->getDateFin());
                $reqAdd->bindValue(':nbrSaisons', $serie->getNbrSaisons(), PDO::PARAM_INT);

                $reqAdd->execute();

                $perso->setIdSerie($this->_bdd->lastInsertId());

                $reqAdd->closeCursor();

                $_refreshEnabled = true;
            }
        }

        public function delete(Serie $serie)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Serie WHERE idSerie = :idSerie');
            $reqDelete->bindValue(':idSerie', $serie->getIdSerie(), PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function deleteById($idSerie)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Serie WHERE idSerie = :idSerie');
            $reqDelete->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function update(Serie $serie)
        {
            $reqModif = $this->_bdd->prepare('UPDATE Serie SET nomSerie = :nomSerie, dateDebut = :dateDebut, dateFin = :dateFin, nbrSaisons = :nbrSaisons WHERE idSerie LIKE :idSerie');

            $reqModif->bindValue(':idSerie', $serie->getIdSerie(), PDO::PARAM_INT);
            $reqModif->bindValue(':nomSerie', $serie->getNomSerie());
            $reqModif->bindValue(':dateDebut', $serie->getDateDebut());
            $reqModif->bindValue(':dateFin', $serie->getDateFin());
            $reqModif->bindValue(':nbr', $serie->getNbrSaisons(), PDO::PARAM_INT);

            $reqModif->execute();
            $reqModif->closeCursor();
        }
        
    }
?>