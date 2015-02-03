<!DOCTYPE html>

   <?php 
  include 'connect.php';
  include 'navbar.html';
  include 'general.php';
  
  
  $full_name_temp = $_GET['u'];
  $user_id = $_GET['i'];
  $hash = $_GET['e'];
  
  
$first_name_query = mysql_query("SELECT first_name FROM users WHERE id='$user_id'");
$first_name_row = mysql_fetch_assoc($first_name_query);	
$first_name = $first_name_row['first_name'];

$last_name_query = mysql_query("SELECT last_name FROM users WHERE id='$user_id'");
$last_name_row = mysql_fetch_assoc($last_name_query);	
$last_name = $last_name_row['last_name'];
  
$full_name = $first_name.".".$last_name; 
  
$random_query = mysql_query("SELECT random FROM users WHERE id='$user_id'");  
$random_row = mysql_fetch_assoc($random_query);	
$random_hash = $random_row['random'];

?>

<title><?php echo $first_name;?> <?php echo $last_name;?></title>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $full_name;?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.mi.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  
   
  
  <body>
<?php
  
  if ($full_name_temp != $full_name || $hash != $random_hash){
	die('<h1>Sorry, that user does not exist. </h1>');
  } else {
	
  }
  
  
  
$avatar_query = mysql_query("SELECT avatar FROM users WHERE id='$user_id'");
$avatar_row = mysql_fetch_assoc($avatar_query);	
$avatar = $avatar_row['avatar'];

$state_query = mysql_query("SELECT state FROM search_info WHERE user_id='$user_id'");
$state_row = mysql_fetch_assoc($state_query);	
$state = $state_row['state'];

$country_query = mysql_query("SELECT country FROM search_info WHERE user_id='$user_id'");
$country_row = mysql_fetch_assoc($country_query);	
$country = $country_row['country'];
  
$social_site_query = mysql_query("SELECT social_site FROM search_info WHERE user_id='$user_id'");
$social_site_row = mysql_fetch_assoc($social_site_query);	
$social_site = $social_site_row['social_site'];

$class_of_query = mysql_query("SELECT class_of FROM users WHERE id='$user_id'");
$class_of_row = mysql_fetch_assoc($class_of_query);	
$class_of = $class_of_row['class_of'];

$avatar_query = mysql_query("SELECT avatar FROM users WHERE id='$user_id'");
$avatar_row = mysql_fetch_assoc($avatar_query);	
$avatar = $avatar_row['avatar'];
  
  
 $major_query = mysql_query("SELECT major FROM search_info WHERE user_id='$user_id'");
$major_row = mysql_fetch_assoc($major_query);	
$major = $major_row['major'];
  
$campus_query = mysql_query("SELECT campus FROM search_info WHERE user_id='$user_id'");
$campus_row = mysql_fetch_assoc($campus_query);	
$campus = $campus_row['campus'];

$location_query = mysql_query("SELECT location FROM search_info WHERE user_id='$user_id'");
$location_row = mysql_fetch_assoc($location_query);	
$location = $location_row['location'];

$interest_query = mysql_query("SELECT interest FROM search_info WHERE user_id='$user_id'");
$interest_row = mysql_fetch_assoc($interest_query);	
$interest = $interest_row['interest'];

$interest_2_query = mysql_query("SELECT interest_2 FROM search_info WHERE user_id='$user_id'");
$interest_2_row = mysql_fetch_assoc($interest_2_query);	
$interest_2 = $interest_2_row['interest_2'];

$interest_3_query = mysql_query("SELECT interest_3 FROM search_info WHERE user_id='$user_id'");
$interest_3_row = mysql_fetch_assoc($interest_3_query);	
$interest_3 = $interest_3_row['interest_3'];



$music_query = mysql_query("SELECT music FROM search_info WHERE user_id='$user_id'");
$music_row = mysql_fetch_assoc($music_query);	
$music = $music_row['music'];

$show_query = mysql_query("SELECT tv_show FROM search_info WHERE user_id='$user_id'");
$show_row = mysql_fetch_assoc($show_query);	
$show = $show_row['tv_show'];

$sport_query = mysql_query("SELECT sport FROM search_info WHERE user_id='$user_id'");
$sport_row = mysql_fetch_assoc($sport_query);	
$sport = $sport_row['sport'];

$movie_query = mysql_query("SELECT movie FROM search_info WHERE user_id='$user_id'");
$movie_row = mysql_fetch_assoc($movie_query);	
$movie = $movie_row['movie'];

$game_query = mysql_query("SELECT game FROM search_info WHERE user_id='$user_id'");
$game_row = mysql_fetch_assoc($game_query);	
$game = $game_row['game'];

$profile_query = mysql_query("SELECT profile FROM users WHERE id='$user_id'");
$profile_row = mysql_fetch_assoc($profile_query);	
$profile = $profile_row['profile'];

$future_query = mysql_query("SELECT future FROM users WHERE id='$user_id'");
$future_row = mysql_fetch_assoc($future_query);	
$future = $future_row['future'];


$loud_query = mysql_query("SELECT loud FROM search_info WHERE user_id='$user_id'");
$loud_row = mysql_fetch_assoc($loud_query);	
$loud = $loud_row['loud'];

$tidy_query = mysql_query("SELECT tidy FROM search_info WHERE user_id='$user_id'");
$tidy_row = mysql_fetch_assoc($tidy_query);	
$tidy = $tidy_row['tidy'];


$dorm_invite_query = mysql_query("SELECT dorm_invite FROM search_info WHERE user_id='$user_id'");
$dorm_invite_row = mysql_fetch_assoc($dorm_invite_query);	
$dorm_invite = $dorm_invite_row['dorm_invite'];

$hour_query = mysql_query("SELECT hour FROM search_info WHERE user_id='$user_id'");
$hour_row = mysql_fetch_assoc($hour_query);	
$hour = $hour_row['hour'];

$activity_query = mysql_query("SELECT activity FROM search_info WHERE user_id='$user_id'");
$activity_row = mysql_fetch_assoc($activity_query);	
$activity = $activity_row['activity'];

$weekend_query = mysql_query("SELECT weekend FROM search_info WHERE user_id='$user_id'");
$weekend_row = mysql_fetch_assoc($weekend_query);	
$weekend = $weekend_row['weekend'];

$smoke_query = mysql_query("SELECT smoke FROM search_info WHERE user_id='$user_id'");
$smoke_row = mysql_fetch_assoc($smoke_query);	
$smoke = $smoke_row['smoke'];
  ?>
  

  
	<center>
	 <div class="container">
		<table class='table table-bordered' style='padding:10px;'>
			<tr>
				<td style='width:30%'>
					<img src='<?php echo $avatar;?>' style='width:300px; height:300px;'>
					<center><h1><?php echo $first_name;?> <?php echo $last_name;?></h1>
					
					<?php 
					$user = $_SESSION['username'];
					
					
					
	
					if ($random_hash == $my_hash && $first_name == $my_first_name && $last_name == $my_last_name && $my_id == $user_id) {
					
					
					} else {
					
						$room_connection = mysql_num_rows(mysql_query("SELECT * FROM follow WHERE user_one='$my_id' && user_two='$user_id'"));
						$room_interest_in_you = mysql_num_rows(mysql_query("SELECT * FROM follow WHERE user_one='$user_id' && user_two='$my_id'"));
						
						if ($room_connection != 0){
					?>
						<button class="btn btn-lg btn-primary disabled" id='roommate_but'>Already Added!</button>
					<?php 
						} else if ($room_interest_in_you != 0) {
					?>	
						<button class="btn btn-lg btn-primary disabled" id='roommate_but'>Interested in You!</button>
					<?php 
						} else {
					?>
						<button class="btn btn-lg btn-primary" id='roommate_but' onclick='load(<?php echo $user_id;?>)'><span class="glyphicon glyphicon-plus"></span> Add as Roommate</button>
					<?php 
						}
					?>
					<br><br>
						<a href='<?php echo $social_site;?>' target='_blank'><button class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-user"></span> Contact</button></a></center>

					<?php 
					}
					
					?>
					<br><br><br>
				</td>
			
				<td style='padding:20px;'>
				<?php 
				
				if ($random_hash == $my_hash && $first_name == $my_first_name && $last_name == $my_last_name && $my_id == $user_id) {
				?>		
				
					<a href='<?php echo $social_site;?>' target='_blank'>See my Facebook / Twitter / etc.</a>
				<?php
				} else {
				
				?>
					<a href='<?php echo $social_site;?>' target='_blank'>Talk to me!</a>
				<?php

				
				}
				
				?>
					<br><br>
					Biography:
					<p><?php echo $profile;?></p>
					<br><br>
					What I will do at Rutgers:
					<p><?php echo $future;?></p>
					<br><br>
					
					<table class='table table-bordered'>
						<tr>
							<td>Class of:</td>
							<td>Major:</td>
							<td>Rutgers:</td>
							<!--<td>School:</td>-->
							<td>Campus:</td>
							<td>State:</td>
							<td>Country:</td>
							
						
						
						</tr>
						<tr>
							<td><?php echo $class_of;?></td>
							<td><?php echo $major; ?></td>
							<td><?php echo $location; ?></td>
							<!--<td></td>-->
							<td><?php echo $campus; ?></td>
							<td><?php echo $state;?></td>
							<td><?php echo $country;?></td>
						</tr>
						
					</table>
					
					<table class='table table-bordered'>
						
						<tr>
							<td>Interest 1:</td>
							<td>Interest 2:</td>
							<td>Interest 3:</td>

						
						
						</tr>
						<tr>
							<td><?php echo $interest; ?></td>
							<td><?php echo $interest_2; ?></td>
							<td><?php echo $interest_3; ?></td>

						</tr>
					
					
					</table>
					
					<table class='table table-bordered'>
						
						<tr>
							
							<td>Music:</td>
							<td>TV Show:</td>
							<td>Sport:</td>
							<td>Movie:</td>
							<td>Game:</td>
						
						
						</tr>
						<tr>
							
							<td><?php echo $music; ?></td>
							<td><?php echo $show; ?></td>
							<td><?php echo $sport; ?></td>
							<td><?php echo $movie; ?></td>
							<td><?php echo $game; ?></td>
						</tr>
					
					
					</table>
					
					
					<table class='table table-bordered'>
					<tr>
							<td>Sound Level</td>
							<td>Cleanliness</td>
							<td>I often</td>
							<td>Hours</td>
							<td>Weekend</td>
							<td>Dorm Invite</td>
							<td>Smoker</td>
						</tr>
						<tr>
							<td><?php echo $loud;?></td>
							<td><?php echo $tidy;?></td>
							<td><?php echo $activity;?></td>
							<td><?php echo $hour;?></td>
							<td><?php echo $weekend;?></td>
							<td><?php echo $dorm_invite;?></td>
							<td><?php echo $smoke;?></td>
						</tr>
					
					</table>
					

				</td>
			
			</tr>

		</table>
	</div>
    </center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>

function load(recieving_id){
    $('#roommate_but').prop('disabled', true);
    $.get('include.inc.php?i=' + recieving_id, function(data) {
        $("#roommate_but").html(data);
    });
}

	
	</script>
	
	
  </body>
</html>