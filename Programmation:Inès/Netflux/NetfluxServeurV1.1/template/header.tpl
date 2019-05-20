<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js "></script>
            <link rel="stylesheet" href="style.css">
            <title>Netflux</title>
        </head>
        
        <body class="bg-secondary" id="page-top">

            <nav class="d-block w-100 d-flex position-absolute text-white">
                <ul class="nav justify-content-start mr-auto p-2">
                    <li class="nav-item dropdown position-fixed">
                        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars fa-1x text-white"></i></a>
                        <div class="dropdown-menu border bg-dark position-fixed">
                            <a class="dropdown-item text-primary" href="index.php">- Accueil</a>
                            <h6 class="dropdown-header text-white">Gérer les Série :</h6>
                            <a class="dropdown-item text-primary" href="{$link->getAdmin()}">- Administration</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header text-white">Catégorie de Série :</h6>
                            {foreach from=$typeCategories item=$categorie}
                                <a class="dropdown-item text-primary" href="{$link->getSerieParCat($categorie->getIdCategorie())}">- {$categorie->getTypeCategorie()}</a>
                            {/foreach}
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header text-white">Formulaire :</h6>
                            <a class="dropdown-item text-primary" href="{$link->getContact()}">- Prise de contact</a>
                        </div>
                    </li>
                    <a href="index.php"><img id="logo" src="images/logo.png"></a>
                </ul>
                <ul class="nav justify-content-end p-2">
                    <li class="nav-item">
                        <form id="listeSerie" class="navbar-form navbar-right" method="POST" role="search"> 
                            <div class="input-group"> 
                                <input id="recherche-series" name='titreSerie' type="text" class="form-control" placeholder="Séries..."/>
                                <span class="input-group-btn"> 
                                    <button type="submit" name="recherche" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span><i class="fas fa-search"></i></button>
                                </span> 
                            </div> 
                        </form>
                    </li>
                </ul>
            </nav>  
            
            {block name='carousel'}
            <div id="video-carousel-example" class="carousel slide carousel-fade position-relative" data-ride="carousel" data-interval=60000>
                <ol class="carousel-indicators">
                  <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                  <li data-target="#video-carousel-example" data-slide-to="1"></li>
                  <li data-target="#video-carousel-example" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                   <div class="sliderTitre d-none d-md-block row justify-content-md-center">
                        <h1>Toute L'Actualité des Séries en Exlusivitées sur NETFLUX</h1>
                  </div>
                  <div class="carousel-item active">
                        <div class="sliderTexte">
                            <h2>"Game Of Throne"</h2>
                        </div>
                    <video class="video-fluid d-block w-100" autoplay muted loop>
                      <source src="images/got.mp4" type="video/mp4" />
                    </video>
                  </div>
                  <div class="carousel-item">
                        <div class="sliderTexte">
                            <h2>"La Casa De Papel"</h2>
                        </div>
                    <video class="video-fluid d-block w-100" autoplay muted loop>
                      <source src="images/LaCasaDePapel.mp4" type="video/mp4" />
                    </video>
                  </div>
                  <div class="carousel-item">
                        <div class="sliderTexte">
                            <h2>"The Walking Dead"</h2>
                        </div>
                    <video class="video-fluid d-block w-100" autoplay muted loop>
                      <source src="images/TheWalkingDead.mp4" type="video/mp4" />
                    </video>
                  </div>
                </div>
            </div>
            {/block}
            
            {block name="Recherche"}
            <script>
                //Tableau qui contient les résultats de la BDD
                var tabDonnees = [];
                //Instance de la barre de recherche 
                var input = document.getElementById('recherche-series');
                //Index de l'élément selectionné dans le champ de selection
                var elemSelect ;

                //Execute une fonction lorsqu'on écrit dans la barre de recherche
                input.addEventListener(
                    'input',
                    function()
                    {
                        ajaxRecherche();
                    }
                );

                //Execute une fonction lorsqu'on appuie sur une touche
                input.addEventListener(
                    'keydown',
                    function(char)
                    {
                        var listSuggestions = document.getElementById(this.id + 'autocompleteListe');

                        if (listSuggestions)
                        {
                            listSuggestions = listSuggestions.getElementsByTagName('div');
                        }

                        if(char.keyCode == 40)
                        {
                            //Si on appuie sur la fleche du bas on incrémente elemSelect
                            elemSelect++;
                            //Et on met l'objet correspondant en surbrillance
                            addActive(listSuggestions);
                        }
                        else if(char.keyCode == 38)
                        {
                            //Si on appuie sur la fleche du haut on décrémente elemSelect
                            elemSelect--;
                            //Et on met l'objet correspondant en surbrillance
                            addActive(listSuggestions);
                        }
                        else if(char.keyCode == 13)
                        {
                            //Si on appuie sur le touche entrée dabord on empêche la soumission du formulaire 
                            char.preventDefault();

                            if (elemSelect > -1)
                            {
                                //On simule un click sur l'élément en surbrillance
                                if (listSuggestions)
                                {
                                    listSuggestions[elemSelect].click();
                                }
                            }
                        }
                    }
                );

                //Execute une fonction lorsque l'on click sur dans le document 
                document.addEventListener(
                    'click',
                    function(e)
                    {
                        closeAllLists(e.target);
                    }
                );

                //Fonction pour mettre un élement en surbrillance
                function addActive(listSuggestions)
                {
                    if(!listSuggestions)
                    {
                        return false; 
                    }

                    //On commence par réinitialiser tout les élements de la liste 
                    removeActive(listSuggestions);

                    if(elemSelect >= listSuggestions.length)
                    {
                        elemSelect = 0;
                    }

                    if(elemSelect < 0)
                    {
                        elemSelect = (listSuggestions.length - 1);
                    }

                    //On ajoute la classe autocompleteActive
                    listSuggestions[elemSelect].classList.add('autocompleteActive');
                }

                //Fonction pour réinitialiser tout les éléments de la liste 
                function removeActive(listSuggestions)
                {
                    for (i=0; i< listSuggestions.length; ++i)
                    {
                        listSuggestions[i].classList.remove('autocompleteActive');
                    }
                }

                //Fonction qui ferme la liste d'autocomplétion dans le document à l'exeption de l'élément passé dans la fonction
                function closeAllLists(element)
                {
                    var listElements = document.getElementsByClassName('autocompleteItems');

                    for (i=0; i < listElements.length; ++i)
                    {
                        if(element != listElements[i] && element != input)
                        {
                            listElements[i].parentNode.removeChild(listElements[i]);
                        }
                    }
                }


                function ajaxRecherche()
                {
                    var xhr=null;

                    if (window.XMLHttpRequest) 
                    { 
                        xhr = new XMLHttpRequest();
                    }
                    else if (window.ActiveXObject) 
                    {
                        xhr = new ActiveXObject("Microsoft.XMLHTTP");
                    }

                    //on définit l'appel de la fonction au retour serveur
                    xhr.onreadystatechange = function() { alertAjaxRecherche(xhr); };

                    xhr.open( "GET", "./recherche_series.php?series="+input.value, true );
                    xhr.send( null );
                }

                function alertAjaxRecherche(xhr)
                {
                    if(xhr.readyState == 4 && xhr.status == 200)
                    {
                        var docXML = xhr.responseXML;
                        var tabItems = docXML.getElementsByTagName('donnee');
                        tabDonnees = [];

                        //On fait une boucle sur chaques éléments et on l'insere dans tabDonnées
                        for(i = 0; i < tabItems.length; ++i)
                        {
                            tabDonnees.push(tabItems.item(i).firstChild.data);
                        }

                        var divListSuggestions;
                        var divSuggestion;
                        var valeurInput = input.value;

                        closeAllLists();

                        if(!valeurInput)
                        {
                            return false;
                        }

                        elemSelect = -1;

                        //On crée un div qui contiendra toutes les suggestions
                        divListSuggestions = document.createElement('div');
                        divListSuggestions.setAttribute('id', input.id+'autocompleteListe');
                        divListSuggestions.setAttribute('class', 'autocompleteItems');
                        
                        //On fait de cette div un enfant de la barre de recherche
                        input.parentNode.appendChild(divListSuggestions);

                        for(i = 0; i < tabDonnees.length; ++i)
                        {
                            //On crée une div pour chaques éléments
                            divSuggestion = document.createElement('div');
                            
                            //On insere la données dans la div
                            divSuggestion.innerHTML = tabDonnees[i];

                            //Execute une fonction lorsqu'on click sur l'élément
                            divSuggestion.addEventListener(
                                'click',
                                function()
                                {
                                    //On insere la valeur dans la barre de recherche
                                    input.value = this.innerText;

                                    closeAllLists();
                                }
                            );
                            
                            //Puis on insere cette div dans la list des suggestions
                            divListSuggestions.appendChild(divSuggestion);
                        }
                    }
                }

            </script>
            {/block}