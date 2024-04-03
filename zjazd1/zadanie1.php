<?php

$owoce = ["jabłko", "banan", "pomarańcza"];

foreach ($owoce as $owoc) {
    $dlugosc = strlen($owoc);
    
    echo "Owoc od tyłu: " .PHP_EOL;
    for ($i = $dlugosc - 1; $i >= 0; $i--) {
        echo $owoc[$i];
    }
    $startwthP = $owoc[0] === "p" || $owoc[0] === "P";
    
    if ($startwthP) {
        echo " (zaczyna się na 'p')";
    } else {
        echo " (nie zaczyna się na 'p')";
    }
}
?>

