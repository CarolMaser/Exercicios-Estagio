<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = "-3";
        
        // var_dump(is_numeric($n1));


        if (is_numeric($n1)) {

            if ($n1 < 0) {
                echo "<br>negativo";
            } elseif ($n1 == 0) {
                echo "<br>zero";
            } elseif ($n1 > 0) {
                echo "<br>positivo";
            }
        } else {
            echo "<br>ERRO! Não foi digitado um número válido!";
        }
        
    ?>
</body>
</html>