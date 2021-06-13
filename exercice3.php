<?php
function yep ($homer, $marge){
    return $homer.' '.$marge;
}
function ex3(string $str1, string $str2) : string {
    return $str1 . $str2;
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

<?= yep('matthieu', 'nathalie')?>
<?= ex3('matthieu', 'nathalie')?>

</body>
</html>