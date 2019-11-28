
<?php echo '<section class="wrapper style1">   <!-- Greeting -->
  <div class="container">
    <div id="content">
        <article>
          <header>
            <h2>Shared Room Registration  </h2>
            <p>When you come with a guest and the two of you share a room, the total price
              is reduced $2,576.oo for two tickets. To begin your shared registration,
              please fill out the form below for you and guest.</p>
             </header>
        </article>
    </div>
  </div>







<div class="container">  <!--................................ Sets up for FLex in Row -->
  <div class="row">	<!--................................ row Holds three Blocks of content  SECTIONS -->


    <section class="8u 12u(narrower) important(narrower) lastNameLeft"> <!--   opening Block -->
      <form action="register/register_review_shared.php" method="post">
        <section>
           <h6>Your Guest\'s Information</h6>
        </section>
   <!-- Content -->

         <section class="guestInfo">
           <div class="row 50%">
               <div class="6u 12u(mobilep)">
                 <label for="guestFirstName" class="heading" > Guest First Name </label>
                 <input type="text" name="guestFirstName" id="guestFirstName"   placeholder="Name" required></label>
               </div>
               <div class="6u 12u(mobilep)">
                   <label for="guestLastName" class="heading"> Guest Last Name </label>
                   <input type="text" name="guestLastName" id="guestLastName" placeholder="Last Name" required></label>
               </div>
             </div>
             <div class="row 50%">
               <div class="6u 12u(mobilep)">
                 <label for="guestEmail" class="heading"> Guest Email </label>
                 <input type="email" name="guestEmail" id="guestEmail" placeholder="Email" required></label>
               </div>
               <div class="6u 12u(mobilep)">
                   <label for="phone" class="heading"> Guest Phone </label>
                   <input type="text"  name="guestPhone" id="guestPhone" placeholder="Phone" required></label>
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
               <input type="text" name="firstName" id="firstName" placeholder="First Name" required></label>
             </div>
             <div class="6u 12u(mobilep)">
                 <label for="lastName" class="heading"> Last Name </label>
                 <input type="text" name="lastName" id="lastName" placeholder="Last Name" required></label>
             </div>
           </div>
           <div class="row 50%" >
             <div class="6u 12u(mobilep)">
               <label for="email" class="heading"> Email </label>
               <input type="email" name="email" id="email" placeholder="Email" required></label>
             </div>
             <div class="6u 12u(mobilep)">
                 <label for="phone" class="heading"> Phone </label>
                 <input type="text" name="phone" id="phone" placeholder="Phone" required></label>
             </div>

           </div>
         </section>
         <br>
         <div class="row 50%" >
        <div class="12u 12u(mobilep)">
          <input type="submit" class="button altGreen" value="Check Out - $2576.00" />
        </div>
      </div>
         </form>

    </section>



    <section class="4u 12u(narrower) 12u$(mobilep) lastNameLeft">  <!--..............Closing Block.....-->
    <br>
      <h4>Need Help?</h4>
      <h5> We\'re right here.</h5>
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
</section>';
?>
