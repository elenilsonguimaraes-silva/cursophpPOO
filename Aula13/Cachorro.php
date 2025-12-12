<?php

require_once './Lobo.php';
class Cachorro extends Lobo{
    //put your code here
    public function emitirSom() {
        echo "<p>Au!au!au!</p>";
    }
    function reagirFrase(string $frase){
        if($frase =="Toma comida" || $frase == "Olá"){
            echo "<p> Abanar e Latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    function reagirHora(int $hora, int $min){
        if($hora < 12){
            echo "<p>Abanar</p>";
        }elseif($hora >= 18){
            echo "<p>Ignorar</p>";
        }else{
            echo "<p>Abanar e Latir<p>";
        }        
    }
    function reagirDono(bool $dono){
        if($dono){
            echo "<p>Abanar</p>";
        }else{
            echo "<p>Rosnar e Latir</p>";
        }
    }
    function reagirIdade($idade, $peso){
        if($idade < 5){
            if($peso < 10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }else{
            if($peso < 10){
                echo "<p>Rosnar</p>";
            }else{
                echo "<p>Ignorar</p>";
            }
            
        }
    }
}
