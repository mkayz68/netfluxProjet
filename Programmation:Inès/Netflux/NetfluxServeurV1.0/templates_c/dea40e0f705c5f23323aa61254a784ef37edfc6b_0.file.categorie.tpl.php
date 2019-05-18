<?php
/* Smarty version 3.1.33, created on 2019-05-16 17:35:50
  from '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd9f76d711c5_23486617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea40e0f705c5f23323aa61254a784ef37edfc6b' => 
    array (
      0 => '/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/template/categorie.tpl',
      1 => 1558024549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd9f76d711c5_23486617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15653379505cdd9f76d2e637_34896967', 'listing');
?>


    <?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4052549025cdd9f76d6d431_33655277', "pagination");
?>

    <?php }?>

</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'listing'} */
class Block_15653379505cdd9f76d2e637_34896967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_15653379505cdd9f76d2e637_34896967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/vhosts/ccidoo.fr/netflux.ccidoo.fr/Smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeCat']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
            <h2 class= 'text-center text-white'><?php echo $_smarty_tpl->tpl_vars['cat']->value->getTypeCategorie();?>
</h2>
            <br/>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageRedimSynop(200,$_smarty_tpl->tpl_vars['serie']->value->getNomSerie());?>
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
class Block_4052549025cdd9f76d6d431_33655277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_4052549025cdd9f76d6d431_33655277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="categorie.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value;?>
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
                <li class="page-item"><a class="page-link" href="categorie.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value;?>
&suivante=1">Suivant</a></li>
            </ul>
        </nav>
    <?php
}
}
/* {/block "pagination"} */
}
