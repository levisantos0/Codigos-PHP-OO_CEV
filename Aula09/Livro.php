<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
   private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

   public function __construct($titulo, $autor, $totPaginas, $leitor) {
       $this->setTitulo($titulo);
       $this->setAutor($autor);
       $this->setTotPaginas($totPaginas);
       $this->setLeitor($leitor);
       $this->setAberto(false);
       $this->setPagAtual(0);
   }   
   public function detalhes(){
       echo "<hr><p>Titulo do livro: ".$this->getTitulo()."</p>";
       echo "<p>Autor do livro: ".$this->getAutor()."</p>";
       echo "<p>Total de páginas: ".$this->getTotPaginas()." página atual: ".$this->getPagAtual()."</p>";
       echo "<p>Sendo lido por: ".$this->getLeitor()->getNome()."</p>";
       if ($this->getAberto()){
           echo "<p>O livro está aberto.</p>";
       } elseif($this->getAberto()== false){
           echo "<p>O livro está fechado.</p>";
           
       }

   }
   public function abrir() {
       $this->setAberto(true);
   }

   public function avançarPag() {
       if ($this->getPagAtual()+1 > $this->getTotPaginas()){
           echo "<p>Você já está na última página não pode avançar mais.</p>";
       }else {
            $this->setPagAtual($this->getPagAtual()+1);
       }

   }

   public function fechar() {
       $this->setAberto(false);
   }

   public function folhear($p) {
       if ($p > $this->getTotPaginas()){
           echo "<p>O livro tem ".$this->getTotPaginas()." páginas, você só pode folhear até a página ".$this->getTotPaginas();
       } else{
           $this->setPagAtual($p);
       }
   }

   public function voltarPag() {
       if ($this->getPagAtual()-1 < 1){
           echo "<p>Você está na primeira página, não pode voltar a página.</p>";
       }else{
           $this->setPagAtual($this->getPagAtual()-1); 
       }

   }

   
   public function getTitulo() {
       return $this->titulo;
   }
   public function getAutor() {
       return $this->autor;
   }
   public function getTotPaginas() {
       return $this->totPaginas;
   }
   public function getPagAtual() {
       return $this->pagAtual;
   }
   public function getAberto() {
       return $this->aberto;
   }
   public function getLeitor() {
       return $this->leitor;
   }
   public function setTitulo($titulo): void {
       $this->titulo = $titulo;
   }
   public function setAutor($autor): void {
       $this->autor = $autor;
   }
   public function setTotPaginas($totPaginas): void {
       $this->totPaginas = $totPaginas;
   }
   public function setPagAtual($pagAtual): void {
       $this->pagAtual = $pagAtual;
   }
   public function setAberto($aberto): void {
       $this->aberto = $aberto;
   }
   public function setLeitor($leitor): void {
       $this->leitor = $leitor;
   }   
}
