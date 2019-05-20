<?php
    class Article
    {
        //Attributs
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

	    //Methode pour parcourir un tablau de valeur et assigner aux setters
        public function hydrate( array $tabDonnees )
        {
            //Création de la boucle qui vérifie si la cle correspond à un setter
            foreach ( $tabDonnees as $key => $value )
            {
                //ucfirst met le premier caractère en majuscule
                $method = 'set'.ucfirst( $key );

                // on vérifie si la method set$method existe avec method_exists() qui pend en premier
                // l'instance de la classe et en 2ème le nom de la method
                if ( method_exists( $this, $method ) )
                {
                    //on appelle le setter
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
            $this->_idSerie = (int)$idSerie;
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