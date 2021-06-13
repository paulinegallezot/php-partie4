<?php
function plusMoins ($number1, $number2){
    if ($number1 > $number2) {
        $result= 'Le premier nombre est plus grand';
    } else if ($number1 < $number2){
        $result= 'Le premier nombre est plus petit';
        
    }else {
        $result= 'Les deux nombres sont identiques.';
    }
    return $result;
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
<?= plusMoins(7, 6) ?>
    
</body>
</html>