<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content ="with=device-width , initial-scale=1.0">
<title>PyW E-Ticketing System</title>
<link href="css/espi.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
		$(function(){
			$('.img-wrapper').hover(function(){
				$(this).find('.img-text').slideDown(200);

			},function(){
				$(this).find('.img-text').slideUp(200);
			});
		})
	</script>
<style>
		
		.wrapper{
			position:absolute;
			top:60%;
			left:10%;
		}
	 .img-text h2{
		 font-size:20px;
		 margin:0;
		 font-family:montserrat;
		 letter-spacing:3px;
	 }
	 .img-wrapper{
		 width:350px;
		 height:300px;
		 box-shadow:0 40px 20px rgba(0,0,0,0.5)
	 }
	 .img-area {
		 width:100%;
		 text-align:center;
	 }
	 .img-area img{
		 width:100%;
		 text-align:center;
	 }
	  .profile h1{
		top:65%;
	left:45%;
	position: absolute;
	 }
	 .img-text{
		 text-align:center;
		 color:#fff;
		 background:#252525;
		 padding:24px;
		 margin-bottom:-5px;
	 }
	 .img-text p{
		 font-family:merienda;
		 
	 }
	 #bio h1{
  text-align:center;
	 }
	 .butang{
		display:inline-flex;
	text-decoration: none;
	color:white;
	border:1px solid #fff;
	font-size:13px;
	padding-top: 10px;
	justify-content: center;
	width:13%;
	top:70%;
	left:40%;
	position: absolute;
	height:30px;
	background-color:brown;
	cursor:pointer;
	}
.butang:hover{
	border :1px solid #f44336;
	background : #f44336;
	transition:1s;
}
.fa-user{
	font-size:200px;
	justify-content:space-between;
	top:0%;
	left:27%;
	position: absolute;
}
.btn3-info{
		display:inline-flex;
	text-decoration: none;
	color:white;
	text-align:center;
	border:1px solid #fff;
	font-size:13px;
	padding-top: 10px;
	justify-content: center;
	width:96%;

	height:30px;
	background-color:brown;
	cursor:pointer;
	}
.btn3-info:hover{
	border :1px solid #f44336;
	background : #f44336;
	transition:1s;
}
table{
		margin:10px;
        border-collapse:collapse;
        width:45%;
        color:black;
        font-family:monospace;
        font-size:25px;
        text-align:left;
    }
    thead{
        background-color:grey;
        color:white;
    }
table{
	margin-top:270px ;
    margin-left:550px ;
}
	table, tr, td {
  border: 2px solid black;
}
.fa-pencil-square-o{
	color:black;
	top:65%;
	left:82%;
	font-size:40px;
	position: absolute;
}
.table1{
	margin-top:270px ;
    margin-left:0px ;
	width:100%;
}

}

	</style>
</head>

<body>
			<!-- -----------------HEADER ------------------------------------->

	<div class="bar">
					
			<nav>
					<div class="logo">
						<a href="index.html">
						<img src="logo.jpg"></a>
					</div>
				<div class ="link">
				<ul>
				<li><a href ="userhome.php">Home</a></li>
					<li><a href ="aboutus2.html">AboutUs</a></li>
					<li><a href ="attraction2.html">Attractions</a></li>
					<li><a href ="gallery2.html">Gallery</a></li>
					<li><a href ="contactus2.html">ContactUs</a></li>
					<li><a href ="userpage.php">Profile</a></li>

				</ul>
				</div>
			</nav>
		</div>

			
		<section class="photo" id="photo">
			<h1 class="topic">User Details</h1>
			  <br><br></section>
			  <a href ="logout.php" class="login">Logout</a>
			  <br><br></section>

			<!-- -----------------ABOUT ------------------------------------->
<?php
include("connection.php");
include("functions.php");
include("configuration.php");
session_start();

$sql = "SELECT * FROM users";
$sql4 = "SELECT * FROM booking ";
//execute the query



//execute the query
$login_user =$_SESSION['login_user'];
?>
<section id ="kotak1nyah">
					<a class="fa fa-pencil-square-o"  href="useredit.php?user_name=<?php echo $_SESSION['login_user'] ;?>"></a>&nbsp;
 <div class="profile">
			<h1>Profile</h1>
			</div>
			<section id="bio">
		<div class="wrapper">

			<div class="img-wrapper">
				<div class="img-area">
				<i class="fa fa-user" ></i>
					<img src="white.jpg">
				</div>
				<?php

//write the query to get data from users table

$sql = "SELECT * from users where user_name = '$_SESSION[login_user]';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
			<div class="img-text">
				<h2>Welcome back,</h2>
					<h2><?php echo $row['name']; ?></h2>

				</div>
			</div>
		</div>
	</section>

	<table>
		<tr>
			<td>Username</td>
			<td><?php echo $row['user_name']; ?></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><?php echo $row['name']; ?></td>
		</tr>
		<tr>
			<td>IC Number</td>
			<td><?php echo $row['ic']; ?></td>
		</tr>

		<tr>
			<td>Email Address</td>
			<td><?php echo $row['email']; ?></td>

		</tr>

		<tr>
			<td>Phone Number</td>
			<td><?php echo $row['phone']; ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo $row['password']; ?></td>

		</tr>
	</table>
	</section>
	<?php
		
    }
} 
?>



<section id="kotaknyah">
	<table class="table1">
	<thead>
		<tr>
		<th>Username</th>
		<th>Date</th>
		<th> Time</th>
		<th>Membership</th>
		<th>Package</th>
		<th>Total</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		

					
<?php

//write the query to get data from users table
$sql3 = "SELECT users.user_name,booking.date,booking.time,booking.membership,booking.package,booking.total FROM users,booking WHERE users.user_name = booking.bookname and bookname = '$_SESSION[login_user]';";
		$result3 = $conn->query($sql3);
		

		if ($result3->num_rows > 0) {
			// output data of each row
			while($row = $result3->fetch_assoc()) {

				
		?>

<tr>
					<td><?php echo $row['user_name']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['time']; ?></td>
					<td><?php echo $row['membership']; ?></td>
					<td><?php echo $row['package']; ?></td>
					<td><?php echo $row['total']; ?></td>
					<td colspan="1"><a class="btn btn3-info" href="userdelete.php?bookname=<?php echo $row['user_name']; ?>">Cancel Booking</a>&nbsp;</td>

					</tr>	
	
	<?php
	}}

	else {
		echo "0 results";
	}?>

</section>
<br><br><br><br><br></b><br><br><br><br><br></b>

			<!--------------------------------------FOOTER-------------------------------------->
			<section class="footer">
				  	 <center> 
				  		<h1>Follow us on Social Media</h1>

			
					 <br>
					 <div class="socmed"> 
						   <a href="https://www.facebook.com/payaindahwetlands/" class="fa fa-facebook"></a> 
						 <a href="https://www.instagram.com/payaindahdiscoverywetlands/" class="fa fa-instagram"></a>
							<a href="https://www.discoverywetlands.com.my/happenings/" class="fa fa-globe"></a>
					<hr size = "2" width = "1050px" align ="center">
					<a href="biodatagroup.html" style="color:maroon;""  class="fa fa-users"></a>
					<a href="biodatagroup.html"  style="color:maroon; text-decoration: none;"><center>"Group Members"</center></a>

					<h6>2021 PyW Corporation Team</h6>

					<p> 
					</p>
					<h6>Copyright Claimed</h6>
		  			</div>
				</center>
     		 </section>
</body>
</html>