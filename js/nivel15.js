

var delay = 3000;
var imagen;
var meteorito;
var meteorito2;
var t;
var velocidad = 2000;
var velocidad_repetir = 2000;
var segons = 25;
var temps;
var tiempo = "";
var punts = 0;


function meteoritos(){
    if(velocidad > 700){
        velocidad = velocidad-100;
        velocidad_repetir = velocidad_repetir - 100;
    }
     //Generem una posicio aleatoria per el planeta en la plantalla 
    var x = Math.floor((Math.random() * $("#plantilla").width())+410);
    var x2 = Math.floor((Math.random() * $("#plantilla").width())+410);
    var x3 = Math.floor((Math.random() * $("#plantilla").width())+410);
    var x4 = Math.floor((Math.random() * $("#plantilla").width())+410);
    
    if(x > 545){
        x = x - 50;
    }
    
    if(x2 > 545){
        x2 = x2 - 50;
    }
    
    if(x3 > 545){
        x3 = x3 - 50;
    }
    
    if(x4 > 545){
        x4 = x4 - 50;
    }
    
    meteorito = $('<span>').css({
        'position': 'absolute',
        'height': '80px',
        'width': '80px',
        'z-index': '100',
        'background-image': "url('../css/galery/asteroide.png')",
        'background-size': 'contain',
        'top':-50,
        'left':x-20
    });
    
    meteorito2 = $('<span>').css({
        'position': 'absolute',
        'height': '50px',
        'width': '50px',
        'z-index': '100',
        'background-image': "url('../css/galery/asteroide.png')",
        'background-size': 'contain',
        'top':-50,
        'left':x2,
        'display':'none'
    });
    
    $(document.body).append(meteorito);
    $(document.body).append(meteorito2);
    
    meteorito.bind('mouseover', function (e) {
        perdre(e); 
    });
    
    meteorito2.bind('mouseover', function (e) {
        perdre2(e); 
    });
    
    animacion(x, meteorito, velocidad);
    
    $("#delay_meteorito2").toggle(velocidad/2, function(){
         meteorito2.show();
        animacion(x2, meteorito2, velocidad);
    });
    
    if(velocidad < 1600){
        meteorito3 = $('<span>').css({
            'position': 'absolute',
            'height': '65px',
            'width': '65px',
            'z-index': '100',
            'background-image': "url('../css/galery/asteroide.png')",
            'background-size': 'contain',
            'top':-50,
            'left':x3,
            'display':'none'
        });
        
        $(document.body).append(meteorito3);
    
        meteorito3.bind('mouseover', function (e) {
            perdre3(e); 
        });
        
        $("#delay_meteorito3").toggle(velocidad/4, function(){
            meteorito3.show();
            animacion(x3, meteorito3, velocidad);
        });
        
    
    }
    
    if(velocidad < 1100){
        meteorito4 = $('<span>').css({
            'position': 'absolute',
            'height': '110px',
            'width': '110px',
            'z-index': '100',
            'background-image': "url('../css/galery/asteroide.png')",
            'background-size': 'contain',
            'top': -50,
            'left': x4-20,
            'display': 'none'
        }); 
        
        $(document.body).append(meteorito4);
    
        meteorito4.bind('mouseover', function (e) {
            perdre4(e); 
        });
        
        $("#delay_meteorito4").toggle(velocidad/3, function(){
            meteorito4.show();
            animacion(x4, meteorito4, velocidad);
        });
    }
    
    
    t = setTimeout('meteoritos()', velocidad_repetir);
    
}

function animacion(x, meteorito, velocidad){
    meteorito.animate({
        top:'100%'
    }, velocidad, function(){
        meteorito.hide();
       $('#asteroide2').html(parseInt($('#asteroide2').html()) + 1);
//        var punts =  $('#asteroide').html();

    });
}




function perdre() {   
    meteorito.stop();
    meteorito.hide();
     clearTimeout(t);
      clearTimeout(temps);
     game_over();
//    alert("hola");
}

function perdre2() {   
    meteorito2.stop();
    meteorito2.hide();
     clearTimeout(t);
      clearTimeout(temps);
     game_over();
//    alert("hola");
}

function perdr3() {
    meteorito3.stop();
    meteorito3.hide();
    clearTimeout(t);
     clearTimeout(temps);
    game_over();
}

function perdre4() {
    meteorito4.stop();
    meteorito4.hide();
    clearTimeout(t);
    game_over();
}

function cronometre(){
	
	segons--;
	if (segons == 0){

            $('#d15temps').hide();
      
            var nivel = $("#getLvl").val(); 
            nivel++;
            clearTimeout(temps);
            clearTimeout(t);
            animacio_nivel(nivel); 
            
        }else if(segons < 6){
            $("#d15temps").css({
               color:'red'
            });
            
             
            
            tiempo =  ""+segons;
            $('#d15temps').html(tiempo);
            
        }else{
            $("#d15temps").css({
               color:'white' 
            });
            
            tiempo = ""+segons;
            $('#d15temps').html(tiempo);
        }
	
	temps = setTimeout("cronometre()",1000);
}

 
$(function(){
    
    $("#d151").fadeIn(delay).fadeOut(delay , function(){
       $("#d152").fadeIn(delay).fadeOut(delay, function(){
           $("#d153").fadeIn(delay).fadeOut(delay, function(){
               $("#d154").fadeIn(delay).fadeOut(delay, function(){
                   $("#bt15").fadeIn();
               });
           });
       });
    });
   
   
    $("#bt15").click(function(){
        $("#bt15").hide();
      
 
        $("#plantilla").animate({
            'background-color':'#FA2D04',
            width:'100px',
            height:'50px',
            'border-width':'3px',
            'margin': '23% auto'
        },700, function(){   
            $("#plantilla").animate({
               'background-color':'#4AABFF', 
               height: '100%',
               margin: '0% auto'
            }, 500, function(){
                $("#plantilla").animate({
                    'background-color':'#030621',
                    width:'40%'
                },3000, function(){
                    $("#plantilla").css({
                        'cursor' : 'url("../css/cursor/spaceship.gif"), auto',
                        'background-image': 'url("../css/galery/fondolvl15.png")'
                    });
                    meteoritos();
                    cronometre();
                   $("#margenizk").addClass('error15').css({'z-index':2});
                   $("#margender").addClass('error15').css({'z-index':2});
                 
                    $("#d15temps").fadeIn(300);
                    $("#punts15").fadeIn(300);
                    

                    
                });
            });
       });
      
 
    });
   
   $('body').on("mouseover", ".error15", function() {
   
       game_over();
   });
   
    
});