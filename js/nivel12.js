
var  t;


function ratoli(){
	$('#ratoli').hide();

	$('#lab').show();		
}

function comensalvl(){
	
	var linias= " ";
	
			linias+= "		<area shape='rect' coords='5,33,6,286' onmouseover='linia()' /> ";
			linias+= "		<area shape='rect' coords='5,286,259,287' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='5,234,56,236' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='57,83,54,31' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='55,31,259,35' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='54,134,57,236' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='104,32,109,134' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='104,183,108,286' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='104,183,209,187' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='156,234,260,238' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='156,81,209,86' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='155,134,159,186' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='206,82,210,187' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='256,31,260,238' onmouseover='linia()'  />";
			
			linias+= "		<area shape='rect' coords='0,32,1,0' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='59,0,60,32' onmouseover='linia()' />";
			linias+= "		<area shape='rect' coords='0,0,60,1' onmouseover='linia()'  />";
	

	$('#porv').html(linias);
	
	
	
	
	$('#test4').fadeOut(800, function() {
		$('#lab').removeClass("img");
	
		
	});
	
	
	$('#test4').fadeIn(20, function() {
		$('#lab').addClass("img");
	
	});
	
	

	t = setTimeout('comensalvl()', 50);
	
}


function restar_vida(vidas){

    var sound = $("#getSound").val();
    
    $("#sas").show();
    $("#vida_a").show();
    $ ("#vidas_rest").addClass("cVidas_rest_bye"+vidas);
    if(sound == 1){
	var audio = new Audio('../audio/vidasmenos.mp3');
	audio.play();
    }
    $("#vida_a").addClass('rotar').after(function(){
        $("#vida_a").animate({
            'width':'450px',
            'height':'450px',
            'margin-top':'5%',
            'margin-left':'35%'
        }, 500, function(){
             $("#sas").fadeOut(1000, function(){
                $("#vida_a").removeClass('rotar').after(function(){
                      $("#vida_a").animate({
                            'width':'0px',
                            'height':'0px',
                            'margin-top':'38%',
                            'margin-left':'73%'
                        }, 500, function(){
                            if(vidas == 1){
//                        
                                 game_over();
                                  
                            }
                        });
                        
                 }); 
                 $("#sas").fadeIn(250, function(){
                     $("#sas").fadeOut(250, function(){
                          $ ("#vidas_rest").removeClass("cVidas_rest_bye"+vidas);
                     });
                 });
                
             });




        });
    });     
        
}




function linia(){

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

}



function conseguit(){
    var nivel = $("#getLvl").val(); 
    nivel++;
    animacio_nivel(nivel);	
}