<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content ="with=device-width , initial-scale=1.0">
<title>PyW E-Ticketing System</title>
<link href="css/espi.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}
	
	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}
	

	thead{
		background-color:darkslategray;
		color:white;
	}
  .container{
    margin-left:40px;
	align-content:center;
	justify-content:center;
  }
  .btn{
        background-color:grey;
		width:70px;
		text-align:center;
		justify-content:center;
	}
	.btn-info{
		border-radius:10px;
		justify-content:center;
		width:150px;
text:bold;
		background-color:crimson;
		color:black;
	}
.btn-info:hover{
	border :1px solid black;
	background : black;
	transition:1s;
}
  }
	</style>
<body>
			<!-- -----------------HEADER ------------------------------------->

	<div class="bar">
					
			<nav>
					<div class="logo">
						<a href="index.php">
						<img src="logo.jpg"></a>
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
			<br>
			<br>
			<br>

		<section class="photo" id="photo">
			<h1 class="topic">Add Package </h1>
			  <br><br></section>
		
			<!-- -----------------ABOUT ------------------------------------->

	
            <?php 
            session_start();
            
                include("connection.php");
                include("functions.php");
            
            
            ?>
		

</div>

<div id="main">
 
  <div class="container">
    <center>
    <form class="pakej"  method="post">
        <div class="row">
      Package Type <input type="text" name="packagetype" class="form-control" placeholder="Package Type" required="">
</div>
<div class="row">
<label for="memberprice" required>Member Price</label>

        <input type="text" name="memberprice" class="form-control" placeholder="Memberprice" required=""><br>
        </div>
        <div class="row">
        <label for="nonmemberprice" required>Non-Member Price</label>

         <input type="text" name="nonmemberprice" class="form-control" placeholder="Non-memberprice" required=""><br>
         </div>
         <div class="row">
         <label for="activity" required>Activity</label>

         <input type="text" name="activity" class="form-control" placeholder="Activity" required=""><br>
         </div>
       <center> <button  class="btn btn-info" type="submit" name="submit"><b>ADD</b></button></center>
    </form>
  </div>
  </center>

<?php
    if(isset($_POST['submit']))
    {
      
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$packagetype = $_POST['packagetype'];
		$memberprice = $_POST['memberprice'];
		$nonmemberprice = $_POST['nonmemberprice'];
		$activity = $_POST['activity'];

    if(!empty($packagetype) && !empty($memberprice) &&  !empty($nonmemberprice) && !empty($activity))
		{

    $query = "insert into package (packagetype,memberprice,nonmemberprice,activity) values ('$packagetype','$memberprice','$nonmemberprice','$activity')";
    mysqli_query($con, $query);    
        ?>
          <script type="text/javascript">
            alert("Package Added Successfully.");
          </script>

        <?php

      }}
      else
      {
        ?>
          <script type="text/javascript">
            alert("Process Failed.");
          </script>
        <?php
      }
    }
?>

</div>
	<br>	<br>
	<br>
	<br>	<br>
	<br>
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

				