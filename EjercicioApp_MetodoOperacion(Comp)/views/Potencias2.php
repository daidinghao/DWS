<html>
<head>
    <title>Potencias2</title>
</head>
<body>
    <?php
        require('views/header.php');
    ?>
    <h1>Es Potencias de 2</h1> <br>
    <?php
        for($Num = 0; $Num < 24; $Num++){
            $Pot = 2;
            for($i = 0; $i < $Num; $i++){
                $Pot = $Pot + $Pot;
            }
            echo $Pot.', ';
        }
    ?>
</body>
</html>

