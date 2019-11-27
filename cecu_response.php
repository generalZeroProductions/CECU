<?php

require "../makeInquiry.php";

$newName=$_POST["name"];
$newMessage=$_POST["message"];
$newEmail=$_POST["email"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//printf("Initial character set: %s\n", mysqli_character_set_name($conn));

/* change character set to utf8 */
if (!mysqli_set_charset($conn, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($conn));
    exit();
} else {
   // printf("Current character set: %s\n", mysqli_character_set_name($conn));
}


$sql = "INSERT INTO inquiries (name, email, message)
VALUES ('$newName','$newMessage','$newEmail')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
	<head>
		<title>CECU Contact Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
      <?php
      include "sets/mainHeader.php";
      ?>




			<!-- Main -->


			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<h3>联系方式</h3>
								<ul class="links">
									<li><a href="mailto:info@ceculasvegas.com">info@ceculasvegas.com</a></li>
									<li>电话 : +1 702 929 8888</li>
									<li>电话 : +1 702 415 5000</li>
									<li>6085 W. Twain Ave suite 203</li>
									<li>Las Vegas, NV 89103</li>

								</ul>
							</section>


							<section class="6u 12u(narrower)">
								<h3>感谢您的关注,  <?php echo $_POST["name"]; ?></h3>
								<p> 我们会尽快回复您.</p>
							</section>
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<h3>比似乎更接近</h3>
									<span class="image featured"><img src="images/fabLasVegas.jpg" alt="" /></span>
							</section>
						</div>
					</div>



                <?php
                include "sets/footer.php"
                ?>




				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
