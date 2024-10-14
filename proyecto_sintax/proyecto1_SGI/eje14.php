<?php

    function CompruebaEsPalindromo($cadena){

        $cadena = strtolower($cadena);

        for($i=0;$i<strlen($cadena)/2;$i++){
            if($cadena[$i] != $cadena[strlen($cadena)-$i-1]){
                return false;
            }
        }
        return true;

        /*
        $cadenaReves = strrev($cadena);
        if($cadena == $cadenaReves){
            return true;
        }else{
            return false;
        }*/
    }   

    $cadena = "oroa";
    if(CompruebaEsPalindromo($cadena)){
        echo "Es Palindromo";
    }else{
        echo "No es Palindromo";
    }
       