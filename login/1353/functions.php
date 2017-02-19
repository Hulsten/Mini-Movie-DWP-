<?php
require 'dbconfig.php';
function checkuser($fuid,$ffname,$femail){
    	$check = mysqli_query("SELECT * FROM Users where Fuid='$fuid'");
	$check = mysqli_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('$fuid','$ffname','$femail')";
	mysqli_query($query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE Users SET Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
	mysqli_query($query);
	}
}?>
