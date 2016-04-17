<!--- SLIDER SECTION -->
<?php
    echo '<div class="nav-slider">';
        $slider_html = "<div id='navpromcontainer' class='slider'>";
            $slider_html .= "<a id='navsliderlink' href='?seccion=proms&value=0'>";
                $slider_html .= "<div class='image-slider'>";
                    $slider_html .= "<img id='navPromSlider' src='images/fotos/slider/1.jpg'>";
                $slider_html .= "</div>";
                $slider_html .= "<p class='navslidertext' id='navslidertext'>10% DESCUENTO</p>";
            $slider_html .= "</a>";
        $slider_html .= "</div>";
        echo $slider_html;
    echo '</div>';
?>