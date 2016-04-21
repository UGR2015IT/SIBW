<!-- Promociones -->
<?php

    $disfruta = "¡Disfruta de nuestras promociones!";

    $proms_array = array();

    $url = 'database/promociones.json';
    $content = file_get_contents($url);
    $json = json_decode($content, true);

    if(!empty($_GET['value'])){
        $value = $_GET['value'];
        $value = basename($value);
        $value = abs($value) % 8;
    } else {
        $value = 0;
    }

    $proms_html = "<section id='promociones' class='two'>"."<div class='container'>"."<header><h2>".$disfruta."</h2></header>";
    $proms_html .= "<ul><li>";

    require_once "database/promociones.php";
    $array = new promociones();
    foreach ($array->getArray() as $oferta){
        $proms_html .= "<a id='prom-".$oferta['id']."'>";
        $proms_html .= "<div class='ofertas' id='".$oferta['id']."'>";
        $proms_html .= "<img src='images/fotos/".$oferta['src'].".jpg' >";
        $proms_html .= "<h3><strong>".$oferta['name']."</strong></h3>";
        $proms_html .= $oferta['long-text'];
        $proms_html .= "</div>";
        $proms_html .= "</a>";
    }

    $proms_html .= "</li></ul></div></section>";

    echo $proms_html;
?>