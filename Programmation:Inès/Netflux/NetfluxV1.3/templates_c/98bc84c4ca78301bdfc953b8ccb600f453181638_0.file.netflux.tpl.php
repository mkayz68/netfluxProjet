<?php
/* Smarty version 3.1.33, created on 2019-05-03 12:48:07
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/netflux.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccc3887b490f7_22774668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98bc84c4ca78301bdfc953b8ccb600f453181638' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/netflux.tpl',
      1 => 1556887681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/header.tpl' => 1,
  ),
),false)) {
function content_5ccc3887b490f7_22774668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
           
            
    <h1 class="text-center text-white">Séries Au Top</h1>
    <br/>
    <br/> 

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7310977415ccc3887b08942_17321053', 'listing');
?>

    </body>
</html><?php }
/* {block 'listing'} */
class Block_7310977415ccc3887b08942_17321053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_7310977415ccc3887b08942_17321053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/Netflux/NetfluxV01/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabCategoriserSerie']->value, 'categorie');
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabImages']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['image']->value->getIdSerie() == $_smarty_tpl->tpl_vars['serie']->value->getIdSerie()) {?>
                                    <div>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrlSynop();?>
" class="d-block w-100">
                                    </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
