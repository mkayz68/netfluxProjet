<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Netflux</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js "></script>
        </head>
        
        <body class="bg-secondary">

            <nav class="d-block w-100 d-flex position-absolute text-white">
                <ul class="nav justify-content-start mr-auto p-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i
                            class="fas fa-bars fa-1x text-white"></i></a>
                        <div class="dropdown-menu border border-white text-white bg-dark">
                            <h6 class="dropdown-header">Gérer les Articles :</h6>
                            <a class="dropdown-item" href="{$link->getAdmin()}">-Ajouter un Article</a>
                            <a class="dropdown-item" href="#">-Modifier un Article</a>
                            <a class="dropdown-item" href="#">-Supprimer un Article</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Catégorie de Série :</h6>
                            {foreach from=$typeCategories item=$categorie}
                                <a class="dropdown-item" href="{$link->getSerieParCat($categorie->getIdCategorie())}">-{$categorie->getTypeCategorie()}</a>
                            {/foreach}
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Formulaire :</h6>
                            <a class="dropdown-item" href="{$link->getContact()}">-Prise de contact</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav justify-content-end p-2">
                    <li class="nav-item">
                        <form class="navbar-form navbar-right" role="search"> 
                            <div class="input-group"> 
                                <input id="recherche-series" type="text" class="form-control" placeholder="Séries, articles ..." /> 
                                <span class="input-group-btn"> 
                                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span><i class="fas fa-search"></i></button> 
                                </span> 
                            </div> 
                        </form> 

                        <div id="recherche-resultat"></div> <!-- C'est ici que nous aurons nos résultats de notre recherche -->
                    </li>
                </ul>
            </nav>  
            
            
            <div id="video-carousel-example" class="carousel slide carousel-fade position-relative" data-ride="carousel" data-interval=60000>
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                  <li data-target="#video-carousel-example" data-slide-to="1"></li>
                  <li data-target="#video-carousel-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                   <div class="sliderTitre d-none d-md-block row justify-content-md-center">
                        <h1>Nouvelles Séries en Exlusivitées sur NETFLUX</h1>
                  </div>
                  <div class="carousel-item active">
                        <div class="sliderTexte">
                            <h2>"Game Of Throne"</h2>
                        </div>
                    <video class="video-fluid d-block w-100" autoplay muted loop>
                      <source src="images/got.mp4" type="video/mp4" />
                    </video>
                  </div>
                  <div class="carousel-item">
                        <div class="sliderTexte">
                            <h2>"La Casa De Papel"</h2>
                        </div>
                    <video class="video-fluid d-block w-100" autoplay muted loop>
                      <source src="images/LaCasaDePapel.mp4" type="video/mp4" />
                    </video>
                  </div>
                  <div class="carousel-item">
                        <div class="sliderTexte">
                            <h2>"The Walking Dead"</h2>
                        </div>
                    <video class="video-fluid d-block w-100" autoplay muted loop>
                      <source src="images/TheWalkingDead.mp4" type="video/mp4" />
                    </video>
                  </div>
                </div>
          </div>

       

  




<script language="javascript">
// dollar = jquery/ajax
$(document).ready(function(){
  $('#recherche-series').keyup(function(){
    $('#recherche-resultat').html('');

    var series = $(this).val();

    if(series != ""){
      $.ajax({
        type: 'GET',
        url: 'recherche_series.php',
        data: 'series=' + encodeURIComponent(series),
        success: function(data){
          if(data != ""){
            $('#recherche-resultat').append(data);
          }else{
            document.getElementById('recherche-resultat').innerHTML = "Aucune série"
          }
        }
      });
    }
  });
});

</script>
</body>
