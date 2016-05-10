<!-- Mas Info -->
<?php

$title = "Los que va a encontrar en el nuestro hotel";
$info_array = array(
    array(
        "title"=>"UNA ESTRUCTURA AGRADABLE",
        "id"=>"estructura",
        "body"=>"<p>El hotel le ofrece 25 amplias y luminosas habitaciones repartidas sobre 3 plantas con ascensor. Cada planta del hotel y cada habitación poseen un nombre y encanto propio. Este nombre es una representación de un evento importante en la vida e historia de Granada. No tienen tarjetas magnéticas para abrir las puertas de las habitaciones, preferimos la originalidad que proporciona una tradicional llave.</p>"
    ),
    array(
        "title"=>"LA HABITACION DE TU SUEÑOS",
        "id"=>"habitaciones",
        "body"=>"El hotel le ofrece 25 amplias y luminosas habitaciones repartidas sobre 3 plantas con ascensor. Cada planta del hotel y cada habitación poseen un nombre y encanto propio. Este nombre es una representación de un evento importante en la vida e historia de Granada. No tienen tarjetas magnéticas para abrir las puertas de las habitaciones, preferimos la originalidad que proporciona una tradicional llave."
    ),
    array(
        "title"=>"SERVICIOS IMPECABLES",
        "id"=>"servicios",
        "body"=>'<p>La nuestra estructura proporciona varios servicios. Se ofrece el servicio de desayuno continental en la cafetería, donde podrá disfrutar de conexión WIFI. Asimismo podrá obtener mediante pago del servicio conexión WIFI en su habitación.</p>
        <ul class="horizontal"><li class="srv-hot-1-HAC"></li><li class="srv-hot-179-HAC"></li><li class="srv-hot-20-HAC"></li><li class="srv-hot-283-HAC"></li><li class="srv-hot-5-HAC"></li><li class="srv-hot-53-HAC"></li><li class="srv-hot-74-HAC"></li></ul>'
    ),
);

echo '<section id="info" class="two">
    <div class="container">
    <div class="row">
        <header><h2>'.$title.'</h2></header>
        <div class="3col-container" id="3col-info">';
            
foreach ($info_array as $value){
    //echo '<div class="one-of-three-col" id="3col-'.$value['id'].'"><header><h3>'.$value['title'].'</h3></header><div class="image">';
    echo '<div class="one-of-three-col 3u 10u$(mobile)" id="3col-'.$value['id'].'"><header><h3>'.$value['title'].'</h3></header><div class="image">';
    echo '<img src="images/fotos/'.$value['id'].'.jpg" alt="'.$value['id'].'-pic"></div><p></p>'.$value['body'].'</div>';
}

echo '</div></div></div></section>';

?>