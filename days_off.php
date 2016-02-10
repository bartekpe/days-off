<?php 
    $daysOff = array(
        date('Y-01-01'), // Nowy Rok
        date('Y-01-06'), // Trzech Króli 
        date('Y-m-d',strtotime('+1 day',easter_date())), // Wielkanoc 2 dzień 
        date('Y-05-01'), // 1 maja - Święto Państwowe     
        date('Y-05-03'), // 3 maja =  Święto Narodowe Trzeciego Maja
        date('Y-m-d',strtotime('+50 days',easter_date())), //  Zesłanie Ducha Świętego 
        date('Y-m-d',strtotime('+60 days',easter_date())), //  Boże Ciało     
        date('Y-08-15'), // Wniebowzięcie Najświętszej Marii Panny / Święto Wojska Polskiego    
        date('Y-11-01'), // Uroczystość Wszystkich Świętych    
        date('Y-11-15'), // Narodowe Święto Niepodległości    
        date('Y-12-25'), // Boże Narodzenie 1 dzień    
        date('Y-12-26'), // Boże Narodzenie 2 dzień  
    );
?>