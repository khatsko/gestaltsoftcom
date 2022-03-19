<?php
  $title = 'GestaltSoft - Modern and high-quality desktop software';

  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'header.php');
?>


<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <ol class="breadcrumb">
            <li>
              <a href="/">
                <i class="ion-ios-home"></i>
                Home
              </a>
            </li>
            <li>&nbsp;&gt;&nbsp;</li>
            <li class="active">Products</li>
            <li>&nbsp;&gt;&nbsp;</li>
            <li class="active"><a href="/gestalt-keylogger/">Gestalt KeyLogger</a></li>
            <li>&nbsp;&gt;&nbsp;</li>
            <li class="active">Overview</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section><!--/#Page header-->

<section class="section bg-gray">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <!-- Left sidebar -->
      <div class="col-md-8">
        <div class="product-details">

          <div class="product-meta">

          </div>
          <div class="content">
            <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="/gestalt-keylogger/" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="/gestalt-keylogger/how-to-use/" role="tab" aria-controls="pills-profile" aria-selected="false">How to Use</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="/gestalt-keylogger/version-history/" role="tab" aria-controls="pills-contact" aria-selected="false">Version History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="/gestalt-keylogger/download/" role="tab" aria-controls="pills-contact" aria-selected="false">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="/gestalt-keylogger/order/" role="tab" aria-controls="pills-contact" aria-selected="false">Order</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <h3 class="tab-title">Gestalt KeyLogger Overview</h3>
                <p>
                  <b>Gestalt KeyLogger</b> is an easy-to-use and practical tool for tracking all keypresses on your computer keyboard.
                </p>
                <p>
                  <b>Gestalt KeyLogger</b> records all keys pressed in a log file: symbols, function keys (F1, Escape, etc.), lock keys (Caps Lock, Num Lock, Scroll Lock), key combinations (with Alt, Ctrl, Shift), name of the application where the keys were pressed, and the date and time of each keypress.
                </p>
                <p>
                  The program provides a useful view of keyboard activity: it displays the date and time of each keypress, and the names of the applications in which the keys were pressed. The program has an intuitive interface and uses very little system memory.
                </p>
                <br />
                <h3 class="tab-title">Key features</h3>
                <ul>
                  <li>Logs all the keyboard events, including function keys such as F1, Home etc.</li>
                  <li>Perfect logger interface</li>
                  <li>Built-in intelligent logger engine, very very low CPU & memory consuming</li>
                </ul>

                <br />
                <h3 class="tab-title">Main program window</h3>

                <img src="/gestalt-keylogger/files/screen.jpg" />

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="sidebar">

          <div class="widget user">
            <h5 class="widget-header">News</h5>

              <p>
                <b>Version 1.0.0</b> released on <span style="color: #59d659;">March 25, 2020</span>
                <ul>
                  <li>First release</li>
                </ul>
              </p>

          </div>

          <div class="widget coupon text-center">
            <a href="/gestalt-keylooger/files/GestaltKeyLoggerSetup.exe" class="btn btn-transparent-white">Download the latest version</a>
          </div>

        </div>
      </div>
      
    </div>
  </div>
  <!-- Container End -->
</section>


<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'footer.php');
?>
