<?php

class App
{

  public function run(){
    if(isset($_GET['method'])){
      $method = $_GET['method'];
    }else{
      $method = 'Login';
    }
    $this -> $method();
  }

  public function Home(){ 
    include("Program/Home.php");
  }

  public function Login(){
    include("Program/Login.php");
  }

  public function Auth(){
    if(isset($_POST['Usuario']) && isset($_POST['Password'])){
        $Usuario = $_POST['Usuario'];
        $Password = $_POST['Password'];

        setcookie('Usuario',$Usuario,time()+3600*24);
        setcookie('Password',$Password,time()+3600*24);

        header("Location: ?method=Home");

        /*Error Caso: header("Location: Program/Home");*/
    }
  }

  public function Logout(){
        setcookie('Usuario','',time()-1);
        setcookie('Password','',time()-1);
        
        header("Location: ?method=Login");
  }

}