<?php

class Lutador {
    //Atributos
//    private $nome, $nacionalidade, $idade, $altura, $peso,$categoria, $vitorias, $derrotas, $empates;
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //Construtor
    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    
    //Métodos
    public function apresentar(){
        
        echo "<p>----------------------------------------</p>";
        echo "Lutador: ".$this->getNome()."<br>";
        echo "Origem: ".$this->getNacionalidade()."<br>";
        echo $this->getIdade()." Anos <br>";
        echo $this->getAltura()."m de altura <br>";
        echo "Pesando: ".$this->getPeso()."<br>";
        echo "Ganhou: ".$this->getVitorias();
        echo ", Perdeu: ".$this->getDerrotas();
        echo " e Empatou: ".$this->getEmpates();
        echo "<p>----------------------------------------</p>";
    }
    function Status(){
        echo "<p>----------------------------------------</p>";
        Echo $this->getNome();
        echo " é um peso ".$this->getCategoria()." tem ";
        echo $this->getVitorias()." Vitórias, ";
        echo $this->getDerrotas()." Derrotas e ";
        echo $this->getEmpates(). " Empates. ";
        echo "<p>----------------------------------------</p>";
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    Private function setCategoria(): void {
        if ($this->peso<52.2){
            $this->categoria="Inválido";
        } elseif($this->peso<=70.3){
            $this->categoria="leve";
        } elseif($this->peso<=83.9){
            $this->categoria="médio";
        } elseif ($this->peso<=120.2){
            $this->categoria="pesado";
        } else{
            $this->categoria="inválido";
        }
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }

}
