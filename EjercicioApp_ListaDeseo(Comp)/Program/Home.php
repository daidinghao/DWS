<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Bienvenido A Lista de Deseo</h1>

    <form action="?method=New" method="post">
        <label for="Deseo">Introducir Deseo</label>
        <input type="text" name="Deseo">
        <input type="submit">
    </form>
    
    <ol>
        <h2>Lista de Deseo</h2>
       <?php
            if(isset($_COOKIE['ListaDeseo'])){
                $Lista = unserialize($_COOKIE['ListaDeseo']);
                foreach($Lista as $Deseo){
                    echo "<li>$Deseo</li>";
                }
            }   
        ?>
    </ol>
    
    <a href="?method=Empty">Vacia Lista</a>
    <form action="?method=Delete" method="post">
        <label for="NumLista">Introducir Numero de Lista</label>
        <input type="number" name="NumLista">
        <input type="submit">
    </form>

    <a href="?method=Logout">Logout</a>
</body>
</html>