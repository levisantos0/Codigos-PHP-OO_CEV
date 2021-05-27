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
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
        $p1 = new Pessoa();
        $p2 = new Pessoa();
        $p3 = new Pessoa();
        $p4 = new Pessoa();
        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Fabiana");
        
        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");
        
        $p1->receberAument(550.20);
        $p2->mudarTrablaho();
        $p4->cancelarMatr();
        
        ?>
        </pre>
    </body>
</html>
