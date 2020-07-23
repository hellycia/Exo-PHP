<?php
    //$nombre1 = intval(readline("Le premier nombre? "));

$nombre1 =  readline("Le premier nombre? ");
$nombre2 = readline("Le deuxième nombre? ");

$nombre1 = intval($nombre1);
$nombre2 = intval($nombre2);

//$nombre1 = intval(readline("Le premier nombre? "));

do {
    $nombre1 =  readline("Le premier nombre? ");
    $nombre2 = readline("Le deuxième nombre? ");
    $nombre1 = intval($nombre1);
    $nombre2 = intval($nombre2);

    $truc = (condition($nombre1, $nombre2) == true);

    if($truc) {
        echo("Le chiffre nest pas bon, ");
    }
} while($truc);

$resultats = [];
$resultats['additionner'] = additionner($nombre1, $nombre2);
$resultats['multiplier'] = multiplier($nombre1, $nombre2);
$resultats['diviser'] = diviser($nombre1, $nombre2);
$resultats['modulo'] = modulo($nombre1, $nombre2);

echo('Nombre1 = ' . $nombre1 . ' | Nombre2 = ' . $nombre2 . "\n");
foreach($resultats as $index => $resultat){
    echo($index . ' : ' . $resultat . "\n");
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

function condition(int $nombre1, int $nombre2) : bool {
    $nombre1EstInferieurOuEgalA10 = $nombre1 <= 10;
    $nombre1EstSuperieurOuEgalA100 = $nombre1 >= 100;
    $nombre2EstSuperieurANombre1 = $nombre2 > $nombre1;
    $nombre2EstStrictementEgalA0 = $nombre2 === 0;

    return  $nombre1EstInferieurOuEgalA10 or
            $nombre1EstSuperieurOuEgalA100 or
            $nombre2EstSuperieurANombre1 or
            $nombre2EstStrictementEgalA0;
}
?>
