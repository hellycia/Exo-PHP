<?php

$nbDeChien = readline("Combien avez-vous de chien?");

// $chiens = [
//     0=>[
//         'nom'=>'Dogo1',
//         'race'=>'Teckel'
//     ],
//     1=>[
//         'nom'=>'Dogo2',
//         'race'=>'Husky'
//     ]
// ];

$chiens = [];

for($i=1; $i <= $nbDeChien; $i++){
    $nom = readline("Quel est le nom du chien $i ?");
    $chiens[$i]['nom'] = $nom;
    $race = readline("Quelle est la race du chien $i ?");
    $chiens[$i]['race'] = $race;
}

if($nbDeChien == 0){
    echo('Cest une bien triste nouvelle');
}
foreach($chiens as $numeroChien => $chien){
    echo("Le nom du chien $numeroChien est " . $chien['nom'] . ' et sa race est ' . $chien['race'] . "\n");
}
?>
