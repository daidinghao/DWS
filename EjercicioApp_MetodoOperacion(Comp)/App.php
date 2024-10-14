<?php

class App
{
    
    public $name;
    private $apellido;
    public $module;
    public $teacher;
    public $student;

  public function __construct($name = "Aplicación PHP")
  {
    echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Fulano De Tal";
  }

  public function setApllido($apellido){
    $this->apellido = $apellido;
  }

  public function run()
  {
    echo "Moneda al aire... <hr>";
    $moneda = rand(0,1);
    // if ($moneda == 1) {
    if ($moneda) {
      echo "<h3>Ha salido cara:  </h3> <br>";
      $this->index();
    } else {
      echo "<h3> Ha salido cruz: </h3> <br>";
      $this->login();
    }
  }

  public function run2(){
    if(isset($_GET['method'])){
      $method = $_GET['method'];
    /*}else if(isset($_GET['esprimos'])){
      $method = 'esprimos';
    }else if(isset($_GET['fibonacci'])){
      $method = 'fibonacci';
    }else if(isset($_GET['potencias2'])){
      $method = 'potencias2';
    }else if(isset($_GET['factoriales'])){
      $method = 'factoriales';*/
    }else{
      $method = 'index';
    }
    $this -> $method();
  }

  public function index(){ 
    include("views/index.php");
  }

  public function login(){
    include("views/form.php");
  }

  public function factoriales(){
    include("views/Factoriales.php");
  }

  public function fibonacci(){
    include("views/Fibonacci.php");
  }

  public function potencias2(){
    include("views/Potencias2.php");
  }

  public function esprimos(){
    include("views/Primos.php");
  }

  public function __toString(){
    echo 'hola';
  }
}