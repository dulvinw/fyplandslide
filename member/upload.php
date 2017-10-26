<?php

	session_start();  /* Start of the session */

	if(!isset($_SESSION['isLoggedIn'])){
		//header("location: ../login.php");
	}
	
	$servername = "localhost";
	$username = "root";
	$password = "ITsolcrewsl@1991";
	$dbname = "dbo";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $target_name = basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    // // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        exit('<div class="container"><button><a href="../#!/">Go Back</a></button></div>');
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 200000000) {
        echo "Sorry, your file is too large. Less than 50MB";
        $uploadOk = 0;
        exit('<div class="container"><button><a href="#!/">Go Back</a></button></div>');
    }
    // Allow certain file formats
    // if($imageFileType != "JPEG" && $imageFileType != "JPG" && $imageFileType != "PNG") {
    //     echo "Sorry, only JPG and PNG files are allowed.";
    //     $uploadOk = 0;
    //     exit('<div class="container"><button><a href="#!/">Go Back</a></button></div>');
    // }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        exit('<div class="container"><button><a href="#!/">Go Back</a></button></div>');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            header("location: index.php");
        } else {
            echo "Sorry, there was an error uploading your file." . $target_name ;
        }
    }

    // $query = "INSERT INTO m02_members (`m02_profile_pic_id`) VALUES('$target_name');";
    $query = "UPDATE m02_members SET m02_profile_pic_id = '$target_name' WHERE m02_membership_no = '" . $_SESSION['username'] . "'";
    $conn->query($query);
?>