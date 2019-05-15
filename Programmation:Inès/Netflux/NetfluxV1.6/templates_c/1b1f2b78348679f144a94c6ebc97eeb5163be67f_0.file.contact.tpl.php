<?php
/* Smarty version 3.1.33, created on 2019-05-15 14:17:08
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc1f64806869_55825027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1f2b78348679f144a94c6ebc97eeb5163be67f' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/contact.tpl',
      1 => 1557929787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc1f64806869_55825027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10706033515cdc1f647903e2_97025456', "javaScriptAdditionnel");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6222165795cdc1f64799727_70163140', "listing");
?>


<?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17233031905cdc1f6479d957_60092090', 'listing');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20973233965cdc1f648043b8_06182842', "pagination");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block "javaScriptAdditionnel"} */
class Block_10706033515cdc1f647903e2_97025456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javaScriptAdditionnel' => 
  array (
    0 => 'Block_10706033515cdc1f647903e2_97025456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
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
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "javaScriptAdditionnel"} */
/* {block "listing"} */
class Block_6222165795cdc1f64799727_70163140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_6222165795cdc1f64799727_70163140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "listing"} */
/* {block 'listing'} */
class Block_17233031905cdc1f6479d957_60092090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_17233031905cdc1f6479d957_60092090',
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
class Block_20973233965cdc1f648043b8_06182842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_20973233965cdc1f648043b8_06182842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "pagination"} */
}
