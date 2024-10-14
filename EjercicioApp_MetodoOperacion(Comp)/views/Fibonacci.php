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
        $num = 1;
        echo $num.', ';
        for($i = 1; $i < 1000000; $i = $i + $num){
            echo $i.', ';
            $num = $i + $num;
            echo $num.', ';
        }
    ?>
</body>
</html>