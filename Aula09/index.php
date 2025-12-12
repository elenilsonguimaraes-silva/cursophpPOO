<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Pessoa.php';
        require_once './Livro.php';
        
        $p[0] = new Pessoa("Elenilson", 38, "masculino");
        $p[1] = new Pessoa("Lorrany", 27, "Feminino");
        
        $livro[1] = new Livro("PHP Programando com Orientação a Objetos", "Pablo Dall'Oglio", 571, $p[0]);        
        $livro[1]->abrir();
        $livro[1]->detalhes();
        $livro[1]->folhear(7);
        $livro[1]->avancarPag();
        $livro[1]->voltarPag();
        $livro[1]->voltarPag();
        $livro[1]->voltarPag();
        $livro[1]->voltarPag();
        $livro[1]->voltarPag();
        $livro[1]->voltarPag();
        $livro[1]->voltarPag();
        $livro[1]->voltarPag();
        $livro[1]->fechar();
        $livro[1]->fechar();
        $p[0]->fazerAniversario();
        $livro[1]->detalhes();
        $livro[1]->fechar();
        $livro[2] = new Livro("Quem Pensa Henriquece", "Napoleon Hill", 304, $p[1]);
        $livro[2]->abrir();
        $livro[2]->detalhes();
        $livro[2]->folhear(7);
        $livro[2]->avancarPag();
        $livro[2]->voltarPag();
        $livro[2]->voltarPag();
        $livro[2]->voltarPag();
        $livro[2]->voltarPag();
        $livro[2]->voltarPag();
        $livro[2]->voltarPag();
        $livro[2]->voltarPag();
        $livro[2]->voltarPag();
        $livro[2]->fechar();
        $livro[2]->fechar();
        $p[1]->fazerAniversario();
        $livro[2]->detalhes();
        $livro[2]->fechar();
               
        ?>
        </pre>
    </body>
</html>
