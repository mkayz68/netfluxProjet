{extends file="template/netflux.tpl"}

{block name='carousel'}
    <img src='images/contact.jpg' alt="image de contact" class="d-block w-100">
{/block}

{if empty($titreSerie)}
{block name="javaScriptAdditionnel"}
    
<script language="javascript">
    // code javascript 
    function init()
    {
        //alert('test');
        document.formValid.name.className = "";
        document.formValid.prenom.className = "";
        document.formValid.mail.className = "";
        document.getElementById("errors").innerHTML = "";
    }

    function valider(){
        // Réinitialiser les erreurs
        init();

        var envoie = true;
        
        // Traitement de la civilité
        if( (!document.formValid.civ[0].checked) &&
            (!document.formValid.civ[1].checked) &&
            (!document.formValid.civ[2].checked)
            ){
            document.getElementById("errors").innerHTML += "<p>La civilité est obligatoire</p>";

            envoie = false;
        }
        // Récupère le nom 
        var nom = document.formValid.name.value;
        //alert(nom);
        if (nom == ""){
            document.getElementById("errors").innerHTML += "<p>Veuillez saisir votre nom</p>";
            document.formValid.name.className = "error";

            envoie = false;

        }else if (nom.length < 3){
            document.getElementById("errors").innerHTML += "<p>Le nom doit contenir au moins 3 caractères</p>";
            document.formValid.name.className = "error";

            envoie = false;

        }


        // Récupère le prénom 
        var prenom = document.formValid.prenom.value;
        //alert(prenom);
        if (prenom == ""){
            document.getElementById("errors").innerHTML += "<p>Veuillez saisir votre prénom</p>";
            document.formValid.prenom.className = "error";

            envoie = false;

        }else if (prenom.length < 3){
            document.getElementById("errors").innerHTML += "<p>Le prenom doit contenir au moins 3 caractères</p>";
            document.formValid.prenom.className = "error";

            envoie = false;
        }
        
        //Récupération du message
        var message = document.formValid.message.value;
        if (message == "")
        {
            document.getElementById("errors").innerHTML += "<p>Veuillez saisir un message</p>";
            document.formValid.prenom.className = "error";

            envoie = false;
        }

        // Traitement du mail
        var mail = document.formValid.mail.value;
        if (mail == ""){
            document.getElementById("errors").innerHTML += "<p>veuillez saisir votre e-mail</p>";
            document.formValid.mail.className = "error";

            envoie = false;

        }else if (mail.indexOf('@') == -1) {
            document.getElementById("errors").innerHTML += "<p>Votre mail est invalide</p>";
            document.formValid.mail.className = "error";
            //alert(mail);

            envoie = false;

        }
        
        if (envoie == true)
        {
            alert("Bonjour "+ nom + " " + prenom + 
                    " nous avons bien reçu votre message: '"+ message+
                    "'. Nous vous répondrons dans les plus bref délais"+
                    " sur votre adresse mail : " + mail);
        }
        
    }
</script>
{/block}

{block name="listing"}
    <h1 class="text-center text-white">Formulaire de Contact</h1>
    <br/>
    <div class="row justify-content-center">
        <div id="errors" class="error col-4 text-center"></div>
    </div>
	<div id="main">		
        <br/>		
        <div class="row justify-content-center">
            <div class="form-group">
                <form method="POST" name="formValid" onsubmit="valider();return false;">
                    <label class="text-white">Civilité* :</label>
            	
                    <input type="radio" id=choix1 name="civ" value="Mlle"/>
                    <label class="text-white" for="civ">Mlle</label>

                    <input type="radio" id="choix2" name="civ" value="Mme"/>
                    <label class="text-white" for="civ">Mme</label>

                    <input type="radio" id="choix3" name="civ" value="M"/>
                    <label class="text-white" for="civ">M</label>           
                    <br/>
                    <br/>
                    <label class="text-white">Votre Nom* :</label>
                    <input type="text" name="name" required="required" class="form-control"/>
                    <br/>
                    <label class="text-white">Votre Prénom* :</label>
                    <input type="text" name="prenom" required="required" class="form-control"/>
                    <br/>
                    <label class="text-white">Votre Message* :</label>
                    <br/>
                    <textarea  name="message" rows="5" cols="50" required="required" class="form-control"></textarea>
                    <br/>
                    <label class="text-white">Votre E-Mail* :</label>
                    <input type="mail" name="mail" required="required" class="form-control"/>
                    <br/>
                    <p class="text-center">
                    <input type="submit" name="Valider" class="btn btn-primary "/>
                    </p>
                </form>
            </div>
        </div>
    </div>
{/block}

{else}
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

{block name='listing'}
    <div class="container">
        <div class="row justify-content-md-center">  
            {foreach from=$tabSeries item=$serie}
                <div class="blockSerie col-4 border border-white bg-dark">
                    <br/>
                    <h3 class="text-center bordeaux border border-white"><strong>{$serie->getNomSerie()}</strong></h3>
                    <br/>
                    <div>
                        <p class="text-left text-white"><strong>Catégories :</strong>
                        <br/>
                        {foreach from=$tabTypeCat item=$categorie}
                            {if $serie->getIdSerie() == $categorie.idSerie}
                                -{$categorie.typeCategorie}
                                <br/> 
                            {/if}
                        {/foreach}
                        </p>
                        <p class="text-left text-white"><strong>Date de Début :</strong> {$serie->getDateDebut()|date_format:"%d/%m/%Y"}</p>
                        {if ($serie->getDateFin() == null)}
                            <p class="text-left text-white"><strong>Date de fin :</strong> En cours</p>
                        {else}
                            <p class="text-left text-white"><strong>Date de fin :</strong> {$serie->getDateFin()|date_format:"%d/%m/%Y"}</p>
                        {/if}
                        <p class="text-left text-white"><strong>Nombres de Saisons :</strong> {$serie->getNbrSaisons()}</p>
                        <div>
                            <img src="{$link->getImageRedim('Synopsis', 200, $serie->getNomSerie())}" alt="image du synopsis pour la présentation de la série" class="d-block w-100">
                        </div>
                        <h4 class="text-center bordeaux">Synopsis</h4>
                        <p class="text-center text-white">{$serie->getSynopSerie()|truncate}</p>
                        <br/>
                        <a class="btn btn-primary btn-outline-light btn-block" href="{$link->getArticleLink($serie->getIdSerie())}">Voir Plus</a>
                    </div>
                    <br/>
                </div>
                <br/>
            {/foreach}
        </div>
    </div>
    <br/>
    <br/>
{/block}
{/if}


{block name="pagination"}
{/block}
