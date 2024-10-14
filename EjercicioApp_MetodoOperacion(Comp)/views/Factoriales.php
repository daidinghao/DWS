<html>
<head>
    <title>Fibonacci</title>
</head>
<body>
    <?php
        require('views/header.php');
    ?>
    <h1>Es Fibonacci</h1> <br>
    <?php
        $Num = 1;
        for($i = 1; $Num < 1000000; $i++){
            $Num = $Num * $i;
            echo $Num.', ';
        }
    ?>
</body>
</html>
