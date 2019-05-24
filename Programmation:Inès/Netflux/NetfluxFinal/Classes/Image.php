<?php
    class Image
    {
        //Attributs
        private $_idImage = null;
        private $_image;
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

        public function setIdImage($idImage)
        {
            $this->_idImage = (int)$idImage;
        }

        public function setImage($image)
        {
            $this->_image = (string)$image;
        }

        public function setIdSerie($idSerie)
        {
            $this->_idSerie = (string)$idSerie;
        }

        // GET ================================================================

        public function getIdImage()
        {
            return $this->_idImage;
        }

        public function getImage()
        {
            return $this->_image;
        }

        public function getIdSerie()
        {
            return $this->_idSerie;
        }

        //Method=======================================================================

        
        
    }
?>