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
        <input type="submit" value="Enviar"><br>
    </form>
    <p>
        <?php

            if(!empty($_GET['Num1']) && !empty($_GET['Num2']) && !empty($_GET['operacion'])){

                switch ($_GET['operacion']) {
                    case "+":
                        echo $_GET['Num1'] + $_GET['Num2'];
                        break;
                    case "-":
                        echo $_GET['Num1'] - $_GET['Num2'];
                        break;
                    case "x":
                        echo $_GET['Num1'] * $_GET['Num2'];
                        break;
                    case "/":
                        echo $_GET['Num1'] / $_GET['Num2'];
                        break;
                    default:
                        echo "Default";
                        break;
                    }
            }else{
                echo "Faltan Numeros";
            }
            
                
            ?>
    </p>
    
</body>
</html>


