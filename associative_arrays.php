<?php
$iceCream = array(
    'Alena' =>'Black Cherry', 
    'Treasure' => 'Chocolate', 
    'Dave McFarland' => 'Cookies and Cream', 
    'Rialla' => 'Strawberry'
    );
    $iceCream['alena'] = 'Pistachio';
    $iceCream['David Thomas'] = 'Cookie Dough';
    //$iceCream[] = 'Vanilla';
    $iceCream['Andrew'] = true;
    //echo $iceCream['Alena'];
    //ksort($iceCream);
    krsort($iceCream);
    asort($iceCream);
    var_dump($iceCream);
$keys = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
    );
    var_dump($keys);
?>