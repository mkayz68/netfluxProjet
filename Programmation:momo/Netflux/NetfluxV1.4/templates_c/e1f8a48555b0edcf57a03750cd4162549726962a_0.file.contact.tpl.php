<?php
/* Smarty version 3.1.33, created on 2019-05-14 13:55:19
  from '/Applications/MAMP/htdocs/NetfluxV1.4/template/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdac8c76716c6_01919225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f8a48555b0edcf57a03750cd4162549726962a' => 
    array (
      0 => '/Applications/MAMP/htdocs/NetfluxV1.4/template/contact.tpl',
      1 => 1557842037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/header.tpl' => 1,
  ),
),false)) {
function content_5cdac8c76716c6_01919225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="fr">
<html>
	<head>
	<title>Contact Netflux</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="contact.css">
		 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
				</head>
	    
    <body>

		<?php echo '<script'; ?>
 language="javascript">
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
            alert("Veuillez entrez votre nom");
            document.getElementById("errors").innerHTML += "<p>Veuillez entrez votre nom</p>";
            document.formValid.name.className = "error";
        } // else if (nom.length < 4){
            // document.getElementById("errors").innerHTML += "<p>Le nom doit faire plus de 3 caractères</p>";
            // document.formValid.yourName.className = "error";
            // }


        // Récupère le prénom 
        var prenom = document.formValid.prenom.value;
        // alert(prenom);
        if (prenom == ""){
            alert("Veuillez entrez votre prénom");
            document.getElementById("errors").innerHTML += "<p>Veuillez entrez votre prénom</p>";
            document.formValid.prenom.className = "error";
        } // else if (prenom.length < 4){
            // document.getElementById("errors").innerHTML += "<p>Le prenom doit faire plus de 3 caractères</p>";
            // document.formValid.yourSurname.className = "error";
            // }
        
        // Traitement du mail
        var mail = document.formValid.mail.value;
        if (mail == ""){
            document.getElementById("errors").innerHTML += "<p>veuillez entrez votre mail</p>";
            document.formValid.mail.className = "error";
        }else if (mail.indexOf('@') == -1) {
            document.getElementById("errors").innerHTML += "<p>Le mail doit contenir un @</p>";
            document.formValid.mail.className = "error";
            //alert(mail);
        }
        
        alert("Bonjour" + " " + nom + " " + prenom + 
                    " nous avons bien reçu votre demande de contact"+
                    " nous nous recontacterons dans les plus bref délais"+
                    " à l'adresse mail " + mail);
    }
<?php echo '</script'; ?>
>


	<div id="main">
			
			<h2>Formulaire de Contact</h2>
			
				<div id="errors" class='error' ></div>

			<form method="POST" name="formValid" onSubmit="valider();return false;" >
				
				<p>Civilité* :<input type="radio" name="civ" value="Mlle" /> Mlle <input type="radio" name="civ" value="Mme"/> Mme <input type="radio" name="civ" value="M"/> M </p>
				<p>Votre Nom* : <input type="text" name="name" /></p>
				<p>Votre Prénom* : <input type="text" name="prenom" /></p>
				<p>Votre Mail* : <input type="text" name="mail" /></p>
				<p><input type="submit" name="Valider" /></p>
			</form>
		</div>


	</body>
</html>
<?php }
}
