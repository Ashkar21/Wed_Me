<?php
  session_start();
  //authorization
  if(!isset($_SESSION['username'])||$_SESSION['user']!='admin')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../index.php';</script>";
  }
?>

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Ezhava Matrimony.com</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php" >Home</a></li>
							<li>
								<a href="groom-bride.html" class="fh5co-sub-ddown">Users</a>
								<ul class="fh5co-sub-menu">
									<li><a href="req.php">New Requests</a></li>
									<li><a href="ausers.php">Approved Users</a></li>
									<li><a href="rusers.php">Rejected Users</a></li>
									
								</ul>
							</li>
							<!--<li><a href="when-where.html">When &amp; Where</a></li>-->
							
							<li><a href="profile.php">Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>