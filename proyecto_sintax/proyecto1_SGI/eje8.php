<!DOCTYPE html>
<body>
    <?php
    // Construir un array con el quinteto inicial de un equipo de basket
    $Equipo[0] = "Jugador1, Jugador2, Jugador3, Jugador4, Jugador5";
        
    echo "Equipo de Basket: ";
        for($i = 0; $i < 5; $i++){
            echo "$Equipo[$i] ";
        }
    echo "<br>";

    echo "Equipo de Basket: ";
        for($i = 0; $i < 5; $i++){
            echo "($i)$Equipo[$i] ";
        }
    echo "<br>";
    
    /*
        foreach ($Equipo as $numero => $jugador){
            echo "$numero.$jugador <br>";
        }
    */
    ?>
</body>




