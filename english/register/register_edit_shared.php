<?php
session_start();


$newFirstName=$_SESSION["firstName"];
$newLastName=$_SESSION["lastName"];
$newEmail=$_SESSION["email"];
$newPhone=$_SESSION["phone"];


$newGuestFirstName = $_SESSION["guestFirstName"];
$newGuestLastName = $_SESSION["guestLastName"];
$newGuestEmail = $_SESSION["guestEmail"];
$newGuestPhone = $_SESSION["guestPhone"];



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




</head>
<body>
  <div id="page-wrapper">

              <?php
              include "register_header.php";
              ?>

              <section class="wrapper style1">   <!-- Greeting -->
                <div class="container">
                  <div id="content">
                      <article>
                        <header>
                          <h2>Edit Shared Room Registration Information  </h2>
                          <p>Directly edit any fields you want to correct and resumbit.</p>
                           </header>
                      </article>
                  </div>
                </div>







              <div class="container">  <!--................................ Sets up for FLex in Row -->
                <div class="row">	<!--................................ row Holds three Blocks of content  SECTIONS -->

                  <section class="4u 12u(narrower) 12u$(mobilep) lastNameLeft">  <!--..............Closing Block.....-->
                    <h4>Need Help?</h4>
                    <h5> We're right here.</h5>
                    <ul class="links">
                      <li><a href="mailto:info@ceculasvegas.com">info@ceculasvegas.com</a></li>
                      <li>Phone : +1 702 929 8888</li>
                      <li>Phone : +1 702 415 5000</li>
                      <li>6085 W. Twain Ave suite 203</li>
                      <li>Las Vegas, NV 89103</li>
                    </ul>
                  </section>

                  
                  <section class="8u 12u(narrower) important(narrower) lastNameLeft"> <!--   opening Block -->
                    <form action="register_review_shared.php" method="post">
                      <section>
                         <h6>Your Guest's Information</h6>
                      </section>
                 <!-- Content -->

                       <section class="guestInfo">
                         <div class="row 50%">
                             <div class="6u 12u(mobilep)">
                               <label for="guestFirstName" class="heading" > Guest First Name </label>
                               <input type="text" name="guestFirstName" id="guestFirstName"   value=<?php echo $_SESSION["guestFirstName"]; ?> required></label>
                             </div>
                             <div class="6u 12u(mobilep)">
                                 <label for="guestLastName" class="heading"> Guest Last Name </label>
                                 <input type="text" name="guestLastName" id="guestLastName" value="<?php echo $_SESSION["guestLastName"]; ?>" required></label>
                             </div>
                           </div>
                           <div class="row 50%">
                             <div class="6u 12u(mobilep)">
                               <label for="guestEmail" class="heading"> Guest Email </label>
                               <input type="email" name="guestEmail" id="guestEmail" value=<?php echo $_SESSION["guestEmail"]; ?> required></label>
                             </div>
                             <div class="6u 12u(mobilep)">
                                 <label for="phone" class="heading"> Guest Phone </label>
                                 <input type="text"  name="guestPhone" id="guestPhone" value=<?php echo $_SESSION["guestPhone"]; ?> required></label>
                             </div>
                           </div>
                         </section>

                       <section>

                           <h6>Your Information</h6>

                         </section>

                           <section class="yourInfo">
                           <div class="row 50%">
                           <div class="6u 12u(mobilep)">
                             <label for="firstName" class="heading"> First Name </label>
                             <input type="text" name="firstName" id="firstName" value=<?php echo $_SESSION["firstName"]; ?> required></label>
                           </div>
                           <div class="6u 12u(mobilep)">
                               <label for="lastName" class="heading"> Last Name </label>
                               <input type="text" name="lastName" id="lastName" value=<?php echo $_SESSION["lastName"]; ?> required></label>
                           </div>
                         </div>
                         <div class="row 50%" >
                           <div class="6u 12u(mobilep)">
                             <label for="email" class="heading"> Email </label>
                             <input type="email" name="email" id="email" value=<?php echo $_SESSION["email"]; ?> required></label>
                           </div>
                           <div class="6u 12u(mobilep)">
                               <label for="phone" class="heading"> Phone </label>
                               <input type="text" name="phone" id="phone" value=<?php echo $_SESSION["phone"]; ?> required></label>
                           </div>

                         </div>
                       </section>
                       <br>
                       <div class="row 50%" >
                      <div class="12u 12u(mobilep)">
                        <input type="submit" class="button altGreen" value="Finished Editing" />
                      </div>
                    </div>
                       </form>

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
<script src="../assets/js/jquery.dropotron.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../assets/js/main.js"></script>

</body>
</html>
