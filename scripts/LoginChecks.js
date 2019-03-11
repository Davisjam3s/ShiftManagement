var CodeGen = Math.floor(Math.random() * 9999) + 9999;

function Random4NumberCode() {
	document.write(CodeGen);
}

function LoginCheckColleagueNumber() {
	var inputLengthColleagueNumber = $('#ColleagueNumberLogin').val().length;
	if (inputLengthColleagueNumber != 6) {
		$('#ServerResponse').empty();
		$('#ServerResponse').append("Your Colleague Number should be 6 digets");
		$('#ColleagueNumberLogin').val('');
	} else {
		$('#ServerResponse').empty();
		$('#LoginGenCode').show();
		$('#ColleagueCodeRandom').show();
		$('#ColleagueNumberLogin').prop("disabled", true);
		$('.ColleagueNumberLoginNoCode').hide();
		$('.ColleagueNumberLoginWithCode').show();
	}
}

function LoginCheckGenCode() {
	var UserCodeInput = $('#ColleagueCodeRandom').val();
	if (UserCodeInput == CodeGen) {
		$('#ServerResponse').empty();
		$('#LoginGenCode').hide();
		$('#ColleagueCodeRandom').hide();
		$('#ColleagueNumberLogin').hide();
		$('.ColleagueNumberLoginNoCode').hide();
		$('.ColleagueNumberLoginWithCode').hide();
		LoginColleague();
	} else {
		$('#ServerResponse').empty();
		$('#ServerResponse').append("Your Codes do not match, please try again");
	}
}
$(document).ready(function() {
	$(".ColleagueNumberLoginNoCode").click(function() {
		LoginCheckColleagueNumber();
	});
});
$(document).ready(function() {
	$(".ColleagueNumberLoginWithCode").click(function() {
		LoginCheckGenCode();
	});
});

function LoginColleague() {
	var val1 = $('#ColleagueNumberLogin').val();
	//alert (val1);
	$.ajax ({
		type:'post',
		url: 'LoginColleague.php',
		data: {NumberLogin:val1},
		success: function(response){
			if (response == 1) {
				alert('this user does not exist');
				$('#ColleagueNumberLogin').show().prop("disabled",false);
				$('.ColleagueNumberLoginWithCode').show();
				$('.SessionStuff').load('session.php');
			}else{
				//$('.LoginForm').html(response);
				$(location).attr('href', 'shifts.php')
			}
		}
	});
}
