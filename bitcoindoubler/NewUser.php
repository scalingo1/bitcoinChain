<?php

session_start();
error_reporting(0);

include "./config.php";
include "./SQLIProtect.php";


		$address = SQLIProtect($_POST["address"]);

		$email = $_POST["email"];

		$password1 = MD5(SQLIProtect($_POST["password1"]));

		$password2 = MD5($_POST["password2"]);

		if($password1 != $password2){
			
			header("location: ./signup?address=".$address."&error=password");
			
		}else{
			
			$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
			
			if(mysqli_errno()){
				die("An error ocurred, please contact the admin.");
			}
			
			$consulta1 = "SELECT * FROM usuarios WHERE email = '".$email."' LIMIT 1";

			$ej = mysqli_query($conexion,$consulta1);

			$cuenta = mysqli_num_rows($ej);
			
			if($cuenta > 0){
				
				header("location: ./signup?address=".$address."&error=email");
				
			}else{
			
			$consulta = "INSERT INTO usuarios (email,password,address,deposit) VALUES ('".$email."','".$password1."','".$address."',0)";
			
				if($ejecutar = mysqli_query($conexion,$consulta)){
					
					$ej2 = mysqli_query($conexion,$consulta1);
					
					while($f = mysqli_fetch_array($ej2)){
						
					$_SESSION["log"] = true;
					$_SESSION["address"] = $address;
					$_SESSION["email"] = $email;
					$_SESSION["id"] = $f["id"];
					
					}
					
					header("location: ./dashboard");
					
				}else{
					
					header("location: ./signup");
					
				}
			
			}
			
			mysqli_close($conexion);
		}