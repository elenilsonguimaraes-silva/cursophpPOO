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
        <h1>
        <?php
            require_once './Cachorro.php';
            require_once './Lobo.php';
            require_once './Mamifero.php';
            
            $c = new Cachorro();
            $c->reagirFrase("Olá");
            $c->reagirFrase("Vai Apanhar");
            $c->reagirHora(11, 45);
            $c->reagirHora(21, 00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdade(2, 12.5);
            $c->reagirIdade(17, 4.5);
            
            
            
            
            
            
        ?>
        </h1>
    </body>
</html>
