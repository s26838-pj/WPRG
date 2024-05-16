<?php

    $allowedIPs = file("fileip.txt", FILE_IGNORE_NEW_LINES);

    $userIP = $_SERVER['REMOTE_ADDR'];


    if (in_array($userIP, $allowedIPs)) {

        include("siteall.php");
        
    } else {

        include("sitedef.php");

    }



?>





