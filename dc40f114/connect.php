<?php

	$dbh = "localhost";
	$dbu = "root";
	$dbp = "";
	$dbn = "apna";
	$con = mysqli_connect($dbh, $dbu);
	if(!$con){
		die("Unable To Connect To Server");
	}

?>