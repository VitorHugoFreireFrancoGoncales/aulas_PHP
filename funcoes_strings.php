<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP</title>
    </head>
    <body>
    <?php
        $texto = 'CURSO COMPLETO DE PHP';

        //string to lower (strtolower  - Deixa a String com letras minusculas)
        echo $texto . '<br />';
        echo strtolower($texto);

        echo '<br />';
        echo '<br />';
        echo '<hr>';

        //string to upper (Deixa a String com letras maiuscula)
        $linha = 'cursinho php';
        echo $linha . '<br />';
        echo strtoupper($linha);

        echo '<br />';
        echo '<br />';
        echo '<hr>';


        //upper case firt (Primeira Letra maiuscula)
        echo $linha . '<br />';
        echo ucfirst($linha);

        echo '<br />';
        echo '<br />';
        echo '<hr>';

        //string length (retorna a letra em formato de numero)
        echo $linha . '<br />';
        echo strlen($linha);

        echo '<br />';
        echo '<br />';
        echo '<hr>';

        //string replace (substitui uma palavra por outra)
        echo $linha . '<br />';
        echo str_replace('PHP', 'JavaScript', $texto);

        echo '<br />';
        echo '<br />';
        echo '<hr>';

        //string length (retorna a letra em formato de numero)
        //'CURSO COMPLETO DE PHP'
        echo $linha . '<br />';
        echo substr($texto, 1, 4);
    ?>
    </body>
</html>