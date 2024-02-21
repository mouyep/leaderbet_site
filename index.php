<?php
    header('Content-Type:text/html; charset=utf-8');
    header('Access-Control-Allow-Origin: http://prono.leaderbet.cm');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="./icons/dollar.png"/>
    <title>LeaderBet</title>
    <!-- Bootstrap core CSS -->
    <link href="./btrp/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="index_responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements
    and media queries -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        

        <header class="row page-header  entete">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="row">
                    <div class="carousel-header carousel slide col-md-offset-2 col-md-8 col-sm-8">

                        <div id="carousel" class="carousel slide">

                            <div class="carousel-inner">


                                <div class="item active">
                                    <p class="info_header1">Pariez responsable</p>
                                </div>
                                <div class="item">
                                    <p class="info_header2">Interdit au moins de 21 ans</p>
                                </div>
                                <div class="item">
                                    <p class="info_header3">En cas de soucis contactez le 00237693329888</p>
                                </div>
                                <div class="item">
                                    <p class="info_header4">Leaderbet le numéro1 dans les paris et prono hippiques au cameroun</p>
                                </div>

                            </div>
                        </div>

                    <div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="row"></div>

                    <div class="col-md-6 col-sm-6">
                        <p class="logo pull-left">
                            <h1 class="pull-left" style="color:yellow">LeaderBet</h1>
                        </p>
                    </div>

                    
                    <div class="col-md-6 col-sm-6 input-group" style="padding:20px 20px">

                        <!-- <span class="input-group-btn">
                            <button type="button" class="btn btn-success">Rechercher
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control"/> -->
                        <span class="input-group-btn" style="color:yellow;">
                            
                            <button class="btn btn-danger  pull-right" type="button">Connexion
                                <span class="glyphicon glyphicon-off"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            
        </header>

        <!-- FENETRES MODALES DEUBUT-->
        <!-- ---------------------------------------------------------------------------------------------------->
        <div class="modal" id="list_prono">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h3 class="modal-title">Commentaires et pronostiques</h3>
                    </div>
                    <div class="modal-body">
                        <div class="message">
                            <h4 style="color:orange"></h4>
                        </div>
                        <div class="id_prono">
                            <h4>ID du pronostique</h4>  <span slyle="font-size=1.2em"></span>
                        </div>
                        <div class="comment_zone">
                            <h4>COMMENTAIRE</h4>
                            <p class="commentaire_prono" style="font-size:1.2em;">Course facile</p>
                        </div>
                        <div class="prono_zone">
                            <div class="quinte">
                                <h4>Quinté</h4>&nbsp <span>x-x-x-x-x</span>
                            </div>
                            <div class="quarte">
                                <h4>Quarté</h4>&nbsp <span>x-x-x-x</span>
                            </div>
                            <div class="tierce">
                                <h4>Tiercé</h4>&nbsp <span>x-x-x</span>
                            </div>
                            <div class="couple">
                                <h4>Couplé</h4>&nbsp <span>x-x</span>
                            </div>
                            <div class="dsurq">
                                <h4>2 sur 4</h4>&nbsp <span>x-x</span>
                            </div>
                            <div class="coupsur">
                                <h4>Coup sur</h4>&nbsp <span>x</span>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- ---------------------------------------------------------------------------------------------------->

        <div class="container milieu">

            <div class="row">

                <div class="col-lg-12">

                    <nav class="navbar navbar-default">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">

                                <div class="row">
                                    <ul class="nav navbar-nav" style="width:100%;">

                                        
                                        <div class="row">

                                            <li class="dropdown col-md-2"> 
                                                <a href="#" data-toggle="dropdown">Accueil<b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Se connecter</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Support</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blog</a>
                                                    </li>
                                                    
                                                </ul> 
                                            </li>

                                            
                                            <li class="dropdown col-md-2"> 
                                                <a href="#" data-toggle="dropdown">Le direct<b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Chantily</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Paris-vincenne</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Lyon parilly</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Auteuil</a>
                                                    </li>
                                                    
                                                </ul> 
                                            </li>

                                            
                                            <li class="dropdown col-md-2"> 
                                                <a href="#" data-toggle="dropdown">Programme et résultats<b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Quinté+</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Quarté+</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Tiercé</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2 Sur 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Couplé</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">multi</a>
                                                    </li>
                                                    
                                                </ul> 
                                            </li>

                                            
                                            
                                            <li class="dropdown col-md-2"> 
                                                <a href="#" data-toggle="dropdown">Pronostiques<b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Quinté</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Quarté</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Tiercé</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2 Sur 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Couplé</a>
                                                    </li>
                                                    
                                                </ul> 
                                            </li>

                                            
                                            
                                            <li class="dropdown col-md-2"> 
                                                <a href="#" data-toggle="dropdown">Actualités<b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Les hippodromes</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Les grands prix</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Les écuries</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Les derniers classements</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Conseils de jeu</a>
                                                    </li>
                                                    
                                                </ul> 
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form class="navbar-form pull-right">
                                    
                                    <input type="text" style="width:auto" class="input-md form-control pull-left"
                                            placeholder="Recherche">

                                    <button type="submit" class="btn btn-success btn-md pull-left"><span
                                            class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                                        
                                </form>
                            </div>
                        </div>        
                    </nav>
                </div>
            </div>

            

            <div class="row" style="width:auto;">
            
                <div class="carousel-body carousel slide col-lg-6 col-lg-offset-3 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">

                    <div id="carousel" class="carousel carousel-body slide">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-body" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-body" data-slide-to="1"></li>
                            <li data-target="#carousel-body" data-slide-to="2"></li>
                            <li data-target="#carousel-body" data-slide-to="3"></li>
                            <li data-target="#carousel-body" data-slide-to="4"></li>
                        </ol>

                        
                       
                    <div class="carousel-inner">
                        <div class="item active">

                            <a href="#">
                                <img src="./images/img1.jpg" alt="une course de haie" />
                                <h3 class="carousel-caption">Voir la video</h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="./images/img2.jpg" alt="une course de haie" />
                                <h3 class="carousel-caption">Voir la video</h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="./images/img3.jpg" alt="une course de haie" />
                                <h3 class="carousel-caption">Voir la video</h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="./images/img4.jpg" alt="une course de haie" />
                                <h3 class="carousel-caption">Voir la video</h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="./images/img5.jpg" alt="une course de haie" />
                                <h3 class="carousel-caption">Voir la video</h3>
                            </a>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-body" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-body" data-slide="next">
                        <span class="icon-next"></span>
                    </a>

                </div>
            </div>
    
        </div>

        <div class="container">

            <section class="publish row">

                <article class="col-lg-9 col-md-9 col-sm-12">

                    <div class="row">

                        <div class="col-lg-10 col-lg-offset-2">

                            <div class="row" id="typejeu">
                                <div class="col-lg-offset-2 col-lg-8 col-md-8">
                                    <h1></h1>
                                </div>
                            </div>

                            <div class="row" id="nom_course">
                                <div class="col-lg-offset-2 col-lg-8 col-md-8">
                                    <h3 style='font-weight:bolder; text-transform:uppercase;'></h3> &nbsp<span style='color:orange;'></span>
                                </div>
                            </div>

                            
                            <div class="row" id="time">
                                <div class="col-lg-offset-2 col-lg-8 col-md-8">
                                    <h3 style='font-weight:bolder; text-transform:uppercase;'></h3> &nbsp<span style='color:yellow;'></span>
                                </div>
                            </div>

                            <div class="row" id="titre">

                                <div class="col-lg-offset-2 col-lg-8 col-md-8">
                                    <h2 style="color:greenyellow;">LA SELECTION DU JOUR</h2>
                                </div>
                            </div>


                            <div class="row" id="main">

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_1x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_1 display_none">1</h4>

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_2x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_2 display_none">2</h4>

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_3x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_3 display_none">3</h4>

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_4x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_4 display_none">4</h4>

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5 display_none">5</h4>

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5 display_none">6</h4>

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5 display_none">7</h4>

                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5x">click to see</h4>
                                <h4 class="col-lg-2 col-md-2 col-sm-7 day_selection_5 display_none">8</h4>

                                
                            </div>


                            <div class="row" id="coupsur">

                                <h2 style="color:tomato;">UN COUP SUR</h2>
                                <h4 class="col-lg-offset-2 col-lg-8 col-md-8 coup_sur_1x">click to see</h4>
                                <h4 class="col-lg-offset-2 col-lg-8 col-md-8 col-md-offset-2 coup_sur_1 display_none">11</h4>
                            </div>

                            <div class="row" id="couple">

                                <h2 style="color:aqua;">UN COUPLE</h2>
                                <h4 class="col-lg-offset-2 col-lg-4 col-md-4 couple_1x">click to see</h4>
                                <h4 class="col-lg-offset-2 col-lg-4 col-md-4 col-md-offset-2 couple_1 display_none">11</h4>
                                <h4 class="col-lg-4 col-md-4 couple_2x">click to see</h4>
                                <h4 class="col-lg-4 col-md-4 couple_2 display_none">9</h4>
                            </div>

                            
                            <div class="row" id="dsurq">

                                <h2 style="color:rgb(128,128,255);">2 SUR 4</h2>
                                <h4 class="col-lg-offset-2 col-lg-4 col-md-4 2sur4_1x">click to see</h4>
                                <h4 class="col-lg-offset-2 col-lg-4 col-md-4 col-md-offset-2 2sur4_1 display_none">1</h4>
                                <h4 class="col-lg-4 col-md-4 2sur4_2x">click to see</h4>
                                <h4 class="col-lg-4 col-md-4 2sur4_2 display_none">10</h4>
                            </div>

                            <div class="row" id="tierce">

                                <h2 style="color:rgb(40,240,108);">UN TIERCE</h2>
                                <h4 class="col-lg-offset-2 col-lg-3 col-md-3 tierce_1x">click to see</h4>
                                <h4 class="col-lg-offset-2 col-lg-3 col-md-3 tierce_1 display_none">5</h4>
                                <h4 class="col-lg-3 col-md-3 tierce_2x">click to see</h4>
                                <h4 class="col-lg-3 col-md-3 tierce_2 display_none">6</h4>
                                <h4 class="col-lg-3 col-md-3 tierce_3x">click to see</h4>
                                <h4 class="col-lg-3 col-md-3 tierce_3 display_none">8</h4>
                            </div>

                            <div class="row" id="commentaire">

                                <h3 style="color:white;">LE COMMENTAIRE DE L'EXPERT</h3>
                                <p class="col-lg-offset-2 col-lg-10 col-md-10" style="color:yellow;">
                                    Le cheval n°2 est plutôt bien parti, vu qu'il est allégé de 03 kilos, qu'il est chaussé et chaussé et 
                                    qu'il a fini 3e à sa derniere dont la référence est nettement supérieure à celle actuelle

                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="row history_">

                        <div class="table-responsive col-md-12">

                            <table class="table table-bordered table-striped table-condensed list_prono" style="border:greenyellow solid 2px;">
                                    <caption>
                                        <h4 style="color:rgb(40,240,108);">Les 30 derniers pronostiques</h4>
                                    </caption>
                                    <thead style="background-color:green; color:white">
                                        <tr>
                                            <th>ID</th>
                                            <th>Type Jeu</th>
                                            <th>Intitule</th>
                                            <th>Reference</th>
                                            <th>Lieu</th>
                                            <th>Valeur_Prix</th>
                                            <th>Type_chevaux</th>
                                            <th>Nb_participants</th>
                                            <th>Liste_non_partants</th>
                                            <th>Pronostic</th>
                                            <th>Arrivee</th>
                                            <th>Date</th>
                                            <th>Heure</th>
                                            <th>Commentaire</th>
                                            <th style="color:red; visibility:hidden;">Del<span class='glyphicon glyphicon-remove'></span></th>
                                            <th style="color:greenyellow; visibility:hidden;">Modif<span class='glyphicon glyphicon-pencil'></span></th>
                                        </tr>

                                    </thead>

                                    <tbody id="historique_prono">
                                        
                                    </tbody>
                            </table>
                                        
                        </div>

                    </div>


                </article>

                <aside class="contacts col-lg-3 col-md-3 col-sm-12" style="background-color:rgba(192,192,192,0.3);">

                    <div class="row">
                        <div class="col-lg-8  col-lg-offset-4 col-md-8 col-sm-2 col-xs-2">

                            <a href="https://facebook.com" class="pull-left">
                                <img src="./icons/facebook.png" class="social_ntw"/>
                                <span>Follow us</span>
                            </a>
                        </div>

                        <div class="col-lg-8 col-lg-offset-4 col-md-8  col-sm-2 col-xs-2">
                            <a href="https://youtube.com" class="pull-left">
                                <img src="./icons/youtube.png" class="social_ntw"/>
                                <span>Follow us</span>
                            </a>
                        </div>

                        <div class="col-lg-8 col-lg-offset-4 col-md-8  col-sm-2 col-xs-2">
                            <a href="https://mail.google.com" class="pull-left">
                                <img src="./icons/mail.png" class="social_ntw"/>
                                <span>Mail us</span>
                            </a>
                        </div>

                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-sm-2 col-xs-2">
                            <a href="https://web.whatsapp.com" class="pull-left">
                                <img src="./icons/whatsapp.png" class="social_ntw1"/>
                                <span>Whatsapp us</span>
                            </a>
                        </div>

                        <div class="col-lg-8 col-lg-offset-4 col-md-8 col-sm-2 col-xs-2">
                            <a href="#" class="pull-left">
                                <img src="./icons/support.png" class="social_ntw"/>
                                <span>Support</span>
                            </a>
                        </div>

                    </div>

                </aside>

            </section>

        </div>

        <footer id="footer row">
            <div id="copyright col-lg-8 col-lg-offset-2" style="margin-top:64px";>
                <p>copyright Tous droits réservé - LeaderBet 2023</p>
            </div>
            <div id="powered col-lg-6 col-lg-offset-4" style="margin-top:64px;">
                <p><a href="https://site.ramat-services.com", target="_blank">Powered by Ramat Services</a></p>
            </div>

            <div id = "up col-lg-2 col-lg-offset-10">
                <a href="#" class="pull-right">
                    <img src="./images/test/up-chevron.png" alt="scroll-up"/>
                </a>
            </div>

        </footer>

       
        



        <script src="./btrp/dist/js/jquery-3.7.0.js"></script>
        <script src="./btrp/dist/js/bootstrap.min.js"></script>
        <script src="./index_responsive.js"></script>
        <script src="./admin_responsive.js"></script>
        <script>
            (function(){
                $(".carousel-body").carousel();
                $(".carousel-header").carousel();
            })();
        </script>
    </body>

</html>
