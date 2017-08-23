<?php
	session_start();
	if( !isset($_SESSION["login_status"]) || !isset($_SESSION["login_user_id"]) ){
		header("location:/apna/admin/");
		exit();
	}
	require("db_connect.php");
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
	<script src="js/bootstrap.min.js"></script>
   
</head>
<body class="">
<div class="well br-rd-0 br-tr bg-blu">
	<center>
		<h1 class="txt-hd2"><big><i class="fa fa-medkit"></i></big><br/>Ghar Par Dawa</h1>
		<div class="btn-group">
			<a href="#" class="btn btn-primary bg-tr br-rd-0"><h4 class="mg-0"><b><i class="fa fa-facebook"></i></b></h4></a>
			<a href="#" class="btn btn-primary bg-tr br-rd-0"><h4 class="mg-0"><b><i class="fa fa-google-plus"></i></b></h4></a>
			<a href="#" class="btn btn-primary bg-tr br-rd-0"><h4 class="mg-0"><b><i class="fa fa-twitter"></i></b></h4></a>
			<a href="#" class="btn btn-primary bg-tr br-rd-0"><h4 class="mg-0"><b><i class="fa fa-linkedin"></i></b></h4></a>
		</div>
	</centeR>
</div>
<br/>
<div class="container-fluid">
	<div class="row">
	<div class="col-sm-3">
		<div class="">
			<ul class="list-group ">
				<li class="list-group-item">
					<a href="#" data-toggle="dropdown" class=""> <i class="fa fa-user"></i> Users <i class="caret"></i></a>
					<ul class="dropdown-menu br-tp-blu">
						<li class="divider"></li>
						<li><a href=""><i class="fa fa-list"></i> &nbsp; View all Users</a></li>
						<li class="divider"></li>
						<li><a href=""><i class="fa fa-plus-circle"></i> &nbsp; Add New User</a></li>
						<li class="divider"></li>
						<li><a href=""><i class="fa fa-send"></i> &nbsp; Contact a User</a></li>
						<li class="divider"></li>
					</ul>
				</li>
			<li class="list-group-item">
				<a href="#" data-toggle="dropdown" class=""><i class="fa fa-user-md"></i>&nbsp; Chemist <i class="caret"></i></a>
				<ul class="dropdown-menu br-tp-blu">
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-list"></i> &nbsp; View all Chemist</a></li>
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-plus-circle"></i> &nbsp; Add New Chemist</a></li>
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-send"></i> &nbsp; Contact a Chemist</a></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li class="list-group-item">
				<a href="#" data-toggle="dropdown" class=""><i class="fa fa-medkit"></i>&nbsp; Medicine <i class="caret"></i></a>
				<ul class="dropdown-menu br-tp-blu">
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-list"></i> &nbsp; View all Medicine</a></li>
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-plus-circle"></i> &nbsp; Add New Medicine</a></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li class="list-group-item">
				<a href="#" data-toggle="dropdown" class=""><i class="fa fa-cogs"></i>&nbsp; Pathology <i class="caret"></i></a>
				<ul class="dropdown-menu br-tp-blu">
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-list"></i> &nbsp; View all Tests</a></li>
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-plus-circle"></i> &nbsp; Add New Test</a></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li class="list-group-item">
				<a href="#"><i class="fa fa-usd"></i>&nbsp; Transaction</a>
			</li>
			<li class="list-group-item">
				<a href="#" data-toggle="dropdown" class=""><i class="fa fa-globe"></i>&nbsp; Website <i class="caret"></i></a>
				<ul class="dropdown-menu br-tp-blu">
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-list-alt"></i> &nbsp; Modify Homepage</a></li>
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-edit"></i> &nbsp; Update Contact</a></li>
					<li class="divider"></li>
					<li><a href=""><i class="fa fa-send"></i> &nbsp; Contact Developer</a></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li class="list-group-item">
				<a href="#" class=""><i class="fa fa-user"></i>&nbsp; Logout</a>
			</li>
			</ul>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="text-hd mg-0">Recent Orders</h3>
			</div>
			<div class="panel-body">
				<?php
					$query = "SELECT medicine.name as medname, orders.ordate as odate, orders.amount as amount from orders,medicine WHERE medicine.mcode=orders.mcode;";
					$res = @mysqli_query( $con, $query ) or die(mysqli_error($con));
					while($row = mysqli_fetch_array( $res )){
						$medname = $row["medname"];
						$date = $row["odate"];
						$amount = $row["amount"];
						echo("
							<div class='alert br-bt-grn br-rd-0 alert-dismissable'>
								<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<h4 class='mg-0 txt-hd'>MEDICINE : $medname</h4>
								<p>Date : $date</p>
								<p><i class='fa fa-inr'></i> $amount</p>
							</div>
						");
					}



				?>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
				<ul class="list-group">
					<li class="list-group-item active"><big>WEBSITE STATISTICS</big></li>
					<li class="list-group-item ">
						TOTAL VISITORS <span class="badge">1026</span>
					</li>
					<li class="list-group-item ">
						TOTAL SIGNUPS <span class="badge">970</span>
					</li>
					<li class="list-group-item ">
						TOTAL PURCHASES <span class="badge">2034</span>
					</li>
					<li class="list-group-item ">
						ONLINE USERS<span class="badge">2034</span>
					</li>
					<li class="list-group-item ">
						ONLINE CHEMIST <span class="badge">2034</span>
					</li>
				</ul>
	</div>
	</div>
</div>	
	<br/>
	<br/>
	<script>

	</script>
	<div class="container">

		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"></div>
			<div class="col-sm-4">

			</div>
		</div>
	</div>
</body>

</html>
