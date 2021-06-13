<?php
function calcul ($number1=1, $number2=2, $number3=3){
    return $number1 + $number2 + $number3;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= calcul (2,4) ?>
</body>
</html>