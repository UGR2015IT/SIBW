<?php

$home_html = "";

$home_html .= '<section id="home" class="one dark cover">';
    $home_html .= '<div class="container">';
        $home_html .= '<header>';
            $home_html .= '<div class="align-left">';
                $home_html .= '<h2 class="alt"><strong>HOTEL PLAZA NUEVA</strong></h2>';
                $home_html .= '<h4 class="subtext"><strong>El hotel que usted buscava, a 10 minutos de la Alhambra. </strong></h4>';
                $home_html .= '<br />';
                $home_html .= '<ul class="horizontal">';
                    $home_html .= '
                    <li><button class="material one"><a href="?seccion=fotos" class="no-under"><img src="images/white-foto.png"></a></button></li>
                    <li><button class="material two"><a href="?seccion=info" class="no-under"><img src="images/white-info.png"></a></button></li>
                    <li><button class="material three"><a href="?seccion=reserva" class="no-under"><img src="images/white-reserva.png"></a></button></li>
                    ';
                $home_html .= '</ul>';
            $home_html .= '</div>';
        $home_html .= '</header></div></section>';

echo $home_html;
                    
?>