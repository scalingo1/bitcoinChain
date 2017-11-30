<?php
session_start();
include "./config.php";
?>
<p>Your deposits:</p>
<table width="100%"> <thead> <tr><th>Date & Time</th> <th>Deposit Amount</th> <th>Profit Amount</th> <th>Status</th> </tr> </thead> <tbody>
<tr>
	<td style="text-align: center">DD-MM-YYYY</td>
	<td style="text-align: center">BTC</td>
	<td style="text-align: center">BTC</td>
	<td style="text-align: center">Waiting for payments.</td>
</tr>
<?php

			$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
			
			if(mysqli_connect_errno()){
				die("An error ocurred, please contact the admin.");
			}
			
			$consulta2 = "SELECT * FROM payments WHERE user_address = '".$_SESSION["address"]."' ORDER BY payment_id DESC";
			
			$ex = mysqli_query($conexion, $consulta2);
			
			while($fi = mysqli_fetch_array($ex)){
				
				?>
<tr>
	<td style="text-align: center"><?php echo $fi["date"]; ?></td>
	<td style="text-align: center"><?php echo $fi["btc_amount"]; ?> BTC</td>
	<td style="text-align: center"><?php $ress = $fi["btc_amount"]*0.5; echo $ress; ?></td>
	<td style="text-align: center"><?php if($fi["status"] > 0){echo"<span style='color: green'>Success! (Doubling)</span>";}else{echo "<span style='color: red'>Validating Payment</span>";} ?></td>
</tr>				
				<?php
				
			}
?>
 </tbody> </table>         