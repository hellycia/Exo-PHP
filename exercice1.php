<?php
class exercice1
{
function friday($date){
    $date = date("l", $date);
    if($date == "Monday") {
        printf('Cest parti pour une nouvelle semaine');
    }
    if($date == "Tuesday") {
        printf('Aujourd hui j ai piscine');
    }
    if($date == "Wednesday") {
        printf('Jour des enfants');
    }
    if($date == "Thursday") {
        printf('On sort boire un verre?');
    }
    if($date == "Friday") {
        printf('Presque en weekend!');
    }
    if($date == "Saturday") {
        printf('Qui fait du PHP le weekend?');
    }
    if($date == "Sunday") {
        printf('Pas dispo');
    }
}
