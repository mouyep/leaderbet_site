$(document).ready(function () {
      
    load_ref_prono();

    revel_numbers('.day_selection_', 6)

    revel_numbers('.coup_sur_', 1);

    revel_numbers('.couple_', 2);

    revel_numbers('.2sur4_', 2);

    revel_numbers('.tierce_', 3);

    
    (function(){
        setInterval(function(){

            
            $('.history_ > div > table > tbody tr > th').eq(14).css({'visibility':'hidden'});
            
            $('.history_ > div > table > tbody >tr').each(function(){
                
                $(this).children('td').eq(14).css({'visibility':'hidden'});
                
                })

            $('.history_ > div > table > tbody > tr > th').eq(15).css({'visibility':'hidden'});
            
            $('.history_ > div > table > tbody > tr').each(function(){
                
                $(this).children('td').eq(15).css({'visibility':'hidden'});
                
            })
            
            
        }, 30000);

    })(); 
   
})

function revel_numbers(titre, nb_items){

    var color='';

    switch(titre){

        case '.day_selection_': {color = "yellow"; break;}
        
        case '.coup_sur_': {color = "rgb(100,100,255)"; break;}
        
        case '.couple_': {color = "gray"; break;}
        
        case '.2sur4_': {color = "silver"; break;}
        case '.tierce_': {color = "orange"; break;}
        default : {color = "white"; break;}
        
    }

    for(i=0, taille= parseInt(nb_items); i<taille; i++){

        $(titre +(i+1)+'x').on({

            'click': function(e){

                // alert("vous avez clique");
                // alert($(this).html());
                $(this).css(
                    {
                        "visibility":"hidden",
                        'display':'none'
                        
                    }
                );
                $(this).next().css(
                    {
                        'visibility':'visible',
                        'display':'block',
                        'color':color,
                    }
                );
            }
        });
    }
}


function display_none(){


    $('table.prono_list > tbody tr td').eq(14).css(

        {
            "display":"none"
        }
    );

    $('table.prono_list > tbody tr td').eq(15).css(

        {
            "display":"none"
        }
    );
}

function load_ref_prono(){

    var xhr = new XMLHttpRequest();
    var data_to_send = new FormData();
    var reponse = "";
    setInterval(function(){
        
        data_to_send.append('action', 'list_ref');
        xhr.open('POST', 'http://localhost/infoprono.php');
        xhr.send(data_to_send);


        xhr.onreadystatechange = function(){

            if(xhr.readyState == 4){

                reponse = JSON.parse(xhr.responseText);
                

                if(reponse["statut"] == "200_OK"){

                    $('#commentaire p').text(reponse['commentaire']);

                    $('#typejeu > div > h1').text(reponse['type_jeux']);
                     
                    $('#nom_course > div > h3').text(reponse['nom_course']);
                    //mise a jour du lieu de la course
                    $('#nom_course > div > span').text(reponse['lieu_course']);

                    $('#time > div > h3').text(reponse['date_']);
                    //mise a jour du lieu de la course
                    $('#time > div > span').text(reponse['heure_']);
                    
                    var tierce_tab = String(reponse['tierce']).split('-');
                    //mise a jour du tierce
                    for(i=0; i<3; i++){


                        $('#tierce').children('h4').eq((2*i)+1).text(tierce_tab[i])
                    }

                    var dsurq_tab = String(reponse['dsurq']).split('-');
                    //mise a jour du 2 sur 4

                    for(i=0; i<2; i++){

                            $('#dsurq').children('h4').eq((2*i)+1).text(dsurq_tab[i])
                    }

                    var couple_tab = reponse['couple'].split('-');
                    //mise a jour du 2 sur 4
                    for(i=0; i<2; i++){


                            $('#couple').children('h4').eq((2*i)+1).text(couple_tab[i]);
                    }

                    var selection_tab = reponse['pronostic'].split('-');
                    //mise a jour du 2 sur 4
                    for(i=0; i<8; i++){


                            $('#main').children('h4').eq((2*i)+1).text(selection_tab[i]);
                    }

                    var coupsur = reponse['coupsur'];
                    //mise a jour du coup sur
                
                            $('#coupsur').children('h4').eq(1).text(coupsur);
                    
                }

                else{


                }

            }
        }
    }, 30000)
}