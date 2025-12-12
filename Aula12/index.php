<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        // put your code here
        include_once './Mamifero.php';
        include_once './Reptil.php';
        include_once './Peixe.php';
        include './Ave.php';
        include_once './Canguru.php';
        include_once './Cachorro.php';
        include_once './Cobra.php';
        include_once './Tartaruga.php';
        include_once './GoldFish.php';
        include_once './Arara.php';        
        
        $m = new Mamifero(); 
        $ave = new Ave();
        $reptil = new Reptil();
        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();
        
        /*
        $m->locomover();
        $ave->locomover();
        $reptil->locomover();
        $c->locomover();
        $k->locomover();
        $t->locomover()
         */
        
        $m->emitirSom();
        $k->emitirSom();
        $c->emitirSom();
        
        ?>
        </pre>
    </body>
</html>
