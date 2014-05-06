
function restar_vida(){

    $("#sas").show();
    $("#vida_a").show();
    $("#vida_a").addClass('rotar').after(function(){
        $("#vida_a").animate({
            'width':'300px',
            'height':'300px'
        }, 500, function(){
             $("#sas").fadeOut(1000, function(){
                $("#vida_a").removeClass('rotar').after(function(){
                      $("#vida_a").animate({
                            'width':'0px',
                            'height':'0px'
                        }, 500);

                 }); 
             });




        });
    });     
        
}

 $(window).load(function() {
     $("#plantilla").fadeIn();
     $("#loading").fadeIn(7000, function(){
        
        document.location= "pantalla.php";

    });

    
     $("#urano").fadeIn(2000);
     $("#urano").css("left", $("#urano").position().left).circulate({
        sizeAdjustment: 160,
        speed: 5500,
        width: -820,
        height: 50,
        loop: true,
        zIndexValues: [1, 51, 51, 1]
    });
    
    $("#tierra").fadeIn(2000);
    $("#tierra").css("left", $("#tierra").position().left).circulate({
        sizeAdjustment: 160,
        speed: 6500,
        width: -820,
        height: 50,
        loop: true,
        zIndexValues: [1, 52, 52, 1]
    });
    
    $("#luna").fadeIn(2000);
    $("#luna").css("left", $("#luna").position().left).circulate({
        sizeAdjustment: 160,
        speed: 5000,
        width: -820,
        height: 50,
        loop: true,
        zIndexValues: [1, 54, 54, 1]
    });
    
    $("#marte").fadeIn(2000);
    $("#marte").css("left", $("#marte").position().left).circulate({
        sizeAdjustment: 160,
        speed: 8000,
        width: -820,
        height: 50,
        loop: true,
        zIndexValues: [1, 52, 52, 1]
    });
    
    $("#jupiter").fadeIn(2000);
    $("#jupiter").css("left", $("#jupiter").position().left).circulate({
        sizeAdjustment: 160,
        speed: 13500,
        width: -820,
        height: 50,
        loop: true,
        zIndexValues: [1, 51, 51, 1]
    });
    
    $("#saturno").fadeIn(2000);
    $("#saturno").css("left", $("#saturno").position().left).circulate({
        sizeAdjustment: 160,
        speed: 9500,
        width: -820,
        height: 50,
        loop: true,
        zIndexValues: [1, 53, 53, 1]
    });
     
 });

$(function(){

/* Obrir recovery*/

    $("#recovery").click(function(){
        $("#form_entrada").slideUp(500,function(){
             $("#form_recovery").slideDown();
        });
    });
    
    $('body').on("click", "#back_recovery", function() {
        $("#form_recovery").slideUp(500, function(){
             $("#form_entrada").slideDown();
        });
    });
    
//     $("#recovery").click(function(){
//        $("#form_entrada").slideUp().after(function(){
//             $("#form_recovery").slideDown();
//        });
//    });

/*Fi obrir recovery*/
 
/* Comprovar usuari */

   $("#BtForm").click(function() {
	var nom= $("#NomForm").val();
	var pw= $("#PwForm").val();
        if(nom === '' || pw === ''){
            var duration = 80;
            var offset = 40;

            $('#test').animate({marginLeft:('-='+ offset)}, duration,function(){
                 $(this).animate({marginLeft:('+=' + offset*2)}, duration, function(){
                    $(this).animate({marginLeft:('-=' + offset*2)}, duration, function(){
                         $(this).animate({marginLeft:('+='+ offset)}, duration);
                    });
                 });
              });  
        }else{

	$.ajax({
		
		type: "post",
		data: {nom: nom, pw: pw},
		url: "formulariUsuari.php",
		success:function( dada ) {
                    if (dada=="1"){              
                 
                        var duration = 300;
                        var offset = 80;
                        $('#test').animate({'max-width':'480px', width:('+=' + offset), 
                                                    marginLeft:('-=' + offset/2), height:('+=' + offset), 
                                                    marginTop:('-=' + offset/2), opacity:0}, duration, function(){
                         document.location= "loading.php";                         
                         });    
				 
                    }else{              
                              
                        var duration = 80;
                        var offset = 40;

                        $('#test').animate({marginLeft:('-='+ offset)}, duration,function(){
                             $(this).animate({marginLeft:('+=' + offset*2)}, duration, function(){
                                $(this).animate({marginLeft:('-=' + offset*2)}, duration, function(){
                                     $(this).animate({marginLeft:('+='+ offset)}, duration);
                                });
                             });
                        });      
                    }
			
		}
		
            });
        
         }
	
    });
    
    /*Fi enviar dades a la base de dades x comprobar usuari*/
    
    /*Comprovar recovery*/
    
    $("#BtRecoveryAjax").click(function(){
       var mail = $("#MailForm").val();
       var recovery = $("#RecoveryForm").val();

       if(mail === '' || recovery === ''){
           
           $("#RecoveryForm").val('Dades incorrectes');
           $("#MailForm").val('Dades incorrectes');
      
       }else{
           
            $.ajax({
                type: "post",
                data: {mail: mail, recovery: recovery},
                url: "formulariRecovery.php",
                success:function( dada ) {
                
                    if(dada==='0'){
                         $("#RecoveryForm").val('Dades incorrectes');
                         $("#MailForm").val('Dades incorrectes'); 
                       
                    }else{
                         $('#form_recovery').fadeOut(500, function(){
                            $('#form_recovery').show().html("<div id='correct_message'></div>");
                            $('#correct_message').html("L'hi hem enviat un correu electrònic amb les seves dades.</br></br>"+dada+"</br></br><i class='fa fa-star fa-spin'></i><i class='fa fa-star fa-spin'></i><i class='fa fa-star fa-spin'></i><i class='fa fa-star fa-spin'></i><i class='fa fa-star fa-spin'></i></br></br> <span  id='back_recovery'>Formulari d'entrada</span>").hide().fadeIn(1500); 
                        });
                    }
                }
           });
       }
        
    });
    
    /*Fi comprovar recovery*/


    /* Marcando respuestas*/
    
    var estilo_body = $('body').attr('class');
    
    $( ".bt1, .bt3" ).mousedown(function() {
        $( this ).addClass("marcando_left_"+estilo_body);
    }).mouseup(function() {
        $( this ).removeClass( "marcando_left_"+estilo_body);
    });
  
    $( ".bt1, .bt3" ).mouseleave(function() {
        $( this ).removeClass( "marcando_left_"+estilo_body );
    });
  
    $( ".bt2, .bt4" ).mousedown(function() {
        $( this ).addClass("marcando_right_"+estilo_body);
    }).mouseup(function() {
        $( this ).removeClass( "marcando_right_"+estilo_body );
    });
  
    $( ".bt2, .bt4" ).mouseleave(function() {
        $( this ).removeClass( "marcando_right_"+estilo_body );
    });
  
  /*fi marcadores respuestas */
  
  
  /*Casilla fallo restar vidas*/
  
    $('body').on("click", "[name=no]", function() {
        var vidas = $('#videsbd').val();
        if(vidas>=0){
            restar_vida();
            $("#vidas_rest").removeClass("cVidas_rest"+vidas);
            vidas--;
            $('#videsbd').val(vidas);
        }
        
        $.ajax({	
            type: "post",
            data: {vidas: vidas},
            url: "../restarVidesComodins.php",
            success:function( dada ) {
                $ ("#vidas_rest").addClass("cVidas_rest"+dada).after(function(){
                    if(dada==0){
                        alert("gameover");//mirar pork no hace el fadeIn en gameover
                        document.location="../gameover.php";  
                    }
                });
            }
        });

    });
 
  /*Final fallo casillas restar vidas*/
  
  /*Usar comodin*/
      
    $("#vidas_icons").click(function(){
        
        var comodinsActu = $("#getComodins").val();
        var nivel = $("#getLvl").val();
        if(comodinsActu>0){
            
            $ ("#vidas_icons").removeClass("icono_vidas"+comodinsActu);
            comodinsActu--;
            
            $.ajax({
                type: "post",
                data: {comodins: comodinsActu},
                url: "../restarVidesComodins.php",
                success: function(dada) {
                    //alert(dada);
                }
            });
            
            $ ("#vidas_icons").addClass("icono_vidas"+comodinsActu).after(function(){
                nivel++;
                document.location="lvl_"+nivel+".php";
            });
            
        }
          
    });
 
  /*Fi usar comodin*/
  
  
  /*Comensar a jugar*/
  
    $("[name=jugar]").click(function(){

        document.location="levels/lvl_1.php"; 
       
    });
    
    /*fi comensar jugar*/
  
  
  /*AVANÇAR NIVELL*/

    $("[name=si]").click(function(){
        
        var nivel = $("#getLvl").val(); 
        alert(nivel);
        nivel++;
        alert(nivel);
        document.location="lvl_"+nivel+".php";   
        
    });
    
    
   //BOTO SORTIR 
   
    $('body').on("click", "#bt4", function() {
        
        $("#plantilla").fadeOut(300, function(){
            document.location= "index.php?reinicia";
        });
			
    });
    
    //Fi boto sortir
    
    //gave_over botons
    
    $("#try_again").click(function(){
        document.location = "pantalla.php";
    });
    
    $("#sortir_game").click(function(){
        document.location = "index.php";
    });
    
    //fi game_over botons
    
    
    //restar vida animacion
    

    
    
    
    
    
});
  
