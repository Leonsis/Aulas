<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            /* Operadores Relacionais
                Maior que: >
                Menos que: <
                Maior ou igual a : >=
                Menos ou igual a: <=
                Igual a: ==
                Diferente de: != ou <>
                Identico a: ===
                Nao identico a: !==

                Operador Unário
                Expressão ? Vaerdadeiro : Falso
                Tem a mesma ideia de uma estrutura condicional if else

                Exercicio: Permitir que o usuário escolha entre somar e multiplicar dois numeros.
            */
            $num1 = $_GET['a'];
            $num2 = $_GET['b'];
            $operacao = $_GET['op'];
            echo('Os valores passados foram ' . $num1 . ' e ' . $num2 . '<br>');
            
            $resultado = ($operacao == 's') ? $num1 + $num2 : $num1 * $num2;
            echo('O resultado da operação é ' . $resultado . '<br>');

            /* Agora explicando como funciona o == e o === */
            $num3 = 3;
            $num4 = '3';
            $r = ($num3 == $num4) ? 'SIM' : 'NÃO';
            echo('<br> O valor ' . $num3 . ' é igual a ' . $num4 . '? ' . $r);
            $r2 = ($num3 === $num4) ? 'SIM' : ' NÃO';
            echo('<br> O valor ' . $num3 . ' é identico a ' . $num4 . '? ' . $r2);
            /* No ultimo caso a resposta é não por que eles são de tipos diferentes. */
        ?>        
    </body>
</html>