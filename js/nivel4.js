var imagen;
var punts;
var t;

function ComencaLvl4(){
    $("table").show();
    asteroide = $('<div>').css({
		'background-image': "url('../css/galery/asteroide.png')",
		'background-size': 'contain',
        'position': 'absolute',
        'z-index': 2,
        top: -10,
        left: -10,
        width: 50,
		height: 50
//        'pointer-events': 'none'
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
	var imaplaneta=  Math.floor((Math.random()*5)+1)+'.png'; 
	imagen = "e"+imaplaneta;
	
	
    //Generem una posicio aleatoria per el planeta en la plantalla 
    var x = Math.floor((Math.random() * $("#plantilla").width())+200);
    var y = Math.floor((Math.random() * $("#plantilla").height())+50);
    

	
    planetes = $('<span>').css({
        'position': 'absolute',
        'height': '100px',
        'width': '100px',
        'background-image': 'url("planeta4/'+imaplaneta+'")',
		'background-size': 'contain',
		'background-repeat': 'no-repeat',
        top: y - 50, // Calculacio de la posició a arriba la imatge de l'asteroide
        left: x - 50 //Calculacio de la posició a arriba la imatge de l'asteroide
    });
    
    //Afegim els planetes a la pantalla
    $(document.body).append(planetes);
    
     //Si el planete es clickat farà que guanyi el jugador
    planetes.bind('click', function (e) {
        //Guanya el jugador
        won(e); 
        //Amagem els planetes.
        salvaPlaneta(e.pageX, e.pageY, $(e.target));
    });
    
    //Fem seguir l'asteroide al planetes.
    chase(x, y, planetes);
    
    
        
  
        //Fem que es repeteixi sempre
        t = setTimeout('planetesAl()', 1200);
    
} 

function chase(x, y, planetes) {
	var velocitatasteroide=  Math.floor((Math.random()*900)+400); 



    //SI l'asteroide pilla el planta
    asteroide.animate({
        top: y,
        left: x 
    }, velocitatasteroide, function () {
        //El planeta explota
        explotaplaneta(x, y, planetes);
        //I perds
        lose();
    });
} 


function salvaPlaneta(x, y, planetes) {

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

function explotaplaneta(x, y, planetes) {
	var audio = new Audio('../audio/explotaplaneta.mp3');
	audio.play();
	planetes.css({
		'background-image': 'url("planeta4/'+imagen+'")'
		
	}, 100, function (){

	}).animate({
        height: '200px',
        width: '200px',
        'border-radius': '500px',
        opacity: 0.1,
        top: y - 100,
        left: x - 100
    }, 100, function () {
        planetes.hide();
    });;
	
    
} 

function lose() {
    $('#asteroide').html(parseInt($('#asteroide').html()) + 1);
    var punts =  $('#asteroide').html();
    if(punts == 20){       
        document.location = "../gameover.php";  
    }
 }
function won() {
    //Si guanyes parem asteroide
    asteroide.stop();
    $('#jugador').html(parseInt($('#jugador').html()) + 1);
    punts =  $('#jugador').html();
    if(punts == 20){
        clearTimeout(t);
        var nivel = $("#getLvl").val();   		
        nivel++;      
        animacio_nivel(nivel);     
    }
 
} 


