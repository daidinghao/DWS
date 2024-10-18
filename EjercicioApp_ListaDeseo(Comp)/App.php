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

  public function New(){
    if(isset($_POST['Deseo'])){
      if($_POST['Deseo'] != ""){

        if(isset($_COOKIE['ListaDeseo'])){
          $Lista = unserialize($_COOKIE['ListaDeseo']);
        }else{
          $Lista = [];
        }
        
        $Lista[] = $_POST['Deseo'];
        setcookie('ListaDeseo',serialize($Lista),time()+3600*24);
      }
    }
    header('Location: ?method=Home');
  }

  public function Delete(){
    if(isset($_POST['NumLista'])) {
      $NumDeseo = (int)$_POST['NumLista'];

      if($NumDeseo > 0){
        if(isset($_COOKIE['ListaDeseo'])){

            $Lista = unserialize($_COOKIE['ListaDeseo']);
            unset($Lista[$NumDeseo -1]);
            $Lista = array_values($Lista);
            setcookie("ListaDeseo",serialize($Lista),time()+3600*24);

        }        
      }
    }
    header('Location: ?method=Home');
  }

  public function Empty(){
    setcookie("ListaDeseo", "",time()-1);
    header(('Location: ?method=Home'));
  }

  public function Cambio(){
    if(isset($_GET['Color'])){
      $Color = (String)$_GET['Color'];
      setcookie("Color",$Color,time()+3600*24);
      header('Location: ?method=Home');
    }
  }

}