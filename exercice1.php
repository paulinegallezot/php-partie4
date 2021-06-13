<?php
$result= yep();
function yep (){
    return true;
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
    <?php
    // true = 1 / false = rien
    
    echo $result;
    ?>
    <?= yep() ?>

</body>
</html>