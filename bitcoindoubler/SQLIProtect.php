<?php
function SQLIProtect($cadena){
	$cadena = htmlspecialchars($cadena);
	$cadena = stripslashes($cadena);
	if(preg_match("/[^A-Za-z0-9]+/",$cadena)) {
		return(false);
	}else{
		return($cadena);
	}
}