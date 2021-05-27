<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->setTocando(false);
        $this->setVolume(50);
        $this->setLigado(false);
    }
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume): void {
        $this->volume = $volume;
    }
    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function ligar() {
      $this->setLigado(true);  
    }
    public function desligar() {
      $this->setLigado(false);  
    }
    public function abrirMenu() {
        echo "<p>----- MENU -----</p>";
        echo "<br>Está Ligado?: ". ($this->getLigado()?"Sim":"Não");
        echo "<br>Está Tocando?: ". ($this->getTocando()?"Sim":"Não");
        echo "<br>Volume: ".$this->getVolume();
        for ($i=0; $i <= $this->getVolume();$i+=10){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "Fechando Menu...";
    }
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function maisVolume() {
        if ($this->getLigado() == true){
            $this->setVolume($this->getVolume() + 10);
        }else{
            echo"<p>Erro! Não posso aumentar o volume</p>";
        }
    }
    public function menosVolume() {
        if ($this->getLigado()==true){
            $this->setVolume($this->getVolume() - 10);
        }else {
            echo"<p>Erro! Não posso abaixar o volume</p>";
        }
    }
    public function pause() {
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
    public function play() {
        if ($this->getLigado() && $this->getTocando()==false){
            $this->setTocando(true);
        }
    }
}