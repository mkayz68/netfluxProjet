<?php
    class Article
    {
        private $_idArticle = null;
        private $_articleSerie;

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

        // GET ================================================================

        public function getIdArticle()
        {
            return $this->_idArticle;
        }

        public function getArticleSerie()
        {
            return $this->_ArticleSerie;
        }

    }

?>