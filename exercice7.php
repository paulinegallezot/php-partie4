<?php
    function whoAreU ($age, $gender){
        $gender = strtolower($gender);
        if ($age<0 || $age>120){
            $result= 'Saisie de l\'âge incorrecte';
        }
        elseif ($age>=18 && $gender == 'homme') {
            $result= 'Vous êtes un homme et vous êtes majeur';
        } elseif ($age<=18 && $gender == 'homme') {
            $result= 'Vous êtes un homme et vous êtes mineur';
        } elseif ($age>=18 && $gender == 'femme') {
            $result= 'Vous êtes une femme et vous êtes majeure';
        } elseif ($age<18 && $gender == 'femme')  {
            $result= 'Vous êtes une femme et vous êtes mineure';
        
        } else {
            $result='Saisie incorrecte.';
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
<?= whoAreU (8, 'Homme') ?>
    
</body>
</html>