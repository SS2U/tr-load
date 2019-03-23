<?php
    require('connect-db.php');
    $keyword = $_POST["keyword"];
    if(isset($keyword))
			{
			
				$sql_search ="SELECT * FROM tbl_tr WHERE pea LIKE '%".$keyword."%'";
				$query_search = mysqli_query($conn,$sql_search);
            }
    $result_back = array();
    while($obj_result = mysqli_fetch_assoc($query_search))
    {
        array_push($result_back,$obj_result);
    }
    echo json_encode($result_back);

?>