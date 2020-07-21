<?php

    $nombre1 =  readline("Le premier nombre? ");
    $nombre2 = readline("Le deuxième nombre? ");

    $nombre1 = intval($nombre1);
    $nombre2 = intval($nombre2);

    //$nombre1 = intval(readline("Le premier nombre? "));

    if($nombre1 === 0 || $nombre2 === 0){
        exit("Vous devez rentrer un entier positif");
    }

    $resultats = [];
    $resultats['+'] = additionner($nombre1, $nombre2);
    $resultats['*'] = multiplier($nombre1, $nombre2);
    $resultats['/'] = diviser($nombre1, $nombre2);
    $resultats['%'] = modulo($nombre1, $nombre2);

    foreach($resultats as $index => $resultat){
        echo($nombre1 . $index . $nombre2 . '=' . $resultat . "\n");
    }


    function additionner(int $a, int $b) : int {
        return $a + $b;
    }

    function multiplier(int $a, int $b) : int {
        return $a * $b;
    }

    function diviser(int $a, int $b) : float {
        return $a / $b;
    }

    function modulo(int $a, int $b) : int {
        return $a % $b;
    }
?>
