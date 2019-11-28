<?php
session_start();

// Set session variables
$_SESSION["firstName"] = $_POST["firstName"];
$_SESSION["lastName"] = $_POST["lastName"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["phone"] = $_POST["phone"];

$_SESSION["guestFirstName"] = $_POST["guestFirstName"];
$_SESSION["guestLastName"] = $_POST["guestLastName"];
$_SESSION["guestEmail"] = $_POST["guestEmail"];
$_SESSION["guestPhone"] = $_POST["guestPhone"];

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>CECU Las Vegas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/sub.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.braintreegateway.com/js/braintree-2.31.0.min.js"></script>

<script>
$.ajax({
url: "token_sand.php",
type: "get",
dataType: "json",
success: function (data) {
  braintree.setup(data, 'dropin', {container: 'dropin-container'});
}
})
</script>

</head>


<body>
  	<div id="page-wrapper">

  							<?php
  							include "register_header.php";
  							?>



<section class="wrapper style1">
  <div class="container">
    <div class="row 200%">


      <div class="4u 12u(narrower)">
        <div id="sidebar">   <!--......................................- Sidebar -->
              <section>
                  <h4>Want More Info?</h4>
                  <h5> We're waiting to hear from you.</h5>
                  <ul class="links">
                  <li><a href="mailto:info@ceculasvegas.com">info@ceculasvegas.com</a></li>
                  <li>Phone : +1 702 929 8888</li>
                  <li>Phone : +1 702 415 5000</li>
                  <li>6085 W. Twain Ave suite 203</li>
                  <li>Las Vegas, NV 89103</li>
                  </ul>
                </section>
        </div>
      </div>



      <div class="8u  12u(narrower) important(narrower)">
        <div id="content">
          <section id="personalInfoFeedback">
              <h4 class="heading">Review Guest's Info </h4><hr>
                <div class="row 50%">
                  <div class="6u 12u(mobilep)">
                        <label  class="preformattedResponse"> Guest First Name: </label>
                  </div>
                  <div class="6u 12u(mobilep)">
                      <label for="guestFirstName" class="heading"> <?php echo $_SESSION["guestFirstName"]; ?> </label>
                  </div>


                  <div class="6u 12u(mobilep)">
                    <label class="preformattedResponse"> Guest Last Name: </label>
                  </div>
                  <div class="6u 12u(mobilep)">
                    <label for="guestLastName" class="heading"> <?php echo $_SESSION["guestLastName"]; ?> </label>

                  </div>
                  </div>
                    <div class="row 50%">
                    <div class="6u 12u(mobilep)">
                        <label class="preformattedResponse"> Guest Email: </label>
                    </div>
                    <div class="6u 12u(mobilep)">
                      <label  class="heading"> <?php echo $_SESSION["guestEmail"]; ?> </label>

                    </div>
                    <div class="6u 12u(mobilep)">
                      <label  class="preformattedResponse"> Guest Phone: </label>
                    </div>
                    <div class="6u 12u(mobilep)">
                      <label  class="heading"> <?php echo $_SESSION["guestPhone"]; ?> </label>
                    </div>
                    </div>

              </section>

              <section id="personalInfoFeedback">
                  <h4 class="heading">Review Personal Info </h4><hr>
                    <div class="row 50%">
                      <div class="6u 12u(mobilep)">
                            <label  class="preformattedResponse"> First Name: </label>
                      </div>
                      <div class="6u 12u(mobilep)">
                          <label for="firstName" class="heading"> <?php echo $_SESSION["firstName"]; ?> </label>
                      </div>


                      <div class="6u 12u(mobilep)">
                        <label class="preformattedResponse"> Last Name: </label>
                      </div>
                      <div class="6u 12u(mobilep)">
                        <label for="lastName" class="heading"> <?php echo $_SESSION["lastName"]; ?> </label>

                      </div>
                      </div>
                        <div class="row 50%">
                        <div class="6u 12u(mobilep)">
                            <label class="preformattedResponse"> Email: </label>
                        </div>
                        <div class="6u 12u(mobilep)">
                          <label  class="heading"> <?php echo $_SESSION["email"]; ?> </label>

                        </div>
                        <div class="6u 12u(mobilep)">
                          <label  class="preformattedResponse"> Phone: </label>
                        </div>
                        <div class="6u 12u(mobilep)">
                          <label  class="heading"> <?php echo $_SESSION["phone"]; ?> </label>
                        </div>
                        <div class="12u">
                          <a href="register_edit_shared.php" class="button">Edit</a>
                        </div>
                        </div>

                  </section>
            <section>

                    <div class="row 50%">
                    <div class="12u">
<br>
<h3> Enter your payment details.</h3>
<br>
                        <form action="register_confirm_shared.php" method="post" class="payment-form">

                            <div id="dropin-container"></div>
                          <br>
                        <input id="greenPay" type="submit" class="button altGreen" value="Submit Payment $2576.00"></input>
                      </form>
                  </div>
                  </div>



              </section>
        </div>
      </div>
    </div>
  </div>
</section>


							<?php
							include "sets/footer.php"
							?>
</div>
	<!-- Scripts -->
	<!-- <script src="assets/js/jquery.min.js"></script> -->
	<script src="../assets/js/jquery.dropotron.min.js"></script>
	 <script src="../assets/js/skel.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="../assets/js/main.js"></script>

	</body>
	</html>
