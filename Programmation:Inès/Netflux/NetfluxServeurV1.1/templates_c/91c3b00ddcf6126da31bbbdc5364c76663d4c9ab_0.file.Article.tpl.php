<?php
/* Smarty version 3.1.33, created on 2019-05-01 12:33:14
  from '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/Article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc9920abbbef2_26285438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91c3b00ddcf6126da31bbbdc5364c76663d4c9ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/Netflux/NetfluxV01/template/Article.tpl',
      1 => 1556706775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc9920abbbef2_26285438 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <title>Netflux</title>
        </head>
        
        <body>

            <nav class="d-block w-100 d-flex position-absolute text-white">
                <ul class="nav justify-content-start mr-auto p-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i
                            class="fas fa-bars fa-1x text-white"></i></a>
                        <div class="dropdown-menu border border-white text-white bg-dark">
                            <h6 class="dropdown-header">Gérer les Articles :</h6>
                            <a class="dropdown-item" href="#">-Ajouter un Article</a>
                            <a class="dropdown-item" href="#">-Modifier un Article</a>
                            <a class="dropdown-item" href="#">-Supprimer un Article</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Catégorie de Série :</h6>
                            <a class="dropdown-item" href="#">-Action</a>
                            <a class="dropdown-item" href="#">-Aventure</a>
                            <a class="dropdown-item" href="#">-Fantastique</a>
                            <a class="dropdown-item" href="#">-Horreur</a>
                            <a class="dropdown-item" href="#">-Thriller</a>
                            <a class="dropdown-item" href="#">-Comédie</a>
                            <a class="dropdown-item" href="#">-Drame</a>
                            <a class="dropdown-item" href="#">-Romance</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Formulaire :</h6>
                            <a class="dropdown-item" href="#">-Prise de contact</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav justify-content-end p-2">
                    <li class="nav-item">
                        <form class="navbar-form navbar-right" role="search"> 
                            <div class="input-group"> 
                                <input type="text" class="form-control" placeholder="Search" /> 
                                <span class="input-group-btn"> 
                                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span><i class="fas fa-search"></i></button> 
                                </span> 
                            </div> 
                        </form> 
                    </li>
                </ul>
            </nav>  <?php }
}
