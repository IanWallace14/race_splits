<?php

if(isset($_REQUEST['hours'])){

    // get pace, with "seconds" as percent 
    $pace = ($_REQUEST['hours']*60+$_REQUEST['minutes'])/13.1094;

    // split pace on the dot
    $paces = explode('.', $pace );
    
    $minutes = $paces[0];
    
    //convert seconds into seconds rather than a percent 
    $seconds = ('.'.substr($paces[1],0,2))*60; 
    //add a leading 0 if seconds are single digit 
    if(strlen($seconds) == 1){$seconds = '0'.$seconds;}
    
    // echo out pace 
    echo $minutes.":".$seconds.' pace needed to run a half in '
         .$_REQUEST['hours']." hours and "
         .$_REQUEST['minutes']." minutes.";    

    exit();
}

include 'home.html.php';
