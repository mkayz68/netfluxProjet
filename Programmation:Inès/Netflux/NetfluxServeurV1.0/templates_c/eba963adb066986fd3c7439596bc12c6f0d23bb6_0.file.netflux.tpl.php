<?php
/* Smarty version 3.1.33, created on 2019-05-18 09:37:40
  from '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/netflux.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdfd264a81850_86554038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eba963adb066986fd3c7439596bc12c6f0d23bb6' => 
    array (
      0 => '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/netflux.tpl',
      1 => 1558172240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/header.tpl' => 1,
    'file:template/footer.tpl' => 1,
  ),
),false)) {
function content_5cdfd264a81850_86554038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
           
    <br/>
    <br/> 

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16666926435cdfd264a4af53_34612641', 'listing');
?>

    <?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17018588605cdfd264a7df09_50521143', "pagination");
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3384855635cdfd264a80914_94509960', "javaScriptAdditionnel");
?>


<?php $_smarty_tpl->_subTemplateRender('file:template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
/* {block 'listing'} */
class Block_16666926435cdfd264a4af53_34612641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_16666926435cdfd264a4af53_34612641',
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
                    <div class="col-4 border border-white bg-dark">
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
class Block_17018588605cdfd264a7df09_50521143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_17018588605cdfd264a7df09_50521143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value;?>
&precedente=1">Précédent</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabPagination']->value, 'pagination');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pagination']->value) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value;?>
&suivante=1">Suivant</a></li>
            </ul>
        </nav>
    <?php
}
}
/* {/block "pagination"} */
/* {block "javaScriptAdditionnel"} */
class Block_3384855635cdfd264a80914_94509960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javaScriptAdditionnel' => 
  array (
    0 => 'Block_3384855635cdfd264a80914_94509960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "javaScriptAdditionnel"} */
}
