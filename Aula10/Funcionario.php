<?php
require_once 'Pessoa.php';
class Funcionatio extends Pessoa {
    private $setor, $trabalhando;
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }

        function mudarTrablaho(){
        
    }
}
