<?php 
session_start(); 
if (isset($_SESSION['ColleagueID'])){
	header('location: shifts.php');

}else{ //if they are not logged in then go to the home page, we dont want users accsessing a page if they are not logged in

	echo '';
}
?>