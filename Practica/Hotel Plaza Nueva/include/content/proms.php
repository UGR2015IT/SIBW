<!-- Promociones -->
<?php

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

    $html = "<section id='promociones' class='two'>";
        $html .= "<div class='container'>";
            $html .= "<header><h2>¡Disfruta de nuestras promociones!</h2></header>";

            $html .= "<div class='new-slider'>";
                $html .= "<button class='slider next' onclick='updateSlider(\"next\")'><img src='images/rightarrow.png'></button>";
                $html .= "<button class='slider prev' onclick='updateSlider(\"prev\"))'><img src='images/leftarrow.png'></button>";
                $html .= "<div class='image-slider'>";
                    $html .= "<img id='promSlider' src='images/fotos/slider/".(intval($value)+1).".jpg'>";
                $html .= "</div>";
                $html .= "<span id='prom-slider-text'>";
                    $html .= "<h3><strong>".$json['habitaciones']['oferta'][$value]['nom_oferta']."</h3></strong>";
                    $html .= $json['habitaciones']['oferta'][$value]['long_text'];
                $html .= "</span>";
            $html .= "</div>";
        $html .= "</div>";
    $html .= "</section>";

    echo $html;
?>