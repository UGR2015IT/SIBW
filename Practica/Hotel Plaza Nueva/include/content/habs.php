<!-- Habitaciones -->
<?php

$habs_html = "";

$habs_html .= '<section id="habitaciones" class="three content">';
$habs_html .= '<div class="container">';
$habs_html .= '<header><h2>Las habitaciones</h2></header>';
$habs_html .= '<div class="3col-container" id="3col-hab">';

require_once "database/habitaciones.php";
$array = new habitaciones();
foreach ($array->getArray() as $habitacion){
    $habs_html .= '<div class="one-of-three-col 4u 4u(mobile)" id="3col-'.$habitacion["id"].'">';
    $habs_html .= '<header><h3>HABITACION '.$habitacion["nombre_hab"].'</h3></header>';
    $habs_html .= "<div class='image'>
                    <img src='images/fotos/hab/".$habitacion['id'].".jpg' alt='Hab-".$habitacion['id']."-pic'>
                </div>";
    $habs_html .= '<p>'.$habitacion["descr"].'</p>';
    $habs_html .= '<div class="hidden" id="hidden-'.$habitacion["id"].'">
                    <ul class="horizontal">
                        <li class="srv-hot-107-RMA"></li>
                        <li class="srv-hot-11-RMA"></li>
                        <li class="srv-hot-123-RMA"></li>
                        <li class="srv-hot-2-RMA"></li>
                        <li class="srv-hot-210-RMA"></li>
                        <li class="srv-hot-22-RMA"></li>
                        <li class="srv-hot-221-RMA"></li>
                        <li class="srv-hot-26-RMA"></li>
                        <li class="srv-hot-50-RMA"></li>
                        <li class="srv-hot-92-RMA"></li>
                    </ul>
                    <a href="?seccion=reserva&hab='.$habitacion["id"].'">
                    <input type="button" id="doble-'.$habitacion["id"].'" class="button-hidden-price" value="Solo '.$habitacion["precio"].'€/noche!">
                    </a>
            </div>';
    $habs_html .= "</div>";
}
$habs_html .= '</div></div></section>';

echo $habs_html;

?>