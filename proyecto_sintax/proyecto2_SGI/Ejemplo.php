<?php
    if(!isset($_COOKIE['visitas'])){
        //El usuario se ha metido por primera vez a la pagina
        setcookie('visitas','1',time()+3600*24);
        echo 'Pagina visitado por primera vez<br>';
    }else{
        if(isset($_GET['Reset'])){
            if($_GET['Reset'] == true){
                setcookie('visitas','',time()-1);
                echo 'Pagina visitado por primera vez<br>';
            }
        }else{
            //El usuario se ha metido varias veces a la pagina        
            $visitas = (int)$_COOKIE['visitas'];
            $visitas++;
            setcookie('visitas',$visitas,time()+3600*24);
            echo 'Pagina visitado '.$visitas.' veces<br>';
        }
    }

?>

<html>
<head>
    <title>Ejemplo</title>
</head>
<body>
    <form action="">
        <a href="?Reset=true">
            <input type="button" value="Reset">
        </a>
    </form>
</body>
</html>