<?php
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
