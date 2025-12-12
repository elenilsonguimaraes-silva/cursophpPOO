<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Visitante.php';
        require_once './Aluno.php';
        require_once './Bolsista.php';    
        require_once './Professor.php';
        require_once './Tecnico.php';
        // put your code here
        $v1 = new Visitante();
        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("Masculino");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome("Jubileu");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->pagarMensalidade();       
        print_r($b1);
        
        $p1 = new Professor();
        $p1->setNome("Gustavo Guanabara");
        $p1->setIdade(37);
        $p1->setSalario(10000);
        $p1->setEspecialidade("Informática");
        $p1->setSexo("Masculino");
        $p1->fazerAniversario();
        $p1->receberAumento();        
        print_r($p1);
      
        $alt1 = new Tecnico();
        $alt1->setMatricula(1115);
        $alt1->setNome("José");
        $alt1->setCurso("Usinagem");
        $alt1->setIdade(23);
        $alt1->setRegistroProfissional(272513);   
        $alt1->setSexo("Masculino");
        $alt1->fazerAniversario();
        $alt1->praticar();
        print_r($alt1);
        ?>
        </pre>
    </body>
</html>
