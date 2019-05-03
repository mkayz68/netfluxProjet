<?php
    class CategoriserSerie
    {
        private $_idSerie = null;
        private $_idCategorie = null;

        

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

        public function setIdCategorie($idCategorie)
        {
            $this->_idCategorie = (int)$idCategorie;
        }

        public function setTypeCategorie($typeCategorie)
        {
            $this->_typeCategorie = (string)$typeCategorie;
        }


        // GET ================================================================

        public function getIdCategorie()
        {
            return $this->_idCategorie;
        }

        public function getTypeCategorie()
        {
            return $this->_typeCategorie;
        }


        // OTHERS =============================================================
        
    }
?>