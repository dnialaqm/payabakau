<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content ="with=device-width , initial-scale=1.0">
<title>PyW E-Ticketing System</title>
<link href="css/espi.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script type = "text/javascript" src="javadata.js"></script> 
 
</head>
<style>
	
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


 th{
    padding: 1rem 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    font-size: 0.7rem;
    background-color:  grey;
}

 thead{
    box-shadow:0 5px 10px 0 grey;
}

 td{
    padding: 1rem 1rem;
    font-size: 0.7rem;
    background-color: whitesmoke;
}

 a{
    text-decoration: none;
}
	.btn{
        background-color:grey;
		width:40px;
		text-align:center;
	}
	.btn-info{
		border-radius:30px;
		width:70px;
		height:30px;

		background-color:green;
		color:black;
	}
	.btn2-info{
        background-color:black;
		width:40px;
		height:30px;
		top:260%;
		border-radius:10px;
		right:4%;
		position:absolute;
		text-align:center;
	}
	
	.btn-danger{
		width:70px;
		height:30px;

		color:black;
		border-radius:30px;

		background-color:crimson;
	
	}
	.btn:hover,.btnn:hover,.btnbook:hover{
	border :1px solid #f44336;
	background : transparent;
	transition:1s;
}
	h1{
	font-size: 36px;
	font-weight:600;
	margin: 30px;
}
	h2{
		text-align:center;
	}
        tr:nth-child(even){background-color: #f2f2f2;}
    </style>
<body>
			<!-- -----------------HEADER ------------------------------------->

	<div class="bar">
					
			<nav>
					<div class="logo">
						<a href="../grp assignment/tasty/index.html">
						<img src="../grp assignment/tasty/logo.jpg"></a>
					</div>
				<div class ="link">
				<ul>
					<li><a href ="index.php">Home</a></li>
					<li><a href ="aboutus.html">About Us</a></li>
					<li><a href ="attraction.html">Attractions</a></li>
					<li><a href ="gallery.html">Gallery</a></li>
					<li><a href ="contactus.html">Contact Us</a></li>
					
				</ul>
				</div>
			</nav>
		</div>
	<br>
			<br>	<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

			<?php 

include("connection.php");
include("functions.php");
include("configuration.php");
//write the query to get data from users table

$sql = "SELECT * FROM users";
$sql2 = "SELECT * FROM package";
//execute the query

$result = $conn->query($sql);
$result2 = $conn->query($sql2);


?>

	<div class="container">
		<h1>User Details</h1>
	
	<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>IC Number</th>
		<th>Email Address</th>
		<th>Phone Number</th>
		<th>Username</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['ic']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['user_name']; ?></td>
					<td><a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
					<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        
	</tbody>
</table></form>
	</div>
	<br><br><br>
	<div class="container">
		
		<td><a class="btn btn2-info" href="add.php">+</a>&nbsp;
			</td>
	<table class="table">
	<thead>
	<h1>Package Details</h1>
		<tr>
		<th >Package Type</th>
		<th >Membership Price</th>
		<th>Non-member Price</th>
		<th>Activities</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result2->num_rows > 0) {
				//output data of each row
				while ($row = $result2->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['packagetype']; ?></td>
					<td><?php echo $row['memberprice']; ?></td>
					<td><?php echo $row['nonmemberprice']; ?></td>
					<td><?php echo $row['activity']; ?></td>
			
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table></form>
	</div>

</body>
</html>
		<section class="photo" id="photo">
			<h1 class="topic">User Database</h1>
			  <br><br></section>
	<br>
			<br>
			<br>
			<br><br>
			<br>
			<br>
			<br>
				<!-- -----------------PACKAGES ------------------------------------->
<!--<div class ="Data">
					  		<center><h1>User Database</h1>
<br>
			<button onClick="get()">Check</button>
</center>
				<p id = "openedData"></p>
	</div>
	<script>

	</script>	-->
	<br><br>
			
			<br>
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