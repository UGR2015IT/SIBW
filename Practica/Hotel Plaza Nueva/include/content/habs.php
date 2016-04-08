<!-- Habitaciones -->
<section id="habitaciones" class="three content">
    <div class="container">
        <header><h2>Las habitaciones</h2></header>
        <div class="3col-container" id="3col-hab">
            <?php
                $xmlDoc = simplexml_load_file('database/habitaciones.xml');
            
                foreach($xmlDoc as $habitacion){
                    $html = '<div class="one-of-three-col 4u 4u(mobile)" id="3col-'.$habitacion->id.'">';
                    $html .= '<header><h3>HABITACION '.$habitacion->nombre_hab.'</h3></header>';
                    $html .= '
                        <!-- Immagine della double -->
                        <div class="image">
                            <img src="images/fotos/hab/'.$habitacion->id.'.jpg" alt="Hab-'.$habitacion->id.'-pic">
                        </div>
                    ';
                    $html .= '<p>'.$habitacion->descr.'</p>';
                   // $html .= '<a class="more-info-click" onclick="showPrice("hidden-'.$habitacion->id.'")">Pincha aqui para mas informaciones!</a>';
                    $html .= '
                        <div class="hidden" id="hidden-'.$habitacion->id.'">
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
                            <a href="#reserva">
                                <input type="button" id="doble-'.$habitacion->id.'" class="button-hidden-price" value="Solo '.$habitacion->precio.'€/noche!" onclick="updateReserva(this.id)">
                            </a>
                        </div>
                    ';
                    echo $html;
                    echo '</div>';
                }

            ?>
        </div>
    </div>
</section>