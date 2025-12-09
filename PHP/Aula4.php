<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula4</title>
    </head>
    <body>
        <?php
            /* A varia três formas de atribuir um valor a uma variavel */
            $a = 2;
            $b = 3;
            $c = $a + $b;
            $c = $c + 5;            
            $c += 5; /* Isso é a mesma coisa de $c = $c + 5 */
            $c++; /* Isso é a mesma coisa de $c = $c + 1 */

            /* 
                Adição: $a = $a + $b ou $a += $b 
                Subtração: $a = $a - $b ou $a -= $b 
                Multiplicação: $a = $a * $b ou $a *= $b
                Divisão: $a = $a / $b ou $a /= $b 
                Módulo: $a = $a % $b ou $a %= $b
                Concatenção: $a = $a . $b ou $a .= $b 
            */

            /* Exercicio: Aplicar 10% de desconto ao preço de um produto */
            $preco = 100;
            echo("O preco do produto e R$" . $preco);
            // $preco = $preco + ($preco * 10/100);
            $preco += ($preco * 10/100);
            echo("O novo preço com 10% de aumento é de " . number_format($preco, 2));

            /* Operadores de Incremento 
                Pré-incremento: ++ $a Aqui primeiro incrementa e depois atribui o valor.
                Pós-incremento: $a ++ Aqui primeiro atribui o valor e depois incrementa.
                Pré-decremento: -- $a
                Pós-decremento: $a --
            */
            $a = 1;
            echo("<br>O valor de a é: " . $a);
            echo("<br>O valor de ++a é: " . ++$a);
            echo("<br>O valor de a é: " . $a);
            echo("<br>O valor de a++ é: " . $a++);
            echo("<br>O valor de a é: " . $a);
            echo("<br>O valor de --a é: " . --$a);
            echo("<br>O valor de a é: " . $a);
            echo("<br>O valor de a-- é: " . $a--);

            /* Variaveis referenciadas */
            $b = 3;
            $c = &$b; // Aqui estou criando uma variavel referenciada, ou seja, $c é uma referencia de $b.
            echo("<br>O valor de b é: " . $b);
            echo("<br>O valor de c é: " . $c);
            $b += 5; // Aqui estou alterando o valor de $b, e como $c é uma referencia de $b, o valor de $c também é alterado.
            echo("<br>O valor de b é: " . $b);
            echo("<br>O valor de c é: " . $c);

            /* Varieavel de variavel */
            $x = "abc";
            $$x = "def"; // Aqui estou criando uma variavel de variavel, ou seja, $abc é igual a "def".
            echo("<br>O valor de x é: " . $x);
            echo("<br>O valor de abc é: " . $abc);
        ?>
    </body>
</html>