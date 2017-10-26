<?php
session_start();
include ('database.php'); # Import database.php file in to the logincheck.php file. 

$error='';


if (isset($_POST['submit'])){
	
    if (empty($_POST['name']) || empty($_POST['password'])){ /* Check whether the entered user name or password is empty */
		$error = "Email address or Password is invalid";
		
    } 
	else {
		
		$name = $_POST['name'];
		$password = $_POST['password'];
		$password = md5($password);// create an MD5 hash of the password
		//$Type = $_POST['Type'];
		
        $query = "SELECT * FROM m04_Logins WHERE m04_m01_member_id = '$name'  AND m04_password = '$password'"; /* Query to select email address and password for relevant user  AND Type != 'MeterReader'  */

        $result = $db->query($query); /* Create the object of the query */
		
		$rowcount=mysqli_num_rows($result);


		///*******************************************///////
		
		if($rowcount !=0){
		
			while($row = mysqli_fetch_assoc($result)){ /* Fetch a result row as an associative array */
				$dbuseremail = $row['EMAIL'];
				$dbpassword = $row['Password'];
				//$Type  = $row['Type'];
				$dbname = $_POST['name'];
				$_SESSION['username']=$dbname; /* Create a session called username */
		
			}
		
		}


        if ($rowcount === false) {
			
            echo "Could not successfully run query ($query) from DB: " . mysqli_error();
            exit;
        }

        if ($rowcount == 1) { /* If the rowcount=1 and the type= consumer session username starts  && $Type == 'Consumer' */
			$_SESSION['username']=$dbname;
			$_SESSION['isLoggedIn'] = true;  
			header("location: /member"); /* If the session is true redirect to talentProfile.php page */		
		} 
		
		
		
		else {
			$error = "Username or Password is invalid for a talent"; /* If the entered username or password incorrect print this msg  */
		}
		$result->free();
        $error = "Username and Password do not match";  /* If the entered username or password mismatched print this msg  */
    }
}
?>