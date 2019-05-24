<?php
/* Smarty version 3.1.33, created on 2019-05-16 08:35:10
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd20be5ddae6_19796282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1f2b78348679f144a94c6ebc97eeb5163be67f' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/contact.tpl',
      1 => 1557995704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd20be5ddae6_19796282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16022900825cdd20be5782f2_21786040', "Ajax");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9808103065cdd20be57b713_84811848', "javaScriptAdditionnel");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5202150865cdd20be587e17_85090202', "listing");
?>


<?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633096505cdd20be58db30_90333340', "Ajax");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16754940445cdd20be595b23_74451709', 'listing');
?>

<?php }?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15522093055cdd20be5dc509_20535166', "pagination");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block "Ajax"} */
class Block_16022900825cdd20be5782f2_21786040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Ajax' => 
  array (
    0 => 'Block_16022900825cdd20be5782f2_21786040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "Ajax"} */
/* {block "javaScriptAdditionnel"} */
class Block_9808103065cdd20be57b713_84811848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javaScriptAdditionnel' => 
  array (
    0 => 'Block_9808103065cdd20be57b713_84811848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php echo '<script'; ?>
 language="javascript">
    // code javascript 
    function init()
    {
        alert('test');
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
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "javaScriptAdditionnel"} */
/* {block "listing"} */
class Block_5202150865cdd20be587e17_85090202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_5202150865cdd20be587e17_85090202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "listing"} */
/* {block "Ajax"} */
class Block_1633096505cdd20be58db30_90333340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Ajax' => 
  array (
    0 => 'Block_1633096505cdd20be58db30_90333340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 language="javascript">
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
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "Ajax"} */
/* {block 'listing'} */
class Block_16754940445cdd20be595b23_74451709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_16754940445cdd20be595b23_74451709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/Netflux/NetfluxV01/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <div class="container">
        <div class="row justify-content-md-center">  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabSeries']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                <div class="col-4 border border-white bg-dark">
                    <br/>
                    <h3 class="text-center text-white"><strong><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
</strong></h3>
                    <br/>
                    <div>
                        <p class="text-left text-white"><strong>Catégories :</strong>
                            <br/>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabTypeCat']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['serie']->value->getIdSerie() == $_smarty_tpl->tpl_vars['categorie']->value['idSerie']) {?>
                                -<?php echo $_smarty_tpl->tpl_vars['categorie']->value['typeCategorie'];?>

                                <br/> 
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </p>
                        <p class="text-left text-white"><strong>Date de Début :</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['serie']->value->getDateDebut(),"%d/%m/%Y");?>
</p>
                        <?php if (($_smarty_tpl->tpl_vars['serie']->value->getDateFin() == null)) {?>
                            <p class="text-left text-white"><strong>Date de fin :</strong> En cours</p>
                        <?php } else { ?>
                            <p class="text-left text-white"><strong>Date de fin :</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['serie']->value->getDateFin(),"%d/%m/%Y");?>
</p>
                        <?php }?>
                        <p class="text-left text-white"><strong>Nombres de Saisons :</strong> <?php echo $_smarty_tpl->tpl_vars['serie']->value->getNbrSaisons();?>
</p>
                        <div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageRedimSynop(200,$_smarty_tpl->tpl_vars['serie']->value->getNomSerie());?>
" class="d-block w-100">
                        </div>
                        <details>
                            <summary class="text-center text-white"><h4>Synopsis</h4></summary>
                            <p class="text-center text-white"><?php echo $_smarty_tpl->tpl_vars['serie']->value->getSynopSerie();?>
</p>
                        </details>
                        <br/>
                        <a class="btn btn-primary btn-outline-light btn-block" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getArticleLink($_smarty_tpl->tpl_vars['serie']->value->getIdSerie());?>
">Découvrir</a>
                    </div>
                    <br/>
                </div>
                <br/>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <br/>
    <br/>
<?php
}
}
/* {/block 'listing'} */
/* {block "pagination"} */
class Block_15522093055cdd20be5dc509_20535166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_15522093055cdd20be5dc509_20535166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "pagination"} */
}
