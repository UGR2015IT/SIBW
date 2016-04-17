function updater(){
    var promarray = ["10% DESCUENTO","DOS NOCHES","RESERVA ANTICIPADA","DOBLE + TREN TURISTICO","DOBLE + BANO ARABE","DOBLE + ESPECTACULO DE FLAMENCO","DOBLE + VISITA GUIADA ALHAMBRA","DOBLE + TREN TURISTICO + FLAMENCO"];
    var maxPic = 8;
    var actualPic = $("#navPromSlider").attr('src');
    var temp1 = actualPic.split('images/fotos/slider/');
    var actualPic2 = temp1[1].split('.');
    var newValue = (parseInt(actualPic2[0])%maxPic);
    $("#navPromSlider").attr('src',"images/fotos/slider/" + (newValue+1) + ".jpg");
    $("#navslidertext").html(promarray[newValue]);
    $("#navsliderlink").attr('href',"?seccion=proms&value="+newValue);
}

$( document ).ready(function() {
    setInterval(updater, 3500);
});