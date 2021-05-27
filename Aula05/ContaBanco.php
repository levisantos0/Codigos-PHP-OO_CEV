<?php

class ContaBanco {
    public $numConta;
    protected $tipo; 
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function fechaConta($dn,$nc,$sd,$st,$tp){
            $this->setDono($dn);
            $this->setNumConta($nc);   
            $this->setSaldo($sd);
            $this->setStatus($st);
            $this->setTipo($tp);
    }
    
    public function abrirConta($tp){
            $this->setStatus(true);
            $this->setTipo($tp);
            if ($tp=="CC"){
                $this->setSaldo(50);
            }elseif($tp=="CP") {
                $this->setSaldo(150);
            }          
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>A conta não pode ser encerrada pois a conta ainda tem dinheiro.</p>";
        }else if($this->getSaldo() < 0) {
            echo "<p>Conta em débito... Impossível encerrar a conta.</p>";
        }else{
            $this->fechaConta(null, null, null, false, null);
            echo "<p>Conta de ".$this->getDono()." fechada com sucesso!</p>";
        }
    }
    public function depositar($v){
        if ($this->getStatus()==true){
            $this->setSaldo($this->getSaldo()+$v);
            echo "<p>Deposito de R$$v,00 autorizado na conta de " . $this->getDono(). ". Saldo Atual:R$".$this->getSaldo().",00</p>";
        }else{
            echo "<p>Conta fechada. Impossível depositar</p>";
        }
    }
    public function sacar($v){
        if ($this->getStatus()==true){
            if($this->getSaldo()>=$v){
                $this->setSaldo($this->getSaldo()-$v);
                echo "<p>Saque de R$$v,00 autorizado na conta de " . $this->getDono(). ". Saldo Atual:R$".$this->getSaldo().",00</p>";
            }else
                echo "<p>Saldo insuficiente para realizar o saque. Saldo Atual:R$.".$this->getSaldo().",00.</p>";
        }else{
            echo "<p>Conta fechada. Impossível sacar</p>";
        }      
        
    }
    public function pagarMensal(){
        if ($this->getTipo()=="CC"){
            $v = 12;
        }elseif($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()==true){
            if ($this->getSaldo()>$v){
                $this->setSaldo($this->getSaldo()-$v);
                echo "<p>Mensalidade de R$$v,00 debitada da conta de ".$this->getDono(). ". Saldo Atual:R$". $this->getSaldo().",00</p>";
            }else{
                echo "<p>Problemas com a conta. Não posso cobrar.</p>";
            }                
        }
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($n): void {
        $this->numConta = $n;
    }

    public function setTipo($t): void {
        $this->tipo = $t;
    }

    public function setDono($d): void {
        $this->dono = $d;
    }

    public function setSaldo($s): void {
        $this->saldo = $s;
    }

    public function setStatus($st): void {
        $this->status = $st;
    }
}
?>