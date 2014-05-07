var segons = 18;
var temps;
var tiempo = "";
var widthx;
var heightx;
var x = 0;
var y = 0;
var duration = 80;
var offset = 40;


function inicio7(){
    $("#portada").hide();
    $("#marcadores").fadeIn();
    $("#tiempo2").fadeIn();
    $("#plantilla").addClass('bosque');
    cronometre();
}

function cronometre(){
	
	segons--;
	if (segons == 0){

            $('#tiempo2').html('0');
      
            document.location="../gameover.php"; 
            
        }else if(segons < 6){
            $("#tiempo2").css({
               color:'red'
            });
            
             
            
            tiempo =  ""+segons;
            $('#tiempo2').html(tiempo);
            
        }else{
            $("#tiempo2").css({
               color:'white' 
            });
            
            tiempo = ""+segons;
            $('#tiempo2').html(tiempo);
        }
	
	temps = setTimeout("cronometre()",1000);
}

$(function(){
    $("#extintor").click(function(){
        widthx = $("#img_fuegolvl7").width();
        heightx = $("#img_fuegolvl7").height();

        widthx = widthx - 4;
        heightx = heightx - 4;
        x = x + 2;
        y = y + 4;


        $("#img_fuegolvl7").css({
            width : widthx,
            height : heightx,
            'margin-top' : y,
            'margin-left' : x
        });

        if(heightx == 0){
            var nivel = $("#getLvl").val();	
            nivel++;
			clearTimeout(temps);
            animacio_nivel(nivel);
        }
    });
    
    $("#petrol").click(function(){
        widthx = $("#img_fuegolvl7").width();
        heightx = $("#img_fuegolvl7").height();

        widthx = widthx + 4;
        heightx = heightx + 4;
        x = x - 2;
        y = y - 4;
        
        $("#img_fuegolvl7").css({
            width : widthx,
            height : heightx,
            'margin-top' : y,
            'margin-left' : x
        });
        
        if(heightx > 420){
           $("#petrol").hide();
           $("#img_fuegolvl7").hide();
           $("#extintor").hide();
           $("#casalvl7").hide();
           $("#plantilla").removeClass('bosque');
           $("#plantilla").addClass('bosque_quemado');
           $("#piro").show();
        }
        
    });

});