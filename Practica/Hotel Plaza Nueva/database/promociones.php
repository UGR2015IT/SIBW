<?php

class promociones {
    
    var $proms_array = array(
        array(
            'id'=>'10-porcento',
            'name'=>'10% DE DESCUENTO',
            'src'=>'foto2',
            'long-text'=>'Disfute de un 10% de descuento con esta tarifa no reembolsable.'
        ),
        array(
            'id'=>'dos-noches',
            'name'=>'DOS NOCHES',
            'src'=>'foto8',
            'long-text'=>'Disfute de un 10% de descuento en estancias de un minimo de dos noches.'
        ),
        array(
            'id'=>'res-antic',
            'name'=>'RESERVA ANTICIPADA',
            'src'=>'foto10',
            'long-text'=>'Disfute de un 10% de descuento reservando con 21 dias de antelacion.'
        ),
        array(
            'id'=>'doble-tren',
            'name'=>'HABITACION DOBLE + TREN TURISTICO',
            'src'=>'foto12',
            'long-text'=>'Dos noches en habitacion estandar, desayuno continental, dos tickets para uso del Tren Turistico de Granada.'
        ),
        array(
            'id'=>'doble-banio',
            'name'=>'HABITACION DOBLE + BAÑO ARABE',
            'src'=>'foto13',
            'long-text'=>'Dos noches en habitacion estandar, desayuno continental, session de baño arabe en Hamman Al Andalus Granada.'
        ),
        array(
            'id'=>'doble-flamenco',
            'name'=>'HABITACION DOBLE + ESPECTACULO DE FLAMENCO',
            'src'=>'foto14',
            'long-text'=>'Dos noches en habitacion estandar, desayuno continental, espectaculo de flamenco en "El templo del Flamenco".'
        ),
        array(
            'id'=>'doble-alhambra',
            'name'=>'HABITACION DOBLE + VISITA GUIADA ALHAMBRA',
            'src'=>'foto15',
            'long-text'=>'Dos noches en habitacion estandar, desayuno continental, visita guiada a la Alhambra.'
        ),
        array(
            'id'=>'doble-tren-flamenco',
            'name'=>'HABITACION DOBLE + TREN TURISTICO + ESPECTACULO DE FLAMENCO',
            'src'=>'foto16',
            'long-text'=>'Disfruta de la oferta por el tren turistico y por el espectaculo de flamenco en un solo pack!.'
        )
    );

    public function getArray(){
        return $this->proms_array;
    }
    
    public function addArray($newId, $newName, $newSrc, $newLongText){
        $newProm = array('id'=>$newId, 'name'=>$newName, 'src'=>$newSrc, 'long-text'=>$newLongText);
        $this->array_push(proms_array, $newProm);
    }
    
}

?>