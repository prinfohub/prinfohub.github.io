<?php
	require("connect.php");
	mysqli_select_db($con,"apna");
	if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["nothing"]) && isset($_POST["message"])){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		$query = "insert into contact(name, phone, email, subject, message, date) values('$name', '$phone', '$email', '$subject', '$message', now());";
		mysqli_query($con, $query) or die(mysqli_error($con));
		exit("success");
	}else{
		header("location:/");
	}
?>