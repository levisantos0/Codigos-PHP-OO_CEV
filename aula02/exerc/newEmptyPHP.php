<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Carro.php';
            $car1 = new carro;
            $car1 -> cor = 'preto';
            $car1 -> marca = 'Volks';
            $car1 -> portas = 2;
            $car1 ->freio_on();
            $car1 ->andar();
        ?>
    </body>
</html>