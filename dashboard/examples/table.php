<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Eventour</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

	<?php   
// $db_handle = pg_connect("dbname=bpsimple");   
// $query = "SELECT * FROM item";   
// $result = pg_exec($db_handle, $query);   
// echo "Number of rows: " . pg_numrows($result);   
// pg_freeresult($result);   
// pg_close($db_handle);   
	?>

	<?php
    $db_connection = pg_connect("host=ec2-54-228-235-185.eu-west-1.compute.amazonaws.com dbname=d1ms4bk698eik4 user=mxvjgobntkdtll password=cae03c92566cec409201c8215c4649420f117b02c8fe7721dea0b6fd94784edb");
	?>

</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
	        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		    Tip 2: you can also add an image using data-image tag

			-->

			<div class="logo">
				<a href="dashboard.html" class="simple-text">
					Eventour
				</a>
			</div>


	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li>
	                    <a href="dashboard.html">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="table.html">
	                        <i class="material-icons">content_paste</i>
	                        <p>Table List</p>
	                    </a>
	                </li>
	             
	            </ul>
	    	</div>
		</div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <a class="navbar-brand" href="#">Table List</a> -->
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
							</li>
						</ul>

						
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Events</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>ID</th>
	                                    	<th>Name</th>
	                                    	<th>Description</th>
											<th>Image</th>
											<th>Start time</th>
											<th>End time</th>
											<th>Location</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td><<?php $query = "SELECT * FROM events";  ?></td>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
												<td class="text-primary">$36,738</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>Curaçao</td>
	                                        	<td>Sinaai-Waas</td>
												<td class="text-primary">$23,789</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>Netherlands</td>
	                                        	<td>Baileux</td>
												<td class="text-primary">$56,142</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Philip Chaney</td>
	                                        	<td>Korea, South</td>
	                                        	<td>Overland Park</td>
												<td class="text-primary">$38,735</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Doris Greene</td>
	                                        	<td>Malawi</td>
	                                        	<td>Feldkirchen in Kärnten</td>
												<td class="text-primary">$63,542</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Mason Porter</td>
	                                        	<td>Chile</td>
	                                        	<td>Gloucester</td>
												<td class="text-primary">$78,615</td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	                     <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Speakers</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>ID</th>
	                                    	<th>Name</th>
	                                    	<th>Description</th>
											<th>Image</th>
											<th>Start time</th>
											<th>End time</th>
											<th>Location</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Dakota Rice</td>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
												<td class="text-primary">$36,738</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>Curaçao</td>
	                                        	<td>Sinaai-Waas</td>
												<td class="text-primary">$23,789</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>Netherlands</td>
	                                        	<td>Baileux</td>
												<td class="text-primary">$56,142</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Philip Chaney</td>
	                                        	<td>Korea, South</td>
	                                        	<td>Overland Park</td>
												<td class="text-primary">$38,735</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Doris Greene</td>
	                                        	<td>Malawi</td>
	                                        	<td>Feldkirchen in Kärnten</td>
												<td class="text-primary">$63,542</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Mason Porter</td>
	                                        	<td>Chile</td>
	                                        	<td>Gloucester</td>
												<td class="text-primary">$78,615</td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	        
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
