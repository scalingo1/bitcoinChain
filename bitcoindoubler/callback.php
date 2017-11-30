<?php

include "./config.php";

$secretG = $_GET["secret"];
$userAdrress = $_GET["user_address"];
$invoice_id = $_GET['invoice_id']; //invoice_id is passed back to the callback URL
$transaction_hash = $_GET['transaction_hash'];
$value_in_satoshi = $_GET['value'];
$value_in_btc = $value_in_satoshi / 100000000;

$dat = date("d")."-".date("m")."-".date("Y");

if($secretG == $secret){
	$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
			
    if(mysqli_errno()){
        die("An error ocurred, please contact the admin.");
    }

    $consulta = "INSERT INTO payments (user_address,btc_amount,date,status,invoice) VALUES ('".$userAdrress."','".$value_in_btc."','".$dat."',1,'".$invoice_id."')";

    if(mysqli_query($conexion,$consulta)){
        echo "*ok*";  
    }else{
        echo "error";
    }
  
}else{
	die("Please not try.");   
}