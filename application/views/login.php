<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--==========================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.ico"/>

<!--========================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
<!--==============================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo base_url(); ?>assets/images/avatar.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" id="username" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
						<span class="user_err"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pass" id="password">
						<span class="focus-input100" data-placeholder="Password"></span>
						<span class="pass_err"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
     // alert("data");

		$('#login').click(function () {
			
			var user      = $("#username").val();
      		var pass      = $("#password").val();

      		alert(user)
      		if (user=="" || pass==""){
      			if (user=="") {
            		$(".user_err").text("Agency Name field is required!");
				} else {
					$(".user_err").text("");
				}
				if (pass=="") {
            		$(".pass_err").text("Agency Name field is required!");
				} else {
					$(".pass_err").text("");
				}

      		}
		});
	});
	
</script>