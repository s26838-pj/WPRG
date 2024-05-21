<?php


    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['general'] = $_POST;
        header("Location: index2.php");
        exit();
    }

?>


<!DOCTYPE html>
<html>  
    <head>
        <title>Dane ogólne</title>
    </head>
    <body>
        
        <form method="post" action="index2.php">
        <label for="card_number">Nr karty:</label><br>
        <input type="text" id="card_number" name="card_number" required><br><br>

        <label for="order_date">Data zamawiającego:</label><br>
        <input type="date" id="order_date" name="order_date" required><br><br>

        <label for="num_people">Ilość osób:</label><br>
        <input type="number" id="num_people" name="num_people" required><br><br>

        <label for="name">Imię i nazwisko:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">Adres zamieszkania:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <label for="city">Miasto:</label><br>
        <input type="text" id="city" name="city" required><br><br>

        <label for="zip_code">Kod pocztowy:</label><br>
        <input type="text" id="zip_code" name="zip_code" required><br><br>

        <input type="submit" value="Dalej">
    </form>
        
        
    </body>   
</html>



