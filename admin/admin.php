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
<div class="bg-primary">
<br/>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<img src="image/user.jpg" class="img img-circle mx-100 img-thumbnail img-responsive inline" />
		</div>
		<div class="col-sm-9">
			<hr/>
			<span class="badge  pd-10 bg-wh txt-blu"> &nbsp; USERS : 256 &nbsp; </span>  &nbsp;
			<span class="badge pd-10 bg-wh txt-blu"> &nbsp; CHEMISTS : 25 &nbsp; </span>  &nbsp;
			<span class="badge pd-10 bg-wh txt-blu"> &nbsp; MEDICINES SOLD : 1024 &nbsp; </span> &nbsp;
			<span class="badge pd-10 bg-wh txt-blu"> &nbsp; TOTAL TRANSACTION: <i class="fa fa-inr"></i> 24,000 </span> &nbsp;
			<span class="badge pd-10 bg-wh txt-blu"> &nbsp; HIGHEST PAYS : <i class="fa fa-inr"></i> 10,000  &nbsp; </span><br/><br/>
			<span class="badge pd-10 bg-wh txt-blu"> &nbsp; <i class="fa fa-envelope"></i> &nbsp; 24 &nbsp; </span> &nbsp;
			<span class="badge pd-10 bg-wh txt-blu"> &nbsp; <i class="fa fa-medkit"></i> &nbsp; 54 &nbsp; </span> &nbsp;
		</div>
	</div>	
</div>
<br/>
</div>
	<div class="navbar navbar-default  br-rd-0 mg-0 br-tr navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand txt-hd">Admin Username</a>
				<button class="toggle navbar-toggle text-wh br-wh" data-toggle="collapse" data-target="#menu">
					<span class="fa fa-align-right"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse " id="menu">
				<ul class="nav navbar-nav ">
					<li><a href="logout.php" class="sm"><i class="fa fa-home"></i> Home </a></li>
					<li>
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
				<li>
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
				<li>
					<a href="#" data-toggle="dropdown" class=""><i class="fa fa-medkit"></i>&nbsp; Medicine <i class="caret"></i></a>
					<ul class="dropdown-menu br-tp-blu">
						<li class="divider"></li>
						<li><a href=""><i class="fa fa-list"></i> &nbsp; View all Medicine</a></li>
						<li class="divider"></li>
						<li><a href=""><i class="fa fa-plus-circle"></i> &nbsp; Add New Medicine</a></li>
						<li class="divider"></li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class=""><i class="fa fa-cogs"></i>&nbsp; Pathology <i class="caret"></i></a>
					<ul class="dropdown-menu br-tp-blu">
						<li class="divider"></li>
						<li><a href=""><i class="fa fa-list"></i> &nbsp; View all Tests</a></li>
						<li class="divider"></li>
						<li><a href=""><i class="fa fa-plus-circle"></i> &nbsp; Add New Test</a></li>
						<li class="divider"></li>
					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-usd"></i>&nbsp; Transaction</a>
				</li>
				<li>
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
				<li>
					<a href="#" class=""><i class="fa fa-user"></i>&nbsp; Logout</a>
				</li>
			</ul>
			</div>
		</div>
	</div>
	
	<br/>
	<br/>
	<script>
		$(document).ready(function(){
			setTimeout(function(){
				$(".progress-bar").css("width","50%");
			},2000);
			setTimeout(function(){
				$(".progress-bar").css("width","70%");
			},3500);
			setTimeout(function(){
				$(".progress-bar").css("width","90%");
			},5000);
			setTimeout(function(){
				$(".progress-bar").css("width","100%");
			},7000);
		});
	</script>
	<div class="container">
		<div class="well br-rd-0 br-tr br-bt-blu no-shadow pd-0">
			<div class="progress br-rd-0 progress-xs" style="height:6px;">
				<div class="progress-bar progress-bar-striped active progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
				</div>
			</div>
			<br/>
			<br/>
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<ul class="list-group">
					<li class="list-group-item"><big>WEBSITE STATISTICS</big></li>
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
</body>

</html>
