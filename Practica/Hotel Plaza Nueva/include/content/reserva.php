<!-- Reserva -->
<section id="reserva" class="two">
    <div class="container">
        <header><h2>Reserva tu habitacion aqui.</h2></header>
        <div id="section-reserva">
            <form method="post" id="form-reserva">
                <div class="fecha-reserva" id="fecha-reserva">
                    Fecha llegada:
                    <input type="date" id="input-llegada" class="calendar">
                    Fecha salida:
                    <input type="date" id="input-salida" class="calendar">
                </div>
                <div class="hab-reserva" id="numero-hab-reserva">
                    Habitacion <a id="hab-1" class="no-under">1</a>:
                    &nbsp;
                    <select id="habitacion-select">
                        <?php
                            $xmlDoc = simplexml_load_file('database/habitaciones.xml');

                            foreach($xmlDoc as $habitacion){
                                echo '<option id="doble-'.$habitacion->id.'">Habitacion '.$habitacion->nombre_hab.'</option>';
                            }
                        ?>
                    </select>
                    Adultos:
                    <select id="num-adultos">
                        <option id="1">1</option>
                        <option id="2">2</option>
                        <option id="3">3</option>
                    </select>
                    Niños:
                    <select id="num-ninios">
                        <option id="0">0</option>
                        <option id="1">1</option>
                        <option id="2">2</option>
                        <option id="3">3</option>
                        <option id="4">4</option>
                    </select>
                    <a class="button scrolly" alt="plus" onclick="#"><span class="icon fa-plus"></span></a>
                </div>
                <input type="submit" value="¡Reserva!" class="submit-right">

            </form>
        </div>
    </div>
</section>