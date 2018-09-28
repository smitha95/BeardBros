<?php include 'counter.php'; ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Beard Bros</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
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
           <a class="navbar-brand" href="index.php">Beard Bros</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li><a href="index.php">Home</a></li>
             <li><a href="products.php">Products</a></li>
						 <li><a href="customers.php">Customers</a></li>
           </ul>
					 <ul class="nav navbar-nav navbar-right">
						 <li>
							 <div class="dropdown">
						 			<button class="dropbtn">About<i class="fa fa-caret-down"></i></button>
										<div class="dropdown-content">
											<a href="about.php">Beard Bros</a>
											<a href="#">Austin</a>
											<a href="#">Isaac</a>
										</div>
								</div>
							</li>
					 		<li><a href="blog.php">Blog</a></li>
					 		<li><a href="contact.php">Contact</a></li>
							<li><a><?php echo "$count" ;
							echo " total page views" ;
							echo "\n" ;?></a></li>
						</ul>
						<form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Search</button>
						</form>
         	</div><!-- /.navbar-collapse -->
       	</div><!-- /.container-fluid -->
     </nav>
