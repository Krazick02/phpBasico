<?php 
    $edad=(int)$_REQUEST['edad'];


    if($edad>=18){
        echo "Usted tiene la edad suficiente para conducir";
    }else{
        echo "Usted no tiene la edad suficiente para conducir";
    }

?>