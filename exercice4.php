<?php
//$nombre1 = intval(readline("Le premier nombre? "));
include 'operation.php';

$i = 0;

do {
    $nombre1 = readline("Le premier nombre? ");
    $nombre2 = readline("Le deuxième nombre? ");
    $nombre1 = intval($nombre1);
    $nombre2 = intval($nombre2);

    $saisieInvalide = (condition($nombre1, $nombre2) == true);

    if($saisieInvalide) {
        echo("Le chiffre nest pas bon, ");
    }
    if($i >= 10){
        exit('Vous avez fait trop d erreur');
    }
    $i++;
} while($saisieInvalide);

$resultats = [];
$resultats['additionner'] = additionner($nombre1, $nombre2);
$resultats['multiplier'] = multiplier($nombre1, $nombre2);
$resultats['diviser'] = diviser($nombre1, $nombre2);
$resultats['modulo'] = modulo($nombre1, $nombre2);

echo('Nombre1 = ' . $nombre1 . ' | Nombre2 = ' . $nombre2 . "\n");
foreach($resultats as $index => $resultat){
    echo($index . ' : ' . $resultat . "\n");
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
