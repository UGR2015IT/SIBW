<!-- Portfolio -->
<?php

$maxPic = "8";
$portfolio_section_html = "";

$portfolio_section_html .= '<section id="portfolio" class="three ">';
    $portfolio_section_html .= '<div class="container">';
        $portfolio_section_html .= '<header>';
            $portfolio_section_html .= '<h2>No hay mejor presentacion que nuestras fotos!</h2>';
        $portfolio_section_html .= '</header>';
        $portfolio_section_html .= '<div class="container">';
            $portfolio_section_html .= '<div id="zoomed-picture">';
                $portfolio_section_html .= '<img src="images/fotos/foto1.jpg" alt="Click on a picture" id="zoom-pic">';
            $portfolio_section_html .= '</div>';
            $portfolio_section_html .= '<div id="seven-thumbnails">';
            for ($i=1;$i<$maxPic;$i++)
                $portfolio_section_html .= '<img class="thumbnail" id="foto'.$i.'.jpg" src="images/fotos/foto'.$i.'.jpg" onclick="changeZoomPicture(this.id)" />';
            $portfolio_section_html .= '</div>';
        $portfolio_section_html .= '</div>';
    $portfolio_section_html .= '</div>';
$portfolio_section_html .= '</section>';

echo $portfolio_section_html;
    
?>