<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Cachorro
 *
 * @author Guimarães
 */
require_once './Mamifero.php';
class Cachorro extends Mamifero{
    //put your code here
     public function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }
}
