<!DOCTYPE HTML>
<html>
	<head>
		<title>CECU Las Vegas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/sub.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
<!-- Main -->
<body>
	<div id="page-wrapper" class="openPage">

		<div id="headerClean" class="clearBG">

			<!-- Logo -->


			<!-- Nav -->
			<nav id="navClean">
				<ul >
					<li ><a href="cecu_home.php">首页</a></li>
					<li ><a href="cecu_about_us.php">关于我们</a></li>
					<li><a href="cecu_news.php">新闻</a></li>
					<li>
						<a href="cecu_projects.php">项目</a>
						<ul>
							<li><a href="cecu_projects.php#cityInfrastructure">政府項目</a></li>
							<li><a href="cecu_projects.php#development">物業發展</a></li>
							<li><a href="cecu_projects.php#educational">教育設施</a></li>
							<li><a href="cecu_projects.php#medical">醫療設施</a></li>
							<li><a href="cecu_projects.php#bizOpportunity">商業機會</a></li>
							<li><a href="cecu_projects.php#residential">豪宅</a></li>
						</ul>
					</li>
					<li class="current"><a href="cecu_events.php">	大事</a></li>
					<li><a href="cecu_contact.php">联系我们</a></li>
					<li><a href="english/cecu_home.php">English</a></li>

				</ul>
			</nav>

		</div>

		<section class="wrapper" id="eventBanner">

		     <div class="row 200%">
		      <section class="4u 3u(narrower)">
		      </section>
		      <section class="2u 2u(narrower)" id="eventName">
		        <span class="image featured" ><img src="images/identity/summitNameVert.png"></span>
		      </section>
		      <section class="2u 2u(narrower)" id="eventDates">
		        <span class="image featured"><img src="images/identity/summitDatesVert.png"></span>
		      </section>
		      <section class="4u 12u(narrower)" id="fourUspacer">
		      </section>
		    </div>

		</section>

		<section class="wrapper">
			<div class="container">
			<div class="row 200%">

				<section class="6u 12u(narrower)" >
					<div >
						<form action="summit_sign_up.php" method="post">
						<input type="submit" name="single" class="button altGreen" value="single" />
						</form>
						</div>
				</section>
				<section class="6u 12u(narrower)" >
					<div>
						<form action="summit_sign_up.php" method="post">
						<input type="submit" name="shared" class="button altGreen" value="shared" />
						</form>
						</div>
				</section>

				</div>
			</div>
		</section>



							<?php
							include "sets/footer.php"
							?>

</div>
	<!-- Scripts -->
	<!-- <script src="assets/js/jquery.min.js"></script> -->
	<script src="assets/js/jquery.dropotron.min.js"></script>
	 <script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

	</body>
	</html>
