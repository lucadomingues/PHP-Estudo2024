<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
    <?php
        //Valores atribuidos
        $num1 = 10;
        $num2 = 8;

        //Função para verificar se os números realmente foram inseridos;
        function verifica_num($num1, $num2){
            if(empty($num1) || empty($num2)){
                return false;
            }
            else{
                return true;
            }
        }

        //Estrutura condicional (if) antes de atribuir argumentos nas funções;
        //Chamando função "verifica_num" para verificar se os números estão validos(não estão vazios);
        if(verifica_num($num1, $num2)==true){
            function soma($num1, $num2){
                return $num1+$num2;
            }

            function subtrair($num1, $num2){
                return $num1-$num2;
            }

            function multiplica($num1, $num2){
                return $num1*$num2;
            }

            function divide($num1, $num2){
                return $num1/$num2;
            }
        }

        //Saída de dados com a chamada das funções;
        echo "A SOMA de $num1 + $num2 é ", soma($num1, $num2),"<br>";
        echo "A SUBTRAÇÃO de $num1 - $num2 é ", subtrair($num1, $num2),"<br>";
        echo "A MULTIPLICAÇÃO de $num1 x $num2 é ", multiplica($num1, $num2),"<br>";
        echo "A DIVISÃO de $num1 / $num2 é ", divide($num1, $num2);
    ?>
</body>
</html>