window.$vidas = {
        vidas: 3
    };

//window.$pasar_nivel = {
//        pasar_nivel: 0
//};

var pasar_nivel = 0;

// window.$nivel = {
//     nivel:1
// };

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
//   var vidas = window.$vidas.vidas;
//   var pasar_nivel = window.$pasar_nivel.pasar_nivel;
//   var nivel = window.$nivel.nivel;

 


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
    


/* Marcando respuestas*/
$( ".bt1, .bt3" )
  .mousedown(function() {
    $( this ).addClass("marcando_left");
  })
  .mouseup(function() {
    $( this ).removeClass( "marcando_left" );
  });
  
  $( ".bt1, .bt3" )
  .mouseleave(function() {
     $( this ).removeClass( "marcando_left" );
  });
  
  $( ".bt2, .bt4" )
  .mousedown(function() {
    $( this ).addClass("marcando_right");
  })
  .mouseup(function() {
    $( this ).removeClass( "marcando_right" );
  });
  
  $( ".bt2, .bt4" )
  .mouseleave(function() {
     $( this ).removeClass( "marcando_right" );
  });
  
  /*fi marcadores respuestas */
  
  
  /*Casilla fallo restar vidas*/
  $('body').on("click", "[name=no]", function() {
      if(vidas>0){
            vidas--;
        alert(vidas);
    }
    if(vidas==0){
        alert("gameover");//mirar pork no hace el fadeIn en gameover
        document.location="gameover.php";
        
        
    }
  });
 
  
  /*Final fallo casillas restar vidas*/
  
  /*Ganar flecha pasar nivel*/
  $('body').on("click", "[name=pasar_nivel]", function() {
      $ ("#vidas_icons").removeClass("icono_vidas"+pasar_nivel);
      pasar_nivel++;
      
      $ ("#vidas_icons").addClass("icono_vidas"+pasar_nivel);
    });
 
 
  /*Fin conseguir flecha pasar nivel*/
  
  /*Usar comodin*/
//  $('body').on("click", "#vidas_icons", function() {
      
      $("#vidas_icons").click(function(){
          if(pasar_nivel>0){
            $ ("#vidas_icons").removeClass("icono_vidas"+pasar_nivel);
             pasar_nivel--;
             $ ("#vidas_icons").addClass("icono_vidas"+pasar_nivel).after(function(){
                  nivel++;
                document.location="lvl_"+nivel+".php";
            });
        }
          
    });
 
  /*Fi usar comodin*/
  
  /*Comensar a jugar*/
    $("[name=jugar]").click(function(){
//         $ ("body").load(window.location.pathname +"/levels/lvl_1.php");
       document.location="levels/lvl_1.php"; 
    });
  
  
  /*AVANÇAR NIVELL*/
//  $('body').on("click", "[name=si]", function() {
//       $ ("body").load(window.location.pathname +"levels/lvl_"+nivel+".php");

    $("[name=si]").click(function(){
        var nivel = $("#getLvl").val(); 
        alert(nivel);
        nivel++;
        alert(nivel);
//         $ ("body").load(window.location.pathname +"/levels/lvl_"+nivel+".php");
        document.location="lvl_"+nivel+".php";   
        
    });
    
    
   //BOTO SORTIR 
   
    $('body').on("click", "#bt4", function() {
                        $("#plantilla").fadeOut(300, function(){
                            document.location= "index.php?reinicia";
                        });
			
    });
    
    
    
    
    
   });
  
