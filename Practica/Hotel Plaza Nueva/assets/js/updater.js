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

function sliderContent(valor){
    var didascalia = document.getElementById("prom-slider-text");
    document.getElementById("promSlider").src = "images/fotos/slider/" + valor + ".jpg";
    switch(valor){
        case 2:
            didascalia.innerHTML = "<h3><strong>DOS NOCHES</strong></h3> Disfute de un 10% de descuento en estancias de un minimo de dos noches.";
            break;
        case 1:
            didascalia.innerHTML = "<h3><strong>10% DE DESCUENTO</strong></h3> Disfute de un 10% de descuento con esta tarifa no reembolsable."
            break;
        case 3:
            didascalia.innerHTML = "<h3><strong>RESERVA ANTICIPADA</strong></h3> Disfute de un 10% de descuento reservando con 21 dias de antelacion.";
            break;
        case 4:
            didascalia.innerHTML = "<h3><strong>HABITACION DOBLE + TREN TURISTICO</strong></h3> Dos noches en habitacion estandar, desayuno continental, dos tickets para uso del Tren Turistico de Granada.";
            break;
        case 5:
            didascalia.innerHTML = "<h3><strong>HABITACION DOBLE + BAÑO ARABE</strong></h3> Dos noches en habitacion estandar, desayuno continental, session de baño arabe en Hamman Al Andalus Granada.";
            break;
        case 6:
            didascalia.innerHTML = "<h3><strong>HABITACION DOBLE + ESPECTACULO DE FLAMENCO</strong></h3> Dos noches en habitacion estandar, desayuno continental, espectaculo de flamenco en \"El templo del Flamenco\".";
            break;
        case 7:
            didascalia.innerHTML = "<h3><strong>HABITACION DOBLE + VISITA GUIADA ALHAMBRA</strong></h3> Dos noches en habitacion estandar, desayuno continental, visita guiada a la Alhambra.";
            break;
        case 8:
            didascalia.innerHTML = "<h3><strong>HABITACION DOBLE + TREN TURISTICO + ESPECTACULO DE FLAMENCO</strong></h3> Disfruta de la oferta por el tren turistico y por el espectaculo de flamenco en un solo pack!.";
            break;
    }
}

function updateSlider(sentido) {
    var numeroProm = 9;
    var imageSrc = document.getElementById("promSlider").src;
    var temp = imageSrc.split("images/fotos/slider/");
    var myValue = parseInt(temp[temp.length-1].split("."));
    if (sentido == "next") {
        myValue = Math.abs(myValue+1) % numeroProm;
        if (myValue == 0) myValue = 1;
    }
    else {
        myValue= Math.abs(myValue-1) % numeroProm;
        if (myValue == 0) myValue = numeroProm-1;
    }
    sliderContent(myValue);
}

$( document ).ready(function() {
    setInterval(updater, 3500);
    setInterval(updateSlider("next"), 3500);
});