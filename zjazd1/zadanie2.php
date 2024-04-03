<?php

$od = 1; 
$do = 100; 

    echo "Liczby pierwsze w zakresie od $od do $do:" . PHP_EOL;
    for ($number = $od; $number <= $do; $number++) {
   
    $is_prime = true;
    if ($number <= 1) {
        $is_prime = false;
    } else {
       for ($i = 2; $i <= sqrt($number); $i++) {
           if ($number % $i == 0) {
               $is_prime = false;
               break;
                                  }
                                               }
           }
   
    if ($is_prime) {
        echo $number . " ";
    }
                                                   }
?>