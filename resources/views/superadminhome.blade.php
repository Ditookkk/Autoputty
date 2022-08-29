<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--  Meta  -->
  <meta charset="UTF-8" />
  <!-- for responsive platforms -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Non resp toggled sidebar</title>
  
  <!--  Styles  -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/superadminhome.css">
</head>
<body>
  <div class="wrapper">
	<!-- creating the heaer section -->
		<header class="main-header">
			<!-- working with left logo -->
			<a href="#" class="logo">
				<span class="logo-small"><b>TSB</b></span>
				<span class="logo-large"><b>Toggled Side Bar</b></span>
			</a>
            <!-- here the nav bar -->
			<nav class="navbar navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <a class="navbar-brand" href="#">Bootstrap theme</a> -->
						<!-- for collapsable menu -->
			            <a href="#" id="btn-sidebar-collapse" class="sidebar-toggle">
			                <span class="glyphicon glyphicon-menu-hamburger"></span>
			            </a>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
							<div id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-edit"></span>
										<span class="label label-danger">13</span> <span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="#">option1.1</a></li>
											<li><a href="#">option1.2</a></li>
											<li><a href="#">option1.3</a></li>
										</ul>
									</li>
								</ul>
								<!-- ======================================================= -->
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-pencil"></span>
										<span class="label label-danger">10</span> <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">option2.1</a></li>
											<li><a href="#">option2.2</a></li>
										</ul>
									</li>
								</ul>
								<!-- ======================================================= -->
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-camera"></span>
										<span class="label label-danger">16</span> <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">option3.1</a></li>
										</ul>
									</li>
								</ul>
								<!-- ======================================================= -->
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
										Profile <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li role="separator" class="divider"></li>
											<li class="dropdown-header">Nav header</li>
											<li><a href="#">Separated link</a></li>
											<li><a href="#">One more separated link</a></li>
										</ul>
									</li>
								</ul>
							</div><!--/.nav-collapse -->
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!-- end header section -->
		<!-- start aside section -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="globalnav">
				<!-- the header of global nav -->
					<div class="globalnav-header">
						<a class="has-childs collapsed" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-edit"></span>
                            <span class="hidden-on-collapse">Option1 </span>
                        </a>
					</div>
				<!-- the iinside global nav -->
					<ul class="subnav collapse" id="collapseExample">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option1.1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option1.2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option1.3</span>
                            </a>
                        </li>
                    </ul>
				</div>
				<!-- =========================================================== -->
				<div class="globalnav">
				<!-- the header of global nav -->
					<div class="globalnav-header">
						<a class="has-childs collapsed" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span class="hidden-on-collapse">Option2</span>
                        </a>
					</div>
				<!-- the iinside global nav -->
					<ul class="subnav collapse" id="collapseExample2">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option2.1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option2.2</span>
                            </a>
                        </li>
                    </ul>
				</div>
				<!-- =========================================================== -->
				<div class="globalnav">
				<!-- the header of global nav -->
					<div class="globalnav-header">
						<a class="has-childs collapsed" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span class="hidden-on-collapse">Option3</span>
                        </a>
					</div>
				<!-- the iinside global nav -->
					<ul class="subnav collapse" id="collapseExample3">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option3.1</span>
                            </a>
                        </li>
                    </ul>
				</div>
				<!-- =========================================================== -->
				<div class="globalnav">
				<!-- the header of global nav -->
					<div class="globalnav-header">
						<a class="has-childs collapsed" role="button" data-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-user"></span>
                            <span class="hidden-on-collapse">profile</span>
                        </a>
					</div>
				<!-- the iinside global nav -->
					<ul class="subnav collapse" id="collapseExample6">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option5.1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span class="hidden-on-collapse">Option5.2</span>
                            </a>
                        </li>
                    </ul>
				</div>
			</section>
		</aside>
		<!-- content here -->
		<div class="content-wrapper">
			<div class="container-fluid">
				<section class="content-header">
					<h1><span class="glyphicon glyphicon-home"></span> content here !!!</h1>
				</section>
				<section class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</section>
			</div>
		</div>
	</div>
  
  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="vendors/jquery-3.0.0.min.js"><\/script>')</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/superadminhome.js"></script>
</body>
</html>