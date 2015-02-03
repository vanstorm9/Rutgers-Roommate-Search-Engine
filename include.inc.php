<?php 
include 'general.php';
include 'connect.php';
include 'sessioncheck.php';

$user_id = $_GET['i'];

$follow_copy = mysql_num_rows(mysql_query("SELECT * FROM follow WHERE user_one = '$my_id' && user_two= '$user_id'"));

if ($follow_copy == 0){
	mysql_query("INSERT INTO follow VALUES('','$my_id','$user_id')");
		
	$first_name_query = mysql_query("SELECT first_name FROM users WHERE id='$user_id'");
	$first_name_row = mysql_fetch_assoc($first_name_query);	
	$first_name = $first_name_row['first_name'];


	$email_query = mysql_query("SELECT email FROM users WHERE id='$user_id'");
	$email_row = mysql_fetch_assoc($email_query);	
	$email = $email_row['email'];
	
	$to= $email;
	$subject= "Someone added you as his/her Rutgers roommate!";
	$headers= "From: Rutgers Roommate Search Engine";
	$body = "Hello $first_name
	
	$my_first_name  $my_last_name has added you as his/her roommate on the Rutgers Roommate Search Engine! 
	
	Log in and click on the Roommate selection in the navigation bar and view his/her profile. After that, you can do whatever you want whether its to socialize with him on Facebook or Skype or just leave him on the list so that you can find him later.
	http://rutgersroommate.site11.com/
	
	You're one step closer to finding your roommate ;)
	
	

Thank you!
Anthony Lowhur
Founder of the Rutgers Roommate Search Engine";


}

echo "Roommate Added!";
?>