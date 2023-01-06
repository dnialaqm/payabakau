<?php 
session_start();

	include("connection.php");
	include("functions.php");
    include("configuration.php");
?>  
  <!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content ="with=device-width , initial-scale=1.0">
<title>PyW E-Ticketing System</title>
<link href="css/espi.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			top:170%;
			left:50%;
			transform:translate(-50%,-50%);
		}
	 .img-text h2{
		 font-size:50px;
		 margin:0;
		 font-family:montserrat;
		 letter-spacing:3px;
	 }
	 .img-wrapper{
		 width:350px;
		 height:300px;
		 box-shadow:0 40px 20px rgba(0,0,0,0.5)
	 }
	 .img-area img{
		 width:100%;
	 }
	 .img-text{
		 text-align:center;
		 color:#fff;
		 background:#252525;
		 padding:24px;
		 margin-top:-5px;
	 }
	 .img-text p{
		 font-family:merienda;
		 
	 }
	 table{
    position: relative;
    border-collapse: collapse;
    text-align: left;
    overflow: hidden;
    font-family:   montserrat;
    justify-content: left;
    align-items: center;
    margin-left: 2%;
    margin-right: 2%;
    margin-top: 10px;
}


table th{
    padding: 1rem 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    font-size: 0.7rem;
    background-color:  grey;
}

table thead{
    box-shadow:0 5px 10px 0 grey;
}

table td{
    padding: 1rem 2rem;
    font-size: 0.7rem;
    background-color: whitesmoke;
}

table a{
    text-decoration: none;
}
	 #bio h1{
  text-align:center;
	 }
	</style>
</head>

<body>
			<!-- -----------------HEADER ------------------------------------->

	<div class="header">
					
			<nav>
					<div class="logo">
						<a href="userpage.php">
						<img src="logo.jpg"></a>
					</div>
				<div class ="link" id="link">
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
	<br>
			<br>
			<br>
			<br>

		<section class="home" id="home">
	 <h1 class="heading">PyW E-Ticketing System</h1>
				<p>Everything is in the tip of your finger now. Grab your ticket in instant!</p>
				<a href ="booking.php" class="btnbook">Book Now!</a>
				<a href ="logout.php" class="login">Logout</a>
			  <br><br></section>
	



              <section id="kotak3nyah">
	<table class="table1">
        <h1>Sales Forecast</h1>
        
			<br>
			<br>
	<thead>
		<tr>
		<th>Name</th>
		<th>Username</th>
		<th> Package</th>
		<th>Total</th>
	</tr>
	</thead>
	<tbody>	
		

					

<?php

$sql = "SELECT * FROM users";
$sql4 = "SELECT * FROM booking ";
//execute the query

//write the query to get data from users table
$sql4 = "SELECT users.name,users.user_name,booking.package,booking.total FROM users,booking WHERE users.user_name = booking.bookname";
		$result4 = $conn->query($sql4);
		
		if ($result4->num_rows > 0) {
			// output data of each row
			while($row = $result4->fetch_assoc()) {
		?>

	
<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['package']; ?></td>
					<td><?php echo $row['total']; ?></td>
				
					</tr>	
	
	<?php
	}}

	else {
		echo "0 results";
	}?>
    </section>
    	<br>
	<br>
	<br>	<br>
	<br>
	<br>	<br>
	<br>	<br>
	<br>
	<br>	<br>
	<br>
	<br>	<br>
	<br>
	

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