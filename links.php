<!doctype html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
		<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css">
		<link type="text/css" rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">



		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap4.min.js"></script>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">

		<style>
		#linktable thead,#linktable  tfoot {
		    display: table-header-group;
		}
		#linktable tfoot {
			background-color:#ffc;
		}
		#linktable tfoot th {
			border:0;
			text-align: center;
		}
		.row {
		    margin-left: 0;
		    margin-right: 0;
		}
		.label-td{
			font-size:100%;
		}
		.label-cf{
			background-color:#555;
		}
		.label-tf{
			background-color:#111;
		}
		.label-dr{
			background-color:#111;
		}
		.td-center{
			text-align:center;
		}

		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
		    border: 0;
		    background-color: none;
		    background: none;
		}
		.dataTables_wrapper .dataTables_paginate .paginate_button {
		    padding: 0.5em 0.5em;
		}
		.navbar {
		    border: none;
				-webkit-box-shadow: 0 0px 13px rgba(0,0,0,0.2);
				box-shadow: 0 0px 13px rgba(0,0,0,0.2);
		}
		.navbar-default .navbar-brand {
				padding-top:17px;
		    color: #fff;
		}
		.navbar-default .navbar-nav>li>a {
		    color: #fff;
		}
		.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
		    color: #fff;
		    background-color: #f5474b;
				background-image:none;
		}
		.container-fluid {
			background-color: #709dca;
		}
		.btn-default, .btn-default {
		    background-color: #709dca !important;
		    color: #fff !important;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		}

		.btn-default:hover, .btn-default:active:hover {
		    background-color: #709dca;
		    color: #fff;
		}
		.btn-default:active:hover, .btn-default.active:hover, .open>.dropdown-toggle.btn-default:hover, .btn-default:active:focus, .btn-default.active:focus, .open>.dropdown-toggle.btn-default:focus, .btn-default:active.focus, .btn-default.active.focus, .open>.dropdown-toggle.btn-default.focus {
		    color: #fff;
		    background-color: #709dca;
		    border-color: rgba(0,0,0,0);
		}
		.btn-default {
		    color: #fff;
		    background-color: #709dca;
		    border-color: transparent;
		}
		.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {
				background:none;
				background-image:none;
		    background-color: #f5474b !important;
		    color: #fff;
				font-weight:bold;
		}
		h1 {
		    color: #f5474b;
				font-size:4em;
		}
		.dropdown-menu {
		    background-color:#fff;
		}
		.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
		    color: #fff;
		}
		body{background-color:#fafafa;}
		@media (max-width: 767px){
		.navbar-default .navbar-nav .open .dropdown-menu {
		    background-color: #fff;
		}
		}
		#linktable td{vertical-align: middle;}
		#wait{
			position:fixed;
			height:300px;
			line-height:300px;
			top:50%;
			left:0;
			width:100%;
			margin-top:-150px;
			z-index:500;
			font-size:18px;
			padding:0;
			text-align:center;
			background-color:#709dca;
			color:#fff;
			opacity:0.8;
		}
		</style>
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
						<span class="label"><img src="https://c.disquscdn.com/uploads/users/4137/4716/avatar92.jpg" width="44" style="border-radius:100px;"></span>
						Mehdi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">My account</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
			</ul>
	</li>
</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
		<div class="page-header">
	  <h1>Backlinks spots <small>See all spots</small></h1>
	</div>
</div>
</div>
<div class="row">


<div class="col-lg-1"></div>
    <div class="col-lg-10">

	<div class="panel panel-default" style="padding:10px;overflow:auto;">
  <!-- Default panel contents -->
  <!--<div class="panel-heading">Panel heading</div>-->
  <div class="panel-body">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addspot" style="float:right">
  Add a spot
</button>



    <p>&nbsp;</p>
  </div>

	<table id="linktable" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Domain</th>
				<th width="70">Action</th>
				<th width="30">Lang</th>
				<th width="150">Topic</th>
				<th width="150">type</th>
				<th width="30">CF</th>
				<th width="30">TF</th>
				<th width="30">DR</td>
			</tr>
		</thead>
		<tfoot>
			<tr>
					<th>Domain</th>
					<th >Action</th>
					<th>Lang</th>
					<th>Topic</th>
					<th>type</th>
					<th>CF</th>
					<th>TF</th>
					<th>DR</th>
				</tr>
			</tfoot>

		<tbody>
			<?php
			//$bdd = new PDO('mysql:host=localhost;dbname=linkmanager', 'root', '');
			$bdd = new PDO('sqlite:db/linkmanager.db');
			$sql = $bdd->query("SELECT A.dom dom,
													A.url url,
													A.url_submit url_submit,
													A.cf cf,
													A.tf tf,
													A.rd rd,
													B.name topic,
													B.color topic_color,
													C.name type,
													C.color type_color

													FROM
													spot A,
													topic B,
													type C

													WHERE A.topic = B.id
													AND A.type = C.id");
			while($data = $sql->fetch(PDO::FETCH_OBJ))
			{ ?>
			<tr>
				<td>
					<?php if(rand(0,100)>50) { ?><span class="label label-default" style="background-color:#fff;border:1px solid #ddd;float:right;padding:5px;"><?php if(rand(0,100)>50) { ?><img src="http://www.mitseo.net/favico.png" width="16">&nbsp;&nbsp;&nbsp;<span style="display:none">Mitseo</span><?php } ?><span style="display:none">Webrankinfo</span><img src="http://www.webrankinfo.com/images/favicon.png" width="16"></span><?php } ?>
						<?php echo $data->dom; ?></td>
			<td class="td-center">
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Action
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="#"><a href="<?php echo $data->url; ?>" target="_blank">Go to website</a></li>
							<?php if(!empty($data->url_submit)) { ?><li><a href="<?php echo $data->url_submit; ?>" target="_blank">Go to submit page</a></li><?php } ?>
							<li><a href="#">Add to project</a></li>
							<li><a href="#">Edit</a></li>
							<li><a href="#">Delete</a></li>
						</ul>
				</div>
			</td>
			<td>FR</td>
				<td>
					<?php
						$topics = explode("/",$data->topic);
						foreach($topics as $topic)
						{
							echo '<span class="label label-default label-td" style="margin-right:5px;margin-bottom:5px;background-color:'.$data->topic_color.'">'.utf8_encode($topic).'</span>';
						}
					 ?>
					</td>
				<td><span class="label label-default label-td"  style="background-color:<?php echo $data->type_color; ?>"><?php echo $data->type; ?></span></td>
				<td class="td-center"><span class="label label-default label-td label-cf"><?php echo $data->cf; ?></span></td>
				<td class="td-center"><span class="label label-default label-td label-tf"><?php echo $data->tf; ?></span></td>
				<td class="td-center"><span class="label label-default label-td label-dr"><?php echo $data->rd; ?></span></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	</div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#linktable').DataTable();
		$("#wait").fadeOut("fast");


		// Setup - add a text input to each footer cell
$('#linktable tfoot th').each( function () {
		var title = $(this).text();
		$(this).html( '<input type="text" style="width:100%;" placeholder="'+title+'" />' );
} );

// DataTable
var table = $('#linktable').DataTable();

// Apply the search
table.columns().every( function () {
		var that = this;

		$( 'input', this.footer() ).on( 'keyup change', function () {
				if ( that.search() !== this.value ) {
						that
								.search( this.value )
								.draw();
				}
		} );
} );



} );
</script>


<div class="modal fade" id="addspot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
				<form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	</body>

</html>
