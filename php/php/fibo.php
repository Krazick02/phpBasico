<?php
    $meta = (int)$_REQUEST['meta'];
    $fibo = array(0,1);

    for($i=2; $i < $meta; $i++){
        $fibo[]=($fibo[$i-1] + $fibo[$i-2]);
    }
    foreach($fibo as $fib){
        echo "[".$fib."]";
    }
?>