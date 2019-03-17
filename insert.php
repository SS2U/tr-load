<?php
	require('connect-db.php'); //เชื่อมต่อ database
	$pea = $_POST["pea"];
	
	$sql_text_insert = "INSERT INTO tbl_tr(pea) VALUES('$pea')";
	mysqli_query($conn,$sql_text_insert);
	echo "Insert Complete.....";
?>