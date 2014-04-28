function ComencaLvl4(){
    asteroide = $('<img>').attr({
        'src': '../css/galery/nau.gif'
    }).css({
        'position': 'absolute',
        'z-index': 75,
        top: -10,
        left: -10
    });
	
    $("#plantilla").fadeOut( function () {
	 //Afegim l'asteroide a la pagina
	$(document.body).append(asteroide);

    //metode colocació random de planetes
    planetesAl();
	});
	
   
    
}

function planetesAl() {
    
	//Obtenim una imatge aleatoria dels planetas
	var imagen=  Math.floor((Math.random()*5)+1)+'.png'; 
	
	
	
    //Generem una posicio aleatoria per el planeta en la plantalla 
    var x = Math.floor((Math.random() * $("#plantilla").width())+200);
    var y = Math.floor((Math.random() * $("#plantilla").height())+80);
    
    planetes = $('<span>').css({
        'position': 'absolute',
        height: '100px',
        width: '100px',
        'background-image': 'url("planeta4/'+imagen+'")',
		'background-size': 'contain',
		'background-repeat': 'no-repeat',
        top: y - 60, // Calculacio de la posició a arriba la imatge de l'asteroide
        left: x - 60 //Calculacio de la posició a arriba la imatge de l'asteroide
    });
    
    //Afegim els planetes a la pantalla
    $(document.body).append(planetes);
    
     //bind the explode on click event****************************
    planetes.bind('click', function (e) {
        //Guanya el jugador
        won(e); 
        //Amagem els planetes.
        explode(e.pageX, e.pageY, $(e.target));
    });
    
    //Fem seguir l'asteroide al planetes.
    chase(x, y, planetes);
	
    //Fem que es repeteixi sempre
    window.setTimeout('planetesAl()', 1200);
} 

function chase(x, y, planetes) {
    //SI l'asteroide pilla el planta
    asteroide.animate({
        top: y,
        left: x 
    }, 900, function () {
        //El planeta explota
        explode(x, y, planetes);
        //I perds
        lose();
    });
} 

function explode(x, y, planetes) {
    planetes.animate({
        height: '200px',
        width: '200px',
        'border-radius': '500px',
        opacity: 0.1,
        top: y - 100,
        left: x - 100
    }, 100, function () {
        planetes.hide();
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
    //Si guanyes parem asteroide
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


