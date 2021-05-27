<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php

        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p [0] = new Pessoa("Pedro", 22, "M");
        $p [1] = new Pessoa("Maria", 31, "F");
        
        $l[0] = new Livro("Intridução ao PHP", "João da Silva", 300, $p[0]);
        $l[1] = new Livro("PHP Orientado a Objeto", "Joana Souza", 500, $p[0]);
        $l[2] = new Livro("PHP Profissional", "Ana Paula", 600, $p[1]);
        
//        print_r($l[0]);
        
        $l[0]->abrir();
        $l[0]->folhear(0);
        $l[0]->voltarPag();
        
        $l[0]->detalhes();
        $l[1]->detalhes();
        ?>
        </pre>
    </body>
</html>
