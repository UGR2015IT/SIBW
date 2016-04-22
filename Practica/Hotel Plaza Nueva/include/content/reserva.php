<!-- Reserva -->

<?php

require_once "database/habitaciones.php";

$reserva_text_array = array(
    "title"=>"Reserva tu habitacion aqui.",
    "arrival-text"=>"Fecha llegada",
    "leave-text"=>"Fecha salida",
    "id-reserva"=>"reservaHab",
    "room"=>"Habitacion",
    "adults"=>"Adultos",
    "children"=>"Niños",
    "submit"=>"¡Reserva!"
);

function newHabitacion () {
    $array = new habitaciones();
    foreach ($array->getArray() as $habitacion){
        $html = '<option id="'.$habitacion["id"].'" ';
        if(!empty($_GET['hab'])){
            if ($habitacion["id"] == basename($_GET['hab'])) $html .= 'selected';
        }
        $html .= '>Habitacion '.$habitacion["nombre_hab"].'</option>';
        return $html;
    }
}

$reserva_html = '';
$reserva_html .= '<section id="reserva" class="two"><div class="container">';
$reserva_html .= '<header><h2>'.$reserva_text_array['title'].'</h2></header>';
$reserva_html .= '<div id="section-reserva">
                    <form method="post" id="form-reserva">
                        <div class="row">
                            <div class="fecha-reserva 4u 12u(mobile)$ text-center" id="fecha-reserva">';
$reserva_html .= '<p style="margin: auto;">'.$reserva_text_array['arrival-text'].'</p><input type="date" id="input-llegada" class="calendar">';
$reserva_html .= '<p style="margin: auto;">'.$reserva_text_array['leave-text'].'</p><input type="date" id="input-salida" class="calendar">';
$reserva_html .= '          </div>
                        <div id="reservaHabContainer" class="8u$ 12u(mobile)$">';
if (!empty($_GET['nhab']) && $_GET['nhab']!=0){
    $n_hab = abs(basename($_GET['nhab']));
} else $n_hab = 1;
for ($i=1;$i<=$n_hab;$i++){
    $reserva_html .= '<div class="hab-reserva" id="'.$reserva_text_array['id-reserva'].'"><p style="margin: auto;">Habitacion '.$i.':</p><select id="habitacion-select">';
    $reserva_html .= newHabitacion();
    $reserva_html .= '</select>';
    
    $reserva_html .= $reserva_text_array['adults'].':
                            <select id="num-adultos">
                                <option id="ad-1">1</option>
                                <option id="ad-2">2</option>
                                <option id="ad-3">3</option>
                            </select>
                            '.$reserva_text_array['children'].':
                            <select id="num-ninios">
                                <option id="nin-0">0</option>
                                <option id="nin-1">1</option>
                                <option id="nin-2">2</option>
                                <option id="nin-3">3</option>
                            </select>
                            <a class="button scrolly" alt="plus" href="?seccion=reserva&nhab='.($n_hab+1).'"><span class="icon fa-plus"></span></a>
                        </div>';
    
}
$reserva_html .= '</div></div>';
$reserva_html .= '<input type="submit" value="'.$reserva_text_array['submit'].'" class="submit-right"></form></div></div></section>';

echo $reserva_html;

?>