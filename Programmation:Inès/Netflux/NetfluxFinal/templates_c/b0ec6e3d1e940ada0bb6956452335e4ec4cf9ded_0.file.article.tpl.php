<?php
/* Smarty version 3.1.33, created on 2019-05-22 08:20:33
  from '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce50651697787_66977927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0ec6e3d1e940ada0bb6956452335e4ec4cf9ded' => 
    array (
      0 => '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/article.tpl',
      1 => 1558507577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce50651697787_66977927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19615303085ce50651668fb6_83307518', 'listing');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16896528925ce50651686fb5_74902212', 'pagination');
?>


<?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5346375055ce506516880d9_31692370', 'listing');
?>

<?php }?>

</body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'listing'} */
class Block_19615303085ce50651668fb6_83307518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_19615303085ce50651668fb6_83307518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageRedim('Article',500,$_smarty_tpl->tpl_vars['nom']->value['nomSerie']);?>
">
    </div>
    <br/>
    <br/>
    <div class="row justify-content-center">
        <div class= "col-6 border border-danger">
            <h3 class="text-center text-white">Synopsis</h3>
            <br/>
            <p class="text-white"><?php echo $_smarty_tpl->tpl_vars['nom']->value['synopSerie'];?>
</p>
        </div>
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
class Block_16896528925ce50651686fb5_74902212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_16896528925ce50651686fb5_74902212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'pagination'} */
/* {block 'listing'} */
class Block_5346375055ce506516880d9_31692370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_5346375055ce506516880d9_31692370',
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
" class="d-block w-100">
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
