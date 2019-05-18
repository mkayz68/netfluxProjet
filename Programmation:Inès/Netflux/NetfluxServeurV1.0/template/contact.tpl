{extends file="template/netflux.tpl"}

{if empty($titreSerie)}
{block name="Ajax"}
{/block}

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
    <h2 class="text-center">Formulaire de Contact</h2>
    <div id="errors" class="error text-center text-danger"></div>
	<div id="main">		
        <br/>		
        <div class="row justify-content-center">
            <div class="form-group">
                <form method="POST" name="formValid" onsubmit="valider();return false;">
                    <label>Civilité* :</label>
            	
                    <input type="radio" id=choix1 name="civ" value="Mlle"/>
                    <label for="civ">Mlle</label>

                    <input type="radio" id="choix2" name="civ" value="Mme"/>
                    <label for="civ">Mme</label>

                    <input type="radio" id="choix3" name="civ" value="M"/>
                    <label for="civ">M</label>           
                    <br/>
                    <label>Votre Nom* :</label>
                    <input type="text" name="name" required="required" class="form-control"/>
                    <br/>
                    <label>Votre Prénom* :</label>
                    <input type="text" name="prenom" required="required" class="form-control"/>
                    <br/>
                    <label>Votre Message* :</label>
                    <br/>
                    <textarea  name="message" rows="5" cols="50" required="required" class="form-control"></textarea>
                    <br/>
                    <label>Votre E-Mail* :</label>
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
{block name="Ajax"}
    <script language="javascript">
    // dollar = jquery/ajax
    $(document).ready(function(){
        $('#recherche-series').keyup(function(){
            $('#recherche-resultat').html('');

            var series = $(this).val();

            if(series != ""){
                $.ajax({
                    type: 'GET',
                    url: 'recherche_series.php',
                    data: 'series=' + encodeURIComponent(series),
                    success: function(data){
                        if(data != ""){
                            $('#recherche-resultat').append(data);
                        }else{
                            document.getElementById('recherche-resultat').innerHTML = "Aucune série"
                        }
                    }
                });
            }
        });
    });
    </script>
{/block}

{block name='listing'}
    <div class="container">
        <div class="row justify-content-md-center">  
            {foreach from=$tabSeries item=$serie}
                <div class="col-4 border border-white bg-dark">
                    <br/>
                    <h3 class="text-center text-danger border border-white"><strong>{$serie->getNomSerie()}</strong></h3>
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
                            <img src="{$link->getImageRedim('Synopsis', 200, $serie->getNomSerie())}" class="d-block w-100">
                        </div>
                        <h4 class="text-center text-danger">Synopsis</h4>
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
