<?php

session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['people'] = $_POST['people'];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Podsumowanie</title>
    </head>
    <body>
        <h2>Podsumowanie wszystkich danych</h2>
        
        <h3>Dane zamawiającego</h3>
        
        <p>Nr karty: <?php echo $_SESSION['card_number']; ?></p>
        
        <p>Data zamawiającego: <?php echo $_SESSION['order_date']; ?></p>
        
        <p>Ilość osób: <?php echo $_SESSION['num_people']; ?></p>
        
        <p>Imię i nazwisko: <?php echo $_SESSION['name']; ?></p>
        
        <p>Adres zamieszkania: <?php echo $_SESSION['address']; ?></p>
        
        <p>Miasto: <?php echo $_SESSION['city']; ?></p>
        
        <p>Kod pocztowy: <?php echo $_SESSION['zip_code']; ?></p>

        <h3>Dane osób</h3>
        
        <?php foreach ($_SESSION['people'] as $person): ?>
        
            <p>Imię: <?php echo $person['name']; ?></p>
            <p>Nazwisko: <?php echo $person['surname']; ?></p>
            <p>Wiek: <?php echo $person['age']; ?></p>
            <hr>
        
        <?php endforeach; ?>
    </body>
</html>
