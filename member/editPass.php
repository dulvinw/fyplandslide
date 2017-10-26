<?php
session_start();

$username = $_SESSION["username"];
include ('../log-in/database.php'); # Import database.php file in to the logincheck.php file. 

$error='';

	
    if (empty($_POST['currentPass']) || empty($_POST['newPass']) || empty($_POST['newPassAgain'])){ /* Check whether the entered user name or password is empty */
		echo "Email address or Password is invalid";
		
    } 
	else {
		
		$currentPassword = $_POST['currentPass'];
		$newPassword = $_POST['newPass'];
		$newPasswordAgain = $_POST['newPassAgain'];
		$currentPassword = md5($currentPassword);// create an MD5 hash of the password
		$newPassword = md5($newPassword);
		$newPasswordAgain = md5($newPasswordAgain);
		//$Type = $_POST['Type'];
		
        $query = "SELECT * FROM m04_Logins WHERE m04_m01_member_id = '". $_SESSION['username']. "' AND m04_password = '$currentPassword'"; /* Query to select email address and password for relevant user  AND Type != 'MeterReader'  */

        $result = $db->query($query); /* Create the object of the query */
		
		$rowcount=mysqli_num_rows($result);


		///*******************************************///////


        if ($rowcount === false) {
			
            echo "Could not successfully run query ($query) from DB: " . mysqli_error();
            exit;
        }

        if ($rowcount == 1) { /* If the rowcount=1 and the type= consumer session username starts  && $Type == 'Consumer' */
        	// echo $newPassword . "," ;
        	// echo $newPasswordAgain;
			if($newPassword == $newPasswordAgain){
				// $qyery2 = "UPDATE dbo.m04_Logins m04
				// 			SET
				// 			m04.m04_password = '$newPassword'
				// 			WHERE m04.m04_m01_member_id = '$username'";

				$query2 = "UPDATE dbo.m04_Logins
							SET
							m04_password = '$newPassword'
							WHERE m04_m01_member_id = '$username'";


				$db->query($query2);

				echo "<p>Password Changed successfully</p><a href='/member'>Go to Profile</a>";
			}	
		} 
		
		
		
		else {
			echo "<p>Password Changed Unsuccessful</p><a href='/member'>Go to Profile</a>";
			$error = "Username or Password is invalid for a talent"; /* If the entered username or password incorrect print this msg  */
		}
		$result->free();
        $error = "Username and Password do not match";  /* If the entered username or password mismatched print this msg  */
    }

?>