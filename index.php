<?php

if(isset($_REQUEST['hours'])){

    echo 'hours: ' . $_REQUEST['hours'] . '<br>';
    echo 'minutes: ' . $_REQUEST['minutes'] . '<br>';
    echo 'seconds: ' . $_REQUEST['seconds'] . '<br>';

    // get pace, with "seconds" as percent 
    $pace = ($_REQUEST['hours']*60*60+$_REQUEST['minutes']*60+$_REQUEST['seconds']);///13.1094;
    echo '<br> pace: ' . $pace . '<br>';

    // split pace on the dot
    $paces = explode('.', $pace );
    
    $minutes = $paces[0];
    
    //convert seconds into seconds rather than a percent 
    $seconds = ('.'.substr($paces[1],0,2))*60; 
    
    //add a leading 0 if seconds are single digit 
    if(strlen($seconds) == 1){$seconds = '0'.$seconds;}
    
    // echo out pace 
    $paceMsg =  $minutes.":".$seconds.' pace needed to run a half in '
         .$_REQUEST['hours']." hours and "
         .$_REQUEST['minutes']." minutes.";    

    include 'show_data.html.php';
    exit();
}

if( isset( $_REQUEST['showsplits'])){
    echo "show splits selected";
    include "show_data.html.php";
    exit();
}

include 'home.html.php';
