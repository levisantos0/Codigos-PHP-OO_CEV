<?php

class Carro {
    var $cor;
    var $marca;
    var $portas;
    var $freio_mao;
    
    function andar(){
       if ($this->freio_mao == false){
            echo "<p>Andando<p>";
        }else{
            echo "<p>Parado<p>";
        }
    }    
    function freio_on(){
        $this->freio_mao=true;
    }
    function freio_off(){
        $this->freio_mao=false;
    }
}
            $car1 = new carro;
            $car1 -> cor = 'preto';
            $car1 -> marca = 'Volks';
            $car1 -> portas = 2;
            $car1 ->freio_off();
            $car1 ->andar();
