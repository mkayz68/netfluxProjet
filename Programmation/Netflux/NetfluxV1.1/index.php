<?php
    require ('class/SerieManager.php');
    require ('Smarty/libs/Smarty.class.php');

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Netflux;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $smarty = new Smarty();
    
    $header = '
                <nav class="d-block w-100 d-flex">
                    <ul class="nav justify-content-start mr-auto p-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i
                                class="fas fa-bars fa-1x"></i></a>
                            <div class="dropdown-menu">
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
                </nav>  
                
        
                <div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel" data-interval=60000>
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                      <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                      <li data-target="#video-carousel-example" data-slide-to="1"></li>
                      <li data-target="#video-carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                       <div class="SliderTexte ">
                            <h1>Nouvelles Séries en Exlusivitées sur NETFLUX</h1>
                      </div>
                      <div class="carousel-item active">
                            <div class="SliderTitre">
                                <h2>"Game Of Throne"</h2>
                            </div>
                        <video class="video-fluid d-block w-100" autoplay muted loop>
                          <source src="images/got.mp4" type="video/mp4" />
                        </video>
                      </div>
                      <div class="carousel-item">
                            <div class="SliderTitre">
                                <h2>"La Casa De Papel"</h2>
                            </div>
                        <video class="video-fluid d-block w-100" autoplay muted loop>
                          <source src="images/LaCasaDePapel.mp4" type="video/mp4" />
                        </video>
                      </div>
                      <div class="carousel-item">
                            <div class="SliderTitre">
                                <h2>"The Walking Dead"</h2>
                            </div>
                        <video class="video-fluid d-block w-100" autoplay muted loop>
                          <source src="images/TheWalkingDead.mp4" type="video/mp4" />
                        </video>
                      </div>
                    </div>
                </div>';

    $smarty->assign('Header', $header);

    $query = $bdd->prepare("SELECT * FROM Serie");
    $query->execute();

    $list_news = array();
    $i = 0;
    while($data = $query->fetch())
    {
        $list_news[$i]['idSerie'] = $data['idSerie'];
        $list_news[$i]['nomSerie'] = $data['nomSerie'];
        $list_news[$i]['dateDebut'] = $data['dateDebut'];
        $list_news[$i]['nbrSaisons'] = $data['nbrSaisons'];
        $i++;
    }
    $smarty->assign('list_news', $list_news);

    $smarty->display('template/netflux.tpl');
?>