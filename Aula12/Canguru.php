<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Canguru
 *
 * @author Guimarães
 */
include_once './Mamifero.php';
class Canguru extends Mamifero{
    //put your code here
    public function locomover() {
        echo "<p>Saltando<p/>";
    }
    public function usarBolsa() {
        echo "<p>Usando a bolsa<p/>";
    }
}
