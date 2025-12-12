<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Reptil
 *
 * @author Guimarães
 */
include_once './Animal.php';
class Reptil extends Animal {
    //put your code here
    private string $corEscama;
    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom() {
        echo "<p>Som de réptil</p>";        
    }
    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    public function getCorEscama(): string {
        return $this->corEscama;
    }
    public function setCorEscama(string $corEscama): void {
        $this->corEscama = $corEscama;
    }


}
