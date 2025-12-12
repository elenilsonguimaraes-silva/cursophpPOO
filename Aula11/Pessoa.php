<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa
 *
 * @author Guimarães
 */
abstract  class Pessoa {
    //put your code here
    private string $nome;
    private int $idade;
    private string $sexo;
    
    
    final public function fazerAniversario(){
        $this->idade++;
    }
    
    public function getNome(): String {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getSexo(): String {
        return $this->sexo;
    }

    public function setNome(String $nome): void {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function setSexo(String $sexo): void {
        $this->sexo = $sexo;
    }


}
