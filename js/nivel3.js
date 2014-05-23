var segons = 20;
var temps;
var tiempo = "";

function cronometre(){	
	segons--;
	if (segons == 0){

            $('#tiempo1').html('0');
      
            game_over(); 
            
        }else if(segons < 6){
            $("#tiempo1").css({
               color:'red'
            });
                      
            tiempo =  ""+segons;
            $('#tiempo1').html(tiempo);
            
        }else{
            $("#tiempo1").css({
               color:'white' 
            });
            
            tiempo = ""+segons;
            $('#tiempo1').html(tiempo);
        }
	
	temps = setTimeout("cronometre()",1000);
}

$(function(){

   cronometre();
   
   $("[name=si3]").click(function(){
        
        var nivel = $("#getLvl").val(); 
        nivel++;
        clearTimeout(temps);
        animacio_nivel(nivel);
          
        
    });
   
   
});

// $(window).load(function() {
//     cronometre();
// });

