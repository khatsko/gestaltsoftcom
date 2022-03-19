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
            <li class="active">How to Use</li>
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
                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="/gestalt-keylogger/" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="/gestalt-keylogger/how-to-use/" role="tab" aria-controls="pills-profile" aria-selected="false">How to Use</a>
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

                <h3 class="tab-title">How to Use Gestalt KeyLogger</h3>

<p>
The content of this article:
<ol>
  <li><a href="#item1">Download and install.</a></li>
  <li><a href="#item2">Launching the program and reviewing the main program window.</a></li>
  <li><a href="#item3">Menu in the tray.</a></li>
  <li><a href="#item4">Report window.</a></li>
  <li><a href="#item5">Settings window.</a></li>
  <li><a href="#item6">Limitations of unregistered copy of the program.</a></li>
  <li><a href="#item7">Registration of the program.</a></li>
</ol>
</p>
<br />
<h2 id="item1">1. Download and install.</h2>
<p>
Download <a href="/gestalt-keylogger/files/GestaltKeyLoggerSetup.exe">the latest version of Gestalt KeyLogger</a> and run it. The installation wizard opens, which installs the program on your computer.
</p>
<img src="/gestalt-keylogger/files/screen_setup1.jpg" />
<br /><br />
<p>
Go through all the installation steps and run the program itself.
</p>
<img src="/gestalt-keylogger/files/screen_setup2.jpg" />
<br /><br />

<br />
<h2 id="item2">2. Launching the program and reviewing the main program window.</h2>

<p>
After starting Gestalt KeyLogger, the main program window will appear.
</p>
<b>Main program window</b>
<br />
<img src="/gestalt-keylogger/files/screen.jpg" />
<br /><br />
<p>
In the middle part of the window is a report with the start time of the program, the beginning and end of the recording.
</p>
<p>
At the bottom there is a row of 6 buttons:
<ul>
  <li>"Start recording" - this button starts recording keystrokes on the keyboard. If the button is highlighted (as now in the screenshot), then keystrokes are recorded. Automatic start of recording at program start is configured in <a href="#item5">the "Settings" window</a>.</li>
  <li>"Stop recording" - stops recording keyboard keys.</li>
  <li>"Show report" - this button opens a window with a <a href="#item4">report of the pressed keyboard keys</a>.</li>
  <li>"Settings" - this button opens <a href="#item5">the settings window</a>.</li>
  <li>"Additional" - this button shows an additional pop-up menu.</li>
  <li>"Stop and exit" - this button stops recording and exits the program.</li>
</ul>
</p>

<br />
<h2 id="item3">3. Menu in the tray.</h2>
<p>
When launched, Gestalt KeyLogger places its icon in the tray. Open the pop-up menu in the tray, find the icon and right-click on it. A popup menu will appear:
</p>
<b>Tray menu</b>
<br />
<img src="/gestalt-keylogger/files/screen_traymenu.jpg" />

<p>
</p>

<br />
<h2 id="item4">4. Report window.</h2>
<p>
There are 2 ways to show a window with a report of keystrokes:
<ol>
<li>In the main window, click the "Show report" button.</li>
<li>Call the pop-up menu in the tray and click on the menu item "Show report".</li>
</ol>
</p>
<p>
A window appears with a report of the keys pressed on the keyboard:
</p>
<b>Report window</b>
<br />
<img src="/gestalt-keylogger/files/screen_report.jpg" />
<br /><br />
<p>
At the top of the window is a calendar. Below is a table with a report of the pressed buttons. This table has 3 columns:
</p>
<p>
<ol>
<li>"Date and time" - date and time of each new event</li>
<li>"Window title" - the title of the window in which each event occurred</li>
<li>"Keystroke" - the keys on the keyboard that were pressed</li>
</ol>
</p>
<p>
When you select a date on the calendar, the report will change for each selected date.
</p>

<br />
<h2 id="item5">5. Settings window.</h2>
<p>
To open the settings window, click the "Settings" button in <a href="#item2">the main window</a>.
</p>
<p>
A window will appear:
</p>
<b>Settings window</b>
<br />
<img src="/gestalt-keylogger/files/screen_settings.jpg" />

<br /><br />
<h2 id="item6">6. Limitations of unregistered copy of the program.</h2>
<p>
Restriction of an unregistered version of the program: shows a report <b>only for the last 10 days</b>.
</p>

<br />
<h2 id="item7">7. Registration of the program.</h2>
<p>
</p>


              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h3 class="tab-title">Product Specifications</h3>
                <table class="table table-bordered product-table">
                  <tbody>
                    <tr>
                      <td>Seller Price</td>
                      <td>$450</td>
                    </tr>
                    <tr>
                      <td>Added</td>
                      <td>26th December</td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td>Dhaka</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td>Condition</td>
                      <td>Used</td>
                    </tr>
                    <tr>
                      <td>Model</td>
                      <td>2017</td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td>Dhaka</td>
                    </tr>
                    <tr>
                      <td>Battery Life</td>
                      <td>23</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                <h3 class="tab-title">Product Review</h3>
                <div class="product-review">
                    <div class="media">
                      <!-- Avater -->
                      <img src="/images/user/user-thumb.jpg" alt="avater">
                      <div class="media-body">
                        <!-- Ratings -->
                        <div class="ratings">
                          <ul class="list-inline">
                            <li class="list-inline-item">
                              <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">
                              <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">
                              <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">
                              <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">
                              <i class="fa fa-star"></i>
                            </li>
                          </ul>
                        </div>
                        <div class="name">
                          <h5>Jessica Brown</h5>
                        </div>
                        <div class="date">
                          <p>Mar 20, 2018</p>
                        </div>
                        <div class="review-comment">
                          <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape riamipsa eaque.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="review-submission">
                      <h3 class="tab-title">Submit your review</h3>
                      <!-- Rate -->
                      <div class="rate">
                        <div class="starrr"></div>
                      </div>
                      <div class="review-submit">
                        <form action="#" class="row">
                          <div class="col-lg-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                          </div>
                          <div class="col-lg-6">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                          </div>
                          <div class="col-12">
                            <textarea name="review" id="review" rows="10" class="form-control" placeholder="Message"></textarea>
                          </div>
                          <div class="col-12">
                            <button type="submit" class="btn btn-main">Sumbit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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
            <a href="/gestalt-keylogger/GestaltKeyLoggerSetup.exe" class="btn btn-transparent-white">Download the latest version</a>
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
