<?php
session_start();
require "../bootSAND.php";
require "../getTickets.php";
?>


<?php>
$newFirstName=$_SESSION["firstName"];
$newLastName=$_SESSION["lastName"];
$newGuestFirstName=$_SESSION["guestFirstName"];
$newGuestLastName=$_SESSION["guestLastName"];

if(empty($_POST['payment_method_nonce'])){
  header('location:cecu_summit_register.php');
}

$result = Braintree_Transaction::sale([
'amount'=>257,
'paymentMethodNonce'=> $_POST['payment_method_nonce'],
'customer' => [
  'firstName'=> $newFirstName,
  'lastName'=> $newLastName,
],
'options'=>[
  'submitForSettlement'=> true
]

]);

if ($result->success===true){

}else {
  {
    print_r($result->errors);
    die();
  }
}


$conn = mysqli_connect("$servername","$username","$password","$dbname");
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


$sql = "INSERT INTO tickets (firstName, lastName, email, phone)
VALUES ('$newFirstName', '$newLastName', '$newEmail','$newPhone')";

if (mysqli_query($conn, $sql)) {


} else {
    echo "can't enter data " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>









<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>CECU 2018 Summit Payment Confirmation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="../assets/css/sub.css" />
  <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.braintreegateway.com/web/dropin/1.9.2/js/dropin.min.js"></script>

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
                            <h2>支付成功！</h2>
                            <p>您將收到<span id="quickEmail">summit_tickets@ceculasvegas.com</span>的確認電子郵件。 </p>
                          </header>
                        </article>
                    </div>
                  </div>
                </section>


              <div id="footer"> <!--.........Goes to end of Wrapper..     <section class="wrapper style1"> WHITE   ........ -->



                <div class="container">  <!--................................ Sets up for FLex in Row -->
                  <div class="row">	<!--................................ row Holds Two Blocks of content  SECTIONS -->
                      <section class="1u 12u(narrower)">
                      </section>

                    <section class="7u 12u(narrower) important(narrower) lastNameLeft">
                      <article>
                      <p>您的註冊已確認 ：</p>
                    </article>
                      <div class="row 50%">
                        <div class="3u 12u(mobilep)">
                          <h3> <?php echo $newFirstName; ?> </h3>
                        </div>
                        <div class="9u 12u(mobilep)">
                          <h3> <?php echo $newLastName; ?> </h3>
                        </div>
                    </div>
                    <article>
                    <p>您的室友註冊也被確認 ：</p>
                  </article>
                    <div class="row 50%">
                      <div class="3u 12u(mobilep)">
                        <h3> <?php echo $newGuestFirstName; ?> </h3>
                    </div>
                    <div class="9u 12u(mobilep) ">
                      <h3> <?php echo $newGuestLastName; ?> </h3>
                    </div>
                    </div>
                    <div class="row 50%">
                      <div class="12u 12u(mobilep)">


                        <form action="../cecu_home.php">
                        <input type="submit" class="button alt" value="首页"></input>
                        </form>

                  </div>
                    </div>
                    </section>



                    <section class="4u 12u(narrower) 12u$(mobilep) lastNameLeft">
                      <h4>您需要幫助嗎？</h4>
                      <h5>我們就在這裡。</h5>
                      <ul class="links">
                        <li><a href="mailto:info@ceculasvegas.com">info@ceculasvegas.com</a></li>
                        <li>电话 : +1 702 929 8888</li>
                        <li>电话 : +1 702 415 5000</li>
                        <li>6085 W. Twain Ave suite 203</li>
                        <li>Las Vegas, NV 89103</li>
                      </ul>
                    </section>


                  </div>
                </div>
                <?php
                include "../sets/footer.php"
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
