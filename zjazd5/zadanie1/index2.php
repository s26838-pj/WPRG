<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['card_number'] = $_POST['card_number'];
    $_SESSION['order_date'] = $_POST['order_date'];
    $_SESSION['num_people'] = $_POST['num_people'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['zip_code'] = $_POST['zip_code'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dane szczegółowe</title>
    </head>
    <body>
        
        <h2>Podaj dane szczegółowe</h2>
        
        <form method="post" action="index3.php">
            
            <?php for ($i = 1; $i <= $_SESSION['num_people']; $i++): ?>
                <h3>Osoba <?php echo $i; ?></h3>
                <label for="name_<?php echo $i; ?>">Imię:</label><br>
                <input type="text" id="name_<?php echo $i; ?>" name="people[<?php echo $i; ?>][name]" required><br><br>

                <label for="surname_<?php echo $i; ?>">Nazwisko:</label><br>
                <input type="text" id="surname_<?php echo $i; ?>" name="people[<?php echo $i; ?>][surname]" required><br><br>

                <label for="age_<?php echo $i; ?>">Wiek:</label><br>
                <input type="number" id="age_<?php echo $i; ?>" name="people[<?php echo $i; ?>][age]" required><br><br>
            <?php endfor; ?>
            
            <input type="submit" value="Dalej">
        </form>
        
    </body>
</html>
