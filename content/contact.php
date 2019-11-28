<?php
echo '<section class="wrapper style7">
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
      <h3>联系我们</h3>
      <form action="cecu_response.php" method="post">
        <div class="row 50%">
          <div class="6u 12u(mobilep)">
            <input type="text" name="name" id="name" placeholder="名称" />
          </div>
          <div class="6u 12u(mobilep)">
            <input type="email" name="email" id="email" placeholder="电子邮件" />
          </div>
        </div>
        <div class="row 50%">
          <div class="12u">
            <textarea name="message" id="message" placeholder="信息" rows="5"></textarea>
          </div>
        </div>
        <div class="row 50%">
          <div class="12u">
            <ul class="actions">
              <li><input type="submit" class="button alt" value="发信息" /></li>
            </ul>
          </div>
        </div>
      </form>
    </section>
    <section class="3u 6u(narrower) 12u$(mobilep)">
      <h3>比似乎更接近</h3>
        <span class="image featured"><img src="images/fabLasVegas.jpg" alt="" /></span>
    </section>
  </div>
</div>
</section>';?>
