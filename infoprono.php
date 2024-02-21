<?php

    header('Access-Control-Allow-Origin: http://prono.leaderbet.cm');
    $action = $_POST['action'];
    $id = $_POST['id'];

    if($action == 'delete'){

        try{

            $my_db = new PDO('mysql:host=localhost;dbname=tawaprono', 'alain', '@Istdi14e007248', 
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $req1 = $my_db->prepare('DELETE FROM jeux where id_jeu = :id_jeu;');
            
            $req1->execute(array(

                'id_jeu' => $id,
            )
                
            );

            $req1->closeCursor();

            echo(json_encode(array('statut'=>'200_OK',
                                   'message'=>'Record has been successfull deleted',)));

        }

        catch(Exception $e){

            echo(json_encode(array('statut'=>'500_NOT_OK',
                                   'message'=>'Something went wrong with delete, close and try again',)));
            //Die('erreur: '. $e->getMessage());
            
        }

    }

    elseif($action == 'update'){

        $commentaire = $_POST['commentaire'];
        $arrivee = $_POST['arrivee'];

        try{

            $my_db = new PDO('mysql:host=localhost;dbname=tawaprono', 'alain', '@Istdi14e007248', 
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $req1 = $my_db->prepare('UPDATE jeux SET commentaire = :commentaire, arrivee = :arrivee where id_jeu = :id_jeu;');

            $req1->execute(array(

                'commentaire' => htmlspecialchars($commentaire), 
                'arrivee' => htmlspecialchars($arrivee), 
                'id_jeu' => $id,
            ));

            $req1->closeCursor();

            echo(json_encode(array('statut'=>'200_OK',
                                   'message'=>'Record has been successfull updated',)));

        }

        catch(Exception $e){

            echo(json_encode(array('statut'=>'500_NOT_OK',
                                   'message'=>'Something went wrong with update, close and try again')));
            //Die('erreur: '. $e->getMessage());
            
        }                  

    }
    elseif($action == 'list'){

        try{

            $my_db = new PDO('mysql:host=localhost;dbname=tawaprono', 'alain', '@Istdi14e007248', 
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $req1 = $my_db->prepare('SELECT nom_course, commentaire, quinte, quarte, tierce, couple, dsurq, coupsur from jeux where id_jeu = ?;');

            $req1->execute(array($id));

            $data_rcv = $req1->fetch();
            $req1->closeCursor();

            echo(json_encode(array('statut' => '200_OK',
                                   'message' => 'info loaded successfull',
                                   'nom_course' => $data_rcv['nom_course'],
                                   'commentaire' => $data_rcv['commentaire'],
                                   'quinte' => $data_rcv['quinte'],
                                   'quarte' => $data_rcv['quarte'],
                                   'tierce' => $data_rcv['tierce'],
                                   'couple' => $data_rcv['couple'],
                                   'dsurq' => $data_rcv['dsurq'],
                                   'coupsur' => $data_rcv['coupsur'],)
                            )
                );

        }

        catch(Exception $e){

            echo(json_encode(array('statut'=> '500_NOT_OK',
                                   'message'=> $e->getMessage())));
            //Die('erreur: '. $e->getMessage());
            
        }
    }


    elseif($action == 'list_ref'){

        try{

            $my_db = new PDO('mysql:host=localhost;dbname=tawaprono', 'alain', '@Istdi14e007248', 
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $req1 = $my_db->prepare('SELECT type_jeux, nom_course, commentaire, tierce, couple, dsurq, coupsur, pronostic, lieu_course, date_, heure_ from jeux where type_jeux = :type_jeux order by time_stamp desc limit 1;');

            $req1->execute(array('type_jeux' => 'Masse Commune'));

            if($data_rcv = $req1->fetch()){

                    
                echo(json_encode(array('statut' => '200_OK',
                                        'message' => 'info loaded successfull',
                                        'type_jeux' => $data_rcv['type_jeux'],
                                        'nom_course' => $data_rcv['nom_course'],
                                        'commentaire' => $data_rcv['commentaire'],
                                        'quinte' => $data_rcv['quinte'],
                                        'quarte' => $data_rcv['quarte'],
                                        'tierce' => $data_rcv['tierce'],
                                        'couple' => $data_rcv['couple'],
                                        'dsurq' => $data_rcv['dsurq'],
                                        'coupsur' => $data_rcv['coupsur'],
                                        'pronostic' => $data_rcv['pronostic'],
                                        'lieu_course' => $data_rcv['lieu_course'],
                                        'date_' => $data_rcv['date_'],
                                        'heure_' => $data_rcv['heure_'],)
                                )
                );

                $req1->closeCursor();
            }

            else{

                $req1->closeCursor();

                $req1 = $my_db->prepare('SELECT type_jeux, nom_course, commentaire, tierce, couple, dsurq, coupsur, pronostic, lieu_course, date_, heure_ from jeux  where type_jeux != :type_jeux order by time_stamp desc limit 1;');

                $req1->execute(array('type_jeux' => 'Masse Commune'));

                $data_rcv = $req1->fetch();

                echo(json_encode(array('statut' => '200_OK',
                                        'message' => 'info loaded successfull',
                                        'type_jeux' => $data_rcv['type_jeux'],
                                        'nom_course' => $data_rcv['nom_course'],
                                        'commentaire' => $data_rcv['commentaire'],
                                        'quinte' => $data_rcv['quinte'],
                                        'quarte' => $data_rcv['quarte'],
                                        'tierce' => $data_rcv['tierce'],
                                        'couple' => $data_rcv['couple'],
                                        'dsurq' => $data_rcv['dsurq'],
                                        'coupsur' => $data_rcv['coupsur'],
                                        'pronostic' => $data_rcv['pronostic'],
                                        'lieu_course' => $data_rcv['lieu_course'],
                                        'date_' => $data_rcv['date_'],
                                        'heure_' => $data_rcv['heure_'],)
                                )
                );


                $req1->closeCursor();
            }

        }

        catch(Exception $e){

            echo(json_encode(array('statut'=> '500_NOT_OK',
                                   'message'=> $e->getMessage())));
            //Die('erreur: '. $e->getMessage());
            
        }
    }


    else{

        echo(json_encode(array("message"=>"Action inconnue!")));
    }

?>
