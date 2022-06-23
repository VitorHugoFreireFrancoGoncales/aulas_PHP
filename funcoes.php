<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP</title>
    </head>
    <body>

    <h3>Pós-Incremento</h3>
        <?php

        //void (sem retorno)
        function exbirBoasVindas () {
            echo "Boa vindas <br />";
        }
            exbirBoasVindas();
            exbirBoasVindas();
            exbirBoasVindas();
            exbirBoasVindas();
            exbirBoasVindas();
            exbirBoasVindas();
            exbirBoasVindas();
            exbirBoasVindas();
            exbirBoasVindas();



        //return (com retorno)
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento; 
            return $area;
        }
            echo calcularAreaTerreno(300, 500);
            echo '<br/>';
            echo calcularAreaTerreno(5, 5);
            echo '<br/>';
            echo calcularAreaTerreno(3, 3);
            echo '<br/>';
            echo calcularAreaTerreno(2, 2);
        ?>
    </body>
</html>