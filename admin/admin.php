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
	<script>
		$(document).ready(function(){
			$("a.dn_cnt_btn").click(function(){
				var id = $(this).attr("dn_cnt_to");
				$(".dn_cnt").hide(0,function(){
					$(id).show(500);
				});
			});
		});
	</script>
</head>
<body class="">
<div class="contain">
	<div class="navbar navbar-default navbar-inverse br-rd-0 dn-sh">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand txt-hd text-wh">
					<big><i class="fa fa-medkit"></i></big>
					Ghar Par Dawa
				</a>
				<button class="toggle navbar-toggle text-wh" data-toggle="collapse" data-target="#social">
					<span class="caret"></span>
					<span class="caret"></span>
					<span class="caret"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="social">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="i"><i class=" fa fa-facebook-square"></i> Facebook</a></li>
					<li><a href="c"><i class=" fa fa-google-plus-square"></i> Google+</a></li>
					<li><a href="s"><i class=" fa fa-twitter-square"></i> Twitter</a></li>
					<li><a href="s"><i class=" fa fa-linkedin-square"></i> Linkedin</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<br/>
<div class="container">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-2">
		<div class="">
			<ul class="nav nav-vertical br-blu">
				<li class="active">
					<a class="cpointer bg-blu dn_cnt_btn" dn_cnt_to="#users"> <i class="fa fa-usd"></i> Orders</a>
				</li>
				<li class="active">
					<a class="cpointer" > <i class="fa fa-user"></i> Users</a>
				</li>
				<li class="">
					<a class="cpointer" > <i class="fa fa-user-md"></i> Chemist</a>
				</li>
				<li class="active">
					<a class="cpointer"> <i class="fa fa-medkit"></i> Medicine</a>
				</li>
				<li class="active">
					<a class="cpointer"> <i class="fa fa-cogs"></i> Pathology</a>
				</li>
				<li class="active">
					<a class="cpointer"> <i class="fa fa-globe"></i> Website</a>
				</li>
				<li class="active">
					<a class="cpointer"> <i class="fa fa-sign-out"></i> Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="panel dn_cnt dsp-n" id="users">
			<div class="panel-heading">
				<h3 class="txt-hd mg-0">Users</h3>
			</div>
		</div>
		<div class="panel dn_cnt" id="orders">
			<div class="panel-heading br-bt-blu">
				<h3 class="txt-hd mg-0">Recent Orders</h3>
			</div>
			<div class="panel-body">
				<?php
					$query = "SELECT medicine.name as medname, orders.quantity as quantity, orders.ordate as odate, orders.amount as amount from orders,medicine WHERE medicine.mcode=orders.mcode;";
					$res = @mysqli_query( $con, $query ) or die(mysqli_error($con));
					while($row = mysqli_fetch_array( $res )){
						$medname = $row["medname"];
						$date = $row["odate"];
						$amount = $row["amount"];
						$quantity = $row["quantity"];
						echo("
							<div class='alert alert-info br-btrn br-rd-0 alert-dismissable'>
								<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<h4 class='mg-0 txt-hd'>$medname - $quantity</h4>
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
					<li class="list-group-item bg-blu"><big>WEBSITE STATISTICS</big></li>
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
	<div class="col-sm-1"></div>
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
