<?php require 'connection.php'; ?>
<?php require 'CheckSession.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>shifts 2</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="scripts/LoginChecks.js"></script>
	<style type="text/css">
		.LoginForm, .ClockInForm{
			padding: 10px;
			background: #ff69b4;
			text-align: center;
			font-family: cursive;
		}
		td{
			text-align: center;
		}
		body
		{
		background-image: url("back1.jpg");
		}
		.MainMenuBackGround{
			background-color: black;
    		position: absolute;
    		width: 50vmin;
    		height: 25vmin;
    		top: 50%;
    		left: 50%;
    		transform: translate(-50%, -50%);
    		opacity: 0.3;
    		color: black;
		}
		.MainMenu{
			position: absolute;
    		width: 50vmin;
    		height: 25vmin;
    		top: 50%;
    		left: 50%;
    		transform: translate(-50%, -50%);
		}
		.MainMenuItem, #MainMenuItem{
			width: 50%;
			float: left;
			height: 50%;
			text-align: center;
			line-height: 100px;
			-webkit-box-shadow:inset 0px 0px 0px 2px black;
   			-moz-box-shadow:inset 0px 0px 0px 2px black;
    		box-shadow:inset 0px 0px 0px 2px black;
    		cursor: pointer;
		}
		.MainMenuItem:hover{
			background-color: black;
			color: white;
		}
	</style>
	<script>
		$(document).ready(function() {
		$("#LoginButton").click(function() {
		$('#ColleagueNumberLogin').show();
		$('.MainMenuItem').hide();
		$('.ColleagueNumberLoginNoCode').show();
		});
	});
		$(document).ready(function() {
		$("#ClockInButton").click(function() {
		$('#ColleagueNumberClockIn').show();
		$('.MainMenuItem').hide();
		$('#ClockInConfirm').show();
		});
	});
	
	</script>
	



</head>
<body>
	<div id="menuContainerBackGround" class="MainMenuBackGround"></div>
	<div class="MainMenu">

		<div  id="LoginButton" class="MainMenuItem">login</div>
			<input type="Number" hidden="true" class="" id="ColleagueNumberLogin" class="" placeholder="Colleague Number">
			<input type="Number" hidden="true" class="" id="ColleagueCodeRandom" placeholder="Enter Code">
			<span id="LoginGenCode" hidden="true"><script>Random4NumberCode();</script></span>
			<button  hidden='true' id='MainMenuItem'class="ColleagueNumberLoginNoCode">Login</button>
			<button hidden="true" class="ColleagueNumberLoginWithCode">Login</button>
			<span class="" id="ServerResponse"></span>

		<div id="ClockInButton" class="MainMenuItem">Clock in</div>
			<input type="Number" hidden="true" id="ColleagueNumberClockIn" placeholder="Colleague Number">
			<button hidden="true" id="ClockInConfirm" onclick="">Clock</button>

		<div class="MainMenuItem">Need Help</div>
		<div class="MainMenuItem">Whats New</div>
	</div>
<div class="sqlres"></div>
</body>
</html>