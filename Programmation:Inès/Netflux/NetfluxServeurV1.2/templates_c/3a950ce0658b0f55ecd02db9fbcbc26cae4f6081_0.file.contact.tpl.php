<?php
/* Smarty version 3.1.33, created on 2019-05-21 11:35:08
  from '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce3e26c59c877_26442743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a950ce0658b0f55ecd02db9fbcbc26cae4f6081' => 
    array (
      0 => '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/contact.tpl',
      1 => 1558438502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce3e26c59c877_26442743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9820304395ce3e26c5587b7_39841851', 'carousel');
?>


<?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783431455ce3e26c5647e3_74089372', "Ajax");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14546584685ce3e26c5659a9_44257598', "javaScriptAdditionnel");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10786125725ce3e26c5683e6_27888592', "listing");
?>


<?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17575299035ce3e26c569fc9_47971327', "Recherche");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136943085ce3e26c56eac6_77104132', 'listing');
?>

<?php }?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1283433535ce3e26c59bd57_40160430', "pagination");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'carousel'} */
class Block_9820304395ce3e26c5587b7_39841851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'carousel' => 
  array (
    0 => 'Block_9820304395ce3e26c5587b7_39841851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <img src='images/contact.jpg' alt="image de contact" class="d-block w-100">
<?php
}
}
/* {/block 'carousel'} */
/* {block "Ajax"} */
class Block_1783431455ce3e26c5647e3_74089372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Ajax' => 
  array (
    0 => 'Block_1783431455ce3e26c5647e3_74089372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "Ajax"} */
/* {block "javaScriptAdditionnel"} */
class Block_14546584685ce3e26c5659a9_44257598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javaScriptAdditionnel' => 
  array (
    0 => 'Block_14546584685ce3e26c5659a9_44257598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php echo '<script'; ?>
 language="javascript">
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
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "javaScriptAdditionnel"} */
/* {block "listing"} */
class Block_10786125725ce3e26c5683e6_27888592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_10786125725ce3e26c5683e6_27888592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "listing"} */
/* {block "Recherche"} */
class Block_17575299035ce3e26c569fc9_47971327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Recherche' => 
  array (
    0 => 'Block_17575299035ce3e26c569fc9_47971327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
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

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "Recherche"} */
/* {block 'listing'} */
class Block_136943085ce3e26c56eac6_77104132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_136943085ce3e26c56eac6_77104132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/Smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

    <div class="container">
        <div class="row justify-content-md-center">  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabSeries']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                <div class="blockSerie col-4 border border-white bg-dark">
                    <br/>
                    <h3 class="text-center text-danger border border-white"><strong><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
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
                            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageRedim('Synopsis',200,$_smarty_tpl->tpl_vars['serie']->value->getNomSerie());?>
" class="d-block w-100">
                        </div>
                        <h4 class="text-center text-danger">Synopsis</h4>
                        <p class="text-center text-white"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['serie']->value->getSynopSerie());?>
</p>
                        <br/>
                        <a class="btn btn-primary btn-outline-light btn-block" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getArticleLink($_smarty_tpl->tpl_vars['serie']->value->getIdSerie());?>
">Voir Plus</a>
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
class Block_1283433535ce3e26c59bd57_40160430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_1283433535ce3e26c59bd57_40160430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "pagination"} */
}
