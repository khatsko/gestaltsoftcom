<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <link rel="icon" type="image/png" href="/favicon.png">
  
  <!-- PLUGINS CSS STYLE -->
  <link href="/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<script src=’https://www.google.com/recaptcha/api.js’></script>

</head>

<body class="body-wrapper">

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg  navigation">
          <a class="navbar-brand" href="/">
            <img src="/images/logo.png" alt="" style="padding-right:7px;"><span style="color:#111;font-size:24px;font-weight:bold;">GESTALT</span><span style="color:#8f9190;font-size:24px;font-weight:bold;">SOFT</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav ">

              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>

              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Products <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-left">
<!--
                  <a class="dropdown-item" href="/gestalt-clock/">Gestalt Clock</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-datasync/">Gestalt DataSync</a>
-->
                  <a class="dropdown-item" href="/gestalt-keylogger/">Gestalt KeyLogger</a>
<!--
                  <a class="dropdown-item" href="/gestalt-notes/">Gestalt Notes</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-paste/">Gestalt Paste</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-photoviewer/">Gestalt PhotoViewer</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-slider/">Gestalt Slider</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-timetracker/">Gestalt Timetracker</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-???/">???</a>
-->
                </div>
              </li>

              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Download <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-left">
<!--
                  <a class="dropdown-item" href="/gestalt-clock/download/">Gestalt Clock</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-datasync/download/">Gestalt DataSync</a>
-->
                  <a class="dropdown-item" href="/gestalt-keylogger/download/">Gestalt KeyLogger</a>
<!--
                  <a class="dropdown-item" href="/gestalt-notes/download/">Gestalt Notes</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-paste/download/">Gestalt Paste</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-photoview/download/">Gestalt PhotoViewer</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-slider/download/">Gestalt Slider</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-timetracker/download/">Gestalt Timetracker</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-???/download/">Gestalt ???</a>
-->
                </div>
              </li>

              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Order <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-left">
<!--
                  <a class="dropdown-item" href="/gestalt-clock/order/">Gestalt Clock</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-datasync/order/">Gestalt DataSync</a>
-->
                  <a class="dropdown-item" href="/gestalt-keylogger/order/">Gestalt KeyLogger</a>
<!--
                  <a class="dropdown-item" href="/gestalt-notes/order/">Gestalt Notes</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-paste/order/">Gestalt Paste</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-photoviewer/order/">Gestalt PhotoViewer</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-slider/order/">Gestalt Slider</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-timetracker/order/">Gestalt Timetracker</a>
-->
<!--
                  <a class="dropdown-item" href="/gestalt-???/order/">Gestalt ???</a>
-->
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/about-us/">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/contact-us/">Contact Us</a>
              </li>

<!--
              <li class="nav-item">
                <a class="nav-link" href="/forum">Forum</a>
              </li>
-->

            </ul>
<!--
            <a href="/login" class="btn btn-primary" style="width: 120px; height: 35px; padding: 5px 0 0 0; margin: 0 0 0 50px;"><i class="fa fa-sign-in"></i> Login</a>
-->
<!--
            <ul class="navbar-nav ml-auto mt-10">

              <li class="nav-item">
                <a class="nav-link login-button" href="/login">Login</a>
              </li>


              <li class="nav-item">
                <a class="nav-link add-button" href="#"><i class="fa fa-sign-in"></i> Login</a>
              </li>

            </ul>
-->

          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

