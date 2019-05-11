<?php
    class Article
    {
        private $_idArticle = null;
        private $_nomArticle;
        private $_articleSerie;
        private $_auteurArticle;
        private $_dateArticle;
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

        public function setIdArticle($idArticle)
        {
            $this->_idArticle = (int)$idArticle;
        }

        public function setArticleSerie($articleSerie)
        {
            $this->_articleSerie = (string)$articleSerie;
        }

        public function setNomArticle($nomArticle)
        {
            $this->_nomArticle = (string)$nomArticle;
        }

        public function setAuteurArticle($auteurArticle)
        {
            $this->_auteurArticle = (string)$auteurArticle;
        }

        public function setDateArticle($dateArticle)
        {
            $this->_dateArticle = $dateArticle;
        }

        public function setIdSerie($idSerie)
        {
            $this->idSerie = (int)$idSerie;
        }

        // GET ================================================================

        public function getIdArticle()
        {
            return $this->_idArticle;
        }

        public function getArticleSerie()
        {
            return $this->_articleSerie;
        }

        public function getNomArticle()
        {
            return $this->_nomArticle;
        }

        public function getAuteurArticle()
        {
            return $this->_auteurArticle;
        }

        public function getDateArticle()
        {
            return $this->_dateArticle;
        }

        public function getIdSerie()
        {
            return $this->_idSerie;
        }

    }

?>