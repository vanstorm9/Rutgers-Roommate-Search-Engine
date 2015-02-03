<?php 
include 'connect.php';

session_start();	
	
	$user = $_SESSION['username'];

$hash_query = mysql_query("SELECT random FROM users WHERE email='$user'");
$hash_row = mysql_fetch_assoc($hash_query);
$my_hash = $hash_row['random'];
			
					
$id_query = mysql_query("SELECT id FROM users WHERE email= '$user'");
$id_row = mysql_fetch_assoc($id_query);
$my_id = $id_row['id'];
			
$first_name_query = mysql_query("SELECT first_name FROM users WHERE email= '$user'");
$first_name_row = mysql_fetch_assoc($first_name_query);
$my_first_name = $first_name_row['first_name'];
					

$last_name_query = mysql_query("SELECT last_name FROM users WHERE email= '$user'");
$last_name_row = mysql_fetch_assoc($last_name_query);
$my_last_name = $last_name_row['last_name'];

$avatar_query = mysql_query("SELECT avatar FROM users WHERE email= '$user'");
$avatar_row = mysql_fetch_assoc($avatar_query);
$my_avatar = $avatar_row['avatar'];

$profile_query = mysql_query("SELECT profile FROM users WHERE email= '$user'");
$profile_row = mysql_fetch_assoc($profile_query);
$my_profile = $profile_row['profile'];

$future_query = mysql_query("SELECT future FROM users WHERE email= '$user'");
$future_row = mysql_fetch_assoc($future_query);
$my_future = $future_row['future'];

$class_of_query = mysql_query("SELECT class_of FROM users WHERE email= '$user'");
$class_of_row = mysql_fetch_assoc($class_of_query);
$my_class_of = $class_of_row['class_of'];

$profile_query = mysql_query("SELECT profile FROM users WHERE email= '$user'");
$profile_row = mysql_fetch_assoc($profile_query);
$my_profile = $profile_row['profile'];

$future_query = mysql_query("SELECT future FROM users WHERE email= '$user'");
$future_row = mysql_fetch_assoc($future_query);
$my_future = $future_row['future'];

$location_query = mysql_query("SELECT location FROM search_info WHERE user_id = '$my_id'");
$location_row = mysql_fetch_assoc($location_query);
$my_location = $location_row['location'];

$campus_query = mysql_query("SELECT campus FROM search_info WHERE user_id = '$my_id'");
$campus_row = mysql_fetch_assoc($campus_query);
$my_campus = $campus_row['campus'];

$social_site_query = mysql_query("SELECT social_site FROM search_info WHERE user_id = '$my_id'");
$social_site_row = mysql_fetch_assoc($social_site_query);
$my_social_site = $social_site_row['social_site'];

$loud_query = mysql_query("SELECT loud FROM search_info WHERE user_id = '$my_id'");
$loud_row = mysql_fetch_assoc($loud_query);
$my_loud = $loud_row['loud'];

$tidy_query = mysql_query("SELECT tidy FROM search_info WHERE user_id = '$my_id'");
$tidy_row = mysql_fetch_assoc($tidy_query);
$my_tidy = $tidy_row['tidy'];

$country_query = mysql_query("SELECT country FROM search_info WHERE user_id = '$my_id'");
$country_row = mysql_fetch_assoc($country_query);
$my_country = $country_row['country'];



$game_query = mysql_query("SELECT game FROM search_info WHERE user_id = '$my_id'");
$game_row = mysql_fetch_assoc($game_query);
$my_game = $game_row['game'];

$interest_query = mysql_query("SELECT interest FROM search_info WHERE user_id = '$my_id'");
$interest_row = mysql_fetch_assoc($interest_query);
$my_interest = $interest_row['interest'];

$interest_2_query = mysql_query("SELECT interest_2 FROM search_info WHERE user_id = '$my_id'");
$interest_2_row = mysql_fetch_assoc($interest_2_query);
$my_interest_2 = $interest_2_row['interest_2'];

$interest_3_query = mysql_query("SELECT interest_3 FROM search_info WHERE user_id = '$my_id'");
$interest_3_row = mysql_fetch_assoc($interest_3_query);
$my_interest_3 = $interest_3_row['interest_3'];

$major_query = mysql_query("SELECT major FROM search_info WHERE user_id = '$my_id'");
$major_row = mysql_fetch_assoc($major_query);
$my_major = $major_row['major'];

$movie_query = mysql_query("SELECT movie FROM search_info WHERE user_id = '$my_id'");
$movie_row = mysql_fetch_assoc($movie_query);
$my_movie = $movie_row['movie'];

$music_query = mysql_query("SELECT music FROM search_info WHERE user_id = '$my_id'");
$music_row = mysql_fetch_assoc($music_query);
$my_music = $music_row['music'];

$tv_show_query = mysql_query("SELECT tv_show FROM search_info WHERE user_id = '$my_id'");
$tv_show_row = mysql_fetch_assoc($tv_show_query);
$my_tv_show = $tv_show_row['tv_show'];

$sport_query = mysql_query("SELECT sport FROM search_info WHERE user_id = '$my_id'");
$sport_row = mysql_fetch_assoc($sport_query);
$my_sport = $sport_row['sport'];

$state_query = mysql_query("SELECT state FROM search_info WHERE user_id = '$my_id'");
$state_row = mysql_fetch_assoc($state_query);
$my_state = $state_row['state'];


$country_query = mysql_query("SELECT country FROM search_info WHERE user_id = '$my_id'");
$country_row = mysql_fetch_assoc($country_query);
$my_country = $country_row['country'];

$country_query = mysql_query("SELECT country FROM search_info WHERE user_id = '$my_id'");
$country_row = mysql_fetch_assoc($country_query);
$my_country = $country_row['country'];

$country_query = mysql_query("SELECT country FROM search_info WHERE user_id = '$my_id'");
$country_row = mysql_fetch_assoc($country_query);
$my_country = $country_row['country'];

$country_query = mysql_query("SELECT country FROM search_info WHERE user_id = '$my_id'");
$country_row = mysql_fetch_assoc($country_query);
$my_country = $country_row['country'];



?>