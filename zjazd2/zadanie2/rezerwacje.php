<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num_people = $_POST['num_people'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        
        $address = $_POST['address'];
        $credit_card = $_POST['credit_card'];
        $email = $_POST['email'];
        
        $date = $_POST['date'];
        $arrival_time = $_POST['arrival_time'];
        $extra_bed = isset($_POST['extra_bed']) ? "Tak" : "Nie";
        $amenities = isset($_POST['amenities']) ? implode(", ", $_POST['amenities']) : "Brak";

        
        
        echo "<p>Liczba osób: $num_people</p>";
        echo "<p>Imię: $name</p>";
        echo "<p>Nazwisko: $surname</p>";
        echo "<p>Adres: $address</p>";
        echo "<p>Nr karty kredytowej: $credit_card</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Data pobytu: $date</p>";
        echo "<p>Godzina przyjazdu: $arrival_time</p>";
        echo "<p>Potrzebne łóżko dla dziecka: $extra_bed</p>";
        echo "<p>Udogodnienia: $amenities</p>";
        
        
    } else {
        
        echo "<p>Nieprawidłowe żądanie.</p>";
    }



    ?>





