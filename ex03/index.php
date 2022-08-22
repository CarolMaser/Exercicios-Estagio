<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <?php
        // $v1 = 1;
        // $v2 = 2;
        // $v3 = 2;
        // $media = ($v1 + $v2 + $v3) / 3;

        

        // if ($v1 === $v2) {
        //     echo "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo.";            
        // } elseif ($v1 === $v3){
        //     echo "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo.";
        // } elseif ($v2 === $v3) {
        //     echo "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo.";
        // }
        // else {
        //     echo "O menor número informado foi " . min($v1, $v2, $v3);
        //     echo "<br>O maior número informado foi " . max($v1, $v2, $v3); 
        //     echo "<br>A média dos números informados é de " . $media;            
        // }

        $v1 = 8;
        $v2 = 7;
        $v3 = 10;
        $media = ($v1 + $v2 + $v3) / 3;

        if ($v1 === $v2) {
            echo "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo.";            
        } elseif ($v1 === $v3){
            echo "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo.";
        } elseif ($v2 === $v3) {
            echo "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo.";
        } else {
            if ($v1 > $v2) {
                if ($v1 > $v3) {
                    echo "<br>O maior número informado foi $v1";
                } else {
                    echo "<br>O maior número informado foi $v3";
                } 
            } elseif ($v2 > $v3) {
                echo "<br>O maior número informado foi $v2";
            } else {
                echo "<br>O maior número informado foi $v3";
            } if ($v1 < $v2) {
            if ($v1 < $v3) {
                echo "<br>O menor número informado foi $v1";
            } else {
                echo "<br>O menor número informado foi $v3";
            }  
        } elseif ($v2 < $v3) {
            echo "<br>O menor número informado foi $v2";
        } else {
            echo "<br>O menor número informado foi $v3";
        }
    }
        echo "<br>A média dos números informados é de " . $media;



        // if ($v1 > $v2 ? $v1 : $v2) {
        //     echo "<br>O maior número informado foi $v1";
        // }

        // $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO.":"NÃO OBRIGATÓRIO.";

        // if ($v1==$v2  && $v1==$v3 && $v2==$v3)? "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo.";
        //     echo "ERRO!!! Você deve digitar números diferentes para que seja efetuado o cálculo."; 
        // } else {
        //     echo "O menor número informado foi " . min($v1, $v2, $v3);
        //     echo "<br>O maior número informado foi " . max($v1, $v2, $v3); 
        //     echo "<br>A média dos números informados é de " . $media; 

        // }

    ?>
</body>
</html>