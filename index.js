// //Mise en forme


// (function (){ //pour la mise en forme et l'adaptation du header
//     var my_body = document.getElementsByTagName("body")[0]

   
//     var first_gen_nodes = my_body.childNodes;
//     var first_gen_width;
//     var first_gen_height;
//     var display_;
//     var enfant;
//     var id;
//     var hauteur;
//     var largeur;
//     var obj;
//     var taille = 0;
//     var i=0;

//     for(i=0, taille = first_gen_nodes.length; i<taille; i++){

//         alert("tailles enfants = "+taille);
//         //alert("type_id" + toString(id));

//         if(first_gen_nodes[i].nodeType == 1 && first_gen_nodes[i].innerHTML!==""){

//             id = first_gen_nodes[i].getAttribute("id");
//             alert("id = " +id)

//             //alert("nodetype = "+ first_gen_nodes[i].nodeType);
//             //alert("nodeContent = "+ first_gen_nodes[i].innerHTML);
            
//             obj = document.getElementById(id);
//             hauteur = getComputedStyle(obj, null).height;
//             largeur = getComputedStyle(obj, null).width;
//             //alert("hauteur= "+taille);

//             first_gen_height = parseInt(hauteur);
//             first_gen_width = parseInt(largeur);
//             display_ = getComputedStyle(obj, null).display;
//             enfant = obj.firstElementChild;

//             alert("first_child = "+enfant.innerHTML);

            
            
//             while(enfant.innerHTML !=""){

//                 //alert(display_);
//                 if(display_ == "flex" || display_ =="inline"){
                    
//                     alert(first_gen_height);
//                     enfant.style.top = ((first_gen_height)/20)+"px";
//                     enfant.style.height = ((first_gen_height*9)/10)+"px";
//                     enfant = enfant.nextElementSibling;
                
//                 }
//                 else{

//                     enfant.style.width = ((first_gen_width*9)/10)+"px";
//                     enfant.style.marginLeft = ((first_gen_width)/20)+"px";
//                     enfant = enfant.nextElementSibling;
//                 }
                    
//         }
//     }
    

            

//     }
// })();

// //Pour l'adaptation du menu de navigation
// (function(){

//     var nav = document.getElementById("navigation");

//     alert(nav.parentNode.childNodes[1]);

// })();

