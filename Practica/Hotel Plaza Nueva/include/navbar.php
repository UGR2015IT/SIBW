<!-- NAVIGATION BAR / CONTESTUAL MENU -->
<?php
    echo '<div id="header">';
        echo '<div class="top">';
            //Logo
            include 'navbarlogo.php'; 
            // Contestual menu
            // This is the default menu
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
            echo '<div class="upper-links">';
            foreach($menu as $item) {
                echo "<a href='?seccion={$item['url']}' id='top-link' class='skel-layers-ignoreHref no-under'><span class='icon {$item['span-class']}'></span></a>";
            }
            echo '</div>';
            echo NavMenu::GenerateMenu($menu);
            echo '</nav>';
        echo '</div>';

        // Footer of the navbar
        include 'navbarfooter.php';
    echo '</div>';


    class NavMenu {
        // static porque no voy a necesitar $this
        public static function GenerateMenu($items) {

            if (!empty($_GET['seccion'])){
                $seccion = $_GET['seccion'];  
                $seccion = basename($seccion);
                switch ($seccion){
                    case "home":
                        $html = "<ul>\n";
                        foreach($items as $item) {
                            $html .= "<li><a href='?seccion={$item['url']}' id='link' class='skel-layers-ignoreHref'><span class='icon {$item['span-class']}'>{$item['text']}</span></a></li>\n";
                        }
                        $html .= "</ul>\n";
                        return $html;
                        break;
                    case "fotos":
                        // CONTESTUAL MENU FOR FOTOS
                        echo '<div class="text-center">';
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
                        break;
                    case "habs":
                        // CONTESTUAL MENU FOR HABS
                        break;
                    case "proms":
                        // CONTESTUAL MENU FOR PROMS
                        break;
                    case "contact":
                        // CONTESTUAL MENU FOR CONTACT
                        break;
                    case "reserva":
                        // CONTESTUAL MENU FOR RESERVA
                        break;
                }
            } else {
                //DEFAULT CONTESTUAL MENU
                $html = "<ul>\n";
                foreach($items as $item) {
                    $html .= "<li><a href='?seccion={$item['url']}' id='top-link' class='skel-layers-ignoreHref'><span class='icon {$item['span-class']}'>{$item['text']}</span></a></li>\n";
                }
                $html .= "</ul>\n";
                echo $html;
            }
            
        }
    };
?>