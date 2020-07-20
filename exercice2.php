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



for($i=0; $i < $nbDeChien; $i++){
    $nom = readline("Quel est son nom?");
    $chiens[$i]['nom'] = $nom;
    $race = readline("Quelle est sa race?");
    $chiens[$i]['race'] = $race;
}

if($nbDeChien == 0){
    echo('Cest une bien triste nouvelle');
}

foreach($chiens as $chien){
    echo('Le nom est ' . $chien['nom'] . ' et sa race est ' . $chien['race']);
}
