<?php
  $title = 'GestaltSoft - Modern and high-quality desktop software';

  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'header.php');
?>

  <!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
            <div class="hero__text">
              <span>Welcome to GestaltSoft</span>
              <h2>Modern and high-quality desktop software</h2>
              <p>We specialize in the development of high-quality desktop software applications</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->



  <!-- Blog Section Begin -->
  <section class="from-blog spad" id="products">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title from-product-title">
            <h2>Our Products</h2>
          </div>
        </div>
      </div>
      <div class="row" style="display: flex;">


        <!-- Begin product item  -->
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="product-item">

            <div class="product-item-header">
              <h5><a href="/gestalt-keylogger/">Gestalt KeyLogger</a></h5>
            </div>

            <div class="product-item-pic">
              <a href="/gestalt-keylogger/"><img src="./gestalt-keylogger/images/screen.jpg" alt="" /></a>
            </div>

            <div class="product-item-text">
              <p>Gestalt KeyLogger records all the keystrokes pressed on the computer, the time it was pressed, and the names of the applications in which these keys were pressed.</p>

              <ul>
                <li><i class="fa fa-clock-o"></i> Version: 1.0.1</li>
                <li><i class="fa fa-calendar-o"></i> Date: January 15, 2022</li>
              </ul>

              <div style="text-align: right;">
                <a href="/gestalt-keylogger/" class="product-btn">READ MORE <span class="arrow_right"></span></a>
              </div>

            </div>
          </div>
        </div>
        <!-- End product item  -->


        <!-- Begin product item  -->
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="product-item">

            <div class="product-item-header">
              <h5><a href="/gestalt-clock/">Gestalt Clock</a></h5>
            </div>

            <div class="product-item-pic">
              <a href="/gestalt-clock/"><img src="./gestalt-keylogger/images/screen.jpg" alt="" /></a>
            </div>

            <div class="product-item-text">
              <p>Gestalt KeyLogger records all the keystrokes pressed on the computer, the time it was pressed, and the names of the applications in which these keys were pressed.</p>

              <ul>
                <li><i class="fa fa-clock-o"></i> Version: 1.0.0</li>
                <li><i class="fa fa-calendar-o"></i> Date: January 16, 2022</li>
              </ul>

              <div style="text-align: right;">
                <a href="/gestalt-clock/" class="product-btn">READ MORE <span class="arrow_right"></span></a>
              </div>

            </div>
          </div>
        </div>
        <!-- End product item  -->


      </div>
    </div>
  </section>
  <!-- Blog Section End -->


<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'footer.php');
?>
