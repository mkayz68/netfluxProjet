<?php
    class Synopsis
    {
        private $_idSynopsis = null;
        private $_synopSerie;

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

        public function setIdSynopsis($idSynopsis)
        {
            $this->_idSynopsis = (int)$idSynopsis;
        }

        public function setSynopSerie($synopSerie)
        {
            $this->_synopSerie = (string)$synopSerie;
        }

        // GET ================================================================

        public function getIdSynopsis()
        {
            return $this->_idSynopsis;
        }

        public function getSynopSerie()
        {
            return $this->_SynopSerie;
        }

    }

?>