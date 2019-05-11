<?php
    class Serie
    {
        private $_idSerie = null;
        private $_nomSerie;
        private $_dateDebut;
        private $_dateFin = null;
        private $_nbrSaisons;
        private $_idArticle;
        private $idSynopsis;

        public function __construct( array $tabDonnees )
        {
            $this->hydrate( $tabDonnees );
        }

        public function hydrate( array $tabDonnees )
        {
            foreach ( $tabDonnees as $key => $value )
            {
                $method = 'set'.ucfirst( $key );

                if ( method_exists( $this, $method ) )
                {
                    $this->$method( $value );
                }
            }
        }

        // SET ================================================================

        public function setIdSerie($idSerie)
        {
            $this->_idSerie = (int)$idSerie;
        }

        public function setNomSerie($nomSerie)
        {
            $this->_nomSerie = (string)$nomSerie;
        }

        public function setDateDebut($dateDebut)
        {
            $this->_dateDebut = (string)$dateDebut;
        }

        public function setDateFin($dateFin)
        {
            $this->_dateFin = (string)$dateFin;
        }

        public function setNbrSaisons($nbrSaisons)
        {
            $this->_nbrSaisons = (int)$nbrSaisons;
        }

        public function setIdArticle($idArticle)
        {
            $this->_idArticle = (int)$idArticle;
        }

        public function setIdSynopsis($idSynopsis)
        {
            $this->_idSynopsis = (int)$idSynopsis;
        }

        // GET ================================================================

        public function getIdSerie()
        {
            return $this->_idSerie;
        }

        public function getNomSerie()
        {
            return $this->_nomSerie;
        }

        public function getDateDebut()
        {
            return $this->_dateDebut;
        }

        public function getDateFin()
        {
            return $this->_dateFin;
        }

        public function getNbrSaisons()
        {
            return $this->_nbrSaisons;
        }

        public function getIdArticle()
        {
            return $this->_idArticle;
        }

        public function getIdSynopsis()
        {
            return $this->_idSynopsis;
        }

        // OTHERS =============================================================

        public function presenterSerie()
        {
            echo '
            <div>
                <div> 
                    <h3>'.$this->getNomSerie().'</h3>
                    <p>Date de Début : '.$this->getDateDebut().'</p>
                    <p>Date de Fin : '.$this->getDateFin().'</p>
                    <p>Nombre De Saison : '.$this->getNbrSaisons().'</p>
                </div>';
        }
        
    }
?>