<?php
    require 'Synopsis.php';

    class SynopsisManager
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
            $idSynopsis = (int)$idSynopsis;

	        $sql = $this->_bdd->query('SELECT * FROM Synopsis WHERE id = '.$idSynopsis);
	        $donnees = $sql->fetch(PDO::FETCH_ASSOC);

	        return new Synopsis($donnees);
        }

        public function getList()
        {
            $tabSynopsis = [];

            $sql = $this->_bdd->query('SELECT * FROM Synopsis');
    
            while ($donnees = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $tabSynopsis[] = new Synopsis($donnees);
            }
    
            return $tabSynopsis;
        }

        // OTHERS  ============================================================

        public function add(Synopsis $synopsis)
        {
            if ($synopsis->getIdSynopsis() == null)
            {
                $reqAdd = $this->_bdd->prepare('INSERT INTO Synopsis(synopSerie) VALUES (:synopSerie)');

                $reqAdd->bindValue(':synopSerie', $synopsis->getSynopSerie());

                $reqAdd->execute();

                $perso->setIdSerie($this->_bdd->lastInsertId());

                $reqAdd->closeCursor();

                $_refreshEnabled = true;
            }
        }

        public function delete(Synopsis $synopsis)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Synopsis WHERE idSynopsis = :idSynopsis');
            $reqDelete->bindValue(':idSynopsis', $synopsis->getIdSynopsis(), PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function deleteById($idSynopsis)
        {
            $reqDelete = $this->_bdd->prepare('DELETE FROM Synopsis WHERE idSynopsis = :idSynopsis');
            $reqDelete->bindValue(':idSynopsis', $idSynopsis, PDO::PARAM_INT);
            $reqDelete->execute();
            $reqDelete->closeCursor();
        }

        public function update(Synopsis $synopsis)
        {
            $reqModif = $this->_bdd->prepare('UPDATE Synopsis SET synopSerie = :synopSerie');

            $reqModif->bindValue(':idSynopsis', $synopsis->getIdSynopsis(), PDO::PARAM_INT);
            $reqModif->bindValue(':synopSerie', $synopsis->getSynopSerie());

            $reqModif->execute();
            $reqModif->closeCursor();
        }
        
    }
?>