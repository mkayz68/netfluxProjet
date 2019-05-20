<?php
/* Smarty version 3.1.33, created on 2019-05-18 10:04:46
  from '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdfd8be6a1405_73528893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea38cf78a6faffa367df93f058c25594c32cf027' => 
    array (
      0 => '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/admin.tpl',
      1 => 1558173871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdfd8be6a1405_73528893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4087807665cdfd8be6595a7_63746048', 'carousel');
?>


    <?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6286765725cdfd8be664072_41604429', 'listing');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13893897925cdfd8be68a401_69558993', 'pagination');
?>


    <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4144617405cdfd8be68b401_68273355', 'listing');
?>

    <?php }?>

   </body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'carousel'} */
class Block_4087807665cdfd8be6595a7_63746048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'carousel' => 
  array (
    0 => 'Block_4087807665cdfd8be6595a7_63746048',
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
class Block_6286765725cdfd8be664072_41604429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_6286765725cdfd8be664072_41604429',
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
                        <input type="text" name='nomSerie' required="required" class="form-control"> 
                        <br/>
                        <label>Catégorie n°1 : </label>
                        <select id='typeCategorie1' name='typeCategorie1' required="required" class="form-control">
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
                        <select id='typeCategorie2' name='typeCategorie2' required="required" class="form-control">
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
                        <input type="number" name="nbrSaisons" required="required" value="1" min="1" class="form-control">
                        <br/>
                        <label>Date de début :</label>
                        <input type="date" name="dateDebut" required="required" class="form-control">
                        <br/>
                        <label>Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label>Synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" required="required" rows="5" cols="50"></textarea>
                        <br/>
                        <label>Image Synopsis :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" required="required" value="1048576"/>
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
                        <input type="text" name='nomArticle' required="required" class="form-control"/>
                        <br/>
                        <label>Nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' required="required" class="form-control"/>
                        <br/>
                        <label>Article :</label>
                        <br/>
                        <textarea  name="articleSerie" required="required" rows="5" cols="50"></textarea>
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
            <form action="" method="POST" enctype="multipart/form-data">
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
                        <input type="number" name="nbrSaisons" value="1" min="1"  class="form-control">
                        <br/>
                        <label>Date de début :</label>
                        <input type="date" name="dateDebut" class="form-control">
                        <br/>
                        <label>Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label>Nouveau synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" rows="5" cols="50" ></textarea>
                        <br/>
                        <br/>
                        <label>Nouvelle image :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input type="file" name="imageSynop"/>
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
            <form action="" method="POST" enctype="multipart/form-data">
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
                        <br/>
                        <label>Modifier le nom de l'Article :</label>
                        <input type="text" name='nomArticle' class="form-control"/>
                        <br/>
                        <label>Modifier le nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' class="form-control"/>
                        <br/>
                        <label>Modifier l'article :</label>
                        <br/>
                        <textarea  name="articleSerie" rows="5" cols="120"></textarea>
                        <br/>
                        <br/>
                        <label>Nouvelle image :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input type="file" name="imageArticle"/>
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
class Block_13893897925cdfd8be68a401_69558993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_13893897925cdfd8be68a401_69558993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'pagination'} */
/* {block 'listing'} */
class Block_4144617405cdfd8be68b401_68273355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_4144617405cdfd8be68b401_68273355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageRedim('Synopsis',200,$_smarty_tpl->tpl_vars['serie']->value->getNomSerie());?>
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
}
