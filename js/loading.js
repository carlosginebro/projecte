
var mostrarText = function (div, message, index, interval) { 

  if (index < message.length) {
    
    $(div).append(message[index++]);

    setTimeout(function () { mostrarText(div, message, index, interval); }, interval);

  }
}



$(function () {
    var msg = $("#getLoad").html();
    
    if(msg == 'Carregant...'){
        mostrarText("#cargando", msg, 0, 600);
        $("#ex").show(7200, function(){
            $("#cargando").html("");
            mostrarText("#cargando", msg, 0, 600);
        });
    }else{
        mostrarText("#cargando", msg, 0, 600);
        $("#ex").show(6600, function(){
            $("#cargando").html("");
            mostrarText("#cargando", msg, 0, 600);
        });
    }
});