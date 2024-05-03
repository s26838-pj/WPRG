<?php

if (isset($_GET['bday'])) {
	
    $bday = $_GET['bday'];
    $bday = implode('-', array_reverse(explode(' ', $bday)));

	
    function getDayOfWeek($bday) {
        $dayOfWeek = date('l', strtotime($bday));
        return $dayOfWeek;
		
		
    }

    function getAge($bday) {
		
		
        $now = new DateTime();
        $bday = new DateTime($bday);
        $age = $now->diff($bday)->y;
        return $age;
    }

	
    function daysUntilNextbday($bday) {
		
        $today = new DateTime();
        $bday = new DateTime($bday);
        $nextbday = new DateTime($bday->format('Y-m-d'));
        if ($bday < $today) {
            $bday->modify('+1 year');
        }
        $daysUntilNextbday = $today->diff($nextbday)->days;
        return $daysUntilNextbday;
		
    }

	
    $dayOfWeek = getDayOfWeek($bday);
    $age = getAge($bday);
    $daysUntilNextbday = daysUntilNextbday($bday);

    echo "Urodziłeś/aś się w dniu: $dayOfWeek<br>";
    echo "Masz $age lat.<br>";
    echo "Do kolejnych urodzin pozostało $daysUntilNextbday dni.";
	
	
	
	
	
}




?>








