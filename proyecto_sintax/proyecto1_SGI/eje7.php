<?php

    $var = 169;
    $divisor = 0;

    for($i = 2; $i < $var; $i++){
        if($var%$i==0){
            $divisor = $divisor+1;
        }
    }

    if($divisor != 0){
        echo "$var no es el primo";
    }else{
        echo "$var es el primo";
    }