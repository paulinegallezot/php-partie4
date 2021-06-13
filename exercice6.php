<?php
function helloBilloutte ($lastname, $firstname, $age){
    return "Bonjour $lastname $firstname, tu as $age ans";
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
<?= helloBilloutte ('Tuche', 'Jeff', 43) ?>
    
</body>
</html>