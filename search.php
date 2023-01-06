<?php

include("connection.php");
include("functions.php");
include("configuration.php");

$output='';
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['search'];
    $valueToSearch = preg_replace("#[0-9a-z]#i","",$valueToSearch);

    $query = mysql_query("SELECT * FROM users WHERE  name  LIKE '%$valueToSearch%' or ic  LIKE '%$valueToSearch%' or email  LIKE '%$valueToSearch%' or phone  LIKE '%$valueToSearch%' or user_name LIKE '%$valueToSearch%'" ) or die("Result not found");
    $count = mysql_num_rows($query);
    if($count == 0 ){
        $output = "There was no search results";

    }
    else{
        while($row = mysql_fetch_array($query)){
            $user_name = $row['user_name'];
		$name = $row['name'];
		$ic = $row['ic'];
		$email = $row['email'];
		$phone = $row['phone'];
	
        $output .= "<div> '.$user_name.' '.$name' '.$ic' '.$email' '.$name' '.$phone'  </div>";


        }
    }
}

?>
