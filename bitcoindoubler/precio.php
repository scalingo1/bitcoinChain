<?php

$data = file_get_contents("https://api.coindesk.com/v1/bpi/currentprice.json");
$price = json_decode($data, true);
$price = $price["bpi"]["USD"]["rate"];

?>