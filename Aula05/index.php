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
        require_once 'ContaBanco.php';
        $p1 = new contaBanco(); //João
        $p2 = new contaBanco(); //Maria
        
        $p1->abrirConta("CC");
        $p1->setNumConta(1111);
        $p1->setDono("João");
        
        $p2->abrirConta("CP");
        $p2->setNumConta(2222);
        $p2->setDono("Maria");
        
        $p1->depositar(300);
        $p2->depositar(500);
        
        $p2->sacar(100);
        
        $p1->pagarMensal();
        $p2->pagarMensal();
        
        $p1->sacar(338);
        $p2->sacar(530);
        
        $p1->fecharConta();
        $p2->fecharConta();
                
        
        print_r($p1);
        print_r($p2);

?>
        </pre>    
                
        ?>
    </body>
</html>
