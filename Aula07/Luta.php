<?php
require_once 'Lutador.php';
class Luta {
    //Atributos    
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Métodos
    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)){
            $this->setAprovada(True);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else{
            $this ->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function Lutar(){
        if ($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0: //empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Vitória do desafiado
                    echo "<p>".$this->desafiado->getNome()." Venceu.</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Vitória do desafiante
                    echo "<p>".$this->desafiante->getNome()." Venceu.</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;                    
            }
        }else {
            echo "<p> Luta não pode acontecer </p>";
        }
    }
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }


    
    
}
