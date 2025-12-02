<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operações Aritiméticas</title>
    </head>
    <body>
        <?php
            /* 
                No caso essas são os seguintes operadores aritiméticos
                Adição $r = $n1 + $n2
                Subtrção -> $r = $n1 - $n2
                Multiplicação -> $r = $n1 * $n2
                Divisão -> $r = $n1 / $n2
                Módulo -> $r = $n1 % $n2
            */
            /*
                Tambem é possilve passar valores, parametros diretamente pela url, 
                para que assim os valores sejna dinamicos.
                Exemplo: somador.php?a=5&b=10                
            */
            $n1 = isset($_GET["a"]) ? $_GET["a"] : 2; // Aqui estou usando o operador ternario.
            // GET, sinifica pegar, ou seja, ele vai pegar o paramento a que está na URL e vao jogar para a varavel $n1.
            $n2 = isset($_GET["b"]) ? $_GET["b"] : 3; // Com o isset() estou verificando se o parametro existe na URL.
            echo('Valores recebidos: ' . $n1 . ' e ' . $n2 . '<br>');
            echo('A soma entre ' . $n1 . ' e ' . $n2 . ' é igual a ' . ($n1 + $n2) . '<br>');
            echo('A subtrção entre ' . $n1 . ' e ' . $n2 . ' é igual a ' . ($n1 - $n2) . '<br>');
            echo('A multiplicação entre ' . $n1 . ' e ' . $n2 . ' é igual a ' . ($n1 * $n2) . '<br>');
            echo('A divisão entre ' . $n1 . ' e ' . $n2 . ' é igual a ' . ($n1 / $n2) . '<br>');
            echo('O módulo entre ' . $n1 . ' e ' . $n2 . ' é igual a ' . ($n1 % $n2) . '<br>');
            /* 
               Em uma expreção aaritmética essa é a seguinte ordem de precedência:
               1° Parênteses ()
               2° Muntiplicação, Divisão, Módulo * / %
               3° Adição e Subtração + -

               Vamos dar um exeplo de como seria a procedência:
            */
            $m = ($n1+$n2)/2; // Ordem Correta de precedência
            $m2 = $n1+$n2/2; // Ordem Incorreta de precedência
            echo('<br> A média correta entre ' . $n1 . ' e ' . $n2 . ' é igual a ' . $m);
            echo('<br> A média incorreta entre ' . $n1 . ' e ' . $n2 . ' é igual a ' . $m2);
            // O php tmabem tem funções matemáticas nas quais auxiliam nos calculos.                
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo('<br> Os valores recebidos são: ' . $v1 . ' e ' . $v2);
            // abs(), para pehgar o valor absoluto de uma variavel.
            echo('<br> O valor absoluto de ' . $v2 . ' é igual a ' . abs($v2));
            // pow(), para pegar o valor elevado a uma potencia.
            echo('<br> O valor de ' . $v1 . ' elevado a <sup>' . $v2 . '</sup> é igual a ' . pow($v1,$v2));
            // sqrt(), para pegar a raiz quadrada de uma variavel.
            echo('<br> A rais quadrada de ' . $v1 . ' é igual a ' . sqrt($v1));
            // round(), para arredondar um valor. Tambem tendo o ceil() para arredondar para cima e o floor() para arredondar para baixo.
            echo('<br> O valor de ' . $v1 . ' arredondado é igual a ' . round($v1));
            // intval(), para pegar a parte inteira de um numero real.
            echo('<br> A parte inteira de '. $v1 . ' é igual a ' . intval($v1));
            // number_format(), para formatar um numero. Tambem é possivel escolher o separador number_format($v1, 2, ',')
            echo('<br> O valor de ' . $v1 . ' formatado com 2 casas decimais é igual a ' . number_format($v1, 2));
        ?>
    </body>
</html>