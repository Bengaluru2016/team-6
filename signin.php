<head>
	<title>Rang De</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<!--client side validation-->
	<script type="text/javascript">
		var ck_name = /^[A-Za-z0-9]{3,20}$/;
		var ck_password =  /^[A-Za-z0-9!@#$%^&*()_=+`~,.<>'";:\|]{4,20}$/;
		function validate(form){
			var name = form.fid.value;	
			var password = form.fpwd.value;
			var errors = [];
			if (!ck_name.test(name)) {
				errors[errors.length] = "Username can only be alphanumeric with minimum of 3 and maximum of 20 characters.";
			}
			if (!ck_password.test(password)) {
				errors[errors.length] = "Password must contain a minimum length of 4 and a maximum of 20 characters.";
			}
			if (errors.length > 0) {
				reportErrors(errors);
				return false;
			}			
			return true;
		}
		function reportErrors(errors){
			var msg = "Please Enter Valide Data...\n";
			for (var i = 0; i<errors.length; i++) {
				var numError = i + 1;
				msg += "\n" + numError + ". " + errors[i];
			}
			alert(msg);
		}	
	</script>
</head>
<body>
	<?php if(!isset($_SESSION['user_id'])): ?>
	<!--start-main-->
	<div class="login-form">
		<div class="head">
			<img src="logo.png" alt="Rang De"/>
		</div>
		<form  action="login_submit.php" method="post" onsubmit="return validate(this)" name="form" >
			<li>
				<input type="text" required id = "fid" name = "fid"  class="text" placeholder="Username" >
				<a href="#" class=" icon user"></a>
			</li>
			<li>
				<input type="password" required id="fpwd" name="fpwd" placeholder="Password" >
				<a href="#" class=" icon lock" ></a>
			</li>
			<div class="p-container">								
				<input type="submit"  value="Login" >
				<div class="clear"></div>
			</div>
			<!--<div class="forgot_pwd" id="forgot_pwd" name="forgot_pwd">
				<p id="display"><br> <a href="forgot_pwd_email.php" ><center><u>Forgot Password?</u></center></a> </p>
			</div>-->
		</form>
	</div>
	<!--//End-login-form-->
	<?php else: ?>
		<h2>Logout Here</h2>
		<a href="logout.php">Log Out Link</a>
	<?php endif; ?>
</body>
</html>
