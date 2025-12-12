<?php
/**
 * Description of Bolsista
 *
 * @author Guimarães
 */
require_once './Aluno.php';
class Bolsista extends Aluno {
    //put your code here
    private float $bolsa;
    public function renovarBolsa(){
        echo"<p>Bolsa renovada</p>";
    }
    public function pagarMensalidade(){
        echo"<p>".$this->getNome()." é bolsista! Então paga com desconto!</p>";
    }
    public function getBolsa(): float {
        return $this->bolsa;
    }

    public function setBolsa(float $bolsa): void {
        $this->bolsa = $bolsa;
    }



}
