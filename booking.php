<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$date = $_POST['date'];
		$time = $_POST['time'];
		$package = $_POST['package'];
		$membership = $_POST['membership'];
		$total = $_POST['total'];
		$bookname = $_POST['bookname'];


		if(!empty($date) && !empty($time) && !empty($package))
		{
			
			//save to database
			$query = "insert into booking (bookname,date,time,package,membership,total) values ('$bookname','$date','$time','$package','$membership','$total')";
			mysqli_query($con, $query);
			echo '<script>alert("----------Receipt----------  \nUsername '.$bookname.' , \nDate:'.$date.' , \nTime: '.$time.', \nPackage:'.$package.',\nMembership:'.$membership.',\nTotal Price :'.$total.'")</script>';
			
			}
		else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content ="with=device-width , initial-scale=1.0">
<title>PyW E-Ticketing System</title>
<link href="css/espi.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
 <script>



// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
// Defining a function to validate form 
function validateForm() {
	var package = document.contactForm.package.value;
	var membership = document.contactForm.membership.value;

		var total=0;
 if(package == "Free"){
 total = 0;
 }
  if(package == "A" ){
total =130;
if (membership =="Yes"){
	total = total - (total * 0.05);
}

 }
 if(package == "B" ){
total =140;
if (membership =="Yes"){
	total = total - (total * 0.05);
}

 }
 if(package == "C" ){
total =125;
if (membership =="Yes"){
	total = total - (total * 0.05);
}

 }
 if(package == "D" ){
total =235;
if (membership =="Yes"){
	total = total - (total * 0.05);
}

 }
 if(package == "E" ){
total =245;
if (membership =="Yes"){
	total = total - (total * 0.05);
}

 }
 if(package == "F" ){
total =245;
if (membership =="Yes"){
	total = total - (total * 0.05);
}

 }

document.getElementById('total').value ="RM"+ total;

}
</script>
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
	<br>
			<br>
			<br>
			<br>

		<section class="photo" id="photo">
			<h1 class="topic">Booking Section</h1>
			  <br><br></section>
	<br>
			<br>
		
			<br>
				<!-- -----------------PACKAGES ------------------------------------->
<section class="packag">
	<h1>Packages Available</h1>
	<br>
			<br>
	<div class="row">
  <div class="column">
    <div class="card">
    <h3>Free Package</h3>
		<br>
		<ul><li>Hippopotamus feeding at Kolam Hippo</li>
<li>Crocodile feeding at Kolam Buaya</li>
<li>Jungle trekking at Recreational Zone </li>
<li>Bird watching at Recreational Zone</li>
<li>Observation tower</li>
<li>Bamboo groves</li>
<li>Picnic sites</li>
<li>Cultural activities at Terengganu Malay House</li>
		</ul>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Package A (RM130)</h3>
				<br>
<ul><li>Hippopotamus feeding at Kolam Hippo </li>
<li>Crocodile feeding at Kolam Buaya</li>
<li>4WD Night Safari</li>
<li>Fish feeding at Kolam Ekologi</li>
	<br>	<br>	<br>	<br>		<br>	<br>	<br>
		</ul>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Package B (RM140)</h3>
				<br>
<ul><li>Jungle trekking at Recreational Zone</li>
<li>Swamp trekking guided tour</li>
<li>Kayak and paddleboat rental at Tasik Teratai/Tasik Sendayan </li>
<li>Bicycle rental at Recreational Zone</li>
	<br>	<br>	<br>		<br>	<br>	<br>		</ul>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Package C (RM125)</h3>
				<br>
<ul><li>Bird watching at Recreational Zone</li>
<li>Bamboo groves</li>
<li>Bird watching guided tour</li>
<li>Bicycle rental at Recreational Zone</li>
	<br>	<br>	<br>	<br>		<br>	<br>	<br></ul>
    </div>
  </div>
			<br>	<br>	<br>	<br>

	</div> 
	<div class ="space"></div>
	<div class="row"><center>
	  <div class="column">
    <div class="card">
      <h3>Package D (RM145)</h3>
				<br>
<ul><li>Fish feeding at Kolam Ekologi </li>
<li>Fishing/angling at Tasik Typha</li>
<li>4WD Night Safari</li>
<li>Hippopotamus feeding at Kolam Hippo</li>
<li>Crocodile feeding at Kolam Buaya </li>
		<br>	<br>	<br>
		</ul>
    </div>
  </div>
	  
	  <div class="column">
    <div class="card">
      <h3>Package E (School edition)</h3>
				<br>
<ul><li>Biodiversity Education Program</li>
<li>Nature trail guided tour (all 3 zones) </li>
<li>Cultural activities at Terengganu Malay House</li>
<li>Bamboo groves</li>
<li>Bird watching at Recreational Zone</li>
		
		</ul>
    </div>
  </div>
	  
	  <div class="column">
    <div class="card">
      <h3>Package F (max 10 people) (RM245)</h3>
				<br>
<ul><li>Photography guided tour</li>
<li>Nature trail guided tour (all 3 zones) </li>
<li>Observation tower</li>
<li>Cultural activities at Terengganu Malay House</li>
<li>Bird watching at Recreational Zone</li>
		<br>	
</ul>
    </div>
		</div></center>
			</div> 
			<br><br><br><br><br>
	</section>


			<!-- -----------------ABOUT ------------------------------------->
			<h1>Booking Section</h1>

	<section class = "info"  >
	<div class ="jadual">
			<h2 class ="table">Time Open</h2>
			<h3 class= "days">Monday- Sunday</h3>
			<p>7.30am – 7.00pm</p>
		<br>
			<h3 class= "days">Friday</h3>
		<br>

		<p>	7.30 am – 12.00 pm </p>
		<p>2.45 pm – 7.00 pm</p>
		<br>
	
		<hr size = "2" width = "250px" align ="center">		<br>
	<h4 class ="phone" > Call us : +603 8768 7616 / +603 8768 8726</h4>
		</div>
		
<form name="contactForm" method="post">
<center><h2>Online Ticket</h2>
<h4>Please choose your Date, Time and Package for Ticket Booking</h4></center>
<div class="row">
        <label><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em>Username</label>
  <em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em> <input type="text" name="bookname" placeholder="Enter the same username as registered">
        <div class="error" id="dateErr"></div>
    </div>
	 <div class="row">
        <label><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em>Date</label>
       <em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em> <input type="date" name="date" value="date">
        <div class="error" id="dateErr"></div>
    </div>
	 <div class="row">
        <label><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em>Time</label>
       <em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em> <em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><input type="time" name="time" value="time">
        <div class="error" id="timeErr"></div>
    </div>
    <div class="row">
        <label><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em>Package</label>
     
		<div class ="row">
			<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp; <em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp; <em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;	<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;
				<select id="package" name="package"  name="package">
	
<option value="Select">Select</option>
            <option value="Free">Free Package</option>
            <option value="A">Package A</option>
            <option value="B">Package B</option>
            <option value="C">Package C</option>
			<option value="D">Package D</option>
            <option value="E">Package E</option>
            <option value="F">Package F</option>

</select> </div>
        <div class="error" id="packageErr"></div>
    </div>
	<div class="row">
	<label><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em>Membership: </label>
	<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;
  <input type="radio" name="membership"  value="Yes" ></input>Member
<input type="radio" name="membership"  value="No" ></input>Non-Member

	</div>
<div class="row">
<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;

</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;
<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;

</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;

</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;
	<input type="text" name="total" id="total"></em><em>&nbsp;</em><em>&nbsp;
	<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;<em>&nbsp;</em><em>&nbsp;
	<button type ="button" onclick=" validateForm();">Confirm Price ?</button>
</div>
<br>

    <div class="row">
       <em>&nbsp;</em><em>&nbsp;

	   </em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;
		   
	   </em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em><em>&nbsp;</em>
	    <input type="submit" value="Receipt">
    </div>	
		
</form>
	
	
	</section>
				<!-- -----------------BOOKING SECTION ------------------------------------->
<br><br><br><br><br><br><br><br><br><br>
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
					<a href="biodatagroup.html" style="color:maroon;"  class="fa fa-users"></a>
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