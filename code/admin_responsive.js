$(document).ready(function () {


    $('.modal').each(function(){

        $(this).on('hidden.bs.modal', function () {

            $(this).find('.message').children('h4').text("");
        })
    })
   
    //function to refresh data inside table
    load_recent_prono();
    //-----------------------------------------------

    var my_obj = $('input[type=text][name=nom_course]').val();
    
    var list_cheval = [];

    $('.prono_selection div input[type=checkbox]').each(function(){

        $(this).on({

            'change':function(e){

                if($(this).is(':checked')){

                    list_cheval.push($(this).prev().text());
                    

                    $('.prono_selection').popover('hide');
                    
                }
                else{
                    pop_from_tb(list_cheval, $(this).prev().text());
                    //list_cheval.pop($(this).prev().text());
                    
                }
            }
        })
        
    });

    add_prono_or_np(list_cheval);
    del_prono_or_np();
    save_prono();
    end_popover_on_subprono();

    

    //Initialisation des popover

    $('#pop').popover({trigger:'manual', placement:'bottom'});
    $('.option_selection').popover({trigger:'manual', placement:'bottom'}, { delay: { show: 400, hide: 200 } });
    $('.prono_selection').popover({trigger:'manual', placement:'bottom'}, { delay: { show: 400, hide: 200 } });
    $('div.sub_prono').popover({trigger:'manual', placement:'bottom'}, { delay: { show: 400, hide: 200 } });


    //initialisation des contenu retractables
    $('div').filter('.switch').each(function(){

        $(this).next().hide();
    });

    //génération personnalisee du tiercé, quarté, quinté, 2_sur_4, couplé, coup_sur
    $('input:button[class*=gen_prono]').on({

        'click':function(e){

            if(is_not_null($('input[type=text][name=pronostic]').val())){

                var array_prono = ($('input[type=text][name=pronostic]').val()).split('-');
                
                var tab_positions = get_positions_fixed();
                
                $('input:text[class*=coupsur_option2]').val(return_sub_prono_perso(3, 1, array_prono, tab_positions));
                
                $('input:text[class*=couple_option2]').val(return_sub_prono_perso(4, 2, array_prono, tab_positions));
                
                $('input:text[class*=dsurq_option2]').val(return_sub_prono_perso(5, 2, array_prono, tab_positions));
                
                $('input:text[class*=tierce_option2]').val(return_sub_prono_perso(6, 3, array_prono, tab_positions));
                
                $('input:text[class*=quarte_option2]').val(return_sub_prono_perso(7, 4, array_prono, tab_positions));
                
                $('input:text[class*=quinte_option2]').val(return_sub_prono_perso(8, 5, array_prono, tab_positions));

            }
        }
    })

    

   

   
    // $('input').filter('.auto-complete').each(function(){

    //     $(this).on({

    //         'keydown': function(e){
                
    //             var nb = parseInt(e.key);
    //             var temp="";
                
    //             if(between_one_and_twenty(nb)){
    //                 $(this).popover('hide');
    //                 temp = $(this).val();
    //                 $(this).val(temp+"-");
    //             }
    //             else{
    //                 $(this).val(temp+"");
    //                 $(this).popover('show');


    //             }
    //         },

    //         'keypress':function(e){


    //             var temp = $(this).val();
    //             $(this).val(temp); 

    //         }

          
    //     })
    // })


    rotate_triangle_arrow();

    unckeck(list_cheval);

    
    
});


function rotate_triangle_arrow(){

    $('p').filter('.triangle').each(function(){

        $(this).on(
            
            {
    
            'click': function(e){
    
                if($(this).hasClass('rot_triangle_up')){

                    $(this).removeClass('rot_triangle_up');
                    $(this).addClass('rot_triangle_down');

                    //$(this).parents('.row').each(function(){

                        $(this).parents('.switch').next().slideDown('slow');
                    //})
                    
                }
    
                else if($(this).hasClass('rot_triangle_down')){
    
                    $(this).removeClass('rot_triangle_down');
                    $(this).addClass('rot_triangle_up');

                    //$(this).parents('.row').each(function(){

                        $(this).parents('.switch').next().slideUp('slow');
                    //})
                }

                else{
                    $(this).addClass('rot_triangle_down');

                    //$(this).parents('.row').each(function(){

                        $(this).parents('.switch').next().slideDown('slow');

                    //})
                }
    
                
            }
        });
    
    });
}

function between_one_and_twenty(x){

    var value_return = false;

    for(i=1; i<21; i++){
        if(x==i){
            value_return = true;
            break;
        }
        
    }

    return value_return;
}

async function detect_good_prono(){

    $('.list_prono tbody tr').each(function(){

        
        var valeur_prono =$(this).children('td').eq(9).text();
        var valeur_arrivee =$(this).children('td').eq(10).text();

        var tab_prono = valeur_prono.split('-');
        var tab_arrivee = valeur_arrivee.split('-');

        // alert(tab_prono.length);
        // alert(tab_arrivee.length);


        for (i=0, taille_prono=tab_prono.length; i<taille_prono; i++){

            
            for (j=0, taille_arr=tab_arrivee.length; j<taille_arr; j++){

                if(parseInt(tab_prono[i]) === parseInt(tab_arrivee[j])){

                //    alert("yes");

                    tab_prono[i] = "<span class='detect_prono'><style>.detect_prono { background: yellow; }</style>"+tab_prono[i]+"</span>"
                    break;
                }
            }

        }

        $(this).children('td').eq(9).text('');
        $(this).children('td').eq(9).html('');
        $(this).children('td').eq(9).html(tab_prono.join('-'));
        
        
    });
}


function unckeck(prono_array){

    $('.option_selection div input[type=radio]').each(function(){

        $(this).on({

            'change':function(e){

                initialise_ckeckboxes(prono_array);
                $('.option_selection').popover('hide');
                
                
                
            }
        })
    })
}

function initialise_ckeckboxes(prono_array){

    $('.prono_selection div input[type=checkbox]').each(function(){

        $(this).prop('checked', false);
        empty_array(prono_array);
        
    })
}


function add_prono_or_np(prono_array){

//pour ajouter un pronostique, il faut que au moins deux cases soient cochés
//et que au moins un bouton radio soit activé

$('input[type=button].add_prono').on({

    'click': function(e) {

        e.preventDefault();
        

        if(String(prono_array[0]) !== '' && option_choosed()){


            var chaine = prono_array.join('-');

            if($('.option_selection div input[type=radio][value=option1]').is(':checked')){

                if(prono_array.length == 8){

                    $('input[type=text][name=pronostic]').val(chaine);

                    set_quinte(chaine);
                    set_quarte(chaine);
                    set_tierce(chaine);
                    set_2sur4(chaine);
                    set_couple(chaine);
                    set_coupsur(chaine);
                    
                    initialise_ckeckboxes(prono_array);
                }

                else{
    
                    $('.option_selection').popover('show');
                    $('.prono_selection').popover('show');
                    setTimeout(function(){
        
                        initialise_ckeckboxes(prono_array);
                    },
                    3000);
                }
                
            }

            else{

                $('input[type=text][name=non_partants]').val(chaine);
                initialise_ckeckboxes(prono_array);
            }
    
        }

        
    }
})

    
};

function del_prono_or_np(){
//pour supprimer un pronostique, il faut qu'il y ai une valeur dans le champ concerné
//et que au moins un bouton radio soit activé


$('input[type=button].del_prono').on({

    'click': function(e) {

        e.preventDefault();

        if(option_choosed()){


            if($('.option_selection div input[type=radio][value=option1]').is(':checked')){

                $('input[type=text][name=pronostic]').val("");

                $('input:text[class*=coupsur_option1]').val("");
                $('input:text[class*=coupsur_option2]').val("");

                $('input:text[class*=couple_option1]').val("");
                $('input:text[class*=couple_option2]').val("");

                $('input:text[class*=dsurq_option1]').val("");
                $('input:text[class*=dsurq_option2]').val("");

                $('input:text[class*=tierce_option1]').val("");
                $('input:text[class*=tierce_option2]').val("");

                $('input:text[class*=quarte_option1]').val("");
                $('input:text[class*=quarte_option2]').val("");

                $('input:text[class*=quinte_option1]').val("");
                $('input:text[class*=quinte_option2]').val("");

            }
            else{

                $('input[type=text][name=non_partants]').val("");
            }
    
        }

        else{
    
            $('.option_selection').popover('show');

        }
        
    }
})


};


function prono_choosed(){

    var val_return = false;
    $('.prono_selection div input[type=checkbox]').each(function(){

        if($(this).is(':checked')){

            val_return = true;
        }
    });
    
    return val_return
}

function option_choosed(){

    var val_return = false;
    $('.option_selection div input[type=radio]').each(function(){

        if($(this).is(':checked')){

            val_return = true;
        }
    });
    
    
    return val_return
}

function empty_array(an_array){

    for(i=0, taille=an_array.length; i<taille; i++){

        an_array.pop();
    }

}


function save_prono(){

    //pour enregistrer le formulaire, il faut que tous les champs de type texte ou area
    //soient remplis.

    var tab_retour;

    $('input[type=button].save_').on({

        'click': function(e){

            e.preventDefault();
            tab_retour = is_subprono_selected();

            if(check_required_fields() && tab_retour[0]){

                var type_jeu = $('#typejeu option:selected').text();
                var nom_course = $('input[type=text][name=nom_course]').val();
                var lieu_course = $('input[type=text][name=lieu]').val();
                var valeur_prix = $('input[type=number][name=valeur_prix]').val();
                var type_chevaux = $('input[type=text][name=type_chevaux]').val();
                var ref_course = $('input[type=text][name=ref_course]').val();
                var nb_participants = $('input[type=number][name=nb_participants]').val();
                var pronostic = $('input[type=text][name=pronostic]').val();
                var list_non_partants = $('input[type=text][name=non_partants]').val();
                var date_ = $('input[type=date][name=date]').val();
                var heure_ = $('input[type=time][name=heure]').val();
                var commentaire = $('textarea[id=textarea1]').val();
                var quinte = tab_retour[1][0];
                
                var quarte = tab_retour[1][1];
                var tierce = tab_retour[1][2];
                var couple = tab_retour[1][3];
                var dsurq = tab_retour[1][4];
                
                var coupsur = tab_retour[1][5];
                


                var xhr = new XMLHttpRequest();
                var data_to_send = new FormData();

                data_to_send.append('type_jeu', type_jeu);
                data_to_send.append('nom_course', nom_course);
                data_to_send.append('lieu_course', lieu_course);
                data_to_send.append('valeur_prix', parseInt(valeur_prix));
                data_to_send.append('type_chevaux', type_chevaux);
                data_to_send.append('ref_course', ref_course);
                data_to_send.append('nb_participants', nb_participants);
                data_to_send.append('pronostic', pronostic);
                data_to_send.append('list_non_partants', list_non_partants);
                data_to_send.append('date_', String(date_));
                data_to_send.append('heure_', String(heure_));
                data_to_send.append('commentaire', commentaire);
                
                data_to_send.append('quinte', quinte);
                data_to_send.append('quarte', quarte);
                data_to_send.append('tierce', tierce);
                data_to_send.append('couple', couple);
                data_to_send.append('dsurq', dsurq);
                data_to_send.append('coupsur', coupsur);
                
                
                xhr.open('POST', 'http://localhost/traitement.php');
                xhr.send(data_to_send);

                var data_rcv;
                var statut;

                xhr.onreadystatechange = function(){

                    if(xhr.readyState == 4){


                        try{

                            data_rcv = JSON.parse(xhr.responseText);
                            statut = data_rcv['statut'];
                        }
                        catch(e){
                            

                        }
                        
                        

                        if(statut === '200_OK'){
                            
                            clean_form();
                            alert("vos données ont bien ete enregistrés en BD");

                            
                        }

                        else{

                            alert("erreur d'enregistrement reesayer encore!!!");
                        }
                    }
                }

            }

            else{

                alert("certains champs non rempli!!");
                if(!(tab_retour[0])){

                    $('div.sub_prono').popover('show');
                }
                
            }
            
            
            
        }
    })
}

function check_required_fields(){

    var val_return = false;

    
    var test1 = is_not_null($('input[type=text][name=nom_course]').val());

    var test2 = is_not_null($('input[type=text][name=pronostic]').val());
    
    var test3 = is_not_null($('input[type=number][name=nb_participants]').val());
    
    var test4 = is_not_null($('input[type=date][name=date]').val());
    
    var test5 = is_not_null($('input[type=time][name=heure]').val());
    
    var test_global = (test1 && test2 && test3 && test4 && test5);

    

    if(test_global)
    {

        val_return = true;

    }

    return val_return;
   
}


function is_not_null(a_value){

    var val_return = false;
    //alert(String(a_value)+ "type: "+ typeof(String(a_value)) + "longueur "+ String(a_value).length);

    if(String(a_value).length >= 1){
        val_return = true; 
       
    }

    return val_return;
}


function load_recent_prono(){

    var table_body = $('table > tbody');
    var t_body = document.getElementById('historique_prono'); 
    var longueur = get_lenght(table_body.children('tr'));

    
    setInterval(function(){

        var data_to_request = new FormData();
        data_to_request.append('action', 'refresh');
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/refresh.php');
        xhr.send(data_to_request);

        var json_response;

        xhr.onreadystatechange = function(e){

            if(xhr.readyState == 4 && xhr.status == 200){

                json_response = JSON.parse(xhr.responseText);

                var nb_items = parseInt(json_response['nb_item']);
                var flux = json_response['flux'];

                table_body.children('tr').each(function(){

                    $(this).remove();
                })

                for(cle1 in flux){

                    var elmt_ligne = document.createElement('tr');


                    for(cle2 in flux[cle1]){

                        var elmt_col = document.createElement('td');
                        var elmt_text = document.createTextNode(flux[cle1][cle2]);
                        elmt_col.appendChild(elmt_text);
                        elmt_ligne.appendChild(elmt_col);

                    }

                    //ajout des elements d'interaction---------------------------

                        
                    var comment_ = document.createElement('td');
                    var span_comment = document.createElement('span');
                    span_comment.className = "glyphicon glyphicon-info-sign";
                    span_comment.style.color = 'rgb(0,128,194)';
                    span_comment.style.cursor = 'pointer';
                    var text_comment = document.createTextNode("see cmt");
                    comment_.className =  "commentaire";
                    comment_.appendChild(text_comment);
                    comment_.appendChild(span_comment);

                    elmt_ligne.appendChild(comment_);
                    
                    var delete_ = document.createElement('td');
                    var span_delete = document.createElement('span');
                    span_delete.className = "glyphicon glyphicon-remove-sign";
                    span_delete.style.color = 'rgb(255,32,32)';
                    span_delete.style.cursor = 'pointer';
                    //var text_delete = document.createTextNode("see cmt");
                    delete_.className =  "delete_prono";
                    //delete_.appendChild(text_update);
                    delete_.appendChild(span_delete);
                    
                    elmt_ligne.appendChild(delete_);

                    var update_ = document.createElement('td');
                    var span_update = document.createElement('span');
                    span_update.className = "glyphicon glyphicon-pencil";
                    span_update.style.color = 'greenyellow';
                    span_update.style.cursor = 'pointer';
                    //var text_update = document.createTextNode("see cmt")
                    update_.className =  "update_prono";
                    //comment_.appendChild(text_update);
                    update_.appendChild(span_update);
                                         
                    elmt_ligne.appendChild(update_);

                    //------------------------------------------------------------

                    t_body.appendChild(elmt_ligne);
                   
                }

            }
            
            load_info_prono();
            delete_prono();
            update_prono();

            t_body.style.visibility = "hidden";

            detect_good_prono();

            setTimeout(function(){

                t_body.style.visibility = "visible";

            },30000);

        }

    },
    60000)
}

function get_lenght(elmt){

    var longueur = 0;

    elmt.each(function(){

        longueur++;
    })

    return longueur;
}


function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
}

function return_sub_prono(card_start, card_end, prono_array){

    var sub_prono = "";
    var position = 0;
    var tab_position = [];
    for(i=0; i < card_end; i++){

        do{
            position = getRndInteger(1, card_start);
        }
        while(tab_position.includes(position));
        
        tab_position.unshift(position);
        sub_prono += prono_array[position - 1];

        if(i < card_end -1){
            sub_prono += "-";
        }
    }

    return sub_prono;
}

function return_sub_prono_perso(card_start, card_end, prono_array, tab_positions){
    
    var prono = "";
    var tab_random = [];
    var i=0;

    load_some_position(tab_random, prono_array, tab_positions, parseInt(card_start));


    do{
    
        if(tab_positions.includes(i+1)){

            prono += prono_array[i] + "-" ;
            
        }

        else{

            if(tab_random.length > 0){

                var position_random = (tab_random.length > 1)? getRndInteger(0, (tab_random.length-1)) : 0;
            
                prono += tab_random[position_random] + "-";

                pop_from_tb(tab_random, tab_random[position_random]);
                
            }
        }

        i = i+1;
        
    }
    while(i < parseInt(card_end));

    return prono;
}



function set_quinte(prono){

    array_prono = prono.split('-');
    var quinte = return_sub_prono(8, 5, array_prono);
    $('input:text[class*=quinte_option1]').val(quinte);

}

function set_quarte(prono){


    array_prono = prono.split('-')
    array_prono.pop();
    var quarte = return_sub_prono(7, 4, array_prono);
    $('input:text[class*=quarte_option1]').val(quarte);
}


function set_tierce(prono){

    array_prono = prono.split('-');
    array_prono.pop();
    array_prono.pop();
    var tierce = return_sub_prono(6, 3, array_prono);
    $('input:text[class*=tierce_option1]').val(tierce);
    
}


function set_2sur4(prono){

    array_prono = prono.split('-');
    array_prono.pop();
    array_prono.pop();
    array_prono.pop();
    var dsurq = return_sub_prono(5, 2, array_prono);
    $('input:text[class*=dsurq_option1]').val(dsurq);
    
}


function set_couple(prono){

    array_prono = prono.split('-');
    array_prono.pop();
    array_prono.pop();
    array_prono.pop();
    array_prono.pop();
    var couple = return_sub_prono(4, 2, array_prono);
    $('input:text[class*=couple_option1]').val(couple);
    
}


function set_coupsur(prono, gen_perso, tab_positions){

    array_prono = prono.split('-');
    array_prono.pop();
    array_prono.pop();
    array_prono.pop();
    array_prono.pop();
    array_prono.pop();
    var coupsur = return_sub_prono(3, 1, array_prono);
    $('input:text[class*=coupsur_option1]').val(coupsur);
    
}


function get_positions_fixed(){

    var tab_positions = [];
    var position = 0;
    

    $('input[value*=position_fixed]').each(function(){

        if($(this).is(':checked')){

            
            position = parseInt($(this).attr("value").substring(14, 15));
            
            tab_positions.push(position);
           
        }

    })

    return tab_positions;
}


function pop_from_tb(table, elmt){

    if(table.length > 0){

        if(table[0] == elmt){

            table.shift();
        }
        else if(table[table.length -1] == elmt){

            table.pop();
            
        }
        else{

            position = get_position(table, elmt)

            for(i=position; i<table.length -1; i++){

                table[i] = table[i+1];
            }
            table.pop();
        }
    }
}

function get_position(table, elmt){

    var position_ = -1

    if(table.length > 0){

        for(i=0; i<table.length; i++){

            if(table[i] == elmt){

                position_ = i;
                
            }
        }
    }
    return position_;    
}

function load_some_position(table_dest, table_start, table_positions, card_start){

    var j = 0;

    for(i=0; i<card_start; i++){

        if(!table_positions.includes(i+1)){

            table_dest[j] = table_start[i];
            
            j++; 
        }
    }

}

function is_subprono_selected(){

    var i=0;
    var val_return = [];
    val_return[0] = true;
    var tab_prono = [];
    var test;


    for(i= 0; i < $('div.sub_prono').children().length; i++){

        if(i>0){

            test = detect_checked_option($('div.sub_prono').children().eq(i));
            val_return[0] = val_return[0] && test[0];
            tab_prono.push(test[1]);

        }
    }

    val_return[1] = tab_prono;

    return val_return;

}

function detect_checked_option(parent_){

    var val_return = [];
    val_return[0] = false;

    var parent_local = parent_.children('div').eq(0);
    var radio_1;
    var radio_2;
    var radio_text;
    

            radio_1 = parent_local.children('div').eq(1).children('span').eq(0).children('input:radio').eq(0);
            radio_2 = parent_local.children('div').eq(2).children('span').eq(0).children('input:radio').eq(0);
            
            if((!radio_1.is(':checked')) && (radio_2.parent().next().val() != "")){

                radio_text = remove_last_dash(radio_2.parent().next().val());

                val_return[0] = true;
                val_return[1] = radio_text;
            }
            else{

                radio_text = radio_1.parent().next().val();

                val_return[0] = true;
                val_return[1] = radio_text;
            }
     
    return val_return;
}

function end_popover_on_subprono(){

    $('div.sub_prono').find('input:radio').each(function(){

        $(this).on(

        {

            'change': function(e){

                $('div.sub_prono').popover('hide');

            }
        }
    )    
})
}

function clean_form(){

    $('body').find('input:text').each(function(){

        $(this).val("");
    })

    $('body').find('input:radio').each(function(){

        $(this).prop("checked", false);
    })

    $('body').find('input:checkbox').each(function(){

        $(this).prop("checked", false);
    }) 
    
    $('body').find('textarea').each(function(){

        $(this).val("");
    })


}

function remove_last_dash(chaine){

    var tab = chaine.split('-');
    var return_str = tab.join('-');


    return return_str;
}


function load_info_prono(){

    var id_prono = "";
     
    var msg_box = '';
    var comment_box = '';
    var quinte_box = '';
    var quarte_box = '';
    var tierce_box = '';
    var couple_box = '';
    var dsurq_box = '';
    var coupsur_box =''; 
    //var tab_response = {};
    //see commentaire and sub_prono
    $('table.list_prono > tbody > tr').each(function(){

        $(this).children('td').eq(13).on({

            'click': function(e){

                

                id_prono = $(this).parent().children('td').eq(0).text();
                $('#list_prono > div > div > .modal-body > .id_prono > span').text(id_prono);

                
                msg_box = '#list_prono > div > div > .modal-body > .message > h4';
                comment_box = '#list_prono > div > div > .modal-body > .comment_zone > p';
                quinte_box = '#list_prono > div > div > .modal-body > .prono_zone > .quinte > span';
                quarte_box = '#list_prono > div > div > .modal-body > .prono_zone > .quarte > span';
                tierce_box = '#list_prono > div > div > .modal-body > .prono_zone > .tierce > span';
                couple_box = '#list_prono > div > div > .modal-body > .prono_zone > .couple > span';
                dsurq_box = '#list_prono > div > div > .modal-body > .prono_zone > .dsurq > span';
                coupsur_box = '#list_prono > div > div > .modal-body > .prono_zone > .coupsur > span';
                
                get_and_set_Info_prono(id_prono,
                                        msg_box,
                                        comment_box,
                                        quinte_box,
                                        quarte_box,
                                        tierce_box,
                                        couple_box,
                                        dsurq_box,
                                        coupsur_box);

                

            }
        })
    })
}



function delete_prono(){

    var id_prono = "";
    var message = "Something went wrong!";
    //delete prono
    $('.list_prono tbody tr').each(function(){

        $(this).children('td').eq(14).on({

            'click': function(e){

                

                id_prono = $(this).parent().children('td').eq(0).text();

                $('#delete_prono > div > div > .modal-body > .id_prono > span').text(id_prono);
                $('#delete_prono > div > div > .modal-body > .reference_prono > span').text($(this).parent().children('td').eq(1).text());
                //$('#delete_prono > div > div > .modal-body > .pronostique > span').text($(this).parent().children('td').eq(8).text());
                $('#delete_prono > div > div > .modal-body > .pronostique > span').text("Consultez directement dans le tableau");
                $('#delete_prono > div > div > .modal-body > .date > span').text($(this).parent().children('td').eq(10).text());
                $('#delete_prono > div > div > .modal-body > .heure > span').text($(this).parent().children('td').eq(11).text());
                
                $('#delete_prono').modal('show');

                $('#delete_prono > div > div > .modal-body > .delete > input:button').on({

                    'click':function(e){

                        del_prono(id_prono);
                        
                    }
                })
            }
        })
    })
}

function update_prono(){

    var id_prono = ""
    var comment = ""
    var arrivee = ""
    var message = "Something wrong!";
    //update prono
    $('.list_prono tbody tr').each(function(){

        $(this).children('td').eq(15).on({

            'click': function(e){
                
                id_prono = $(this).parent().children('td').eq(0).text()
                //comment = get_Info_prono['commentaire'];
                $('#update_prono > div > div > .modal-body > .prono_zone > .id > span').text(id_prono);
                $('#update_prono > div > div > .modal-body > .prono_zone > .arrivee input:text').val($(this).parent().children('td').eq(9).text());
                
                $('#update_prono').modal('show');

                $('#update_prono > div > div > .modal-body > .save > input:button').on({

                    'click':function(e){

                       
                        id_prono = $('#update_prono > div > div > .modal-body > .prono_zone > .id > span').text();
                        comment = $('#update_prono > div > div > .modal-body > .comment_zone > textarea').val();
                        arrivee = $('#update_prono > div > div > .modal-body > .prono_zone > .arrivee > input:text').val();


                        upd_prono(id_prono, comment, arrivee);    
                        
                    }
                })
            }
        })

    })
}

function get_and_set_Info_prono(id_prono,
    msg_box,
    comment_box,
    quinte_box,
    quarte_box,
    tierce_box,
    couple_box,
    dsurq_box,
    coupsur_box){

    var myNamespace = {
        xhr : new XMLHttpRequest(),
        data_to_send : new FormData(),
        reponse_ : {},
        message : 'something went wrong',

        init: function(xhr, data_to_send, reponse_, message){

        xhr = new XMLHttpRequest(),
        data_to_send = new FormData(),

        data_to_send.append('action', 'list');
        data_to_send.append('id', id_prono);
        
        xhr.open('POST', 'http://localhost/infoprono.php');
        xhr.send(data_to_send);
            
        
        xhr.onreadystatechange = function(){

            if(xhr.readyState == 4){
                    
                    reponse_ = JSON.parse(xhr.responseText);

                    message = reponse_['message'];
                    
                    if(reponse_['statut'] == '200_OK'){


                        $(msg_box).text(message);
                        $(comment_box).text(reponse_['commentaire']);
                        $(quinte_box).text(reponse_['quinte']);
                        $(quarte_box).text(reponse_['quarte']);
                        $(tierce_box).text(reponse_['tierce']);
                        $(couple_box).text(reponse_['couple']);
                        $(dsurq_box).text(reponse_['dsurq']);
                        $(coupsur_box).text(reponse_['coupsur']);

                        $('#list_prono').modal('show');
                        
                    }

                    else{

                        $(msg_box).text(message);
                        $(comment_box).text("erreur de chargement du commentaire");
                        $(nom_course).text('non_dispo');
                        $(quinte_box).text('non_dispo');
                        $(quarte_box).text('non_dispo');
                        $(tierce_box).text('non_dispo');
                        $(couple_box).text('non_dispo');
                        $(dsurq_box).text('non_dispo');
                        $(coupsur_box).text('non_dispo');
                        $('#list_prono').modal('show');

                    }
                    
                    
                }

                
        }
                
        
    }

    }
    myNamespace.init(myNamespace.xhr, myNamespace.data_to_send, myNamespace.reponse_, myNamespace.message);

}
    

function upd_prono(id_prono, commentaire, arrivee){

    var xhr = new XMLHttpRequest();
    var data_to_send = new FormData();

    var message = "Something went wrong with delete";
    var reponse;

    data_to_send.append('action', 'update');
    data_to_send.append('id', id_prono);
    data_to_send.append('commentaire', commentaire);
    data_to_send.append('arrivee', arrivee);

    xhr.open('POST', 'http://localhost/infoprono.php');
    xhr.send(data_to_send);

    xhr.onreadystatechange = function(){

        if(xhr.readyState == 4){

    
            try{

                reponse = JSON.parse(xhr.responseText);
                if(
                    reponse['statut'] == "200_OK"
                ){

                    message = reponse["message"];
                    
                }
                $('#update_prono > div > div > .modal-body > .message > h4').text(message);
                
            }

            catch(e){


            }
        }

    }
}


function del_prono(id_prono){

    var xhr = new XMLHttpRequest();
    var data_to_send = new FormData();
    var message = "Something went wrong with delete";
    var reponse;

    data_to_send.append('action', 'delete');
    data_to_send.append('id', id_prono);
    xhr.open('POST', 'http://localhost/infoprono.php');
    xhr.send(data_to_send);

    xhr.onreadystatechange = function(){

        if(xhr.readyState == 4){

            try{

                reponse = JSON.parse(xhr.responseText);
                if(
                    reponse['statut'] == "200_OK"
                ){

                    message = reponse["message"];
                    
                }
                $('#delete_prono > div > div > .modal-body > .message > h4').text(message);
                
            }

            catch(e){


            }
        }

    }
}