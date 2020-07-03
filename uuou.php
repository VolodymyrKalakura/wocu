<?php 
    $fName = 'Имя: '.$_POST['name'].' <br />';
    $fPhone =  'Тел: '.$_POST['phone'].' <br />';
    $AllInOne =  $fName.$fPhone;
    $to = 'volodymyr.kalakura@gmail.com'; 
    $headers="From: Wouch\nContent-Type: text/html; charset=\"utf-8\"\n"; 
    mail($to, 'Свяжитесь с нами', $AllInOne, $headers); 
?>