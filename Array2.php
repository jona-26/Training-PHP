<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux (array)</title>
</head>
<body>
    
<?php

// Exemple n°1 :
/* $notes = [10, 15, 20];

echo $notes [2];  */

// Exemple n°2 : 

// $eleves  = [
//         'nom' => 'Does',
//         'prenom' => 'Gilbert',
//         'age' => [55]

// ];

// echo $eleves ['prenom'] . ' '.$eleves ['nom'];
// print_r ($eleves ['age']); 


// Exemple n°3 : 

$classe  = [
    [
    'nom' => 'Does',
    'prenom' => 'Jean',
    'notes' => [8, 12, 16, 18]

],
    [
    'nom' => 'Does',
    'prenom' => 'Jean',
    'notes' => [7, 13, 15, 19]
    ]

    ];
echo $classe[1] ['notes'] [1];


?>

</body>
</html>