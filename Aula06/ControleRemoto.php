<?php
require_once './Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
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
        echo"<p>------Menu--------</p>";
        echo"<p>Está Ligado? ".(($this->getLigado())?"SIM":"NÃO")."</p>";
        echo"<p>Está tocando? ".(($this->getTocando())?"SIM":"NÃO")."</p>";
        echo "<p>Volume ".$this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "</p>";      
        echo "<br />";      
    }
    public function fecharMenu() {
        echo "Fechando Menu";
    }
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        }else{
            echo "ERRO! Impossível aumentar volume de aparelho desligado";
        }
        
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);
        }else{
           echo "ERRO! Impossível diminuir o volume de aparelho desligado";
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume($this->getVolume() + 50);
        }
    }
    public function play() {
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}
