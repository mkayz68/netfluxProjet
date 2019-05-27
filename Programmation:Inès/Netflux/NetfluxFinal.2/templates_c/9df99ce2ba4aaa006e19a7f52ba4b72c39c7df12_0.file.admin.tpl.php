<?php
/* Smarty version 3.1.33, created on 2019-05-27 07:57:39
  from '/Applications/MAMP/htdocs/Netflux/NetfluxFinal.1/template/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceb987343a052_56861363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df99ce2ba4aaa006e19a7f52ba4b72c39c7df12' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxFinal.1/template/admin.tpl',
      1 => 1558893371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceb987343a052_56861363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1789676245ceb9873366ff0_15182196', 'carousel');
?>


    <?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4413139115ceb98733ab866_69325835', 'listing');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5232677685ceb98733ee835_00043916', 'pagination');
?>


    <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_751746185ceb98733f0760_85015631', 'listing');
?>

    <?php }?>

   </body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'carousel'} */
class Block_1789676245ceb9873366ff0_15182196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'carousel' => 
  array (
    0 => 'Block_1789676245ceb9873366ff0_15182196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <img src='images/administration.jpeg' alt="image d'administration" class="d-block w-100 position-relative">
        <?php if (isset($_smarty_tpl->tpl_vars['tabMessage']->value)) {?>
            <div class="container ">
                <div id="messageControl" class="text-center justify-content-md-center centered position-absolute">
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
    <?php
}
}
/* {/block 'carousel'} */
/* {block 'listing'} */
class Block_4413139115ceb98733ab866_69325835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_4413139115ceb98733ab866_69325835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h2 class="text-center text-primary">Ajouter</h2>
        <details>
            <summary class="text-white h3 text-center">Ajouter une Série</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Nom de la Série : </label>
                        <input type="text" name='nomSerie' required="required" class="form-control"> 
                        <br/>
                        <label class="text-white">Catégorie n°1 : </label>
                        <select id='typeCategorie1' name='typeCategorie1' required="required" class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeCategories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getTypeCategorie();?>
 <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getIdCategorie();?>
"> <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getTypeCategorie();?>
 
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label class="text-white">Catégorie n°2 : </label>
                        <select id='typeCategorie2' name='typeCategorie2' required="required" class="form-control">
                        <option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeCategories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getTypeCategorie();?>
 <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getIdCategorie();?>
"> <?php echo $_smarty_tpl->tpl_vars['categorie']->value->getTypeCategorie();?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label class="text-white">Nombre de Saisons : </label>
                        <input type="number" name="nbrSaisons" required="required" value="1" min="1" class="form-control">
                        <br/>
                        <label class="text-white">Date de début :</label>
                        <input type="date" name="dateDebut" required="required" class="form-control">
                        <br/>
                        <label class="text-white">Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label class="text-white">Synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" required="required" rows="5" cols="50"></textarea>
                        <br/>
                        <br/>
                        <label class="text-white">Image Synopsis :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" required="required" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageSynop"/>
                    </div>        
                </div>
                <p class="text-center">
                    <button type="submit" value="créer une série" name="creerSerie" class="btn btn-primary ">Créer</button>
                </p>
                <br/>
            </form>
        </details>
        <details>
            <summary class="h3 text-white text-center">Ajouter un Article</summary>
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 <?php echo $_smarty_tpl->tpl_vars['serie']->value->getIdSerie();?>
"><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label class="text-white">Nom de l'Article :</label>
                        <input type="text" name='nomArticle' required="required" class="form-control"/>
                        <br/>
                        <label class="text-white">Nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' required="required" class="form-control"/>
                        <br/>
                        <label class="text-white">Article :</label>
                        <br/>
                        <textarea  name="articleSerie" required="required" rows="5" cols="50"></textarea>
                        <br/>
                        <label class="text-white">Image Article :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageArticle"/>
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
            <summary class="text-white h3 text-center">Modifier une Série</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Série à modifier : </label>
                        <select type='text' id='idSerie' name='idSerieModif' list='idSerie' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabSeries']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 <?php echo $_smarty_tpl->tpl_vars['serie']->value->getIdSerie();?>
" ><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label class="text-white">Nouveau nom : </label>
                        <input type="text" name='nomSerie' class="form-control"> 
                        <br/>
                        <label class="text-white">Nombre de Saisons : </label>
                        <input type="number" name="nbrSaisons" value="empty" min="1"  class="form-control">
                        <br/>
                        <label class="text-white">Date de début :</label>
                        <input type="date" name="dateDebut" class="form-control">
                        <br/>
                        <label class="text-white">Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label class="text-white">Nouveau synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" rows="5" cols="50" ></textarea>
                        <br/>
                        <br/>
                        <label class="text-white">Nouvelle image :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageSynop"/>
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
            <summary class="h3 text-center text-white">Modifier un Article</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Article à modifier :</label>
                        <select type='text' id='article' name='article' list='article' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'nomArticle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nomArticle']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idArticle'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomArticle'];?>
 / <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomSerie'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idSerie'];?>
"><?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomArticle'];?>
 / <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomSerie'];?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <br/>
                        <label class="text-white">Modifier le nom de l'Article :</label>
                        <input type="text" name='nomArticle' class="form-control"/>
                        <br/>
                        <label class="text-white">Modifier le nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' class="form-control"/>
                        <br/>
                        <label class="text-white">Modifier l'article :</label>
                        <br/>
                        <textarea  name="articleSerie" rows="5" cols="120"></textarea>
                        <br/>
                        <br/>
                        <label class="text-white">Nouvelle image :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageArticle"/>
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
            <summary class="h3 text-white text-center">Supprimer une Série</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Série à supprimer :</label>
                        <select type='text' id='idSerie' name='idSerie' list='idSerie' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabSeries']->value, 'serie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
 <?php echo $_smarty_tpl->tpl_vars['serie']->value->getIdSerie();?>
"><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>

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
            <summary class="h3 text-white text-center">Supprimer un Article</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Article à supprimer :</label>
                        <select type='text' name='article' list='article' class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'nomArticle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nomArticle']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idArticle'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomArticle'];?>
 / <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomSerie'];?>
 <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['idSerie'];?>
"><?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomArticle'];?>
 / <?php echo $_smarty_tpl->tpl_vars['nomArticle']->value['nomSerie'];?>

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
class Block_5232677685ceb98733ee835_00043916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_5232677685ceb98733ee835_00043916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'pagination'} */
/* {block 'listing'} */
class Block_751746185ceb98733f0760_85015631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_751746185ceb98733f0760_85015631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/Netflux/NetfluxFinal.1/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/Applications/MAMP/htdocs/Netflux/NetfluxFinal.1/Smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
                    <h3 class="text-center bordeaux border border-white"><strong><?php echo $_smarty_tpl->tpl_vars['serie']->value->getNomSerie();?>
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
" alt="image du synopsis pour la présentation de la série" class="d-block w-100">
                        </div>
                        <h4 class="text-center bordeaux">Synopsis</h4>
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
}
