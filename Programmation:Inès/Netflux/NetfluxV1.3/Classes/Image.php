<?php
    class Image
    {
        private $_idImage = null;
        private $_urlSynop;
        private $_urlArticle;
        private $_idSerie = null;

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

        public function setIdImage($idImage)
        {
            $this->_idImage = (int)$idImage;
        }

        public function setUrlSynop($urlSynop)
        {
            $this->_urlSynop = (string)$urlSynop;
        }

        public function setUrlArticle($urlArticle)
        {
            $this->_urlArticle = (string)$urlArticle;
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

        public function getUrlSynop()
        {
            return $this->_urlSynop;
        }

        public function getUrlArticle()
        {
            return $this->_urlArticle;
        }

        public function getIdSerie()
        {
            return $this->_idSerie;
        }

        // OTHERS =============================================================
        
    }
?>