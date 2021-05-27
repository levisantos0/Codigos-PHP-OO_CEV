<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
//        $l[0]->perderLuta();
//        $l[0]->ganharLuta();
//        $l[0]->empatarLuta();
//        $l[0]->Status();
//        $l[0]->apresentar();
        
        
        $l[1]= new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
//        $l[1]->Status();
//        $l[1]->apresentar();
        
        
        $l[2]= new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
//        $l[2]->Status();
//        $l[2]->apresentar();
        
        $l[3]= new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
//        $l[3]->Status();
//        $l[3]->apresentar();
        
        
        $l[4]= new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
//        $l[4]->Status();
//        $l[4]->apresentar();
        
        $l[5]= new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
//        $l[5]->Status();
//        $l[5]->apresentar();
        
        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[4], $l[5]);
        $UEC01->Lutar();
        
        $l[4]->Status();
        $l[5]->Status();
        
        
        
        ?>
        </pre>
    </body>
</html>
