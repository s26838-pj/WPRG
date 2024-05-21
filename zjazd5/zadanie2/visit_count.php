<?php


$visitCount = 0;

if (isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'];
}

$visitCount++;
setcookie('visit_count', $visitCount, time() + 3600 * 24 * 30);


if ($visitCount >= 20) {
    
    echo "Odwiedziles te strone juz 20 razy!";
    

} else {
    
    
    echo "Liczba odwiedzin: " . $visitCount;
}





?>



