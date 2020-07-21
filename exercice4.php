<?php

class exercice4
{
    $nombre1 = readline("Le premier nombre?");
    $nombre2 = readline("Le deuxième nombre?");

    if(is_int($nombre1) && is_int($nombre2)){
        return true;
    }else {
        exit("Vous devez rentrer un entier");
    }

    echo($nombre1 . $nombre2);


    function additionner($nombre1, $nombre2){
        $addition = $nombre1 + $nombre2;
        echo($addition);
    }

    function multiplier($nombre1, $nombre2){
        $multiplier = $nombre1 * $nombre2;
        echo($multiplier);
    }

    function diviser($nombre1, $nombre2){
        $diviser = $nombre1 / $nombre2;
        echo($diviser);
    }

    function modulo($nombre1, $nombre2){
        $modulo = $nombre1 % $nombre2;
        echo($modulo);
    }
}
?>
