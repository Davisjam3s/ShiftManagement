<?php 
session_start(); 
if (isset($_SESSION['ColleagueID'])){
	$Session_ColleagueID = $_SESSION["ColleagueID"]; 
	$Session_FirstName = $_SESSION["ColleagueFirstName"]; 
	$Session_MiddleName = $_SESSION['ColleagueMiddleName']; 
	$Session_Lastname= $_SESSION["ColleagueLastName"];
	$Session_DOB= $_SESSION["ColleagueDOB"];
	$Session_ColleagueHours= $_SESSION["ColleagueHours"];
	$Session_SectionName= $_SESSION["SectionName"];
	$Session_PayRate= $_SESSION["PayRate"];

	//echo "$Session_ColleagueID $Session_FirstName $Session_MiddleName $Session_Lastname $Session_DOB $Session_ColleagueHours $Session_SectionName $Session_PayRate ";
	//echo "Welcome $Session_FirstName $Session_Lastname";
	//echo "<button id='LogoutColleague'>Logout</button>";
	//header('location: shifts.php')

}else{ //if they are not logged in then go to the home page, we dont want users accsessing a page if they are not logged in

	header('location: index.php');
}
?>