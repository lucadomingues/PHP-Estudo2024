<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Data</title>
</head>
<body>
    <?php
        // Inserir uma data
        $data = '28/12/2022';
        echo 'Essa data é: '.$data.'<br><hr>';

        // Criando array da data que foi especificada
        $data2 = explode('/', $data);
        echo print_r($data2).'<br><hr>';

        // Extração dos dados do Array
        $dia = $data2[0];
        $mes = $data2[1];
        $ano = $data2[2];
        echo 'Araçatuba, dia '.$dia.' do '.$mes.' de '.$ano.'<br><hr>';

        // Criar variaveis para validação
        $diaValido = true;
        $mesValido = true;
        $anoValido = true;
        if ($ano <= date('Y') && $ano >= 1900){
            $arrumarM31 = array('1','3','5','7','8','10','12');
            $arrumarM30 = array('4','6','9','11');
            // Verifica se tem a existência do mês dentro do Array
            if (in_array($mes, $arrumarM31)){
                if ($dia < 1 || $dia > 31){
                    $diaValido = false;
                }
            }elseif(in_array($mes, $arrumarM30){
                if ($dia < 1 || $dia > 30){
                    $diaValido = false;
                }
            }elseif($mes == 2){
                // Testar se o ano é bissexto
                if ($ano%4==0 && $ano != 0 || $ano%400==0){
                    $fevereiro = 29;
                }else{
                    $fevereiro = 28;
                }

                if ($dia < 1 || $dia > $fevereiro){
                    $mesValido = false;
                }
            }else{
                $mesValido = false;
            }

        }else{
            $anoValido = false;
        }

        if (!$anoValido){
            echo 'Ano digitado Inválido!';
        }elseif($mesValido){
            echo 'Mês digitado Inválido!';
        }elseif($diaValido){
            echo 'Dia digitado Inválido!';
        }else{
            echo 'Data digitada Confere!';
        }
    ?>
</body>
</html>