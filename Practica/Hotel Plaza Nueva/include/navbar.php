<!-- NAVIGATION BAR / CONTESTUAL MENU -->
<?php
    echo '<div id="header">';
        echo '<div class="top">';
            //Logo
            include 'navbarlogo.php'; 
            // Contestual menu array
            $menu = array(
                'home'  => array('text'=>'Hotel',  'url'=>'home', 'span-class'=>'icon fa-home'),
                'fotos'  => array('text'=>'Fotos',  'url'=>'fotos', 'span-class'=>'icon fa-photo'),
                'infos' => array('text'=>'Mas Informacion', 'url'=>'info', 'span-class'=>'icon fa-info'),
                'habs' => array('text'=>'Habitaciones', 'url'=>'habs', 'span-class'=>'icon fa-bed'),
                'proms' => array('text'=>'Promociones', 'url'=>'proms', 'span-class'=>'icon fa-exclamation-circle'),
                'contact' => array('text'=>'Contacto y Mapa', 'url'=>'contact', 'span-class'=>'icon fa-map'),
                'reserva' => array('text'=>'Reservar', 'url'=>'reserva', 'span-class'=>'icon fa-calendar'),
            ); 
            echo '<nav id="nav">';
            /*echo '<div class="upper-links text-grey">';
            foreach($menu as $item) {
                if(!empty($_GET['seccion'])){
                    $mySection = $_GET['seccion'];
                    $mySection = basename($mySection);
                } else $mySection = "home";
                if ($item['url'] != $mySection)
                    echo "<a href='?seccion={$item['url']}' id='top-link' class='skel-layers-ignoreHref no-under'><span class='icon {$item['span-class']}'></span></a>";
            }
            echo '</div>';*/
            echo NavMenu::GenerateMenu($menu);
            echo '</nav>';
        echo '</div>';

        echo '<div id="nav" class="bottom">';
        // Slider in the navbar
        include 'navbarslider.php';

        // Footer of the navbar
        include 'navbarfooter.php';
        echo '</div>';
    echo '</div>';


    class NavMenu {
        // static porque no voy a necesitar $this
        public static function GenerateMenu($items) {

            if (!empty($_GET['seccion'])){
                $seccion = $_GET['seccion'];  
                $seccion = basename($seccion);
                //switch ($seccion){
                    //case "home":
                $html = "<ul>\n";
                foreach($items as $item) {
                    if(!empty($_GET['seccion'])){
                        $mySection = $_GET['seccion'];
                        $mySection = basename($mySection);
                    } else $mySection = "home";
                    if ($item['url'] != $mySection)
                        $html .= "<li><a href='?seccion={$item['url']}' id='link' class='skel-layers-ignoreHref'><span class='icon {$item['span-class']}'>{$item['text']}</span></a></li>\n";
                }
                $html .= "</ul>\n";
                return $html;
                //break;
                    /*case "fotos":
                        // CONTESTUAL MENU FOR FOTOS
                        echo '<div class="text-center text-grey">';
                        echo 'Pincha una foto para verla en grande';
                        echo '</div>';
                        echo '<div class="thumb-menu">';
                        ?>
                            <img id="foto1.jpg" src="images/fotos/foto1.jpg" onclick="changeZoomPicture(this.id)" />
                            <img id="foto2.jpg" src="images/fotos/foto2.jpg" onclick="changeZoomPicture(this.id)" />
                            <img id="foto3.jpg" src="images/fotos/foto3.jpg" onclick="changeZoomPicture(this.id)" />
                            <img id="foto4.jpg" src="images/fotos/foto4.jpg" onclick="changeZoomPicture(this.id)" />
                        <?php
                                                echo '</div>';
                                                echo '<div class="thumb-menu">';
                        ?>
                            <img id="foto5.jpg" src="images/fotos/foto5.jpg" onclick="changeZoomPicture(this.id)" />
                            <img id="foto6.jpg" src="images/fotos/foto6.jpg" onclick="changeZoomPicture(this.id)" />
                            <img id="foto7.jpg" src="images/fotos/foto7.jpg" onclick="changeZoomPicture(this.id)" />
                            <img id="foto8.jpg" src="images/fotos/foto8.jpg" onclick="changeZoomPicture(this.id)" />
                        <?php 
                        echo '</div>';
                        break;
                    case "info":
                        // CONTESTUAL MENU FOR INFOS
                        echo '<div class="text-center text-grey">
                            <p>Nuestras habitaciones con vistas a Plaza Nueva y a la Torre de la Vela, que pertenece al recinto de la Alhambra, le permitirán disfrutar de una perspectiva distinta de la ciudad. Disfrute de esta experiencia por un pequeño suplemento. Asimismo el hotel dispone de habitaciones interiores, recomendables para personas que desean descansar con la máxima tranquilidad.</p>   
                        </div> ';
                        break;
                    case "habs":
                        // CONTESTUAL MENU FOR HABS
                        $url = 'database/promociones.json';
                        $content = file_get_contents($url);
                        $json = json_decode($content, true);
                        
                        $prom_double = null;
                        $prom_superior = null;
                        $prom_triple = null;
                        $prom_cualquiera = null;
                        
                        foreach($json['habitaciones']['oferta'] as $item){
                            switch ($item['hab']) {
                                case 'C':
                                    $prom_cualquiera .= "<li><a href='?seccion=proms&value=".$item['cod_oferta']."' id='link' class='skel-layers-ignoreHref no-under'><span class='icon'>".$item['nom_oferta']."</span></a></li>";
                                    break;
                                case 'D':
                                    $prom_double .= "<li><a href='?seccion=proms&value=".$item['cod_oferta']."' id ='link'  class='skel-layers-ignoreHref no-under'><span class='icon'>".$item['nom_oferta']."</span></a></li>";
                                    break;
                                case 'S':
                                    $prom_superior .= "<li><a href='?seccion=proms&value=".$item['cod_oferta']."' id ='link' class='skel-layers-ignoreHref no-under'><span class='icon'>".$item['nom_oferta']."</span></a></li>";
                                    break;
                                case 'T':
                                    $prom_triple .= "<li><a href='?seccion=proms&value=".$item['cod_oferta']."' id ='link' class='skel-layers-ignoreHref no-under'><span class='icon'>".$item['nom_oferta']."</span></a></li>";
                                    break;
                                default:
                                    break;
                            }
                        }
                        echo '<div class="text-center">';
                        if (!is_null($prom_double)){
                            echo 'Promociones para HAB DOBLES:';
                            echo '<ul>';
                            echo $prom_double;
                            echo '</ul>';
                        }
                        if (!is_null($prom_superior)){
                            echo 'Promociones para HAB SUPERIOR:';
                            echo '<ul>';
                            echo $prom_superior;
                            echo '</ul>';
                        }
                        if (!is_null($prom_triple)){
                            echo 'Promociones para HAB TRIPLES:';
                            echo '<ul>';
                            echo $prom_triple;
                            echo '</ul>';
                        }
                        if (!is_null($prom_cualquiera)){
                            echo 'Promociones para TODAS LAS HABS:';
                            echo '<ul>';
                            echo $prom_cualquiera;
                            echo '</ul>';
                        }
                        echo '</div>';
                        
                        break;
                    case "proms":
                        // CONTESTUAL MENU FOR PROMS
                        break;
                    case "contact":
                        // CONTESTUAL MENU FOR CONTACT
                        ?>
                            <ul>
                                <li><a id='call-us' class='skel-layers-ignoreHref'><span class='icon fa-phone'>+34 958 215 273</span></a></li>
                                <li><a id='mail-us' class='skel-layers-ignoreHref'><span class='icon fa-envelope'>info@hotel-plazanueva.com</span></a></li>
                                <li><a id='find-us' class='skel-layers-ignoreHref'><span class='icon fa-map'>Calle Imprenta, 2, Granada (ES)</span></a></li>
                            </ul>
                            <div id="sidemap" class="menu-map">
                                <!-- Mapa -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.975876819731!2d-3.598489685267615!3d37.177044254096494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fcb8cb9390e1%3A0x9253186efccf153a!2sHotel+Plaza+Nueva!5e0!3m2!1sit!2ses!4v1460041878926" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        <?php
                        break;
                    case "reserva":
                        // CONTESTUAL MENU FOR RESERVA
                        break;
                }
            } else {
                //DEFAULT CONTESTUAL MENU
                $html = "<ul>";
                foreach($items as $item) {
                    $html .= "<li><a href='?seccion={$item['url']}' id='top-link' class='skel-layers-ignoreHref'><span class='icon {$item['span-class']}'>{$item['text']}</span></a></li>";
                }
                $html .= "</ul>";
                echo $html;
            }*/
            } 
            else {
                //DEFAULT CONTESTUAL MENU
                $html = "<ul>";
                foreach($items as $item) {
                    if ($item['url'] != "home")
                        $html .= "<li><a href='?seccion={$item['url']}' id='top-link' class='skel-layers-ignoreHref'><span class='icon {$item['span-class']}'>{$item['text']}</span></a></li>";
                }
                $html .= "</ul>";
                echo $html;
            }
        }
    };
?>