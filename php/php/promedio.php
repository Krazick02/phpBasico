<?php 
    $cal=$_REQUEST['cal'];
    $cals=(explode(",",$cal));
    $promedio=0;

    echo "Las calificaciones son las siguientes :<ol>";
    foreach($cals as $cali){
        echo "<li>=".$cali."<br></li>";
        $promedio+=(float)$cali;
    }
    echo "</ol>";
    
    $promedio=$promedio/count($cals);
    echo "El promedio es :".$promedio;
?>