<?php
session_start();
include 'includes/db2.php';
$correo = $conexion->real_escape_string($_POST['email']);
$password = $conexion->real_escape_string($_POST['password']);

$consulta=ValidarUsuario($correo,$password);

	function ValidarUsuario ($correo, $password){
		include 'includes/db2.php';
		$sentencia="SELECT *
					FROM usuarios
					WHERE username='".$correo."'
					AND password=BINARY'".$password."'";

		$resultado=$conexion->query($sentencia) or die ("Error al comprobar usuario: ".mysqli_error($conexion));
		$filas=$resultado->fetch_assoc();
		return [
      		$filas['nombre'],
      		$filas['password'],
      		$filas['tipo_de_usuario'],

    	];
	}
  if($correo=$consulta[0] && $password=$consulta[1]){

    switch ($consulta[2]) {
      case 1:
        // code...
          $_SESSION['nombre']=$consulta[0];
          $_SESSION['password']=$consulta[2];
          echo '<script>';
          echo 'window.location.href="admin";';
          echo '</script>';
        break;
      case 2:
        // code...
          $_SESSION['nombre']=$consulta[0];
          $_SESSION['password']=$consulta[2];
          echo '<script>';
          echo 'window.location.href="admin";';
          echo '</script>';
      case 3:
        // code...
          $_SESSION['nombre']=$consulta[0];
          $_SESSION['password']=$consulta[2];
          echo '<script>';
          echo 'window.location.href="SISU/menu.php";';
          echo '</script>';
      default:

          echo '<script>';
          echo 'alert("Datos de acceso incorrectos");';
          echo 'window.location.href="index.php";';
          echo '</script>';
        break;
    }

  }else {
    echo '<script>';
    echo 'alert("Datos de acceso incorrectos");';
    echo 'window.location.href="index.php";';
    echo '</script>';
  }

?>