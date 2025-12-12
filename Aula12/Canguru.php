<?php
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
