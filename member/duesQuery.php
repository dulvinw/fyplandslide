<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "ITsolcrewsl@1991";
$dbname = "dbo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);



}


$sql = "SELECT year, fee FROM dbo.vw_dc_subs_by_year_rpt where m02_membership_no = '" . $_SESSION['username'] . "' and Is_Paid = 'No' order by year";
$result = $conn->query($sql);

if($result->num_rows > 0){

	$dataArray = array();
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
	            $dataArray[] = $row;
	}

	// $outp = {"test" : json_encode($dataArray)};
	

	echo json_encode($dataArray);
}

// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// 	fwrite($myfile, $sql);
// 	fclose($myfile);

?>