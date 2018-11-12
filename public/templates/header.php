<?php include 'counter.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Add google anylitics to header before we go live -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Beard Bros</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">


</head>

<body>
	<!-- Start of the top navigation bar -->
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
           <!-- Brand image or name-->
           <a class="navbar-brand" href="index.php">Beard Bros</a><!-- remove name when logo is finished-->
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li><a href="index.php">Home</a></li>
             <li><a href="services.php">Services</a></li>
						 <li><a href="customers.php">Customers</a></li>
           </ul>
					 <ul class="nav navbar-nav navbar-right">
						 <li>
							 <div class="dropdown">
						 			<button class="dropbtn">About<i class="fa fa-caret-down"></i></button>
										<div class="dropdown-content">
											<a href="about.php">About</a>
											<a href="austin.php">Austin</a>
											<a href="isaac.php">Isaac</a>
											<hr style="border-top: 1px dashed #DCDCDC;">
											<a href="timeline.php">Timeline</a>
										</div>
								</div>
							</li>
					 		<li><a href="blog.php">Blog</a></li>
					 		<li><a href="contact.php">Contact Us</a></li>
						</ul>
						<!--
						Use googles CSE(Custome Search Engine) to build search for site.
						-->
						<form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Search</button>
						</form>
         	</div><!-- /.navbar-collapse -->
       	</div><!-- /.container-fluid -->
     </nav>
