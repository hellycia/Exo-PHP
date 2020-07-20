<?php
class exercice1
{
function friday($date){
    $date = date("l", $date);
    if($date == "Monday") {
        printf('Cest parti pour une nouvelle semaine');
    }elseif($date == "Tuesday") {
        printf('Aujourd hui j ai piscine');
    }elseif($date == "Wednesday") {
        printf('Jour des enfants');
    }elseif($date == "Thursday") {
        printf('On sort boire un verre?');
    }elseif($date == "Friday") {
        printf('Presque en weekend!');
    }elseif($date == "Saturday") {
        printf('Qui fait du PHP le weekend?');
    }elseif($date == "Sunday") {
        printf('Pas dispo');
    }
}
