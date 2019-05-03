<?php
/* Smarty version 3.1.33, created on 2019-05-03 13:29:06
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccc4222667381_82804797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963d41f57a6632f1edcb234576699d734d4d8093' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/article.tpl',
      1 => 1556890143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccc4222667381_82804797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_416946495ccc4222655b62_70852799', 'listing');
?>


</body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'listing'} */
class Block_416946495ccc4222655b62_70852799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_416946495ccc4222655b62_70852799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <details>
            <summary class="text-center text-white"><h2><?php echo $_smarty_tpl->tpl_vars['article']->value['nomArticle'];?>
</h2></summary>
            <p class="text-center text-white"><?php echo $_smarty_tpl->tpl_vars['article']->value['articleSerie'];?>
</p>
        </details>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'listing'} */
}
