<?php

if(isset($_REQUEST['hours'])){
    $hours = $_REQUEST['hours'];
    $minutes = $_REQUEST['minutes'];
    
    //convert hours to minutes 
    $totalMinutes += $hours * 60;
    $totalMinutes += $minutes;

    $pace = substr($totalMinutes/13.109375, 0, 4);

    echo $pace . " pace needed to run " . $hours . ":" . $minutes;
    

    exit();
}

include 'home.html.php';
