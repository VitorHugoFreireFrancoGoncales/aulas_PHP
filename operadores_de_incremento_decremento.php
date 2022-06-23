<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP</title>
    </head>
    <body>
            <hr>
        <h3>Pós-Incremento</h3>
        <?php
            $a = 7;

            echo "O valor contido em a é: $a <br />";
            echo 'O valor contido em a após o incremento é: ' . $a++ . '<br />';
            echo "O valor atualizado é: $a";
        ?>

            <hr>

        <h3>Pré-Incremento</h3>
        <?php
            $a = 7;
            echo "O valor contido em a é: $a <br />";
            echo 'O valor contido em a pré o incremento é: ' . ++$a . '<br />';
            echo "O valor atualizado é: $a";
        ?>

            <hr>

        <h3>Pós-Decremento</h3>
        <?php
            $a = 7;

            echo "O valor contido em a é: $a <br />";
            echo 'O valor contido em a após o decremento é: ' . $a-- . '<br />';
            echo "O valor atualizado é: $a";
        ?>

            <hr>

        <h3>Pré-Decremento</h3>
        <?php
            $a = 7;
            echo "O valor contido em a é: $a <br />";
            echo 'O valor contido em a pré o decremento é: ' . --$a . '<br />';
            echo "O valor atualizado é: $a";
        ?>

    </body>
</html>