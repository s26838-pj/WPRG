<?php

function fib($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

function printNodd($tab) {
    $nline = 1;
    foreach ($tab as $index => $value) {
        if ($value % 2 !== 0) {
            echo $nline . ": " . $value . "\n";
            $nline++;
        }
    }
}

$N = 11;

$fibonacci = fib($N);
printNodd($fibonacci);

?>

