function sendOTP() {

	$(".error").html("").hide();
	var number = $("#mobile").val();



	if (number.length == 10 && number != null) {
		var input = {
			"mobile_number" : number,
			"action" : "send_otp"
		};
		$.ajax({
			url : 'controller.php',
			type : 'POST',
			data : input,
			success : function(response) {


				$(".container").html(response);
			}
		});
	} else {
		$(".error").html('Please enter a valid number!')
		$(".error").show();
	}
}


function sendOTPreg(){


$(".error").html("").hide();
	var number = $("#mobile").val();
	var name = $("#name").val();
	var email = $("#email").val();
	var referal = $("#referal").val();
	
	if (number.length == 10 && number != null ) {
		var input = {
			"mobile_number" : number,
			"name" : name,
			"email" : email,
			"referal" : referal,
			"action" : "send_otpregister"
		};



		$.ajax({
			url : 'controller.php',
			type : 'POST',
			data : input,
			success : function(response) {
		
				$(".container").html(response);
			}
		});
	} else {

		alert("error response");
				
		$(".error").html('Please enter a valid number!')
		$(".error").show();
	}

}

function verifyOTP() {

	$(".error").html("").hide();
	$(".success").html("").hide();
	var otp = $("#mobileOtp").val();


	var input = {
		"otp" : otp,
		"action" : "verify_otp"
	};

	

	if (otp.length == 4 && otp != null && otp == '0000' ) {
		$.ajax({
			url : 'controller.php',
			type : 'POST',
			dataType : "json",
			data : input,	
			success : function(response) {
				return false;
			window.location.replace("index.php");
			},
			error : function() {
				return false;
				alert("success");
				window.location.replace("index.php");
			}
		
		});
	} else {
		$(".error").html('You have entered wrong OTP.')
		$(".error").show();
	}

}


function validInput(e) {
  e = (e) ? e : window.event;
  a = document.getElementById('mobile');
  // b = document.getElementById('mobile');
  cPress = (e.which) ? e.which : e.keyCode;

  if (cPress > 31 && (cPress < 48 || cPress > 57)) {
    return false;
  } else if (a.value.length >= 10) {
    return false;
  }

  return true;
}	
