<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    //operadores condicionais / comparação
    // ==
    // ===
    // != ou <>
    // !==
    //<
    //>
    //=>
    //=<

    //&& o AND -> Retorna verdadeiro se todos os resultados das expressões forem verdadeiros.

    //OU: || ou OR -> Retorna verdadeiro se pelo menos um dos resultados das expressãoes for verdadeiro.

    //XOR: XOR -> Retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-vera.

    //! -> Inverte o resultado retornado pela expressão.


    //v e v = v
    if( ! (4 == 4 XOR 10 > 15 )) {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    }
    
    ?>
</body>
</html>