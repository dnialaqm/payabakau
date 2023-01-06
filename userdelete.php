<?php 

include("connection.php");
include("functions.php");
include("configuration.php");

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['bookname'])) {
	$user_name = $_GET['bookname'];

	// write delete query
	$sql = "DELETE FROM `booking` WHERE `bookname`='$user_name'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
        echo "<script>alert('Record deleted successfully.');
        window.location='userpage.php'</script>";
    }
	else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>