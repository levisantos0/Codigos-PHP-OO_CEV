<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Controle Remoto Project</h1>
        <pre>
        <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->play();
        $c->abrirMenu();
        $c->maisVolume();
        $c->ligarMudo();
        $c->fecharMenu();
        ?>
        </pre>
    </body>
</html>
