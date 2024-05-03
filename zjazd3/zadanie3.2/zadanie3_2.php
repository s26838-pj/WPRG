<?php

$n = 5;

function fibrecu($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibrecu($n - 1) + fibrecu($n - 2);
    }
}



function fibit($n) {
	
    $fib = [0, 1];
	
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib[$n];
}


function zmierz_czas($funkcja, $argument) {
	
    $start = microtime(true);
    $wynik = $funkcja($argument);
    $koniec = microtime(true);
    return array($wynik, $koniec - $start);
	
}



list($wynik_rekurencyjnie, $czas_rekurencyjnie) = zmierz_czas('fibrecu', $n);
list($wynik_iteracyjnie, $czas_iteracyjnie) = zmierz_czas('fibit', $n);


echo "Wartość wyrazu o indeksie $n w ciągu Fibonacciego:\n";
echo "Metoda rekurencyjna: $wynik_rekurencyjnie, czas: $czas_rekurencyjnie sekund\n";
echo "Metoda iteracyjna: $wynik_iteracyjnie, czas: $czas_iteracyjnie sekund\n";


if ($czas_rekurencyjnie < $czas_iteracyjnie) {
	
    echo "Metoda rekurencyjna jest szybsza o " . ($czas_iteracyjnie - $czas_rekurencyjnie) . " sekund\n";
	
} elseif ($czas_rekurencyjnie > $czas_iteracyjnie) {
	
    echo "Metoda iteracyjna jest szybsza o " . ($czas_rekurencyjnie - $czas_iteracyjnie) . " sekund\n";
	
} else {
	
    echo "Czas wykonania obu metod jest taki sam\n";
	
}



?>





