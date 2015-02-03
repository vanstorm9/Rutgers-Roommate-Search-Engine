<?php 
include 'connect.php';

$username = $_GET['p'];

$activated_query = mysql_query("SELECT activated FROM users WHERE email='$username'");
$activated_row = mysql_fetch_assoc($activated_query);	
$activated = $activated_row['activated'];

if($activated == 0){

	$id_query = mysql_query("SELECT id FROM users WHERE email='$username'");
	$id_row = mysql_fetch_assoc($id_query);	
	$id = $id_row['id'];
	  
	$first_name_query = mysql_query("SELECT first_name FROM users WHERE email='$username'");
	$first_name_row = mysql_fetch_assoc($first_name_query);	
	$first_name = $first_name_row['first_name'];



		$random = rand(23456789,98765432);
		$querychange= mysql_query("UPDATE users SET random='$random' WHERE email='$username'");

		
							

	                                                $lastid = mysql_insert_id();

	                                                $to= $username;
	                                                $subject= "Activate your Rutgers Roommate account";
	                                                $headers= "From: Anthony Lowhur";
	                                                $body = "Hello $firstname
	Thanks for creating an account for the Rutgers Roommate Search Engine! You are one click way from finding the perfect roommate! Activate your account by clicking on the link below:
	http://rutgersroommate.site11.com/activate.php?p=$id&o=$random

	Thank you!
	Anthony Lowhur
	Founder of the Rutgers Roommate Search Engine";


	                                                if (mail($to, $subject, $body, $headers)){
							
													die("You have resent your account activation email. Check your email to activate your account.");
	                                                } else {
	                                                 die("Sorry, there was a failure in sending your activation email.");
	                                                }
							
} else{
	die("Your account is already activated. Please try logging in.");
}
		
		
?>