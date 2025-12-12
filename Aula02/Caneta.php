<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author Guimarães
 */
class Caneta {
    public    $modelo;
    public    $cor;
    private   $ponta;
    protected $carga;
    protected $tampada;
    
    
    public function rasbicar(){
        if ($this->tampada){
            echo "<p>ERRO! Não posso rabiscar;</p>";
        }else{
            echo "<p>Estou rasbicando...</p>";
        }
       
    }
    public function tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }
}
