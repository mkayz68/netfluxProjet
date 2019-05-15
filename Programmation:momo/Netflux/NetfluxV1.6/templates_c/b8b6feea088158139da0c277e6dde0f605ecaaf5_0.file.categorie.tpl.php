<?php
/* Smarty version 3.1.33, created on 2019-05-14 10:01:23
  from '/Applications/MAMP/htdocs/NetfluxV1.4/template/categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cda91f3473349_47640072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b6feea088158139da0c277e6dde0f605ecaaf5' => 
    array (
      0 => '/Applications/MAMP/htdocs/NetfluxV1.4/template/categorie.tpl',
      1 => 1557568457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cda91f3473349_47640072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8276238605cda91f33c71b1_10594236', 'listing');
?>


</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'listing'} */
class Block_8276238605cda91f33c71b1_10594236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_8276238605cda91f33c71b1_10594236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/NetfluxV1.4/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

        <div class="container">
            <div class="row justify-content-start"> 
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
                            <a class="btn btn-outline-light btn-block" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getArticleLink($_smarty_tpl->tpl_vars['serie']->value->getIdSerie());?>
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
    <?php
}
}
/* {/block 'listing'} */
}
