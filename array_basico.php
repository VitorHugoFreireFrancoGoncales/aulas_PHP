<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        // //sequenciais (numéricos)
        // //$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
        // $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];
        // $lista_frutas[] = 'Abacaxi';


        // // echo '<pre>';
        // // var_dump($lista_frutas);
        // // echo '</pre>';

        // // echo '<hr />';

        // // echo '<pre>';
        // // print_r($lista_frutas);
        // // echo '<pre />';


        // echo $lista_frutas[2];


        //associativos
        $lista_frutas = array(
        'k' => 'Banana', 
        'g' => 'Maça', 
        'f' => 'Morango', 
        'x' => 'Uva');

        echo '<pre>';
        var_dump($lista_frutas);
        echo '<pre>';

        
       echo($lista_frutas['g']); 
        echo '<pre>';

    ?>
</body>
</html>