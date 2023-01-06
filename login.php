<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['login_user'] =$_POST['user_name'];
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: userhome.php");
						die;
					}
				}
			}
			
			echo "<script>alert('Please input valid information');
			</script>";
		}else
		{
			echo "<script>alert('Wrong username or password!');
			</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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

.button{
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
		.active{
			font-size: 0;
			width: 50px;
			height: 50px;
			border-radius: 50%;
			border-left-color: transparent;
			animation: rotate 5.4s ease 0.5s infinite;
		}
		@keyframes rotate{
			0%{
				transform: rotate(360deg);
			}
		}

		.success{
			position: relative;
			background-color: #fff;
			animation: bounce 5.3s ease-in;
		}
		@keyframes bounce{
			0%{
				transform: scale(0.9);
			}
		}
		.success:before{
			content: '';
			position: absolute;
			background: url(check-solid.svg) no-repeat; 
			left: 0;
			right: 0;
			margin: 0 auto;
			width: 31px;
			height: 31px;
			line-height: 31px;
			top: 8px;
		}
.logo img{

width: 120px;
top: 3%;
left: 45%;
position: absolute;
}

	</style>
	
				<div class="logo">
						<a href="index.php">
						<img src="logo.jpg"></a>
					</div>
	<div class="container">
	<div class="header">
		<h2>User Login</h2>
	</div>
	<form id="formstaff" class="formstaff" method ="post">
    <div class="form-controlstaff ">

			<label for="user_name" required>Username</label>
			<input type="text" placeholder="Username" name="user_name" />
		</div>
		<div class="form-controlstaff ">

			<label for="password" required>Password</label>
			<input type="password" placeholder="Password" name="password"/>

		</div>
        
		<center><button class="button">Login</button></center>
        <br>
        <br>
        Doesn't Have an account?<a href="signup.php"> Register Now!</a>
	</form>
</div>


<!-- Jquery CDN Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
	
$(document).ready(function(){
	$(".button").click(function(){
		$(this).addClass("active");


	
		setTimeout(function(){
			$(".button").addClass("success");
		}, 5000);

	
		setTimeout(function(){
			$(".button").removeClass("active");
			$(".button").removeClass("success");
		}, 5000);
	});
});

</script>
</body>
</html>