<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        
        switch ($operation) {
                
            case "add":
                
                $result = $num1 + $num2;
                echo "Wynik dodawania: $result";
                break;
                
            case "sub":
                
                $result = $num1 - $num2;
                echo "Wynik odejmowania: $result";
                break;
                
            case "mul":
                
                $result = $num1 * $num2;
                echo "Wynik mnożenia: $result";
                break;
                
            case "div":
                
                if ($num2 != 0) {
                    
                    $result = $num1 / $num2;
                    echo "Wynik dzielenia: $result";
                } else {
                    
                    echo "Nie można dzielić przez zero!";
                    
                }
                break;
            default:
                echo "Wybierz poprawną operację.";
                
        }
    } else {
        
        echo "Wypełnij wszystkie pola formularza.";
        
    }
}






?>