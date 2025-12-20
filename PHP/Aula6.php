<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $nota1 = $_GET['n1'];
            $nota2 = $_GET['n2'];
            $media = ($nota1 + $nota2) / 2;
            echo('A média entre ' . $nota1 . ' e ' . $nota2 . ' é ' . $media . '<br>');            
            echo('Situação do aluno: ' . (($media >= 6) ? 'Aprovado' : 'Reprovado'));
            /* E agora vamos ver os operadores logicos 
                && = E
                || = OU
                ! = NÃO
                xor = XOR (OU exclusivo)

                | A | B |  A E B |
                | V | V |   V    |
                | V | F |   F    |
                | F | V |   F    |
                | F | F |   F    |

                | A | B | A OU B |
                | V | V |   V    |
                | V | F |   V    |
                | F | V |   V    |
                | F | F |   F    |

                | A | Não A |
                | V |   F   |
                | F |   V   |                

                | A | B | A XOU B |
                | V | V |   F     |
                | V | F |   V     |
                | F | V |   V     |
                | F | F |   F     |                
            */
        ?>
    </body>
</html>