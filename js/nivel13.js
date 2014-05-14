 var obj1 = "../css/galery/level13/obj1.png";
 var obj2 = "../css/galery/level13/obj2.png";
 var obj3 = "../css/galery/level13/obj3.png";
 var obj4 = "../css/galery/level13/obj4.png";
 
 var num;
 var objecte;
 var objencertats=0;
 var tipus;
 var objtotal=1;
 var aux=0;
 var obj = Array(0,0,0,0);
 
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

  
    
    while (sortir==false){

        while(x<obj.length){
            
         //   alert("x "+x);
//            alert("num "+num);
         //   alert("obj  "+obj[0]);
         
            if(obj[x]==num && aux<=3 ){
                    num=  Math.floor((Math.random()*4)+1);
                    x=0;
                }else{
                    x++;
                }
            
           
        }
       
        
        sortir=true;
    
    }
    
    //alert("num "+num);
    
    obj[aux]=num;
   // alert(obj[aux]);
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
        
        if(tipus<=3){
           
            objtotal++;
            colocarobj();
            objencertats++;
        }else{
            objtotal++;          
            colocarobj();
            
        }
    
        if(objencertats==4){
            nivelcompletat();
         }else if(objtotal>=4){
             alert(hola);  
             nivelperdut();
         }
       
 	
}

function papecuadrada(ev){
	ev.preventDefault();
         
        objecte.hide();
        
      
        if(tipus>3){
           
            objtotal++;
            colocarobj();
            objencertats++;
        }else{
            objtotal++;
            objecte.hide();
            colocarobj();
        }
        
        if(objencertats==4){
            nivelcompletat();
         }else if(objtotal>=4){     
             nivelperdut();
         }
        
        
}

function nivelperdut(){

        var vidas = $('#videsbd').val();
        
        for (var z=0;z<obj.length;z++){
            obj[z]=0;
            
        }
        
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
        
        objtotal=1;
        objencertats=0;
        aux=0;
       
 }

function  nivelcompletat(){
        var nivel = $("#getLvl").val(); 
        nivel++;
        animacio_nivel(nivel);     
}