<?php require 'connection.php'; ?>
<?php require 'Session.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	function logoutColleage() {
		$(location).attr('href', 'Logout.php')
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Logged in</title>
	<style>
		.NavagationItem{
			cursor: pointer;
			text-align: center;
			list-style-type: none;
		}
		.NavagationItem:hover{
			background-color: red;
		}
		

	</style>
</head>
<body>
	<ul>
		<li class="NavagationItem">Home</li>
		<li class="NavagationItem">Your Shifts</li>
		<li class="NavagationItem">Store Rota</li>
		<li class="NavagationItem">Shift Prefrences</li>
		<li class="NavagationItem">Holidays</li>
		<li class="NavagationItem">break Times</li>
		<li class="NavagationItem">Pay days</li>
		<li class="NavagationItem">Whats new</li>
		<li class="NavagationItem">Feedback</li>
		<li class="NavagationItem" onclick="logoutColleage();">Logout</li>

	</ul>
<?php echo "Welcome $Session_FirstName $Session_Lastname"; ?>
<?php require 'ShowColleagues.php'; ?>


</body>
</html>