<?php
	require('connect-db.php'); //เชื่อมต่อ database
	$pea = $_POST["pea"];
	$pea = $_POST["location"];
	$pea = $_POST["kva"];
	$pea = $_POST["phase"];
	$pea = $_POST["C_A_L"];
	$pea = $_POST["C_B_L"];
	$pea = $_POST["C_C_L"];
	$pea = $_POST["C_A_R"];
	$pea = $_POST["C_B_R"];
	$pea = $_POST["C_C_R"];
	$pea = $_POST["V_AN_L"];
	$pea = $_POST["V_BN_L"];
	$pea = $_POST["V_CN_L"];
	$pea = $_POST["V_AN_R"];
	$pea = $_POST["V_BN_R"];
	$pea = $_POST["V_CN_R"];
	
	
	
	$sql_text_insert = "INSERT INTO tbl_tr(pea) VALUES('$pea')";
	$sql_text_insert = "INSERT INTO tbl_tr(location) VALUES('location')";
	$sql_text_insert = "INSERT INTO tbl_tr(kva) VALUES('$kva')";
	$sql_text_insert = "INSERT INTO tbl_tr(phase) VALUES('$phase')";
	$sql_text_insert = "INSERT INTO tbl_tr(current-a-l) VALUES('$C_A_L')";
	$sql_text_insert = "INSERT INTO tbl_tr(current-b-l) VALUES('$C_B_L')";
	$sql_text_insert = "INSERT INTO tbl_tr(current-c-l) VALUES('C_C_L')";
	$sql_text_insert = "INSERT INTO tbl_tr(current-a-r) VALUES('$C_A_R')";
	$sql_text_insert = "INSERT INTO tbl_tr(current-b-r) VALUES('$C_B_R')";
	$sql_text_insert = "INSERT INTO tbl_tr(current-c-r) VALUES('$C_C_R')";
	$sql_text_insert = "INSERT INTO tbl_tr(voltage-an-l) VALUES('$V_AN_L')";
	$sql_text_insert = "INSERT INTO tbl_tr(voltage-bn-l) VALUES('$V_BN_L')";
	$sql_text_insert = "INSERT INTO tbl_tr(voltage-cn-l) VALUES('$V_CN_L')";
	$sql_text_insert = "INSERT INTO tbl_tr(voltage-an-r) VALUES('$V_AN_R')";
	$sql_text_insert = "INSERT INTO tbl_tr(voltage-bn-r) VALUES('$V_BN_R')";
	$sql_text_insert = "INSERT INTO tbl_tr(voltage-cn-r) VALUES('$V_CN_R')";
	
	
	mysqli_query($conn,$sql_text_insert);
	echo "Insert Complete.....";
?>