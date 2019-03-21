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
		
	$sql_text_insert = "INSERT INTO tbl_tr(pea,location,kva,phase,current_a_l,current_b_l,current_c_l,current_a_r,current_b_r,current_c_r,voltage_an_l,voltage_bn_l,voltage_cn_l,voltage_an_r,voltage_bn_r,voltage_cn_r,) VALUES('$pea','$loc','$kva','$phase','$C_A_L','$C_B_L','$C_C_L','$C_A_R','$C_B_R','$C_C_R','$V_AN_L','$V_BN_L','$V_CN_L','$V_AN_R','$V_BN_R','$V_CN_R')";
		
	mysqli_query($conn,$sql_text_insert);
	echo "Insert Complete.....";
?>