<?php

    $action = $_POST['action'];

    if($action == 'refresh'){

        try{

            $cpt = 1;
            $data_to_send = [];
            $id_jeu = "";
            $type_jeux = "";
            $nom_course = "";//$_POST['nom_course']; //required
            $lieu_course = ""; //$_POST['lieu_course'];
            $valeur_prix = 0.0; //$_POST['valeur_prix'];
            $type_chevaux = ""; //$_POST['type_chevaux'];
            $ref_course = ""; //$_POST['ref_course'];
            $nb_participants = 0; //$_POST['nb_participants']; //required
            $pronostic = ""; //$_POST['pronostic']; //required
            $list_non_partants = ""; // $_POST['list_non_partants'];
            $date_ = ""; //$_POST['date_']; //required
            $heure_ = ""; //$_POST['heure_']; //required

            $connection = new PDO('mysql:host=127.0.0.1;dbname=tawaprono', 'root', '@Istdi14e007248',
                                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $req = $connection->prepare('select id_jeu, type_jeux, nom_course, ref_course, lieu_course, valeur_prix,
                                        type_chevaux, nb_participants, list_non_partants, pronostic,
                                        arrivee, date_, heure_  from jeux order by time_stamp desc limit 30;');
            $req->execute();

            while($lignes = $req->fetch()){

                $id_jeu = $lignes['id_jeu'];
                $type_jeux = $lignes['type_jeux'];
                $nom_course = $lignes['nom_course'];
                $lieu_course = $lignes['lieu_course']; //$_POST['lieu_course'];
                $ref_course = $lignes['ref_course'];
                $valeur_prix = (float)$lignes['valeur_prix']; //$_POST['valeur_prix'];
                $type_chevaux = $lignes['type_chevaux']; //$_POST['type_chevaux'];
                $nb_participants = (int)$lignes['nb_participants']; //$_POST['nb_participants']; //required
                $list_non_partants = $lignes['list_non_partants'];
                $pronostic = $lignes['pronostic']; //$_POST['pronostic']; //required
                $arrivee = $lignes['arrivee'];
                $date_ = $lignes['date_']; //$_POST['date_']; //required
                $heure_ = $lignes['heure_']; //$_POST['heure_']; //required

                $ligne = [];
                $ligne['id_jeu'] = $id_jeu;
                $ligne['type_jeux'] = $type_jeux;
                $ligne['nom_course'] = $nom_course;
                $ligne['ref_course'] = $ref_course;
                $ligne['lieu_course'] = $lieu_course;
                $ligne['valeur_prix'] = $valeur_prix;
                $ligne['type_chevaux'] = $type_chevaux; 
                $ligne['nb_participants'] = $nb_participants;
                $ligne['list_non_partants'] = $list_non_partants;
                $ligne['pronostic'] = $pronostic;
                $ligne['arrivee'] = $arrivee;
                $ligne['date_'] = $date_;
                $ligne['heure_'] = $heure_;
                $data_to_send['ligne'. $cpt] = $ligne;
                $cpt++;
            }

            echo(json_encode(array("flux" => $data_to_send, "nb_item" => $cpt, "statut" => "200_OK")));
            
        }
        catch(Exception $e){

            echo(json_encode(array("statut" => "500_NOT_OK")));
        }
    }
?>