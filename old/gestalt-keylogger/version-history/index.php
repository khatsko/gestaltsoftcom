<?php
  $title = 'GestaltSoft - Modern and high-quality desktop software';

  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'header.php');
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/#products">Products</a></li>
          <li><a href="/gestalt-keylogger/">Gestalt KeyLogger</a></li>
          <li>Version History</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Product-page Section ======= -->
    <section id="product-page" class="product-page section-bg" style="padding-top:0;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gestalt KeyLogger</h2>
        </div>

        <div class="row">

          <div class="col-xl-9 col-lg-9 col-md-9 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">

          <div class="box-wrap">

            <div id="box-four">
            <!-- content for panel -->
      
            <ul class="tabs group">
              <li><a href="/gestalt-keylogger/">Overview</a></li>
              <li><a href="/gestalt-keylogger/how-to-use/">How to Use</a></li>
              <li class="cur"><a href="/gestalt-keylogger/version-history/">Version History</a></li>
              <li><a href="/gestalt-keylogger/download/">Download</a></li>
              <li><a href="/gestalt-keylogger/order/">Order</a></li>
            </ul>
          </div>

        </div>

            <div class="icon-box">
              <h3>Version History</h3>

<br />

<?php include "../../gestalt-keylogger/version-history.inc"; ?>

            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-3 align-items-stretch mt-3 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">

<?php include "../../gestalt-keylogger/version-block.inc"; ?>

          </div>


        </div>

      </div>
    </section><!-- End Product-page Section -->



  </main><!-- End #main -->


<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'footer.php');
?>
