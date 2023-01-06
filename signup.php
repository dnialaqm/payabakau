<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$ic = $_POST['ic'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$passVerify = $_POST['passVerify'];




        if(!empty($user_name) && !empty($password) &&  !empty($passVerify) && !is_numeric($user_name) && !empty($name) && !empty($ic) && !empty($email) && !empty($phone) && ($password == $passVerify))		{
			$checkemail = mysqli_query($con, "SELECT * FROM users where email= '$email' ");
			$checkusername = mysqli_query($con, "SELECT * FROM users where user_name= '$user_name' ");

			if(mysqli_num_rows($checkemail)>0){
	
				echo "<script>alert('Email Has been registered, Try again');
				</script>";
		
		}
		else if(mysqli_num_rows($checkusername)>0){
	
			echo "<script>alert('Username Has been registered, Try again');
			</script>";
	
	}	else{
			//save to database
			$user_id = random_num(4);
			$query = "insert into users (user_id,user_name,password,name,ic,email,phone,passVerify) values ('$user_id','$user_name','$password' ,'$name' , '$ic', '$email', '$phone','$passVerify')";	
			mysqli_query($con, $query);
			echo "<script>alert('CONGRATULATIONS! YOU HAVE REGISTERED');
			window.location='login.php'</script>";
			die;
		}
		}else
		{
			echo "<script>alert('Please input valid information');
			</script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');

* {
	box-sizing: border-box;
}

body {
	background:linear-gradient( rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("gmbr.jpg");
	font-family: 'Open Sans', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	margin: 0;
}

.container {
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	width: 400px;
	max-width: 100%;
}

.header {
	border-bottom: 1px solid #f0f0f0;
	background-color: #f7f7f7;
	padding: 20px 40px;
}

.header h2 {
	margin: 0;
}

.formstaff {
	padding: 30px 40px;	
}

.form-controlstaff {
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
}

.form-controlstaff label {
	display: inline-block;
	margin-bottom: 5px;
}

.form-controlstaff input {
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}

.form-controlstaff input:focus {
	outline: 0;
	border-color: #777;
}

.form-controlstaff.success input {
	border-color: #2ecc71;
}

.form-controlstaff.error input {
	border-color: #e74c3c;
}

.form-controlstaff i {
	visibility: hidden;
	position: absolute;
	top: 40px;
	right: 10px;
}

.form-controlstaff.success i.fa-check {
	color: #2ecc71;
	visibility: visible;
}

.form-controlstaff.error i.fa-exclamation {
	color: #e74c3c;
	visibility: visible;
}

.form-controlstaff small {
	color: #e74c3c;
	position: absolute;
	bottom: 0;
	left: 0;
	visibility: hidden;
}

.form-controlstaff.error small {
	visibility: visible;
}

input[type = submit] {
	background-color: dimgray;
	border: 2px solid dimgray;
	border-radius: 4px;
	color: #fff;
	display: block;
	font-family: inherit;
	font-size: 16px;
	padding: 10px;
	margin-top: 20px;
	width: 100%;
}


	</style>

		
<div class="container">
	<div class="header">
		<h2>User Registration</h2>
	</div>
	<form id="formstaff" class="formstaff" method ="post">
  
        <div class="form-controlstaff ">

			<label for="name" required>Name</label>
			<input type="name" placeholder="Full Name" name="name"/>

		</div>
		 <div class="form-controlstaff ">

			<label for="ic" required>IC Number</label>
			<input type="ic" placeholder="xxxxxx-xx-xxxx" name="ic"/>

		</div>		
         <div class="form-controlstaff ">

			<label for="email" required>Email Address</label>
			<input type="email" placeholder="Email" name="email"/>

		</div>

		       <div class="form-controlstaff ">

			<label for="phone" required>Phone Number</label>
			<input type="phone" placeholder="Phone Number" name="phone"/>

		</div>
		  <div class="form-controlstaff ">

			<label for="user_name" required>Username</label>
			<input type="text" placeholder="Username" name="user_name" />
		</div>
		<div class="form-controlstaff ">

			<label for="password" required>Password</label>
			<input type="password" placeholder="Password" name="password"/>

		</div>
			<div class="form-controlstaff ">

			<label for="passVerify" required>Password Verification</label>
			<input type="password" placeholder="Verification" name="passVerify"/>

		</div>
		<input type ="submit" value="Register" >
        <br>
        Already Have an account?<a href="login.php"> Login Now!</a>
	</form>
	</div>
</body>
</html>