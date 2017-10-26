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

$username = $_SESSION["username"];
//$sql = "SELECT * from dbo.m02_members WHERE m02_members.m02_membership_no = '$username'";

$sql = "SELECT 
		    m02.*,
		    CASE m02.m02_is_life_member
		        WHEN 'Yes' THEN 1
		        ELSE 0
		    END AS is_life_member
		FROM
		    dbo.m02_members m02
		WHERE
		    m02.m02_membership_no = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

$row = $result->fetch_assoc();

$name = $row['m02_Name'];
	$membership = $row['m02_membership'];
	if ($membership == 1) 
	{
		$membership = 'Corporate';
	}
	else if ($membership == 2)
	{
		$membership = 'Associate';
	}
	$occupation = $row['m02_occupation'];
	$organization = $row['m02_organization'];
	$telhome = $row['m02_tel_home'];
	$teloffice = $row['m02_tel_office'];
	$officead1 = $row['m02_office_add_l1'];
	$officead2 = $row['m02_office_add_l2'];
	$officead3 = $row['m02_office_add_l3'];
	$officead4 = $row['m02_office_add_l4'];
	$homead1 = $row['m02_residence_add_l1'];
	$homead2 = $row['m02_residence_add_l2'];
	$homead3 = $row['m02_residence_add_l3'];
	$homead4 = $row['m02_residence_add_l4'];
	$email = $row['m02_email'];


} else {
    echo "0 results";
}

$conn->close();

echo json_encode($row);

?> 