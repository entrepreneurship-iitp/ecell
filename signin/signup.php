<?php
if(isset($_GET['CA']))
{
	$k = "signin.php?CA=1";
}
else
{
	$k = "signin.php";
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="y.css">
</head>

    
<body>
<div class="login-wrap">
	<div class="login-html">
		<form action="signin.php" method="post" > 
		<input id="tab-1" type="radio" name="tab" class="sign-up" name="sign" checked value="up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Name</label>
					<input id="user" type="text" class="input" name="Name">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="Password">
				</div>
				<div class="group">
					<label for="cpass" class="label">Confirm Password</label>
					<input id="cpass" type="password" class="input" data-type="password" name="CPassword">
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="text" class="input" name="Email">
				</div>
				<div class="group">
					<label for="college" class="label">College</label>
					<input id="college" type="text" class="input" name="College">
				</div>
				<div class="group">
					<label for="pass" class="label">Referral Code</label>
					<input id="pass" type="text" class="input" data-type="text" name="RefBy">
				</div>			
				<div class="group">
					<input type="submit" class="button" value="Sign Up" name="subData">
                </div>
                <div class="hr"></div>
				<div class="foot-lnk">
                    <label for="tab-1"><a href="signin.php">Sign In</a></label>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
    
</body>
</html>