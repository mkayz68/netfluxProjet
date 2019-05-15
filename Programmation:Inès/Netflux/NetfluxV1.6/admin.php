<?php

    // On inclut la classe Smarty
    require 'Smarty/libs/Smarty.class.php';

    // function de chargement
    function changerClass($classe)
    {
        require 'Classes/'.$classe.'.php';
    }

    //function chargerClass en autoload
    spl_autoload_register('changerClass');

    //connexion BDD via un include
    include('connect.php');


    // déclaration des nouveaux objets 
    $smarty = new Smarty();
    $categorieManager = new CategorieManager($bdd);
    $categoriserSerieManager = new CategoriserSerieManager($bdd);
    $serieManager = new SerieManager($bdd);
    $articleManager = new ArticleManager($bdd);
    $imageManager = new ImageManager($bdd);
    $link = new Link();



    //Ajouter une Série======================================================================================================================

    if(isset($_POST['creerSerie']))
    {

        $nomSerie = htmlspecialchars(ucwords(trim($_POST['nomSerie'])));
        $dateDebut = htmlspecialchars($_POST['dateDebut']);
        $dateFin = htmlspecialchars($_POST['dateFin']);
        $nbrSaisons = htmlspecialchars(trim($_POST['nbrSaisons']));
        $synopSerie = htmlspecialchars($_POST['synopSerie']);
        $tabCat1 = explode(" ", $_POST['typeCategorie1']);
        $typeCat1 = $tabCat1[count($tabCat1)-1];
        $tabCat2 = explode(" ", $_POST['typeCategorie2']);
        $typeCat2 = $tabCat2[count($tabCat2)-1];


        // pour receuillir les messages d'erreur et de succes
        $tabMessage = [];

		// pour declencher l'envoi vers la bdd
        $envoiBdd = true;
        

		//Conditions pour le nom de la Série
		if (empty($nomSerie)) 
		{				
			$tabMessage[] = "Veuillez entrer un nom de série";
			$envoiBdd = false;
		}
		elseif (strlen($nomSerie) > 100)
		{
			$tabMessage[] = "Le nom de votre série ne doit pas dépasser 100 caractères";
			$envoiBdd = false;
        }

        //Conditions pour la catégorie n°1 de la Série
		if (empty($typeCat1)) 
		{				
			$tabMessage[] = "Veuillez entrer la categorie n°1 de la série";
			$envoiBdd = false;
        }

        //Conditions pour la catégorie n°2 de la Série
		if (empty($typeCat2)) 
		{				
			$tabMessage[] = "Veuillez entrer la categorie n°2 de la série";
			$envoiBdd = false;
        }
        
        //Conditions pour la date de début de la Série
		if (empty($dateDebut)) 
		{				
			$tabMessage[] = "Veuillez entrer la date de lancement de la série";
			$envoiBdd = false;
        }

        //Conditions pour le synopsis de la série
		if (empty($synopSerie))
		{
			$tabMessage[] = "Veuillez écrire un synopsis";
			$envoiBdd = false;
		}
		elseif (strlen($synopSerie) > 5000)
		{
			$tabMessage[] = "Votre synopsis ne doit pas dépasser 5000 caractères";
			$envoiBdd = false;
        }
        
        //Condition pour l'image de la série
        if(empty($_FILES['imageSynop']))
        {
            $tabMessage[] = "Veuillez ajouter une image";
			$envoiBdd = false;
        }


        if ($envoiBdd)
        {      
            
            if (!empty($dateFin))
		    {
			    //Ajouter une serie avec date de Fin
			    $serieManager = new SerieManager($bdd);
                $serie = new Serie(
                    array(
                        'nomSerie' => $nomSerie,
                        'dateDebut' =>$dateDebut,
                        'dateFin' => $dateFin,
                        'nbrSaisons' => $nbrSaisons,
                        'synopSerie' => $synopSerie 
                    )
                );

                $serieManager->addWithDateFin($serie);
                $tabMessage[] = "Votre série à été posté avec succès";

            }
            else
            { 
                //Ajouter une serie sans date de Fin
			    $serieManager = new SerieManager($bdd);
                $serie = new Serie(
                    array(
                        'nomSerie' => $nomSerie,
                        'dateDebut' => $dateDebut,
                        'nbrSaisons' => $nbrSaisons,
                        'synopSerie' => $synopSerie 
                    )
                );

                $serieManager->add($serie);
                $tabMessage[] = "Votre série à été posté avec succès";
            }

            if(!empty($typeCat1))
            {
                //Ajouter une categorie à la série
                $categoriserSerieManager = new CategoriserSerieManager($bdd);
                $categoriserSerie = new CategoriserSerie(array(
                    'idCategorie' => $typeCat1
                    )
                );

                $categoriserSerieManager->add($categoriserSerie);

                if(!empty($typeCat2))
                {
                    //Ajouter une autre categorie à la série
                    $categoriserSerieManager = new CategoriserSerieManager($bdd);
                    $categoriserSerie = new CategoriserSerie(array(
                        'idCategorie' => $typeCat2
                        )
                    );

                    $categoriserSerieManager->add($categoriserSerie);
                }
            }

            if ($_FILES['imageSynop']['error'] > 0 )
            {
                $tabMessage[] = 'Erreur lors du transfert';
            }
            elseif (!empty($_FILES['imageSynop']) AND $_FILES['imageSynop']['error'] == 0)
            {
                $extensionsValides = array('jpg', 'jpeg', 'png');
                $extensionUpload = strtolower(substr(strrchr($_FILES['imageSynop']['name'], '.') ,1) );

                $fonction = new Fonction();
                $extImage = $fonction->extensionImage($extensionUpload, $extensionsValides);

                if($extImage !== FALSE)
                {
                    $nomS = htmlspecialchars(trim(str_replace(" ","",($_POST['nomSerie']))));

                    $imageSource = $fonction->moveImageSynopsis($extensionUpload, $_FILES['imageSynop']['tmp_name']);

                    $fonction->resizeImage($imageSource[0], 200, $nomS, 'Synopsis');

                    $imageManager = new ImageManager($bdd);
                    $image = new Image(array(
                        'image' => $imageSource[1]
                        )
                    );

                    $imageManager->addSynop($image);
                }

            }

        }

        if(!empty($tabMessage))
        {
            $smarty->assign('tabMessage', $tabMessage);

            unset($tabMessage);
        }

    }


    //Ajouter un Article===================================================================================================================================

    if(isset($_POST['creerArticle']))
    {

        $nomArticle = htmlspecialchars(ucwords(trim($_POST['nomArticle'])));
        $auteurArticle = htmlspecialchars(ucfirst(trim($_POST['auteurArticle'])));
        $articleSerie = htmlspecialchars($_POST['articleSerie']);
        $tabSerie = explode(" ", $_POST['idSerie']);
        $idSerie = $tabSerie[count($tabSerie)-1];
        $nomSerie = str_replace($tabSerie[count($tabSerie)-1], "", $tabSerie);
        $nomSerieString = implode(" ", $nomSerie);


        // pour receuillir les messages d'erreur et de succes
        $tabMessage = [];

		// pour declencher l'envoi vers la bdd
        $envoiBdd = true;
        

		//Conditions pour le nom de la Série
		if (empty($nomArticle)) 
		{				
			$tabMessage[] = "Veuillez entrer un nom d'article";
			$envoiBdd = false;
		}
		elseif (strlen($nomArticle) > 255)
		{
			$tabMessage[] = "Le nom de votre article ne doit pas dépasser 255 caractères";
			$envoiBdd = false;
        }
        
        //Conditions pour le nom de l'auteur de la article
		if (empty($auteurArticle)) 
		{				
			$tabMessage[] = "Veuillez entrer un nom d'article";
			$envoiBdd = false;
		}
		elseif (strlen($auteurArticle) > 50)
		{
			$tabMessage[] = "Le nom de l'auteur de votre article ne doit pas dépasser 50 caractères";
			$envoiBdd = false;
        }

        //Conditions pour l'article de la série
		if (empty($articleSerie))
		{
			$tabMessage[] = "Veuillez écrire un article";
			$envoiBdd = false;
		}
        
        
        if ($envoiBdd)
        {

            //Ajouter un article 
			$articleManager = new ArticleManager($bdd);
            $article = new Article(
                array(
                    'nomArticle' => $nomArticle,
                    'articleSerie' => $articleSerie,
                    'auteurArticle' => $auteurArticle,
                    'dateArticle' => date("Y-m-d"),
                    'idSerie' => $idSerie 
                )
            );

            $articleManager->add($article);
            $tabMessage[] = "Votre article à été posté avec succès";

        
            //Verification si la marque existe dans la bdd
			$reqList = $bdd->prepare('SELECT 2 FROM Image WHERE idSerie LIKE '.$idSerie);
			$reqList->execute(array($idSerie));
			$donnees = $reqList->rowCount();
            $reqList->closeCursor();

            if ($donnees == 1)
            { 
                if ($_FILES['imageArticle']['error'] > 0)
                {
                    $tabMessage[] = 'Erreur lors du transfert';
                }
                else
                {
                    $extensionsValides = array('jpg', 'jpeg', 'png');
                    $extensionUpload = strtolower(substr(strrchr($_FILES['imageArticle']['name'], '.') ,1) );
                    $fonction = new Fonction();
                    $extImage = $fonction->extensionImage($extensionUpload, $extensionsValides);
                }
                
                if($extImage !== FALSE)
                {
                    $nomS = htmlspecialchars(trim(str_replace(" ","",($nomSerieString))));

                    $imageSource = $fonction->moveImageArticle($extensionUpload, $_FILES['imageArticle']['tmp_name']);

                    $fonction->resizeImage($imageSource[0], 500, $nomS, 'Article');

                    $imageManager = new ImageManager($bdd);
                    $image = new Image(array(
                        'image' => $imageSource[1],
                        'idSerie' => $idSerie
                        )
                    );

                    $imageManager->addArticle($image);
                }

            }
            elseif ($donnees == 2 AND !empty($_FILES['imageArticle']))
            {
                $tabMessage[] = 'Vous avez déjà ajouté une image pour la partie article';
            }

        }

        if(!empty($tabMessage))
        {
            $smarty->assign('tabMessage', $tabMessage);

            unset($tabMessage);
        }

    }

    //Modification Série===========================================================================================================================

    if(isset($_POST['modifierSerie']))
    {
        $nomSerie = htmlspecialchars(ucwords(trim($_POST['nomSerie'])));
        $dateDebut = htmlspecialchars($_POST['dateDebut']);
        $dateFin = htmlspecialchars($_POST['dateFin']);
        $nbrSaisons = htmlspecialchars(trim($_POST['nbrSaisons']));
        $synopSerie = htmlspecialchars($_POST['synopSerie']);
        $tabCat1 = explode(" ", $_POST['typeCategorie1']);
        $typeCat1 = $tabCat1[count($tabCat1)-1];
        $tabCat2 = explode(" ", $_POST['typeCategorie2']);
        $typeCat2 = $tabCat2[count($tabCat2)-1];
        $tabSerie = explode(" ", $_POST['idSerieModif']);
        $idSerie = $tabSerie[count($tabSerie)-1];


        // pour receuillir les messages d'erreur et de succes
        $tabMessage = [];

        //Condition pour la selection de série
        if(empty($idSerie))
        {
            $tabMessage[] = "Veuillez selectionner la série à modifier";
        }
        else
        {
            //Condition pour le nom de la série
            if (strlen($nomSerie) > 100)
		    {
		    	$tabMessage[] = "Le nom de votre série ne doit pas dépasser 100 caractères";
            }
            else
            {
                $serieManager->updateByChamps($idSerie, array('nomSerie'), array($nomSerie));
            }

            //Condition pour la date de début de la série
            if(!empty($dateDebut))
            {
                $serieManager->updateByChamps($idSerie, array('dateDebut'), array($dateDebut));
            }

            //Condition pour la date de fin de la série
            if(!empty($dateFin))
            {
                $serieManager->updateByChamps($idSerie, array('dateFin'), array($dateFin));
            }

            //Condition pour le nombre de saisons de la série
            if(!empty($nbrSaisons))
            {
                $serieManager->updateByChamps($idSerie, array('nbrSaisons'), array($nbrSaisons));
            }

            //Conditions pour le synopsis de la série
            if (strlen($synopSerie) > 5000)
		    {
		    	$tabMessage[] = "Votre synopsis ne doit pas dépasser 5000 caractères";
            }
            else
            {
                $serieManager->updateByChamps($idSerie, array('synopSerie'), array($synopSerie));
            }

            $tabMessage[] = "Votre série a été modifié avec succès";

        }

        //Affichage des messages
        if(!empty($tabMessage))
        {
            $smarty->assign('tabMessage', $tabMessage);

            unset($tabMessage);
        }
    }

    //Modification Article================================================================================================================================

    if(isset($_POST['modifierArticle']))
    {
        $nomArticle = htmlspecialchars(ucwords(trim($_POST['nomArticle'])));
        $auteurArticle = htmlspecialchars(ucfirst(trim($_POST['auteurArticle'])));
        $articleSerie = htmlspecialchars($_POST['articleSerie']);
        $tabArticle1 = explode(" ", $_POST['article']);
        $idSerie = $tabArticle1[count($tabArticle1)-1];
        $tabArticle2 = explode(" ", $_POST['article']);
        $idArticle = $tabArticle2[0];

        
        // pour receuillir les messages d'erreur et de succes
        $tabMessage = [];

        //Condition pour le nom de l'article
        if(strlen($nomArticle) > 255)
		{
			$tabMessage[] = "Le nom de votre article ne doit pas dépasser 255 caractères";
        }
        else
        {
            $articleManager->updateByChamps($idSerie, $idArticle, array('nomArticle'), array($nomArticle));
        }
       
        //Condition pour l'auteur de l'article
        if(strlen($auteurArticle) > 50)
		{
			$tabMessage[] = "Le nom de l'auteur de votre article ne doit pas dépasser 50 caractères";
        }
        else
        {
            $articleManager->updateByChamps($idSerie, $idArticle, array('auteurArticle'), array($auteurArticle));
        }

        //Condition pour l'article
        if(!empty($articleSerie))
        {
            $articleManager->updateByChamps($idSerie, $idArticle, array('articleSerie'), array($articleSerie));
        }

        $tabMessage[] = "Votre article a été modifié avec succès";

        //Affichage des messages
        if(!empty($tabMessage))
        {
            $smarty->assign('tabMessage', $tabMessage);

            unset($tabMessage);
        }

    }

    //Supprimer Série=========================================================================================================================
            
    if(isset($_POST['supprSerie']))
    {
        $tabSerie = explode(" ", $_POST['idSerie']);
        $idSerie = $tabSerie[count($tabSerie)-1];


        // pour receuillir les messages d'erreur et de succes
        $tabMessage = [];

        //Condition de suppression de la série
        if(!empty($idSerie))
        {
            $categoriserSerieManager->deleteByIdSerie($idSerie);
            $articleManager->deleteByIdSerie($idSerie);
            $imageManager->deleteByIdSerie($idSerie);
            $serieManager->deleteByIdSerie($idSerie);
        }

        $tabMessage[] = "Votre série a été supprimer avec succès";

        //Affichage des messages
        if(!empty($tabMessage))
        {
            $smarty->assign('tabMessage', $tabMessage);

            unset($tabMessage);
        }

    }

    //Supprimer Article==================================================================================================================================

    if(isset($_POST['supprArticle']))
    {
        $tabArticle1 = explode(" ", $_POST['article']);
        $idSerie = $tabArticle1[count($tabArticle1)-1];
        $tabArticle2 = explode(" ", $_POST['article']);
        $idArticle = $tabArticle2[0];

        
        // pour receuillir les messages d'erreur et de succes
        $tabMessage = [];

        //Condition de suppression de l'article
        if(!empty($idArticle))
        {
            $articleManager->deleteByIdArticle($idArticle);
        }

        $tabMessage[] = "Votre article a été supprimer avec succès";

        //Affichage des messages
        if(!empty($tabMessage))
        {
            $smarty->assign('tabMessage', $tabMessage);

            unset($tabMessage);
        }

    }


//Assignation Smarty===========================================================================================================================================


    //Récupération des requêtes + affichages
    $smarty->assign(array(
        'typeCategories' => $categorieManager->getListByType(),
        'tabImages' => $imageManager->getList(),
        'tabSeries' => $serieManager->getList(),
        'tabTypeCat' => $categorieManager->getListCat(),
        'articles' => $articleManager->getNomArticleAndNomSerie(),
        'link' => $link
        )
    );


//Barre de Recherche=========================================================================================================================
    
    if (isset($_POST['recherche']))
    {
        $titreSerie = htmlspecialchars(trim($_POST['titreSerie']));

        if (!empty($_POST['titreSerie']))
        {
            $tabSeries = $serieManager->getListSerieByNom($titreSerie);
            $smarty->assign('titreSerie', $titreSerie);
            $smarty->assign('tabSeries', $tabSeries);    
        }
    }


//===========================================================================================================================================

    //Appel de la page TPL
    $smarty->display('template/admin.tpl');


?>

