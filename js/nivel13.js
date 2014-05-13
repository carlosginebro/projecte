 var obj1 = "../css/galery/level13/obj1.png";
 var obj2 = "../css/galery/level13/obj2.png";
 var obj3 = "../css/galery/level13/obj3.png";
 var obj4 = "../css/galery/level13/obj4.png";
 
 var num=1;
 var objecte;
 var objencertats=0;
 var tipus;

$(function(){
    
    colocarobj();
    
});


function allowDrop(ev){
	ev.preventDefault();
        
}

function drag(ev){
	ev.dataTransfer.setData("obj",ev.target.id);
}

function drop1(ev){
	ev.preventDefault();
        
        objecte.hide();
        
        if(tipus<=3){
           
            num++;
            colocarobj();
            objencertats++;
        }else{
             num++;
            objecte.hide();
            colocarobj();
            
        }
       
        if(objencertats==4){
            nivelcompletat();
         }else if(num>4){
             nivelperdut();
         }
       
       
        
        
        
       // alert("olaaaaaaaaa");
	
}

function drop2(ev){
	ev.preventDefault();
         
           objecte.hide();
        num++;
        
        if(tipus>3){
           
         
            colocarobj();
            objencertats++;
        }else{
            objecte.hide();
            colocarobj();
            
        }
        
        if(objencertats==4){
            nivelcompletat();
         }else if(num>4){
             nivelperdut();
         }
        
        
}

function nivelperdut(){
    
    
        var vidas = $('#videsbd').val();

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
        
        num=1;
        objencertats=0;
       colocarobj();
    
 }

function  nivelcompletat(){
    
 
        var nivel = $("#getLvl").val(); 
        nivel++;
        animacio_nivel(nivel);
        
}

function colocarobj(){
    
    num=  Math.floor((Math.random()*4)+1);
    
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
