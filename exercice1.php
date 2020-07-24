<?php

echo('Aujourdjhui nous sommes le ' . date('l jS \of F Y') . ' et il est ' . date('h:i:s'));
echo(date('l'));

function week(){
    $date = date("l");
    if($date == "Monday") {
        printf('Cest parti pour une nouvelle semaine');
    }elseif($date == "Tuesday") {
        printf('Aujourd hui j ai piscine');
    }elseif($date == "Wednesday") {
        printf('Jour des enfants');
    }elseif($date == "Thursday") {
        printf('On sort boire un verre?');
    }elseif($date == "Friday") {
        printf('Presque en weekend!Il reste ' . strtotime( "next friday" ));
    }elseif($date == "Saturday") {
        printf('Qui fait du PHP le weekend?');
    }elseif($date == "Sunday") {
        printf('Pas dispo');
    }
}
?>
