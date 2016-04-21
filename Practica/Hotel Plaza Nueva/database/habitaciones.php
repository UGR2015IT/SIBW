<?php 
    
    class habitaciones {
        var $habs_array = array(
            array(
                'cod_hab'=> 'TWI',
                'id'=> 'twin',
                'nombre_hab'=> 'DOBLE TWIN',
                'precio'=> '79',
                'num_hab'=> '5',
                'avail_hab'=> '5',
                'descr'=> 'En nuestras habitaciones standard disfrutará de todo el equipamiento y comodidades que su estancia en Granada merece.'
            ),
            array(
                'cod_hab'=> 'SUP',
                'id'=> 'superior',
                'nombre_hab'=> 'DOBLE SUPERIOR',
                'precio'=> '89',
                'num_hab'=> '5',
                'avail_hab'=> '5',
                'descr'=> 'Disfrute de una magnifica vista de Plaza Nueva y el centro de Granada desde nuestras habitaciones superiores.'
            ),
            array(
                'cod_hab'=> 'TRI',
                'id'=> 'triple',
                'nombre_hab'=> 'TRIPLE',
                'precio'=> '115',
                'num_hab'=> '5',
                'avail_hab'=> '5',
                'descr'=> 'En nuestras habitaciones triples podrá disfrutar de sus vacaciones en familia o con amigos en el centro de Granada.'
            )
        );
        
        public function getArray(){
            return $this->habs_array;
        }
    }

?>