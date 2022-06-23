<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        /*
        1 - is_array(arry) -> Verificar se o parâmetro é um array
            $array = array('notebok', 'teclado');
            $retorno = is_array($array);

            if($retorno) {
                echo 'Sim, é um array';
            } else {
                echo 'Não, não é um array';
            }
        */


        /*
        2 - array_keys(array) -> Retorna todas as chaves de um array
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';
        */


        /*
        3 - sort(array) -> Ordena um array e reajusta seus indices
        $array = array('teclado','mouse','cabo HDMI','notebok');
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            sort($array); //true ou false
            echo '<pre>';
                print_r($array);
            echo '</pre>';
        */


        /*
        4 - asort(array) -> Ordena um array preservando os índices
        $array = array('teclado','mouse','cabo HDMI','notebok');
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            asort($array); //true ou false
            echo '<pre>';
                print_r($array);
            echo '</pre>';
        */


        /*
        5 - count(array) -> Conta a quantidade de elementos de um array 
        $array = array('teclado','mouse','cabo HDMI','notebok', 'gabinete');
            echo '<pre>';
                print_r($array);
                echo count($array);
            echo '</pre>'
        */


        /*
        6 - array_merge(array) -> Funde um ou mais array
        $array1 = ['osx', 'Windows'];
        $array2 = array ('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
            echo '<pre>';
                print_r($novo_array);
            echo '</pre>'
        */


        /*
        7 - explode(array) -> Divide uma string baseada em um delimitador
        $string = '26/04/2018';
        $array_retorno = explode('/', $string);
            echo '<pre>';
            echo $string;
                print_r($array_retorno);
                echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
            echo '</pre>';
        */


        /*
        8 - implode(array) -> Junta elementos de um array em uma string
        $array = ['a','b','x','y']; // a,b,x,y
        $string_retorno =  implode('*', $array);
        echo $string_retorno;
        */
        ?>

    </body>
</html>

    <!--
        1 - is_array(arry) -> Verificar se o parâmetro é um array

        2 - array_keys(array) -> Retorna todas as chaves de um array

        3 - sort(array) -> Ordena um array e reajusta seus indices

        4 - asort(array) -> Ordena um array preservando os índices

        5 - count(array) -> Conta a quantidade de elementos de um array 

        6 - array_merge(array) -> Funde um ou mais array

        7 - explode(array) -> Divide uma string baseada em um delimitador

        8 - implode(array) -> Junta elementos de um array em uma string
    -->