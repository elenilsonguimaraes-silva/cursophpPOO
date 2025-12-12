<?php

require_once './Animal.php';
class Mamifero extends Animal {
    //put your code here
    protected string $corPelo;
    
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
    public function getCorPelo(): string {
        return $this->corPelo;
    }

    public function setCorPelo(string $corPelo): void {
        $this->corPelo = $corPelo;
    }


}
