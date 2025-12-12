<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Peixe
 *
 * @author Guimarães
 */
include_once './Animal.php';
class Peixe extends Animal {
    //put your code here
    private string $corEscama;
    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }
    public function locomover() {
        echo "<p>Nadando</p>";
    }
    public function soltarBolha() {
        echo "<p>Soltou uma bolha</p>";
    }
    public function getCorEscama(): string {
        return $this->corEscama;
    }

    public function setCorEscama(string $corEscama): void {
        $this->corEscama = $corEscama;
    }


}
