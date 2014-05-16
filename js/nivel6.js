var segons = 20;
var temps;
var tiempo = "";

function cronometre(){
	
	segons--;
	if (segons == 0){

            $('#tiempo3').html('0');
      
            game_over(); 
            
        }else if(segons < 6){
            $("#tiempo3").css({
               color:'red'
            });
            
             
            
            tiempo =  ""+segons;
            $('#tiempo3').html(tiempo);
            
        }else{
            $("#tiempo3").css({
               color:'white' 
            });
            
            tiempo = ""+segons;
            $('#tiempo3').html(tiempo);
        }
	
	temps = setTimeout("cronometre()",1000);
}

$(function(){

   cronometre();
   
   $("[name=si6]").click(function(){
        
        var nivel = $("#getLvl").val(); 
        nivel++;
        clearTimeout(temps);
        animacio_nivel(nivel);
          
        
    });
   
   
});