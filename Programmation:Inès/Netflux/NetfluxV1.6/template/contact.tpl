{extends file="template/netflux.tpl"}

{if empty($titreSerie)}
{block name="javaScriptAdditionnel"}
    
<script language="javascript">
    // code javascript 
    function init()
    {
        document.formValid.name.className = "";
        document.formValid.prenom.className = "";
        document.formValid.mail.className = "";
        document.getElementById("errors").innerHTML = "";
    }

    function valider(){
        // Réinitialiser les erreurs
        init();
        
        // Traitement de la civilité
        if( (!document.formValid.civ[0].checked) &&
            (!document.formValid.civ[1].checked) &&
            (!document.formValid.civ[2].checked)
            ){
            document.getElementById("errors").innerHTML += "<p>La civilité est obligatoire</p>";
        }
        // Récupère le nom 
        var nom = document.formValid.name.value;
        //alert(nom);
        if (nom == ""){
            //alert("Veuillez entrez votre nom");
            document.getElementById("errors").innerHTML += "<p>Veuillez saisir votre nom</p>";
            document.formValid.name.className = "error";
        } // else if (nom.length < 3){
            // document.getElementById("errors").innerHTML += "<p>Le nom doit faire plus de 3 caractères</p>";
            // document.formValid.yourName.className = "error";
            // }


        // Récupère le prénom 
        var prenom = document.formValid.prenom.value;
        // alert(prenom);
        if (prenom == ""){
            document.getElementById("errors").innerHTML += "<p>Veuillez saisir votre prénom</p>";
            document.formValid.prenom.className = "error";
        } // else if (prenom.length < 3){
            // document.getElementById("errors").innerHTML += "<p>Le prenom contenir au moins 3 caractères</p>";
            // document.formValid.yourSurname.className = "error";
            // }
        
        //Récupération du message
        var message = document.formValid.message.value;
        if (message == "")
        {
            document.getElementById("errors").innerHTML += "<p>Veuillez saisir un message"
        }

        // Traitement du mail
        var mail = document.formValid.mail.value;
        if (mail == ""){
            document.getElementById("errors").innerHTML += "<p>veuillez saisir votre e-mail</p>";
            document.formValid.mail.className = "error";
        }else if (mail.indexOf('@') == -1) {
            document.getElementById("errors").innerHTML += "<p>Votre mail est invalide</p>";
            document.formValid.mail.className = "error";
            //alert(mail);
        }
        
        alert("Bonjour "+ nom + " " + prenom + 
                    " nous avons bien reçu votre message: '"+ message+
                    "'. Nous vous répondrons dans les plus bref délais"+
                    " sur votre adresse mail :" + mail);
    }
</script>
{/block}

{block name="listing"}
	<div id="main">	
		<h2 class="text-center">Formulaire de Contact</h2>	
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
{block name='listing'}
    <div class="container">
        <div class="row justify-content-md-center">  
            {foreach from=$tabSeries item=$serie}
                <div class="col-4 border border-white bg-dark">
                    <br/>
                    <h3 class="text-center text-white"><strong>{$serie->getNomSerie()}</strong></h3>
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
                            <img src="{$link->getImageRedimSynop(200, $serie->getNomSerie())}" class="d-block w-100">
                        </div>
                        <details>
                            <summary class="text-center text-white"><h4>Synopsis</h4></summary>
                            <p class="text-center text-white">{$serie->getSynopSerie()}</p>
                        </details>
                        <br/>
                        <a class="btn btn-primary btn-outline-light btn-block" href="{$link->getArticleLink($serie->getIdSerie())}">Découvrir</a>
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
