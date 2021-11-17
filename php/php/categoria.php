<?php

    $cal=(float)$_REQUEST['calificacionCategoria'];

    if ($cal===null || $cal==="") {
        echo "No haz introducido ningun dato";
    } else {
        echo "la categoria de la calificacion ".$cal." es:";
        if($cal>9){
            echo "Sobresaliente";
        }else{
            if($cal>7 && $cal<=9){
                echo "notable";
            }else{
                if($cal>6 && $cal<=7){
                    echo "bien";
                }else{
                    if($cal>5 && $cal<=6){
                        echo "suficiente";
                    }else{
                        if($cal>3 && $cal<=5){
                            echo "insuficiente";
                        }else{
                            echo "muy deficiente";
                        }
                    }
                }
            }
        }
    }
?>