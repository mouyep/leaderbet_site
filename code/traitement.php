<?php
    
    $f1_ = $_POST['nom_course']; //required
    $f2_ = $_POST['lieu_course'];
    $f3_ = $_POST['valeur_prix'];
    $f4_ = $_POST['type_chevaux'];
    $f5_ = $_POST['ref_course'];
    $f6_ = $_POST['nb_participants']; //required
    $f7_ = $_POST['pronostic']; //required
    $f8_ = ($_POST['list_non_partants']) == "" ? 'aucun_non_partants' : ($_POST['list_non_partants']);
    $f9_ = $_POST['date_']; //required
    $f10_ = $_POST['heure_']; //required
    $f11_ = $_POST['commentaire'];

    $f12_ = $_POST['quinte'];
    $f13_ = $_POST['quarte'];
    $f14_ = $_POST['tierce'];
    $f15_ = $_POST['couple'];
    $f16_ = $_POST['dsurq'];
    $f17_ = $_POST['coupsur'];
    $f18_ = $_POST['type_jeu'];


    $id_jeu = "";

    
    if(detect_fields($f1_, $f6_, $f7_, $f9_, $f10_)){

        try{

            $my_db = new PDO('mysql:host=127.0.0.1;dbname=tawaprono', 'root', '@Istdi14e007248', 
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $req1 = $my_db->prepare('INSERT INTO jeux(id_jeu, type_jeux, nom_course, lieu_course, valeur_prix,
                                   type_chevaux, ref_course, nb_participants, pronostic, list_non_partants,
                                   date_, heure_, commentaire, quinte, quarte, tierce, couple, dsurq, coupsur) 
                                   VALUES(:id_jeu, :type_jeux, :nom_course, :lieu_course, :valeur_prix,
                                          :type_chevaux, :ref_course, :nb_participants, :pronostic, :list_non_partants,
                                          :date_, :heure_, :commentaire, :quinte, :quarte, :tierce, :couple, :dsurq, :coupsur)');
                                
            $req2 = $my_db->prepare('select max(id_jeu) as max_id from jeux');

            $req2->execute();
            $data_rcv = $req2->fetch();
            $nb_occ = (int)$data_rcv['max_id']/100000;
            $nb_occ = $nb_occ + 1;

            $id_jeu = Zfill($nb_occ);

            $req1->execute(array(

                'id_jeu' => $id_jeu,
                'type_jeux' => htmlspecialchars($f18_),
                'nom_course' => htmlspecialchars($f1_), 
                'lieu_course' => htmlspecialchars($f2_),
                'valeur_prix' => (float)htmlspecialchars($f3_),
                'type_chevaux' => htmlspecialchars($f4_),
                'ref_course' => htmlspecialchars($f5_),
                'nb_participants' => (int)htmlspecialchars($f6_),
                'pronostic' => htmlspecialchars($f7_),
                'list_non_partants' => htmlspecialchars($f8_),
                'date_' => htmlspecialchars($f9_),
                'heure_' => htmlspecialchars($f10_),
                'commentaire' => htmlspecialchars($f11_),
                'quinte' => htmlspecialchars($f12_),
                'quarte' => htmlspecialchars($f13_),
                'tierce' => htmlspecialchars($f14_),
                'couple' => htmlspecialchars($f15_),
                'dsurq' => htmlspecialchars($f16_),
                'coupsur' => htmlspecialchars($f17_))
                
            );

            $req2->closeCursor();
            $req1->closeCursor();

            echo(json_encode(array('statut'=>'200_OK')));

            // create table jeux(id_jeu varchar(6) primary key, 
            //                 nom_course varchar(100) not null default 'course sans intitule',
            //                 lieu_course varchar(50),
            //                 valeur_prix float default 0.00,
            //                 type_chevaux varchar(30),
            //                 ref_course varchar(30),
            //                 nb_participants int not null default 5,
            //                 pronostic varchar(30) not null default 'Aucun pronostic a afficher',
            //                 list_non_partants varchar(30),
            //                 date_ varchar(15),
            //                 heure_ varchar(15),
            //                 commentaire varchar(500) default 'Aucun commentaire a afficher',
            //                 arrivee varchar(40) default 'Aucune arrivee a afficher'
            // );

        }

        catch(Exception $e){

            echo(json_encode(array('statut'=> $e->getMessage())));
            //Die('erreur: '. $e->getMessage());
            
        }
    }

    else{

        echo(json_encode(array('statut'=>'500_NOT_OK')));
    }


    function detect_fields($f1, $f2, $f3, $f4, $f5){

        $val_return = false;
        if(isset($f1) && isset($f2) && isset($f3) && isset($f4) && isset($f5)){

            $val_return = true;
        }

        return $val_return;


    }

    function zfill($a_num){

        $num_str = (string)($a_num);
        $longueur = strlen($num_str);
        $to_complete = 6 - $longueur;
        $new_num = "";

        for($i=0; $i < $to_complete; $i++){

            $new_num = $new_num . "0";
        }

        return ($new_num . $num_str);
    }
?>