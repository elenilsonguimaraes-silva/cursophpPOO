<?php
/**
 * Description of Tecnico
 *
 * @author Guimarães
 */
require_once './Aluno.php';
class Tecnico extends Aluno{
    //put your code here
    private int $registroProfissional;
    public function praticar(){
        echo "<p>O técnico: ".$this->getNome()." está pratricando!</p>";
        
    }
    public function getRegistroProfissional(): int {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional(int $registroProfissional): void {
        $this->registroProfissional = $registroProfissional;
    }


}
