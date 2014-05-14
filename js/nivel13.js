 var obj1 = "../css/galery/level13/obj1.png";
 var obj2 = "../css/galery/level13/obj2.png";
 var obj3 = "../css/galery/level13/obj3.png";
 var obj4 = "../css/galery/level13/obj4.png";
 
 var num;
 var objecte;
 var objencertats=0;
 var tipus;
 var objtotal=0;
 var aux=0;
 var obj = [];
 var midaarray= 4;
var entrar = true;
 var entrarx = true;
$(function(){
    
    colocarobj();
    
});


function allowDrop(ev){
	ev.preventDefault();
        
}

function drag(ev){
	ev.dataTransfer.setData("obj",ev.target.id);
}



function colocarobj(){
 

    var sortir=false;
    var x=0;
  
    
  
    num= Math.floor((Math.random()*4)+1);

//        alert(aux);
//    alert(objtotal);
//    alert(objencertats);
        while(x<midaarray && !sortir){
//            alert("holas");
            if(x == aux){
//           
               
                obj[aux] = num;
                sortir = true;
            }
         
                if(obj[x]==num && !sortir){
                    num=  Math.floor((Math.random()*4)+1);
                    x=0;
                }else{
                    x++;
                }
            
           
        }   
    
    
    

    aux++;
   
    var str= "obj"+num;
    tipus = str.substr(3, 3);
    
    
    objecte = $('<div>').attr({'draggable':'true', 'ondragstart':'drag(event)' }).css({
	'background-image': "url('../css/galery/level13/obj"+num+".png')",
        //'background-color': 'red',
	'background-size': 'contain',
        'background-repeat': 'no-repeat',
        'position': 'absolute',
         width: '90px',
         height: '90px',
        'top':  '150px',
	'left': '650px'
       
        
   });
 
    $('#plantilla').append(objecte);

}

function peperedonda(ev){
	ev.preventDefault();
        
        objecte.hide();
        entrar = true;
        if(tipus<=3){
           
            objtotal++;
            objencertats++;
            
            if(objtotal == 4){
            
            if(objencertats==4){
         
                entrar = false;
                nivelcompletat();
             }else if(objencertats<4){
                 entrar = false;
                nivelperdut();
             }
             
         }
            if(entrar)
            colocarobj();
            
        }else{
            objtotal++;
            
            if(objtotal == 4){
            
            if(objencertats==4){
                nivelcompletat();
             }else if(objencertats<4){
        
                 nivelperdut();
             }
             
         }else{
            colocarobj(); 
         }

            
        }
        
       
 	
}

function papecuadrada(ev){
	ev.preventDefault();
         
        objecte.hide();
        entrarx = true;
      
        if(tipus>3){          
            objtotal++;
            objencertats++;
            
            if(objtotal == 4){
            
            if(objencertats==4){              
                entrarx = false;
                nivelcompletat();
             }else if(objencertats<4){
                entrarx = false;
                nivelperdut();
             }
             
         }
            if(entrarx)
            colocarobj();
        }else{
            objtotal++;
            
            if(objtotal == 4){
            
                if(objencertats==4){
                    nivelcompletat();
                 }else if(objencertats<4){

                     nivelperdut();
                 }
             
         }else{
            colocarobj(); 
         }
         
        
        }
        
        
        
        
}

function nivelperdut(){

        var vidas = $('#videsbd').val();
        
//        for (var z=0;z<obj.length;z++){
//            obj[z]=0;
//            
//        }
        
        if(vidas>0){
            restar_vida(vidas);
            $("#vidas_rest").removeClass("cVidas_rest"+vidas);
            
            vidas--;
            $('#videsbd').val(vidas);
        }
        
        $.ajax({	
            type: "post",
            data: {vidas: vidas},
            url: "../restarVidesComodins.php",
            success:function( dada ) {
                
                $ ("#vidas_rest").addClass("cVidas_rest"+dada);
                 
            }
        });
        
        objtotal=0;
        objencertats=0;
        aux=0;
       
       colocarobj();
 }

function  nivelcompletat(){
        var nivel = $("#getLvl").val(); 
        nivel++;
        animacio_nivel(nivel);     
}