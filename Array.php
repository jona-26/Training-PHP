<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

 // Exemple 1 : 
/* // on affiche tous les jours de la semaine 

$dayofweek = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

for($i = 0; $i < count($dayofweek); $i++)
{

    echo "$dayofweek [$i] <br>";

}

//var_dump($i);
 */

/* 
 // Exemple 2 :

$people = [
    
    "Pierre" => 50,
    "Ginette" => 60,
    "Bob" => 30,
    "Borice" => 45,   
    "Marcelle" => 63,
];

echo $people ["Bob"];
 */

/* $peoples = [
    
    "Pierre" => 50,
    "Ginette" => 60,
    "Bob" => 30,
    "Borice" => 45,   
    "Marcelle" => 63,
];

// Pour chaque $peoples dans la variable $prenom, affiche $people.

foreach ($peoples as $prenom => $people) {

    echo "- $people";
}
 */



$eleves = [
    'Bts' => ['Jean', 'Marc', 'Lena', 'Ophelia'], 
    'Licence' => ['Michel', 'Jordan', 'Kev', 'Carla']
];
// Pour chaque $eleves dans la variable $class, affiche $listEleves.
foreach ($eleves as $class => $listEleves) {
echo "La classe $class : \n";

foreach ($listEleves as $eleve) {

    echo "- $eleve \n";
}

}   



?>

</body>
</html>


