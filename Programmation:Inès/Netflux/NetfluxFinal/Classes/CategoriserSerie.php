<?php
    class CategoriserSerie
    {
        //Attributs
        private $_idCategorie = null;
        private $_idSerie = null;


        //Constructeur
        public function __construct( array $tabDonnees )
        {
            $this->hydrate( $tabDonnees );
        }

        //Hydrateur
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

        public function setIdCategorie($idCategorie)
        {
            $this->_idCategorie = (int)$idCategorie;
        }

        public function setIdSerie($idSerie)
        {
            $this->_idSerie = (int)$idSerie;
        }


        // GET ================================================================

        public function getIdCategorie()
        {
            return $this->_idCategorie;
        }

        public function getIdSerie()
        {
            return $this->_idSerie;
        }

        
    }
?>