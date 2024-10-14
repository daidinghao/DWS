<!DOCTYPE html>
<head><title>Ejercicio3</title></head>
<body>
    <form action="" method="get">
        <label for="Num1">Numero1:</label><br>
        <input type="text" name="Num1" value=""><br>

        <label for="Num2">Numero2:</label><br>
        <input type="text" name="Num2" value=""><br>

        <label for="operacion">Operacion:</label><br>
        <select name="operacion">
            <option value="+">Suma</option>
            <option value="-">Resto</option>
            <option value="x">Multiplacion</option>
            <option value="/">Division</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

    if(isset($_GET['Num1']) && isset($_GET['Num2'])){
        $nombre = $_GET['nombre'];

        if($_GET['Num1'] != "" && $_GET['Num2'] != ""){

        }else{
            echo "Faltan Numeros";
        }

    }else{
        echo "Faltan Numeros";
    }
        
?>

