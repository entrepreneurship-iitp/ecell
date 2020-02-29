<!DOCTYPE HTML>
<html>
<head>
    
    <link rel="stylesheet" href="y.css">
</head> 

<?php

    if(isset($_POST['subData'])){
		require('../config.php');
        if($_POST['subData']==="Sign Up"){
            if($_POST['Password']===$_POST['CPassword']){

				$name = $_POST['Name'];
				$password = $_POST['Password'];
				$ref_by = $_POST['RefBy'];
				$college=$_POST['College'];
				$email=$_POST['Email'];

				$check ="SELECT * FROM users WHERE webmail='".$email."'";
        		$confirm=$mysqli->query($check);
       			if($confirm->num_rows > 0){
					echo "Email already registered!";
				}
				
				else
				{
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
					$randomString = ''; 
					for ($i = 0; $i<6; $i++) { 
						$index = rand(0, strlen($characters) - 1); 
						$randomString .= $characters[$index]; 
					}

					$sql ="INSERT INTO users (`refcode`,`name`,`college`, `webmail`,`password`,`ref_by`) VALUES ('$randomString','$name', '$college', '$email', '$password','$ref_by')" ;
					$res=$mysqli->query($sql);
					if(! $res){
						echo $mysqli->error;
					}
					else{
						$subject = "Verification mail from E-Cell IIT Patna";
						$message="Thank you for registring with us. Please click here to activate your account http://www.ecell-iitp.org/verfication.php?code=".$randomString."&email=".$email.".";
						require('../mail.php');
					}
				}
			}
			else
			echo "password and confirm password do not match";
		}
		
        else{

			$email=$_POST['UserEmail'];
			$password=$_POST['PassCode'];

			$sql="SELECT * FROM users WHERE webmail= '".$email."'";
			$res=$mysqli->query($sql);

			if($res->num_rows > 0){

				$row = $res->fetch_assoc();

				if($row['password']==$password){
					session_start();
					$_SESSION['login_user']=$email;
					
					header("Location: /ecell/dashboard/html/dashboard.html");
				}

				else{
					echo "password is incorrect";
				}
			}
			else{
				echo $mysqli->error;
				echo "Given user does not exist";
			}
		}       
    }
    
?>   
    
    
<body>

<div class="login-wrap">
	<div class="login-html">
		<form action="" method="post" > 
		<input id="tab-1" type="radio" name="tab" class="sign-up" name="sign" checked value="up"><label for="tab-2" class="tab">Sign In</label>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">E-Mail</label>
					<input id="user" type="email" class="input" name="UserEmail">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name= "PassCode">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="subData">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
                    <label for="tab-1"><a href="signup.html">Sign Up</a></label>
				</div>
			</div>
			
		</div>
		</form>
	</div>
</div>

</body>
</html>