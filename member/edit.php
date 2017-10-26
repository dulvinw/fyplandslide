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

	$postdata = file_get_contents("php://input");
	$data = json_decode($postdata, true);

	$designation = $data["Mr"];
	$name = $_SESSION["username"];
	$occupation =  $data["occupation"];
	$organization = $data["organization"];
	$telhome = $data["telhome"];
	$teloffice = $data["teloffice"];
	$officead1 = $data["officead1"];
	$officead2 = $data["officead2"];
	$officead3 = $data["officead3"];
	$officead4 = $data["officead4"];
	$homead1 = $data["homead1"];
	$homead2 = $data["homead2"];
	$homead3 = $data["homead3"];
	$homead4 = $data["homead4"];
	$email = $data["email"];

	$query2 = "UPDATE dbo.m02_members
		SET
		m02_Mr = '$designation',
		m02_occupation = '$occupation',
		m02_organization = '$organization',
		m02_tel_home = '$telhome',
		m02_tel_office = '$teloffice',
		m02_office_add_l1 = '$officead1',
		m02_office_add_l2 = '$officead2',
		m02_office_add_l3 = '$officead3',
		m02_office_add_l4 = '$officead4',
		m02_residence_add_l1 = '$homead1',
		m02_residence_add_l2 = '$homead2',
		m02_residence_add_l3 = '$homead3',
		m02_residence_add_l4 = '$homead4',
		m02_email = '$email'
		WHERE m02_membership_no = '$name'";

	// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	// fwrite($myfile, $query2);
	// fclose($myfile);

	// $query = "UPDATE dbo.m02_members SET m02_occupation = 'TestOcup', m02_organization = 'UoM', m02_tel_home = '0976941234', m02_tel_office = '12345678', 		m02_office_add_l1 = '1123', m02_office_add_l2 = 'uom', m02_office_add_l3 = 'katu', m02_office_add_l4 = 'mora', m02_residence_add_l1 = 'home1', 		m02_residence_add_l2 = 'home2', m02_residence_add_l3 = 'home3', m02_residence_add_l4 = 'home4', m02_email = 'thed@email.com' WHERE m02_membership_no = 'AM325'";

	$conn->query($query2);


?>