<?php
	include "config.php";
	
	if (isset($_POST["username"]) && isset($_POST["password"])) {
		$user = mysqli_real_escape_string($connection, $_POST["username"]);
		$pass = mysqli_real_escape_string($connection, $_POST["password"]);
		
		$query = mysqli_query($connection, "SELECT * FROM userdata WHERE username = '$user'");
		$result = mysqli_fetch_array($query);
		$rowcount = mysqli_num_rows($query);
			
		if($rowcount == 1) {

			if($pass == $result["password"]) {
				echo "LoggedIn";
			}
			else {
				echo "WrongPassword";
			}
		}
		else if($rowcount == 0) {
			echo "NoAccount";
		}
	}
	else {
		echo "";
	}
?>