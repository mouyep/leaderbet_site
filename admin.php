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
    <link href="admin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements
    and media queries -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    </head>

    <body style="background-color:white;">
       
        <header class="row page-header  entete">

            <div class="row">
                <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h1 class="pull-left">
                        <img src="images/logo.jpg"></img>
                        <span style="color:green">Tawa</span><span style="color:yellow">Prono</span>
                    </h1>
                </div>
                <div class="defil_zone col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <span class="" style="font-size: 1.6em;"><marquee style="color:rgb(128,64,0);">Bienvenue chez vous monsieur Célestin, nous espérons que vous allez bien!</marquee></span>
                </div>

                <div class="col-lg-4 col-md-4">
                    <p><img src="images/cheval.jpg" class="header_img" style="height:150px;"></img></p>
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
         <div class="modal" id="delete_prono">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h3 class="modal-title">Voulez Vous Supprimer ce pronostique..?</h3>
                    </div>
                    <div class="modal-body">
                        
                        <div class="message">
                                <h4 style="color:orange"></h4>
                        </div>
                        <div class="id_prono">
                            <h4>ID du pronostique</h4>  <span slyle="font-size=1.2em"></span>
                        </div>
                        <div class="reference_prono">
                            <h4>Reference</h4>  <span slyle="font-size=1.2em"></span>
                        </div>
                        <div class="pronostique">
                            <h4>pronostique en 8</h4>  <span slyle="font-size=1.2em">x-x-x-x-x-x-x-x</span>
                        </div>
                        <div class="date">
                            <h4>Date</h4>  <span slyle="font-size=1.2em">2023-05-19</span>
                        </div>
                        <div class="heure">
                            <h4>Heure</h4>  <span slyle="font-size=1.2em">12:29</span>
                        </div><br/>

                        <div class="delete">
                            <input type="button" class="btn btn-danger pull-left" value="Supprimer"></input>
                        </div><br/><br/>
                    </div>
                    
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>

         <!-- ---------------------------------------------------------------------------------------------------->
         <div class="modal" id="update_prono">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h3 class="modal-title">Mettez à jour votre commentaire ou l'arrivee</h3>
                    </div>
                    <div class="modal-body">
                        <div class="message">
                            <h4 style="color:orange"></h4>
                        </div>  
                        <div class="comment_zone">
                            <h4>Commentaire</h4>
                            <textarea class="commentaire_prono form-control" style="font-size:1.2em;">Course facile</textarea>
                        </div>
                        <div class="prono_zone">
                            <div class="id">
                                <h4>ID</h4>  &nbsp<span>15154545545</span>
                            </div>
                            <div class="arrivee">
                                <h4>Arrivee</h4><input type="text" class="form-control" placeholder="x-x-x-x-x"/>
                            </div>
                        </div><br/>

                        <div class="save">
                            <input type="button" class="btn btn-success pull-left" value="Save"/>
                        </div><br/><br/>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- FENETRES MODALES FIN--------------------------------------------------------------------------------->

        <section class='container' style='background-color:silver; border:solid 1px orange'>

            <div class="row">
                <div class="col-lg-offset-2 col-lg-8">

                    <div class = "row switch">
                        <div class="col-md-8 col-sm-8 col-xs-8" style="padding:0px 0px; text-align:left;"><h3 class="pull-left" style="color:white;">Charger un pronostic</h3></div>
                        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-rigth:10px;"><p class="triangle pull-right"></p></div>
                        
                    </div>

                    <div class="row">

                        <form class='well col-lg-8 col-lg-offset-2 form_prono'>

                            <fieldset>
                                <legend style="color:orange;"> pronostiquez ici!</legend>

                                <div class='form-group'>
                                    <label for="type_jeux">Type de jeu</label>
                                    
                                    <select id="typejeu" class="form-control" style="overflow:hidden">

                                        <option value="typejeu">Masse Commune</option>
                                        <option value="typejeu">Banko</option>
                                        <option value="typejeu">Autres</option>
                                    </select>
                                </div>


                                <label for="intitulé">Intitulé</label><input type="text" name="nom_course" placeholder="Désignation" class="form-control"></input>
                                <label for="lieu">Lieu</label><input type="text" name="lieu" placeholder="dans quelle pays et ville?" class="form-control"></input>
                                
                                <label for="valeur_prix">Valeur du prix</label><div class="input-group"><input type="number" name="valeur_prix" placeholder="0000000 £" class="form-control"></input><span class="input-group-addon">€</span>
                                </div>
                                <label for="type_chevaux">Type de chevaux</label><input type="text" name="type_chevaux" placeholder="Hongre" class="form-control"></input>
                                
                                
                                <label for="reference">Reference de course</label><input type="text" name="ref_course" placeholder="R1C1" class="form-control"></input>
                                <label for="nb_participants">Nombre de participants</label><input type="number" min="5" max="20" step="1" name="nb_participants" placeholder="20" class="form-control"></input>
                                
                                <hr style="color:silver;  border-width:5px;"></hr>
                                <div class="form-check form-check-inline">
                                    
                                    <div class="row option_selection" data-toggle="popover" data-content="faites un choix!" title="Erreur!">
                                        <div class="col-md-4 col-xs-4">
                                            <label class="form-check-label" for="inlineRadio1">prono list</label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        </div>
                                        
                                        <div class="col-md-8 col-xs-8">
                                            <label class="form-check-label" for="inlineRadio2">list non partants</label>
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        </div>
                                    </div>
                                </div>

                                <hr style="color:silver; border-width:5px;"></hr>

                                <div class="form-check form-check-inline">

                                    <div class="row prono_selection" data-toggle="popover" data-content="faites un choix de 8 numeros!" title="Erreur !">
                                        
                                        <?php
                                            $i = 0;
                                            for($i = 1; $i < 21; $i++){
                                                echo("<div class='col-md-2 col-sm-3 col-xs-3'>");        
                                                echo("<label class='form-check-label' for='inlineCheckbox". $i ."'>". $i ."</label><input class='form-check-input pull-right' type='checkbox' id='inlineCheckbox'". $i . " value='option'". $i . ">");
                                                echo("</div>");
                                            }
                                        ?>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type='button' class="btn btn-primary add_prono" value="Add"></input>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <input type='button' class="btn btn-danger del_prono" value="Remove"></input>
                                        </div>
                                    </div>
                                </div>
                                <hr style="color:silver; border-width:5px;"></hr>
                                
                                            
                                <div class="form-check form-check-inline">

                                    <div class="form-group">
                                        <label for="pronostic" style="color:green;">Pronostic</label><input style="color:green" type="text" name="pronostic" placeholder="x-x-x-x-x-x-x-x" class="form-control " data-toggle="popover" data-content="saisir uniquement des nombres!" title="required" id="pop" disabled="disabled"></input>                                        

                                    </div>

                                    <div class = "form-group switch">
                                        <div class="input-group">
                                            <div class="input-group-addon" style="padding:0px 0px; text-align:center; border-color: greenyellow;"><h4 class="pull-left" style="color:gray;">Fixez vos positions <span class="glyphicon glyphicon-hand-right" style="color:rgb(128,0,255);"></span></h3>
                                                
                                            </div>
                                            <div class="input-group-addon" style="padding:0px 0px; text-align:center;">
                                                <input type='button' style='vertical-align:middle;' class='btn btn-primary pull-right gen_prono' value='Générer'/>
                                            </div>
                                            <div class="input-group-addon" style="padding:0px 0px; border-color: greenyellow;"><p class="triangle pull-right"></p></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group" style="display:flex; flex-flow:row wrap;">
                                            <?php

                                                
                                                $i = 0;
                                                for($i = 1; $i < 9; $i++){
                                                    
                                                    echo("<div class='' style='background-color:silver; border-right:solid 1px gray; display:flex; flex:1 35px;flex-flow:column wrap; padding:0px 0px;'>");        
                                                    echo("<span style='border-bottom:solid 1px gray; flex:1 32px; width:35px; text-align:left;' class='pull-left'". $i ."'>". $i ."e</span><span style='flex:1 32px; width:35px; text-align:left;' class='pull-left'><input type='checkbox' id='inlineCheckbox". $i ."' value='position_fixed".$i ."'></span>");
                                                    echo("</div>");
                                                    
                                                }
                                            ?>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="form-check form-check-inline sub_prono" title="Erreur!" data-toggle="popover" data-content="certaines options manquantes!">

                                    <div class="form-group">

                                            <div class="input-group" style="display:flex; flex-flow:row wrap; height:32px;">

                                                <div class="input-group" style="flex:1 32px;">
                                                    <span class="input-group-addon" style = "color: white; border-left: solid 2px white; border-bottom:solid 5px greenyellow;  background-color: black; padding:0px 0px;">INTITULE</span>
                                                </div>
                                                <div class="input-group" style="flex:2">
                                                <span class="input-group-addon" style = "color: white; border-left: solid 2px white; border-bottom:solid 5px greenyellow;  background-color: black; padding:0px 0px;">SPOT GEN</span>
                                                </div>
                                                <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon" style = "color: white; border-left: solid 2px white; border-bottom:solid 5px greenyellow;  background-color: black; padding:0px 0px;">SPOT PERSO</span>
                                                </div>
                                            </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        
                                        <div class="input-group quinte" style="display:flex; flex-flow:row wrap">
                                            <div class="input-group" style="flex:1 32px; padding:0px 0px;">
                                                <span class="input-group-addon" style = "background-color: maroon; color: white; width:80px; padding:0px 0px;">Quinté</span>
                                                        
                                                </span>
                                                
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="quinte_option1" name="inlineRadioQuinte">
                                                </span>
                                                <input type="text" class="form-control quinte_option1" style = "color: black;" placeholder="x-x-x-x-x" disabled="disabled">
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="quinte_option2" name="inlineRadioQuinte">
                                                </span>
                                                <input type="text" style = "color: black;" placeholder="x-x-x-x-x" class="form-control quinte_option2" disabled="disabled">
                                            </div>
                                        </div>

                                    
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group quarte" style="display:flex; flex-flow:row wrap">
                                            <div class="input-group" style="flex:1 32px;padding:0px 0px;">
                                                <span class="input-group-addon" style = "background-color: black; color: aqua; width:80px; padding:0px 0px;">Quarté
                                                
                                                </span>
                                                
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="quarte_option1" name="inlineRadioQuarte">
                                                </span>
                                                <input type="text" class="form-control quarte_option1" style = "color: maroon;" placeholder="x-x-x-x" disabled="disabled">
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="quarte_option2" name="inlineRadioQuarte">
                                                </span>
                                                <input type="text" class="form-control quarte_option2" style = "color: maroon;" placeholder="x-x-x-x" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group tierce" style="display:flex; flex-flow:row wrap">
                                            <div class="input-group" style="flex:1 32px; padding:0px 0px;">
                                                <span class="input-group-addon" style = "background-color: aqua; color: black; width:80px; padding:0px 0px;">Tiercé    
                                                </span>
                                                
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="tierce_option1" name="inlineRadioTierce">
                                                </span>
                                                <input type="text" style = "color: tomato;" name="tierce" placeholder="x-x-x" class="form-control tierce_option1" disabled="disabled">
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="tierce_option2" name="inlineRadioTierce">
                                                </span>
                                                <input type="text" style = "color: tomato;" name="tierce" placeholder="x-x-x" class="form-control tierce_option2" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group couple" style="display:flex; flex-flow:row wrap">
                                            <div class="input-group" style="flex:1 32px; padding:0px 0px;">
                                                <span class="input-group-addon" style = "background-color: tomato; color: white; width:80px; padding:0px 0px;">Couplé     
                                                </span>
                                                
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="couple_option1" name="inlineRadioCouple">
                                                </span>
                                                <input type="text" style = "color: aqua;" name="couple" placeholder="x-x" class="form-control couple_option1" disabled="disabled">
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="couple_option2" name="inlineRadioCouple">
                                                </span>
                                                <input type="text" style = "color: aqua;" name="couple" placeholder="x-x" class="form-control couple_option2" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group dsurq" style="display:flex; flex-flow:row wrap">
                                            <div class="input-group" style="flex:1 32px; padding:0px 0px;">
                                                <span class="input-group-addon" style = "background-color: orange; color: green; width:80px; padding:0px 0px;">2 Sur 4
                                                </span>
                                            </div>  
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="dsurq_option1" name="inlineRadioDsurq">
                                                </span>
                                                <input type="text" style = "color: green;"  name="2_sur_4" placeholder="x-x" class="form-control dsurq_option1" disabled="disabled">
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="dsurq_option2" name="inlineRadioDsurq">
                                                </span>
                                                <input type="text" style = "color: green;"  name="2_sur_4" placeholder="x-x" class="form-control dsurq_option2" disabled="disabled">
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group coupsur" style="display:flex; flex-flow:row wrap">
                                            <div class="input-group" style="flex:1 32px; padding:0px 0px;">
                                                <span class="input-group-addon" style = "background-color: green; color: orange; width:80px; padding:0px 0px;">Coup sur
                                                </span>
                                            
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="coupsur_option1" name="inlineRadioCoupsur">
                                                </span>
                                                <input type="text" style = "color: orange;" name="coup_sur" placeholder="-x-" class="form-control coupsur_option1" disabled="disabled">
                                            </div>
                                            <div class="input-group" style="flex:2;">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="coupsur_option2" name="inlineRadioCoupsur">
                                                </span>
                                                <input type="text" style = "color: orange;" name="coup_sur" placeholder="-x-" class="form-control coupsur_option2" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-check form-check-inline">

                                    <label for="non-partants" style="color:red;">Liste non partants</label><input style="color:red" type="text" name="non_partants" placeholder="x-x-x-x-x-x-x-x" class="form-control" data-toggle="popover" data-content="saisir uniquement des nombres!" title="not required" id="pop" disabled="disabled"></input>
                                    <label for="date" style="color:green;">Date</label><input style="font: size 1.3em; color:green;" type="date" name="date" placeholder="mm-jj-aaaa" class="form-control" data-toggle="popover" data-content="choisir une date svp!" title="required" id="pop"></input>
                                    <label for="heure" style="color:maroon;">Heure</label><input style="font: size 1.3em; color:maroon;" type="time" name="heure" placeholder="00:00" class="form-control" data-toggle="popover" data-content="choisir une date svp!" title="required" id="pop"></input>

                                </div>
                                <hr style="color:silver"></hr>


                                <div class="row">

                                    <div class="col-md-offset-2 col-md-8"><span style="font-size: 1.3em; color:rgb(128,64,0);">Un commentaire?<span></div>
                                    <div class="form-outline  col-md-offset-1 col-md-10">
                                    
                                        <label class="form-label" for="textarea1">Commentez!</label>
                                        <textarea class="form-control" rows="10"  id="textarea1"></textarea>
                                    </div>
                                </div>

                                <hr style="color:silver border-width:5px;"></hr>

                                <div class="row">
                                    <div class="col-md-6  col-sm-6 col-xs-6 pull-right">
                                        <input type="button" class="btn btn-success pull-right save_" value="Save">
                                        <i style="color:white;  border-width:5px;" class="glyphicon glyphicon-ok"></i>
                                        </input>
                                    </div>
                                    
                                </div>

                            </fielset>
                        </form>
                    </div>

                    
                </div>
                
                

            </div>

            <div class="row">
                <div class="col-lg-offset-2 col-lg-8">

                    <div class = "row switch">
                        <div class="col-md-8 col-sm-8 col-xs-8" style="padding:0px 0px; text-align:left;"><h3 class="pull-left" style="color:white;">Managez vos pronostiques</h3></div>
                        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-rigth:10px;"><p class="triangle pull-right"></p></div>
                        
                    </div>

                    <div class="row">

                        <div class="table-responsive col-md-12">

                            <table class="table table-bordered table-striped table-condensed list_prono" style="border:greenyellow solid 2px;">
                                    <caption>
                                        <h4>Les 30 derniers pronostiques</h4>
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
                                            <th style="color:red;">Del<span class='glyphicon glyphicon-remove'></span></th>
                                            <th style="color:greenyellow;">Modif<span class='glyphicon glyphicon-pencil'></span></th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody id="historique_prono">
                                        
                                        <?php

                                            // for($i=1; $i<=30; $i++){
                                        
                                            //     echo("<tr>
                                            //             <td>1</td>
                                            //             <td>2</td>
                                            //             <td>3</td>
                                            //             <td>4</td>
                                            //             <td></td>
                                            //             <td>6</td> 
                                            //             <td>7</td>
                                            //             <td>8</td>
                                            //             <td>9-2-5-4-8-7-10</td>
                                            //             
                                            //             <td>10-1-2-4-6</td>
                                            //             <td class='commentaire'>see cmt<span class='glyphicon glyphicon-info-sign', style='color:greenyellow; cursor:pointer;'></span></td>
                                            //             <td class='delete_prono'><span class='glyphicon glyphicon-remove-sign' style='color:rgb(255,32,32); cursor:pointer;'></span></td>
                                            //             <td class='update_prono'><span class='glyphicon glyphicon-pencil', style='color:rgb(0,128,194);cursor:pointer;'></span></td>
                                                        
                                            //         </tr>
                                            //     ");
                                            // }
                                        ?>
                                        
                                    </tbody>
                            </table>
                                        
                        </div>

                    </div>



                    
                </div>
            </div>

            
        </section>

        <div class="row">
        <?php
        
            // try{

            //     $my_db = new PDO('mysql:host=127.0.0.1;dbname=tawaprono', 'root', '@Istdi14e007248');
            //     //echo("<div class='echo_ col-md-10'><style>.echo_ {background-color:red;}</style>CONNEXION REUSSIE</div>");

            //     echo("
            //         <script>
            //             alert('connexion réussie!');
            //         </script>
            //     ");

            //     $reponse = $my_db->query('select * from test');
            //     $cpt=0;

            //     while($donnee = $reponse->fetch()){

            //         echo("
            //             <div>
            //                 <p>ligne " . ($cpt+1) ."</p>
            //                 <p>id = " . $donnee['id'] ."</p>
            //                 <p>nom = " . $donnee['nom'] ."</p><br/>
            //             </div>

            //             ");
            //         $cpt++;
            //     }
            //     $reponse->closeCursor();
            // }
            // catch(Exception $e){

            //     echo( "
            //         <script>
            //             alert('erreur de connexion!');
            //         </script>

            //         "
            //     );

            //     Die('Erreur:'. $e->getMessage());

                
            // }           
        ?>

        </div>
        
        
        <script src="./btrp/dist/js/jquery-3.7.0.js"></script>
        <script src="./btrp/dist/js/bootstrap.min.js"></script>
        <script src="./admin_responsive.js"></script>
        
    </body>

</html>
