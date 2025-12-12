<?php

abstract class  Animal {
    //put your code here
    protected float $peso;
    protected int $idade;
    protected int $membros;
    abstract function emitirSom();
    public function getPeso(): float {
        return $this->peso;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getMembros(): int {
        return $this->membros;
    }

    public function setPeso(float $peso): void {
        $this->peso = $peso;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function setMembros(int $membros): void {
        $this->membros = $membros;
    }


       
}
