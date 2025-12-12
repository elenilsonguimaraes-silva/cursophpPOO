<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Professor
 *
 * @author Guimarães
 */
require_once './Pessoa.php';
class Professor extends Pessoa {
    //put your code here
    private float $salario;
    private string $especialidade;
   
    public function receberAumento(){
        echo"<p>O salário atual de ".$this->getNome()." é R$: ".$this->getSalario()."</p>";
        $this->setSalario(($this->getSalario() * 0.20) + $this->getSalario());
        echo"<p>O salário com aumento é R$: ".$this->getSalario()."</p>";
    }
    public function getSalario(): float {
        return $this->salario;
    }

    public function getEspecialidade(): string {
        return $this->especialidade;
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

    public function setEspecialidade(string $especialidade): void {
        $this->especialidade = $especialidade;
    }


}
