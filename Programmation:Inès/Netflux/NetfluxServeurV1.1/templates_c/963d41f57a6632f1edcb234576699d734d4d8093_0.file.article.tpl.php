<?php
/* Smarty version 3.1.33, created on 2019-05-16 11:06:52
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd444c9c6899_06400217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963d41f57a6632f1edcb234576699d734d4d8093' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/article.tpl',
      1 => 1558004810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd444c9c6899_06400217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10133649605cdd444c97ae46_13829153', 'listing');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2466997735cdd444c99cc03_88200607', 'pagination');
?>


<?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20234300415cdd444c99ec99_68123161', 'listing');
?>

<?php }?>

</body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'listing'} */
class Block_10133649605cdd444c97ae46_13829153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_10133649605cdd444c97ae46_13829153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/Netflux/NetfluxV01/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomSerie']->value, 'nom');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nom']->value) {
?>
    <h2 class="text-center text-white"><?php echo $_smarty_tpl->tpl_vars['nom']->value['nomSerie'];?>
</h2>
    <br/>
    <div class="row justify-content-center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageRedimArticle(500,$_smarty_tpl->tpl_vars['nom']->value['nomSerie']);?>
">
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <div class="container">
                <div class="row justify-content-md-center">
                    <div class= "col-6 border">
                        <h3 class="text-center">Synopsis</h3>
                        <br/>
                        <p><?php echo $_smarty_tpl->tpl_vars['article']->value['synopSerie'];?>
</p>
                    </div>
                    <br/>
                    <br/>
                    <div class="col-md-auto ">
                        <br/>
                        <br/>
                        <details>
                            <summary class="text-center text-white">
                                <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['nomArticle'];?>
</h3>
                                <p>Ecrit le <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['dateArticle'],"%d/%m/%Y");?>
</h3>
                            </summary>
                            <br/>
                            <p class="text-white"><?php echo $_smarty_tpl->tpl_vars['article']->value['articleSerie'];?>
</p>
                            <br/>
                            <p class="text-white text-right">Ecrit par <?php echo $_smarty_tpl->tpl_vars['article']->value['auteurArticle'];?>
</p>      
                        </details>
                    </div>
                </div>
            </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br/>
    <br/> 
<?php
}
}
/* {/block 'listing'} */
/* {block 'pagination'} */
class Block_2466997735cdd444c99cc03_88200607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_2466997735cdd444c99cc03_88200607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'pagination'} */
/* {block 'listing'} */
class Block_20234300415cdd444c99ec99_68123161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_20234300415cdd444c99ec99_68123161',
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
}
