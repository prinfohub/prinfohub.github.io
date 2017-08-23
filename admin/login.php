<?php
	session_start();
	if( !isset($_SESSION["login_verification_id"]) || !isset($_POST["email"]) || !isset($_POST["password"]) ){
		header("/apna/admin/");	
		exit();
	}
	require("db_connect.php");
	$email = $_POST["email"];
	$password = $_POST["password"];
	$query = "SELECT id, name, email FROM admin WHERE email='$email' AND password='$password';";
	$res = @mysqli_query( $con, $query ) or die("Unable To Execute Query");
	if( mysqli_num_rows($res) == 0 ){
		echo("fail");
		exit();
	}
	$row = mysqli_fetch_array( $res );
	$_SESSION["login_status"] = "true";
	$_SESSION["login_user_id"] = $row["id"];
	$_SESSION["login_username"] = $row["name"];
	$_SESSION["login_user_email"] = $row["email"];
	echo("success");
?>
