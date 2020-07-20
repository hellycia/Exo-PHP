<?php


$friday = strtotime( "next friday" );
$intervalSeconde = 290366;
$resteSeconde = $intervalSeconde % 60;

$intervalMinute = $intervalSeconde - $resteSeconde;
$intervalMinute/=60;
$resteMinute = $intervalMinute % 60;

$intervaleHeure = $intervalMinute - $resteMinute;
$intervaleHeure/=60;
$resteHeure = $intervaleHeure % 60;

$intervalJour = $intervaleHeure - $resteHeure;
$intervalJour/=24;
$resteJour = $intervaleHeure % 24;

echo($resteJour . 'j' . $resteHeure . 'h' . $resteMinute . 'm' . $resteSeconde . 's');
