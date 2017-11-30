<?php

session_start();
error_reporting(0);

include "./config.php";
include "./SQLIProtect.php";

$email = $_POST["email"];
$pass = MD5($_POST["password"]);

$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
			
if(mysqli_errno()){
	die("An error ocurred, please contact the admin.");
}
			
$consulta = "SELECT * FROM usuarios WHERE email = '".$email."' AND password = '".$pass."' LIMIT 1";

$ej = mysqli_query($conexion,$consulta);

$cuenta = mysqli_num_rows($ej);

if($cuenta > 0){
	
	while($fila = mysqli_fetch_array($ej)){
	
	$_SESSION["log"] = true;
	$_SESSION["address"] = $fila["address"];
	$_SESSION["email"] = $_fila["email"];
	$_SESSION["id"] = $_fila["id"];
	
	header("location: ./dashboard");
	
	}
	
}else{
	header("location: ./login?error=true");
}

?>