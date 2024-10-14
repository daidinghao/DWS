<html>
<head>
    <title>esPrimo</title>
</head>
<body>
    <?php
        require('views/header.php');
    ?>
    <h1>Es Primos</h1> <br>
    <?php
        for($Num = 1; $Num < 10000; $Num++){
            $Primo = 0;
            for($i=1; $i<$Num; $i++){
                if($Num % $i == 0){
                    $Primo++;
                }
            }
            if($Primo < 2){
                echo $Num.', ';
            }
        }
    ?>
</body>
</html>

