<?php
$dbh = "localhost";
$dbu = "root";
$con = @mysqli_connect($dbh,$dbu) or die(mysqli_connect_error());
@mysqli_select_db($con,"apna") or die(mysqli_error($con));
?>
