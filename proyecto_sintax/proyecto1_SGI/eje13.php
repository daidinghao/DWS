<?php

    include_once("math.php");

    $Array = ESG(1,-3,2);
    if($Array != "False"){
        foreach($Array as $ar){
            echo "$ar <br>";
        }
    }else{
        echo "False";
    }
