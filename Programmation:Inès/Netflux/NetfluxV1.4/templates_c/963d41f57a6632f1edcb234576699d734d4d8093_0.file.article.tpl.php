<?php
/* Smarty version 3.1.33, created on 2019-05-09 18:42:34
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd4749add5965_89519855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963d41f57a6632f1edcb234576699d734d4d8093' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/article.tpl',
      1 => 1557427353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd4749add5965_89519855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3929709705cd4749adbdc05_24459143', 'listing');
?>


</body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'listing'} */
class Block_3929709705cd4749adbdc05_24459143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_3929709705cd4749adbdc05_24459143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomSerie']->value, 'nom');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nom']->value) {
?>
    <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['nom']->value['nomSerie'];?>
</h2>
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
        <details>
            <summary class="text-center text-white">
                <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['nomArticle'];?>
</h3>
                <p>Ecrit le <?php echo $_smarty_tpl->tpl_vars['article']->value['dateArticle'];?>
</h3>
            </summary>
            <br/>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <p class="text-white"><?php echo $_smarty_tpl->tpl_vars['article']->value['articleSerie'];?>
</p>
                        <br/>
                        <p class="text-white text-right">Ecrit par <?php echo $_smarty_tpl->tpl_vars['article']->value['auteurArticle'];?>
</p>
                    </div>
                </div>
            </div>
        </details>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br/>  
<?php
}
}
/* {/block 'listing'} */
}
