<?php
class ContaBanco {
    public  $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($tipo == "CC"){
            $this->setSaldo(50);
        }elseif($tipo == "CP"){
            $this->setSaldo(150);
        }            
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo"<p>Conta com Dinheiro</p>";
        }elseif ($this->getSaldo()< 0) {
            echo "<p>Conta com Saldo negativo</p>";
        }else{
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso</p>";
        }
        
    }
    public function depositar($valor){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $valor);   
            echo "<p>Depósito de R$: {$valor} na conta de {$this->getDono()}</p>";
            echo "<p>Saldo {$this->getSaldo()}</p>";
        } else{
            echo "<p>Impossível Depositar!</p>";
        }      
    }
    public function sacar($valor){
        if($this->getStatus()){
            if($this->getSaldo() >= $valor){
                $this->setSaldo( $this->getSaldo() - $valor);
                echo "<p>O saque de {$valor} foi autorizado na conta de {$this->getDono()} </p>";
                echo "<p>Saldo {$this->getSaldo()} </p>";
            }else{
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        }else{
            echo "<p>Impossível Sacar!</p>";
        }          
    }
    public function pagarMensal(){
        
        if($this->getTipo() == "CC"){
            $mensalidade = 12;
        }elseif($this->getTipo() == "CP"){
            $mensalidade = 20;
        }
        if($this->getStatus()){
            if($this->getSaldo() > $mensalidade){
                $this->setSaldo($this->getSaldo() - $mensalidade);
                echo "<p>Mensalidade de R$ {$mensalidade}  debitada  na conta de {$this->getDono()}</p>";
                echo "<p>Saldo {$this->getSaldo()}</p>";
            }else{
                echo "<p>Saldo Insuficiente</p>";
            }
        }else{
             echo "<p>Impossível Pagar</p>";
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

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


}
