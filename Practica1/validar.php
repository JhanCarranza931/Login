<?php

require_once ("Usuarios.php");

$usu1 = new Usuario ("001","Jhan","Carranza cruz","jhan16","qwer");
$usu2 = new Usuario ("002","Jack","Troncos Pizarro ","jack123","asdf");
$usu3 = new Usuario ("003","Daniel","Franco Garcia","daniel43","zxcv");
$usu4 = new Usuario ("004","Natalia","Perez Gomes","natali271","poiu");
$usu5 = new Usuario ("005","Lorena"," Rodriguez Garcia","loren34","ñlkj");
$usu6 = new Usuario ("006","Monica","Jimenes Torres","monica76","mnbv");

$usuarios = array();
array_push($usuarios,$usu1);
array_push($usuarios,$usu2);
array_push($usuarios,$usu3);
array_push($usuarios,$usu4);
array_push($usuarios,$usu5);
array_push($usuarios,$usu6);

// Obtiene los valores de usuario y contraseña del formulario
$username = $_POST['usuario'];
$password = $_POST['password'];
//validacion
$val=false;
foreach ($usuarios as $user) {
  if ($user->getUsuario() == $username && $user->getClave() == $password) {

// Verifica si las credenciales son válidas
    $val=true;
    SESSION_START();

  // Almacena el nombre de usuario en la sesión

  $_SESSION['username'] = $username;
  $_SESSION['nombreCompleto'] =$user->getNombre() . ' ' . $user->getApellido();
 

  // Redirige al usuario a una página de bienvenida
  header('Location: bienvenida.php');
  
} if(!$val){
  header('location: error.html');
  
}

}
?>
