
<?php echo '<section class="wrapper style1">   <!-- Greeting -->
  <div class="container">
    <div id="content">
        <article>
          <header>
            <h2>峰会登记（共享室） </h2>
            <p>当两位共用一个房间时，您的优惠价格是$2,576，要开始共享注册，请两位填写下列表格。</p>
             </header>
        </article>
    </div>
  </div>







<div class="container">  <!--................................ Sets up for FLex in Row -->
  <div class="row">	<!--................................ row Holds three Blocks of content  SECTIONS -->


    <section class="8u 12u(narrower) important(narrower) lastNameLeft"> <!--   opening Block -->
      <form action="register/register_review_shared.php" method="post">
        <section>
           <h6>您的室友的信息</h6>
        </section>
   <!-- Content -->

         <section class="guestInfo">
           <div class="row 50%">
               <div class="6u 12u(mobilep)">
                 <label for="guestFirstName" class="heading" > 您的室友的名字 </label>
                 <input type="text" name="guestFirstName" id="guestFirstName"   placeholder="名字" required></label>
               </div>
               <div class="6u 12u(mobilep)">
                   <label for="guestLastName" class="heading"> 您的室友的姓名 </label>
                   <input type="text" name="guestLastName" id="guestLastName" placeholder="姓名" required></label>
               </div>
             </div>
             <div class="row 50%">
               <div class="6u 12u(mobilep)">
                 <label for="guestEmail" class="heading"> 您的室友的電子郵件地址 </label>
                 <input type="email" name="guestEmail" id="guestEmail" placeholder="電子郵" required></label>
               </div>
               <div class="6u 12u(mobilep)">
                   <label for="phone" class="heading"> 您的室友的電話號碼 </label>
                   <input type="text"  name="guestPhone" id="guestPhone" placeholder="電話" required></label>
               </div>
             </div>
           </section>

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
          <input type="submit" class="button altGreen" value="结账 - $2576.00" />
        </div>
      </div>
         </form>

    </section>



    <section class="3u 6u(narrower) 12u$(mobilep)">
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
