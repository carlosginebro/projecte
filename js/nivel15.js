

var delay = 200;

 
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
        $("#bt15").fadeOut(500);
      
 
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
                    'background-color':'#0C0170',
                    width:'100%'
                },3000, function(){
                    
                    // funcio start();
                    
                    $("#d15temps").fadeIn(300);
                    
                    
//                    $("#msgfinal").delay(3000).show();
                    
                });
            });
       });
      
        
     
       
       
       
    });
   
   
   
   
    
});