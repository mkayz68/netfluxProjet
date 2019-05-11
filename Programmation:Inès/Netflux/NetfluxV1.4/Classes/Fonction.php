<?php

    class Fonction
    {
        public function extensionImage($extensionUpload, $extensionValides)
        {
            if (!in_array($extensionUpload, $extensionValides))
            {
                return false;
            }
        }

        public function moveImageSynopsis($extension, $emplacementTemporaire)
        {
            $nom = uniqid(rand(), true);

            $emplacement = "images/Synopsis/".$nom.".".$extension;

            $resultat = move_uploaded_file($emplacementTemporaire, $emplacement);

            if($resultat)
            return array($emplacement, $nom.".".$extension);
        }

        public function moveImageArticle($extension, $emplacementTemporaire)
        {
            $nom = uniqid(rand(), true);

            $emplacement = "images/Article/".$nom.".".$extension;

            $resultat = move_uploaded_file($emplacementTemporaire, $emplacement);

            if($resultat)
            return array($emplacement, $nom.".".$extension);
        }

        public function resizeImage($imageSource, $largeur, $nom, $categorie)
        {
            $largeur = (int) $largeur;

            $source = imagecreatefromjpeg($imageSource);

            $reduction = (($largeur * 100)/imagesx($source));
            $hauteur = ((imagesy($source) * $reduction)/100);

            $imageDestination = imagecreatetruecolor($largeur, $hauteur);

            imagecopyresampled(
                $imageDestination, 
                $source, 
                0, 
                0, 
                0, 
                0, 
                imagesx($imageDestination),
                imagesy($imageDestination),
                imagesx($source),
                imagesy($source));

            $nom = str_replace(" ", "-", $nom);

            $nouvelleImage = imagejpeg($imageDestination, "images/".$categorie."/".$largeur."-".$nom.".jpg");


        }
    }