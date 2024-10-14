<!DOCTYPE html>
<head><title>Ejercicio3</title></head>
<body>
    <form action="/proyecto_primero/proyecto2_SGI/formulario5.php" method="get">
      
    <label for="Nombre1">Nombre1:</label><br>
        <input type="text" name="Nombres[]" value=""><br>

    <label for="Nombre2">Nombre2:</label><br>
        <input type="text" name="Nombres[]" value=""><br>

        <input type="submit" value="Enviar"><br>
    </form>
    <p>
        <?php

            if(isset($_GET['Nombres'])){
                $noms = $_GET['Nombres'];
                foreach($noms as $n){
                    echo "$n <br>";
                }
            
            }else{
                echo 'Error';
            }
                
            ?>
    </p>
    
</body>
</html>


