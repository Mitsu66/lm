<!doctype html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
		<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css">
		<link type="text/css" rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/theme.css">



		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap4.min.js"></script>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">

	</head>

	<body>
		<div id="wait" style="">
				<img src="img/reload.gif" height="100">
		</div>

		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="background-color:#fff;"><img src="http://img15.hostingpics.net/pics/333606mitseologo.png" height="30"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
				<li><a href="#">Dashboard</a></li>
				<li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Backlinks <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">All backlinks</a></li>
            <li><a href="#">Manage topics</a></li>
            <li><a href="#">Manage type</a></li>
          </ul>
        </li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Footprints <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">All footprints</a></li>
            <li><a href="#">Manage footprints</a></li>
          </ul>
        </li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">All projects</a></li>
            <li><a href="#">Astucespourmaigrir.net</a></li>
            <li><a href="#">extractordejus</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Add project</a></li>
          </ul>
        </li>
      </ul>

			<ul class="nav navbar-nav navbar-right">
				<li style="background-color:#5681a7;" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:10px;padding-bottom:10px;">
						<span class="label"><img src="https://www.gravatar.com/avatar/<?php echo md5($_SESSION['login']); ?>?s=44" width="44" style="border-radius:100px;"></span>
						Mehdi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">My account</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="inc/logout.php">Logout</a></li>
          </ul>
        </li>
			</ul>
	</li>
</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>