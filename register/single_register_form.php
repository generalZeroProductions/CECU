
<?php echo '<section class="wrapper style1">   <!-- Greeting -->
  <div class="container">
    <div id="content">
        <article>
          <header>
            <h2>峰会登记 VIP  </h2>
            <p></p>
             </header>
        </article>
    </div>
  </div>







<div class="container">  <!--................................ Sets up for FLex in Row -->
  <div class="row">	<!--................................ row Holds three Blocks of content  SECTIONS -->


    <section class="8u 12u(narrower) important(narrower) lastNameLeft"> <!--   opening Block -->
      <form action="register/register_review.php" method="post">

         <section>

             <h6>您的信息</h6>

           </section>

             <section class="yourInfo">
             <div class="row 50%">
             <div class="6u 12u(mobilep)">
               <label for="firstName" class="heading"> 您的名字 </label>
               <input type="text" name="firstName" id="firstName" placeholder="名字" required></label>
             </div>
             <div class="6u 12u(mobilep)">
                 <label for="lastName" class="heading"> 您的姓名 </label>
                 <input type="text" name="lastName" id="lastName" placeholder="姓名" required></label>
             </div>
           </div>
           <div class="row 50%" >
             <div class="6u 12u(mobilep)">
               <label for="email" class="heading"> 您的電子郵件地址 </label>
               <input type="email" name="email" id="email" placeholder="電子郵" required></label>
             </div>
             <div class="6u 12u(mobilep)">
                 <label for="phone" class="heading"> 您的電話號碼 </label>
                 <input type="text" name="phone" id="phone" placeholder="電話" required></label>
             </div>

           </div>
         </section>
         <br>
         <div class="row 50%" >
        <div class="12u 12u(mobilep)">
          <input type="submit" class="button altGreen" value="结账 - $1688.00" />
        </div>
      </div>
         </form>

    </section>



    <section class="4u 12u(narrower) 12u$(mobilep) lastNameLeft">  <!--..............Closing Block.....-->
<br>
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
</section>';
?>
