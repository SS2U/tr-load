<?php
	require('connect-db.php'); //เชื่อมต่อ database
	$pea = $_POST["pea"];
	$loc = $_POST["loc"];
	$kva = $_POST["kva"];
	$phase = $_POST["phase"];
	$C_A_L = $_POST["C_A_L"];
	$C_B_L = $_POST["C_B_L"];
	$C_C_L = $_POST["C_C_L"];
	$C_A_R = $_POST["C_A_R"];
	$C_B_R = $_POST["C_B_R"];
	$C_C_R = $_POST["C_C_R"];
	$V_AN_L = $_POST["V_AN_L"];
	$V_BN_L = $_POST["V_BN_L"];
	$V_CN_L = $_POST["V_CN_L"];
	$V_AN_R = $_POST["V_AN_R"];
	$V_BN_R = $_POST["V_BN_R"];
	$V_CN_R = $_POST["V_CN_R"];
		
	$sql_text_insert = "INSERT INTO tbl_tr(pea,location) VALUES('$pea','$loc')";
		
	mysqli_query($conn,$sql_text_insert);
	echo "Insert Complete.....";
?>