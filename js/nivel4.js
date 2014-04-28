function init(){
    asteroide = $('<img>').attr({
        'src': '../css/galery/nau.gif'
    }).css({
        'position': 'absolute',
        'z-index': 75,
        top: -10,
        left: -10
    });
    $("#plantilla").fadeOut();
    //append it to body
    $(document.body).append(asteroide);

    //start dreaming
    do_dream();
}

function do_dream() {
    
	//Obtenim una imatge aleatoria dels planetas
	var imagen=  Math.floor((Math.random()*5)+1)+'.png'; 
	
	
	
    //Generem una posicio aleatoria per el planeta en la plantalla 
    var x = Math.floor((Math.random() * $("#plantilla").width())+200);
    var y = Math.floor((Math.random() * $("#plantilla").height())+80);
    
    dream = $('<span>').css({
        'position': 'absolute',
        height: '100px',
        width: '100px',
        'background-image': 'url("planeta4/'+imagen+'")',
		'background-size': 'contain',
		'background-repeat': 'no-repeat',
        top: y - 60, // Calculacio de la posició a arriba la imatge de l'asteroide
        left: x - 60 //Calculacio de la posició a arriba la imatge de l'asteroide
    });
    
    //append it to body
    $(document.body).append(dream);
    
     //bind the explode on click event
    dream.bind('click', function (e) {
        //you won
        won(e); 
        //hide the dream
        explode(e.pageX, e.pageY, $(e.target));
    });
    
    //call asteroide to chase the dream
    chase(x, y, dream);
    //dreams are endless
    window.setTimeout('do_dream()', 1200);
} 

function chase(x, y, dream) {
    //asteroide gets the dream 
    asteroide.animate({
        top: y,
        left: x 
    }, 900, function () {
        //explode the dream
        explode(x, y, dream);
        //you lose
        lose();
    });
} 

function explode(x, y, dream) {
    dream.animate({
        height: '200px',
        width: '200px',
        'border-radius': '500px',
        opacity: 0.1,
        top: y - 100,
        left: x - 100
    }, 100, function () {
        dream.hide();
    });
} 

function lose() {
    $('#angel').html(parseInt($('#angel').html()) + 1);
    var punts =  $('#angel').html();
    if(punts == 100){
        alert("gameover");//mirar pork no hace el fadeIn en gameover
        document.location="../gameover.php";  
    }
 }
function won() {
    //stop the asteroide
    asteroide.stop();
    $('#you').html(parseInt($('#you').html()) + 1);
    var punts =  $('#you').html();
    if(punts == 5){
        var nivel = $("#getLvl").val(); 
        alert(nivel);
        nivel++;
        alert(nivel);
        document.location="lvl_"+nivel+".php";     
    }
 
} 


