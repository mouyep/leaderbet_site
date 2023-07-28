
//var contacts = document.getElementById("contacts");
(function(){
    var contact = document.querySelector('#contacts div');
    var elmt = document.querySelector('#contacts div');
    var width_elmt = getComputedStyle(elmt, null).width;
    var width_parent = getComputedStyle(contact, null).width;
    var left_parent = getComputedStyle(contact, null).marginLeft;

    var elmt;
    var continue_ = true;
    var inner_ = "";
    var reste;
    var i = 0;
    var j = 0;
    var id1;
    var id2;
    var deficit;
    
    
    do{

        alert("contact = "+contact);

        //alert();

        // try{
        //     elmt = contact.firstElementChild.firstElementChild;
        // }
        // catch(e){
        //     console.log("erreur");
        // }
        //alert("elmt = "+elmt);
        contact.addEventListener('mouseover', (function(){

            //alert("c est entre");
            
            this.firstElementChild.firstElementChild.nextElementSibling.style.display = 'inline';
        
            this.style.width = '100%';
            this.style.marginLeft = '0%';
            
        }));

        contact.addEventListener('mouseout', (function(){

        
            this.firstElementChild.firstElementChild.nextElementSibling.style.display = 'none';
            this.style.width = width_parent; 
            this.style.marginLeft = left_parent;
            

        }));

        try{

            contact = contact.nextElementSibling;
            inner_ = contact.innerHTML;
            continue_=true;
           
        }
        catch(e){
            contact=undefined;
            continue_=false;

            alert("indefini");
            
        } 
    }while(continue_);

})();


(function(){

    var content = document.getElementById("images");
    var width_content = parseInt(getComputedStyle(content, null).width);
    var heigth_content = parseInt(getComputedStyle(content, null).height);
    var list_ = document.getElementById("defil");

    // list_.style.marginLeft = (-1)*(width_content)+"px";
    // alert("w "+width_content);
    // alert("h "+heigth_content);
    i=0;
    // list_.style.marginLeft = (-i)*(width_content)+"px";
    // if(i>=5){

    //     clearInterval(id);
    //     alert("yes");
    // }

    var id1;
    var id2
    var j = 0;
    var i=0;
    var elmt;
    var left = document.getElementById("arrowleft");
    var right = document.getElementById("arrowright");
    
    
    elmt = document.getElementById("slide1").style.backgroundColor='gray';

    setInterval(function(){

       
        if(i<4){

            
            id1 = setInterval(function(){
                //alert("mg_lft  "+getComputedStyle(list_, null).marginLeft + "j = "+j+ "i = "+i);
                
                list_.style.marginLeft = (parseFloat(getComputedStyle(list_, null).marginLeft) - (width_content/5))+"px";
                j = j+1;
                //alert("mg_lft  "+list_.style.marginLeft + "j = "+j+ "i = "+i);

                if(j>4){

                    clearInterval(id1);
                    j = 0;
                    i=i+1;
                    
                    elmt = document.getElementById("slide"+(i+1));
            
                    if(i>1 || i<5){
                        elmt.style.backgroundColor = 'gray';
                    
                        elmt.previousElementSibling.style.backgroundColor = 'black';
                    }
                    else if(i==4){

                        document.getElementById("slide1").style.backgroundColor = 'gray';
                    }
                    else{
                        elmt.style.backgroundColor = 'black';
                    }
                    
                    
                    //alert("i = "+i);
                }
            },
            100
            )
        }

        if(i >= 4){

            document.getElementById("slide1").style.backgroundColor = 'gray';
            document.getElementById("slide5").style.backgroundColor = 'black';

            i = 0;

            id2 = setInterval(function(){

                list_.style.marginLeft = (parseFloat(getComputedStyle(list_, null).marginLeft) + width_content)+"px";
                j = j+1;
                

                if(j>=4){
                    
                    clearInterval(id2);
                    j = 0;
                }
            },
            300
            )
        }

        
    },
    5000)



    var left = document.getElementById("arrowleft");
    var right = document.getElementById("arrowright");
    var defil = document.getElementById("defil");
    var content = document.getElementById("images");
    var content_width = getComputedStyle(content, null).width;



    left.addEventListener("click", function(){
        //alert("mg_left = "+parseFloat(Math.abs(parseFloat(getComputedStyle(defil, null).marginLeft))))
        //alert(" content_w = "+(4*content_width))

        if(parseFloat(Math.abs(parseFloat(getComputedStyle(defil, null).marginLeft)))<(4*parseFloat(content_width))){

            //alert("yes gauche");
            defil.style.marginLeft = parseFloat(getComputedStyle(defil, null).marginLeft) - parseFloat(content_width) +"px";
        }
        
    })

    
    right.addEventListener("click", function(){
        

        //alert("mg_right = "+parseFloat(Math.abs(parseFloat(getComputedStyle(defil, null).marginLeft))+ "content_w = "+content_width));
        if(parseFloat(Math.abs(parseFloat(getComputedStyle(defil, null).marginLeft)))>=parseFloat(content_width)){

            
            //alert("yes droit");
            defil.style.marginLeft = parseFloat(getComputedStyle(defil, null).marginLeft) + parseFloat(content_width) +"px";
        }
        
    })

    setInterval(function(){

        setTimeout(function(){

            left.style.backgroundColor = 'rgba(128,255,0,0.4)';
            right.style.backgroundColor = 'rgba(128,255,0,0.4)';
        },
        1000)

        left.style.backgroundColor = 'rgba(128,255,0)';
        right.style.backgroundColor = 'rgb(128,255,0)';

    },
    2000)

})();


(function(){


    var menu_list = document.getElementById("menu_niveau1");
    var continue_ = false;
    var parent_li;
   


    for(i=0; taille=menu_list.childNodes.length, i<taille; i++){

        

        // parent_li = menu_list.childNodes[i];
        // alert(parent_li.innerHTML);

        // parent_li.addEventListener(
            
        //     "click",
        //     function(){
        //         // var elmt

        //         // elmt = parent_li.firstElementChild;
                
        //         // while(elmt.getAttribute("className") !=="menu_niveau2"){

        //         //     elmt = elmt.nextElementSibling;
        //         // }
        //         parent_li.querySelector('menu_niveau2').style.display = 'block';
        //         img = parent_li.querySelector('img');
        //         img.setAttribute("src", "../icons/down.png");
                
        //     }
        // )

        // parent_li.addEventListener(
            
        //     "mouseout",
        //     function(){
        //         var elmt;

        //         elmt = parent_li.firstElementChild;

        //         alert("elmt "+elmt);
                
        //         while((elmt.getAttribute("className")) !=="menu_niveau2"){

        //             elmt = elmt.nextElementSibling;
        //         }
        //         elmt.style.display = 'none';
        //         img = elmt.querySelector('img');
        //         img.setAttribute("src", "../icons/up.png");
                

        //     }

        // )

        }


})();

function display_inline(elmt_list){



}



function display_block(elmt_, paddingLeft_, paddingRight_, paddingTop_, paddingBottom_, space_x, space_y){


    var nodes_ = elmt_.children;
    var taille = nodes_.length;
    alert("taille = "+taille);
    var elmt_width;
    var elmt_height;
    var new_space_x;
    var new_space_y;
    var paddingBottom_new;
    var paddingTop_new;
    var paddingLeft_new;
    var paddingRight_new;
    var child_width;
    var child_height;
    

    
    //on récupère la largeur de l'element
    elmt_width = parseFloat(getComputedStyle(elmt_, null).width);

    //on récupère la largeur de l'element
    elmt_height = parseFloat(getComputedStyle(elmt_, null).height);

    //on calcule l'espacement en abscisses
    new_space_x = (space_x/100)*elmt_width;
    
     //on calcule l'espacement en oordonnees
    new_space_y = (space_y/100)*elmt_height;

    //on clacule le padding left

    paddingLeft_new = (paddingLeft_/100)*elmt_width;
    alert("this_height = "+elmt_height);
    //on clacule le padding right
    paddingRight_new = (paddingRight_/100)*elmt_width;

    //on clacule le padding top
    paddingTop_new = (paddingTop_/100)*elmt_height;

    //on clacule le padding bottom
    paddingBottom_new = (paddingBottom_/100)*elmt_height;

    //calcul de la hauteur de chaque element enfant;
    child_height = (elmt_height/taille) - (paddingBottom_new + paddingTop_new) - (new_space_y*taille);
    alert("child_height = "+ child_height);
    //calcul de la largeur de chaque element enfant;
    child_width = elmt_width - (paddingLeft_new + paddingRight_new) - (new_space_x);

    
    //on met à jour les padding left, right, top et bottom
    elmt_.style.paddingLeft = paddingLeft_new;
    elmt_.style.paddingRight = paddingRight_new;
    elmt_.style.paddingBottom = paddingBottom_new;
    elmt_.style.paddingTop = paddingTop_new;


    
    //on positionne les élements à présent
    for(i=0; i<taille; i++){

        //pour chaque enfant, on met à jour la hauteur, la larguer
        nodes_[i].style.left = paddingLeft_new +'px'; 
        nodes_[i].style.height = child_height+'px'; 
        nodes_[i].style.width = child_width+'px';
        //alert('test_elmt_top = '+ parseFloat(getComputedStyle(nodes_[i], null).marginTop));

        if(i< (taille-1)){

            if(i==0){

            nodes_[i].style.top = paddingTop_new +'px';
            alert("paddingTop_new "+paddingTop_new);
            alert("paddingLeft_new "+paddingLeft_new);

            }


            current_place_next("block", nodes_[i], nodes_[(i+1)], 0, new_space_y);

        }

    
    }
    

}

function current_place_next(type_, current_elmt, next_elmt, space_x, space_y){


    if(type_ =="block"){

        alert("next_elmt = "+ next_elmt);
        //alert("son_suivant = "+ next_elmt.nextElementSibling);

        //next_elmt.style.top = (parseFloat(getComputedStyle(current_elmt, null).top) + parseFloat(getComputedStyle(current_elmt, null).height) + space_y)+'px';
        //alert('next_elmt.style.top = '+ (parseFloat(getComputedStyle(current_elmt, null).top) + parseFloat(getComputedStyle(current_elmt, null).height) + space_y)+'px');
        place_elmt_arround("bottom", next_elmt, current_elmt, space_x, space_y);

    }
    else{// if(type_=="inline")

        place_elmt_arround("block", next_elmt, current_elmt, space_x, space_y);
        
    }
}

function place_elmt_arround(position_, elmt_, relative_, space_x_, space_y_){

    var elmt_top = parseFloat(getComputedStyle(elmt_, null).top);
    var elmt_left = parseFloat(getComputedStyle(elmt_, null).left);

    
    var relative_height = parseFloat(getComputedStyle(relative_, null).height);
    var relative_width = parseFloat(getComputedStyle(relative_, null).width);

    
    alert("elmt "+elmt_.innerHTML);
    alert("elmt_left = "+elmt_left);
    alert("elmt_top = "+elmt_top);


    
    alert("relative_height = "+relative_height);
    alert("relative_width = "+relative_width);
    
    if(position_ == 'top'){

        elmt_.style.top = (elmt_top - relative_height - space_y_)+'px';
    }

    
    if(position_ == 'bottom'){

        elmt_.style.marginTop = (elmt_top + relative_height + space_y_)+'px';
        
    }

    
    if(position_ == 'left'){

        elmt_.style.left = (elmt_left - relative_width - space_x_)+'px';
    }

    
    if(position_ == 'right'){

        elmt_.style.left = (elmt_left + relative_width + space_y_)+'px';
    }

}

function place_elmt_inside(position_, direction_, elmt_, parent_){

    var elmt_width = parseFloat(getComputedStyle(elmt_, null).width);
    var elmt_height = parseFloat(getComputedStyle(elmt_, null).height);

    var parent_width = parseFloat(getComputedStyle(parent_, null).width);
    var parent_height = parseFloat(getComputedStyle(parent_, null).height);
    var new_height ='0px';
    var new_width ='0px';

    
    //on calcule les nouvelles hauteur et largeur du composant

    new_height = (elmt_height/100)*parent_height;
    alert('new_height = '+new_height);
    new_width = (elmt_width/100)*parent_width;
    alert('new_width = '+new_width);

    //on met à jour les nouvelles hauteur et largeur du composant
    elmt_.style.height = new_height + 'px';
    elmt_.style.width = new_width + 'px';

    if(position_ =='top'){

         //on met tout d'abord l'element en haut
        elmt_.style.top = '0px';
    }

    else if(position_ =='middle'){

        //on met tout d'abord l'element au milieu
        elmt_.style.top = ((parent_height/2) - (new_height/2)) +'px';
        
        //alert("real margin top = "+ getComputedStyle(elmt_, null).top);
    }
    else{

        elmt_.style.top = (parent_height - new_height) +'px';
        alert("yes");

    }

    //-----------------------POUR LES DIRECTIONS------------------------------
    //direction haut droite
    if(direction_=='right'){
    
        elmt_.style.right = '0px';
    }
    //direction haut gauche
    else if(direction_ == 'left'){

        elmt_.style.left = '0px';
    }
    //direction haut milieu
    else{

        
        elmt_.style.left = ((parent_width/2) - (new_width/2)) +'px';
        
    }

}


(function(){

    var al = document.getElementById("arrowleft");
    var ar = document.getElementById("arrowright");
    var slide = document.getElementById("pagination");
    var list_menu = document.getElementsByClassName('menu_niveau2')[0];
    alert("list_menu_width "+ parseFloat(getComputedStyle(list_menu, null).width));
    var pr = al.parentNode;

    place_elmt_inside("middle", "center", al, pr);
    place_elmt_inside("middle", "right", ar, pr);
    place_elmt_inside("bottom", "center", slide, pr);

    display_block(list_menu, 0, 0, 0, 0, 0, 0);

})();