

function restar_vida(vidas){

    var sound = $("#getSound").val();
    
    $("#sas").show();
    $("#vida_a").show();
    $("#vidas_rest").addClass("cVidas_rest_bye"+vidas);
	
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
                                $("#plantilla").fadeOut(2000, function(){
                                    document.location="../gameover.php"; 
                                })
                                  
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

function animacio_nivel(nivel) {
    var sound = $("#getSound").val();
    $("#animacio_correcte").fadeIn(300);
    var offset = 10;
    var duration = 150;
	
    if(sound == 1){
	var audio = new Audio('../audio/ganas.mp3');
	audio.play();
    }
    $('#animacio_correcte').animate({marginLeft: ('-=' + offset)}, duration, function() {
        $(this).animate({marginLeft: ('+=' + offset * 2)}, duration, function() {
            $(this).animate({marginLeft: ('-=' + offset * 2)}, duration, function() {
                $(this).animate({marginLeft: ('+=' + offset * 2)}, duration, function() {
                    $(this).animate({marginLeft: ('-=' + offset * 2)}, duration, function() {
                        $(this).animate({marginLeft: ('+=' + offset * 2)}, duration, function() {
                            $(this).animate({marginLeft: ('-=' + offset * 2)}, duration, function() {
                                $(this).animate({marginLeft: ('+=' + offset)}, duration, function() {
                                    duration = 300;
                                    offset = 40;
                                    $('#animacio_correcte').animate({'max-width': '580px', width: ('+=' + offset),
                                        marginLeft: ('-=' + offset / 2), height: ('+=' + offset),
                                        marginTop: ('-=' + offset / 2), opacity: 0}, duration, function() {
                                                document.location="lvl_"+nivel+".php"; 
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });
    });
}

function animacio_comodin(nivel) {
     var sound = $("#getSound").val();
	var audio = new Audio('../audio/comodi.mp3');
    $("#animacio_comodin").fadeIn(300);
    $("#animacio_comodin").addClass('rotar2').delay(500).after(function() {
            if(sound == 1){
		audio.play();
            }
        $("#animacio_comodin").animate({
            'margin-left': '400px',
            'opacity': 0
        },function(){
            document.location="lvl_"+nivel+".php";
        });
            
    
    });
    
}

 $(window).load(function() {
     $("#plantilla").fadeIn();
     $("#loading").fadeIn(10000, function(){
        
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
//        if(vidas == 1){
//            alert("animacio gameover");
//            document.location="../gameover.php";  
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
                animacio_comodin(nivel);
                
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
        nivel++;
        animacio_nivel(nivel);
          
        
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

    

    
});

