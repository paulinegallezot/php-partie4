<?php
function numName (int $number1,int $number2, string $word) : string{
    return $number1 + $number2.' '.$word;
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
<?= numName(1,2, 'mamat') ?>
    
</body>
</html>