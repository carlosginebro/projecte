

$(function(){
    
      //Crear taula slides lvl 9
    
    $(".gridster ul").gridster({
        widget_margins: [2, 2],
        widget_base_dimensions: [55, 55]
    });
    
    //Fi crear taula lvl 9
    
     //pasar lvl9
    
    $("[name=nextLvl9]").dblclick(function(){
        var nivel = $("#getLvl").val();
        alert(nivel);
        nivel++;
        alert(nivel);
        document.location = "lvl_" + nivel + ".php";
    });
    
    //fi pasar lvl 9
    
    
});