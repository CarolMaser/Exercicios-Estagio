<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <?php
        $txt = "carol";
        $cont = strlen($txt);
        // echo "$cont";
        // var_dump(strlen($txt))

        // if (strlen($txt) > 6) {
        //     echo strtoupper($txt);         
        // } elseif (strlen($txt) <= 6) {
        //     echo strtolower($txt);
        // } else (is_numeric($txt)) {
        //     echo " " . pow($txt, 3) / 2 * 3;
        // }

        if (is_numeric($txt)) {
            // echo " " . pow($txt, 3) / 2 * 3;
            echo " " . ((pow($txt, 3)) / 2) * 3;
        } else { 
            if (strlen($txt) > 6) {
            echo  "A palavra " . strtoupper($txt) . " possui $cont caracteres.";         
        } elseif (strlen($txt) <= 6) {
            echo "A palavra " . strtolower($txt) . " possui $cont caracteres.";
        }
        }
    ?>
</body>
</html>