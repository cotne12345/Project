<?php
	$conn =mysqli_connect("localhost","root","","blog");

	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
