<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php

    //Operadores Condicionais / Comparação
    // ==
    // ===
    // != ou <>
    // !==
    //<
    //>
    //=>
    //=<

    $idade = 2022 - 1997;

    $aviso = "Sua idade não e compativel";

    if($idade == 25){
        echo "sua idade é: $idade";
    }else {
        echo $aviso;
    }

    ?>
</body>
</html>