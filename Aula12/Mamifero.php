<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mamifero
 *
 * @author Guimarães
 */
include_once './Animal.php';
class Mamifero extends Animal{
    //put your code here
    private string $corPelo;
    
    public function alimentar() {
        echo "<p>Mamando</p>";        
    }
    public function emitirSom() {
        echo "<p>Som de mamífero</p>";
    }
    public function locomover() {
        echo "<p>Correndo<p/>";
    }
    public function getCorPelo(): string {
        return $this->corPelo;
    }

    public function setCorPelo(string $corPelo): void {
        $this->corPelo = $corPelo;
    }



}
