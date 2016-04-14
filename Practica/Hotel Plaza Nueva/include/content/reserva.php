<!-- Reserva -->
<section id="reserva" class="two">
    <div class="container">
        <header><h2>Reserva tu habitacion aqui.</h2></header>
        <div id="section-reserva">
            <form method="post" id="form-reserva">
                <div class="row">
                    <div class="fecha-reserva 4u 12u(mobile)$ text-center" id="fecha-reserva">
                        <p style="margin: auto;">Fecha llegada:</p>
                        <input type="date" id="input-llegada" class="calendar">
                        <p style="margin: auto;">Fecha salida:</p>
                        <input type="date" id="input-salida" class="calendar">
                    </div>
                    <div id="reservaHabContainer" class="8u$ 12u(mobile)$">
                        <div class="hab-reserva" id="reservaHab1">
                            <p style="margin: auto;">Habitacion 1:</p>
                            <select id="habitacion-select">
                                <?php
                                    $xmlDoc = simplexml_load_file('database/habitaciones.xml');

                                    foreach($xmlDoc as $habitacion){
                                        $html = '<option id="'.$habitacion->id.'" ';
                                        if(!empty($_GET['hab'])){
                                            if ($habitacion->id == basename($_GET['hab'])) $html .= 'selected';
                                        }
                                        $html .= '>Habitacion '.$habitacion->nombre_hab.'</option>';
                                        echo $html;
                                    }
                                ?>
                            </select>
                            Adultos:
                            <select id="num-adultos">
                                <option id="ad-1">1</option>
                                <option id="ad-2">2</option>
                                <option id="ad-3">3</option>
                            </select>
                            Niños:
                            <select id="num-ninios">
                                <option id="nin-0">0</option>
                                <option id="nin-1">1</option>
                                <option id="nin-2">2</option>
                                <option id="nin-3">3</option>
                            </select>
                            <a class="button scrolly" alt="plus" onclick="newHab()"><span class="icon fa-plus"></span></a>
                        </div>
                    </div>
                </div>
                
                <input type="submit" value="¡Reserva!" class="submit-right">

            </form>
        </div>
    </div>
</section>