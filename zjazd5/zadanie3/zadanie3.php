<?php

session_start();

if (!isset($_COOKIE['unique_visit'])) {
    
    $uniqueVisitCount = isset($_SESSION['unique_visit_count']) ? $_SESSION['unique_visit_count'] : 0;
    $uniqueVisitCount++;
    $_SESSION['unique_visit_count'] = $uniqueVisitCount;
    setcookie('unique_visit', 'true', time() + 3600 * 24);
    
} else {
    
    $uniqueVisitCount = $_SESSION['unique_visit_count'];
}

if ($uniqueVisitCount >= 10) {
    
    echo "Osiągnąłeś 10 unikalnych odwiedzin!";
    
} else {
    
    echo "Liczba unikalnych odwiedzin: " . $uniqueVisitCount;
}



?>




