<?php 
include("configuration.php");
include("connection.php");
include("functions.php");

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
		$name = $_POST['name'];
		$ic = $_POST['ic'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];


		// write the update query
		$sql = "UPDATE `users` SET `name`='$name',`ic`='$ic',`email`='$email',`phone`='$phone',`user_name`='$user_name' WHERE `id`='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "<script>alert('Record updated successfully.');
        window.location='database.php'</script>";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$ic = $row['ic'];
			$email = $row['email'];
			$phone  = $row['phone'];
            $user_name  = $row['user_name'];

			$id = $row['id'];
		}

	?>
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
		<h2>Update Information</h2>
	</div>
	<form id="formstaff" class="formstaff" method ="post">
  
        <div class="form-controlstaff ">

			<label for="name" required>Name</label>
			<input type="name" placeholder="Full Name" name="name" value="<?php echo $name; ?>"/>
		    <input type="hidden" name="user_id" value="<?php echo $id; ?>">

		</div>
		 <div class="form-controlstaff ">

			<label for="ic" required>IC Number</label>
			<input type="ic" placeholder="xxxxxx-xx-xxxx" name="ic" value="<?php echo $ic; ?>"/>

		</div>		
         <div class="form-controlstaff ">

			<label for="email" required>Email Address</label>
			<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"/>

		</div>

		       <div class="form-controlstaff ">

			<label for="phone" required>Phone Number</label>
			<input type="phone" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>"/>

		</div>
		  <div class="form-controlstaff ">

			<label for="user_name" required>Username</label>
			<input type="text" placeholder="Username" name="user_name" value="<?php echo $user_name; ?>"/>
		</div>
	
		<input type ="submit" value="Update" name="update"  >
        <br>
	</form>
	</div>
		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: database.php');
	}

}
?>