<?php
$file = "licznik.txt";

if (!file_exists($file)) {
    file_put_contents($file, "1");
}


$visit = file_get_contents($file);
$visit++;

file_put_contents($file, $visit);

echo "Witryna została odwiedzona $visit razy.";





?>





