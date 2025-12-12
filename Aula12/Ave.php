<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Ave
 *
 * @author Guimarães
 */
include_once './Animal.php';
class Ave extends Animal {
    //put your code here
    private string $corPena;
    
    public function fazerNinho(){
        echo "<p>Construiu um ninho</p>";
    }    
    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }
    public function locomover() {
       echo"<p>Voando</p>"; 
    }
    public function getCorPena(): string {
        return $this->corPena;
    }
    public function setCorPena(string $corPena): void {
        $this->corPena = $corPena;
    }



}
