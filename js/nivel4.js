function init(){
    angel = $('<img>').attr({
        'src': '../css/galery/nau.gif'
    }).css({
        'position': 'absolute',
        'z-index': 75,
        top: -10,
        left: -10
    });
    $("#plantilla").fadeOut();
    //append it to body
    $(document.body).append(angel);

    //start dreaming
    do_dream();
}

function do_dream() {
    //take a random color
    var color = 'rgb(' + Math.floor(Math.random() * 255) + ',' +
                        Math.floor(Math.random() * 255) + ',' + 
                        Math.floor(Math.random() * 255) + ')';

    //generate random position
    var x = Math.floor(Math.random() * $("#plantilla").width());
    var y = Math.floor(Math.random() * $("#plantilla").height());
    
    dream = $('<span>').css({
        'position': 'absolute',
        height: '100px',
        width: '100px',
        'background-color': color,
        'border-radius': '100px',
        top: y - 50, //offsets
        left: x - 50 //offsets
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
    
    //call angel to chase the dream
    chase(x, y, dream);
    //dreams are endless
    window.setTimeout('do_dream()', 1200);
} 

function chase(x, y, dream) {
    //angel gets the dream 
    angel.animate({
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
    if(punts == 5){
        alert("gameover");//mirar pork no hace el fadeIn en gameover
        document.location="../gameover.php";  
    }
 }
function won() {
    //stop the angel
    angel.stop();
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


