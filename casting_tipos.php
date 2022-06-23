<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        //gettype() => retorna o tipo da varável
        $valor = 10.55;
        $valor2 = (int) $valor;

        echo $valor . ' ' . gettype($valor);
        echo '<br />';
        echo $valor2 . ' ' . gettype($valor2);
    ?>
</body>
</html>