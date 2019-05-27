<?php
/* Smarty version 3.1.33, created on 2019-05-26 17:59:04
  from '/Applications/MAMP/htdocs/Netflux/NetfluxFinal.1/template/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cead3e8a75e85_59090701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea32aa8e1d643fd2b8b52735a4747fe8a20baf8' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxFinal.1/template/article.tpl',
      1 => 1558893372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cead3e8a75e85_59090701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if (empty($_smarty_tpl->tpl_vars['titreSerie']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3952236325cead3e8a1b2f0_13502099', 'listing');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2055141385cead3e8a538a4_54161831', 'pagination');
?>


<?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15174300635cead3e8a55925_54448283', 'listing');
?>

<?php }?>

</body>
</html>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/netflux.tpl");
}
/* {block 'listing'} */
class Block_3952236325cead3e8a1b2f0_13502099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_3952236325cead3e8a1b2f0_13502099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/Netflux/NetfluxFinal.1/Smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomSerie']->value, 'nom');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nom']->value) {
?>
    <h2 class="text-center text-white"><?php echo $_smarty_tpl->tpl_vars['nom']->value['nomSerie'];?>
</h2>
    <br/>
    <?php if (!empty($_smarty_tpl->tpl_vars['tabMessage']->value)) {?>
            <div class="container">
                <div class="row justify-content-md-center ">
                    <p class="text-danger text-center">
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
                <br/>
            </div>
        <?php }?>
    <div class="row justify-content-center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageRedim('Article',500,$_smarty_tpl->tpl_vars['nom']->value['nomSerie']);?>
" alt="image de l'article pour la présentation de la série au détail">
    </div>
    <br/>
    <br/>
    <div class="row justify-content-center blockArticle">
        <div class= "col-6">
            <h3 class="text-center bordeaux">Synopsis</h3>
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
            <div class="row justify-content-md-center border rounded blockArticle">
                <div class="col-md-auto">
                    <br/>
                    <br/>
                    <details>
                        <summary class="text-center text-white">
                            <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['nomArticle'];?>
</h3>
                            <p class="bordeaux">Ecrit le <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['dateArticle'],"%d/%m/%Y");?>
</h3>
                        </summary>
                        <br/>
                        <p class="text-white"><?php echo $_smarty_tpl->tpl_vars['article']->value['articleSerie'];?>
</p>
                        <br/>
                        <p class="bordeaux text-right">Ecrit par <?php echo $_smarty_tpl->tpl_vars['article']->value['auteurArticle'];?>
</p>
                        <br/>
                        <details class="text-center">
                            <summary class="btn btn-primary">Modifier</summary>
                            <br/>
                            <form action="" method="POST">
                                <div class="row justify-content-lg-center">
                                    <div class="form-group">
                                        <input type="hidden" name="idArticle" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['idArticle'];?>
">
                                        <input type="hidden" name="idSerie" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['idSerie'];?>
">
                                        <label class="text-white">Modifier le nom de l'Article :</label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['nomArticle'];?>
" name='nomArticle' class="form-control"/>
                                        <br/>
                                        <label class="text-white">Modifier le nom de l'Auteur :</label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['auteurArticle'];?>
" name='auteurArticle' class="form-control"/>
                                        <br/>
                                        <label class="text-white">Modifier l'article :</label>
                                        <br/>
                                        <textarea  name="articleSerie" rows="5" cols="65"><?php echo $_smarty_tpl->tpl_vars['article']->value['articleSerie'];?>
</textarea>
                                        <br/>
                                    </div>
                                </div>
                                <p class="text-center">
                                    <button type="submit" name="modifierArticle" class="btn btn-primary">Valider les Modifications</button>
                                </p>
                            </form>
                        </details> 
                        <br/>
                        <br/>   
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
class Block_2055141385cead3e8a538a4_54161831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_2055141385cead3e8a538a4_54161831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'pagination'} */
/* {block 'listing'} */
class Block_15174300635cead3e8a55925_54448283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'listing' => 
  array (
    0 => 'Block_15174300635cead3e8a55925_54448283',
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
