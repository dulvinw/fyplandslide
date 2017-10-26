<?php

	session_start();  /* Start the session */ 

	include('../database.php');/* include the file database.php */


	$query1 = "(SELECT * FROM presentations) ORDER BY id DESC;";

	$result1=$db->query($query1);

	$data = array();

    while($row = $result1->fetch_array(MYSQL_ASSOC)) {
            $data[] = $row;
    }
    echo json_encode($data);


?>