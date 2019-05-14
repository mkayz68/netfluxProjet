<?php
/* Smarty version 3.1.33, created on 2019-05-14 12:47:28
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdab8e0a09a88_43810151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd5afd3e436ed541535bcf54f2a18a50af95a049' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/admin.tpl',
      1 => 1557832838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdab8e0a09a88_43810151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20668418555cdab8e09c3c74_12883636', 'carousel');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19473045495cdab8e09c5d10_23117806', 'listing');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18504027195cdab8e0a087b5_15919877', 'pagination');
?>



   </body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'carousel'} */
class Block_20668418555cdab8e09c3c74_12883636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'carousel' => 
  array (
    0 => 'Block_20668418555cdab8e09c3c74_12883636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <img src='images/administration.jpeg' alt="image d'administration" class="d-block w-100">
    <?php
}
}
/* {/block 'carousel'} */
/* {block 'listing'} */
class Block_19473045495cdab8e09c5d10_23117806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_19473045495cdab8e09c5d10_23117806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (isset($_smarty_tpl->tpl_vars['tabMessage']->value)) {?>
            <div class="container">
                <div class="text-danger text-center justify-content-md-center">
                    <p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabMessage']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<br/>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </p>
                </div>
            </div>
        <?php }?>
        <h2 class="text-center text-primary">Ajouter</h2>
        <details>
            <summary class=" h3 text-center">Ajouter une Série</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label>Nom de la Série : </label>
                        <input type="text" name='nomSerie' class="form-control"> 
                        <br/>
                        <label>Catégorie n°1 : </label>
                        <select id='typeCategorie1' name='typeCategorie1' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeCategories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                                <option> <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getTypeCategorie();?>
 <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getIdCategorie();?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label>Catégorie n°2 : </label>
                        <select id='typeCategorie2' name='typeCategorie2' class="form-control">
                        <option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeCategories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                                <option> <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getTypeCategorie();?>
 <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getIdCategorie();?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label>Nombre de Saisons : </label>
                        <input type="number" name="nbrSaisons" value="1" class="form-control">
                        <br/>
                        <label>Date de début :</label>
                        <input type="date" name="dateDebut" class="form-control">
                        <br/>
                        <label>Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label>Synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" rows="5" cols="50"></textarea>
                        <br/>
                        <label>Image Synopsis :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input type="file" name="imageSynop"/>
                    </div>        
                </div>
                <p class="text-center">
                    <button type="submit" value="créer une série" name="creerSerie" class="btn btn-primary ">Créer</button>
                </p>
                <br/>
            </form>
        </details>
        <details>
            <summary class="h3 text-center">Ajouter un Article</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <select type='text' id='idSerie' name='idSerie' list='idSerie' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabSeries']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 <?php echo $_smarty_tpl->tpl_vars['serie']->value->getIdSerie();?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label>Nom de l'Article :</label>
                        <input type="text" name='nomArticle' class="form-control"/>
                        <br/>
                        <label>Nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' class="form-control"/>
                        <br/>
                        <label>Article :</label>
                        <br/>
                        <textarea  name="articleSerie" rows="5" cols="50"></textarea>
                        <br/>
                        <label>Image Article :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input type="file" name="imageArticle"/>
                        <br/>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="créer un article" name="creerArticle" class="btn btn-primary">Créer</button>
                </p>
            </form>
        </details>
        <br/>
        <br/>
        <h2 class="text-center text-primary">Modifier</h2>
        <details>
            <summary class=" h3 text-center">Modifier une Série</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label>Série à modifier : </label>
                        <select type='text' id='idSerie' name='idSerieModif' list='idSerie' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabSeries']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 <?php echo $_smarty_tpl->tpl_vars['serie']->value->getIdSerie();?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label>Nouveau nom : </label>
                        <input type="text" name='nomSerie' class="form-control"> 
                        <br/>
                        <label>Nombre de Saisons : </label>
                        <input type="number" name="nbrSaisons" value="1" class="form-control">
                        <br/>
                        <label>Date de début :</label>
                        <input type="date" name="dateDebut" class="form-control">
                        <br/>
                        <label>Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label>Nouveau synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" rows="5" cols="50"></textarea>
                        <br/>
                    </div>        
                </div>
                <p class="text-center">
                    <button type="submit" value="modifier un article" name="modifierSerie" class="btn btn-primary ">Modifier</button>
                </p>
            </form>
            <br/>
        </details>
        <details>
            <summary class="h3 text-center">Modifier un Article</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label>Article à modifier :</label>
                        <select type='text' name='article' list='article' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'nomArticle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nomArticle']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idArticle'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomArticle'];?>
 / <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomSerie'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idSerie'];?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <label>Modifier le nom de l'Article :</label>
                        <input type="text" name='nomArticle' class="form-control"/>
                        <br/>
                        <label>Modifier le nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' class="form-control"/>
                        <br/>
                        <label>Modifier l'article :</label>
                        <br/>
                        <textarea  name="articleSerie" rows="5" cols="100"></textarea>
                        <br/>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="créer un article" name="modifierArticle" class="btn btn-primary">Modifier</button>
                </p>
            </form>
        </details>
        <br/>
        <br/>
        <h2 class="text-center text-primary">Supprimer</h2>
        <details>
            <summary class="h3 text-center">Supprimer une Série</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label>Série à supprimer :</label>
                        <select type='text' id='idSerie' name='idSerie' list='idSerie' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabSeries']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 <?php echo $_smarty_tpl->tpl_vars['serie']->value->getIdSerie();?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="supprimer une série" name="supprSerie" class="btn btn-primary">Supprimer</button>
                </p>
            </form>
        </details>
        <details>
            <summary class="h3 text-center">Supprimer un Article</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label>Article à supprimer :</label>
                        <select type='text' name='article' list='article' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'nomArticle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nomArticle']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idArticle'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomArticle'];?>
 / <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomSerie'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idSerie'];?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="supprimer un article" name="supprArticle" class="btn btn-primary">Supprimer</button>
                </p>
            </form>
        </details>
        <br/>
        <br/>
    <?php
}
}
/* {/block 'listing'} */
/* {block 'pagination'} */
class Block_18504027195cdab8e0a087b5_15919877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_18504027195cdab8e0a087b5_15919877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'pagination'} */
}
