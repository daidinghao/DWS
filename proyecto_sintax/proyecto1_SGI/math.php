<?php

    function ESG (int $numA, int $numB, int $numC){
        $res = $numB * $numB - (4 * $numA * $numC) / 2 * $numA;
        $res = sqrt($res);

        if($res != "NAN"){
            $Array[0] = round(-$numB + $res);
            $Array[1] = round(-$numB - $res);
            return $Array;
        }else{
            return "False";
        }
    }