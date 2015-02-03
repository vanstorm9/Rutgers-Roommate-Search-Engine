<?php 
include 'general.php';
include 'connect.php';
include 'sessioncheck.php';

session_start();

$user = $_SESSION['username'];

if ($user){

	if ($_POST['submit']){

        $oldpassword= $_POST['old_password_box'];
	$newpassword= $_POST['password_box'];
	$repeatnewpassword= $_POST['re_password_box'];

        if ($oldpassword&&$newpassword&&$repeatnewpassword){

		$oldpassword= md5($_POST['old_password_box']);
		$newpassword= md5($_POST['password_box']);
		$repeatnewpassword= md5($_POST['re_password_box']);
		

		$queryget = mysql_query("SELECT password FROM users WHERE id ='$my_id'") or die("Query did not work.");
                $row = mysql_fetch_assoc($queryget);

		$oldpassworddb= $row['password'];
             
		if ($oldpassword == $oldpassworddb){
			if ($newpassword == $repeatnewpassword){
				$querychange= mysql_query("UPDATE users SET password='$newpassword' WHERE id = '$my_id'");
				
				die("Your password has successfully changed! <a href='home.php'>Return to the main page.</a>");
				
				
			} else {
				die("New passwords do not match");
			}

		} else {
			die("Old password do not match.");
		}

        } else {
               echo "You need to fill out <strong>ALL</strong> fields.";
        }
	} else  {


	}	
} else {
	die("You must be logged in in order to change your password.");
}




?>
