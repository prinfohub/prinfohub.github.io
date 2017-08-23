<?php
session_start();
$_SESSION["login_verification_id"]=time();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GHAR PAR DAWA</title>
	<base href="/apna/" />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/dn.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/nimda.js"></script>
	<script src="js/bootstrap.min.js"></script>
   
</head>
<body class="bg-blu">
	<br/>
	<br/>
	<div class="jumbotron bg-tr">
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
			<center>
			<h1><i class="fa">A d m i n</i><br/>...</h1>
			</center>
					<div class="well bg-tr br-tr no-shadow ">
						<div class="input-group br-rd-0 ">
							<span class="input-group-addon br-rd-0 input-lg "><i class="fa fa-user"></i></span>
							<input type="text" class="form-control br-rd-0 bg- br-lf-xs input-lg" id="admin_email" placeholder="Email ID"/>
						</div>
						<br/>
						<div class="input-group br-rd-0 ">
							<span class="input-group-addon br-rd-0 input-lg"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control br-rd-0  input-lg" id="admin_password" placeholder="Password"/>
						</div>
						<br/>
						<span id="error_msg" class="text-wh"></span>
						<center>
						<button class="btn btn-default btn-block btn-lg br-rd-0 fa" id="btn_login">L O G I N</button>
						</center>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</div>
</body>

</html>
