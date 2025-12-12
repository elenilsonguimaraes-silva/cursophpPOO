<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Aluno
 *
 * @author Guimarães
 */
require_once './Pessoa.php';
class Aluno extends Pessoa {
    //put your code here
    private int $matricula;
    private string $curso;
    public function pagarMensalidade(){
        echo"<p>Pagendo mensalidade do aluno: <strong>". $this->getNome()."</strong><p>";
    }
    public function getMatricula(): int {
        return $this->matricula;
    }

    public function getCurso(): string {
        return $this->curso;
    }

    public function setMatricula(int $matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso(string $curso): void {
        $this->curso = $curso;
    }


}
