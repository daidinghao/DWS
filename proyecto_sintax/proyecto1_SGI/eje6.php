<?php

    $a = 0;
    $b = 1;

    echo "Los 10 primeros numeros de la sucesion Fibonacci: $a $b ";
    
    for($vez=1; $vez<5; $vez++){
        $a = $a + $b;
        echo "$a ";
        $b = $a + $b;
        echo "$b ";
    }