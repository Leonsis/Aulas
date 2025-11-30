<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /* Para que uma variavel sejá declarada no php é nescessario colocar na frente o $*/     
            $idade = 26;
            $nome = (string)"Caio"; // Com o Type casting (string) o valor é convertido para string.
            echo ($nome . " tem " . $idade . " anos!");
            echo ("<br>");
            // Tmabem pode ser escrito de outra forma:
            echo ("$nome tem $idade anos!");
        ?>
    </body>
</html>