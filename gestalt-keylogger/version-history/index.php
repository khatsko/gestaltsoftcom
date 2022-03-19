<?php
  $title = 'GestaltSoft - Modern and high-quality desktop software';

  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'header.php');
?>



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Gestalt KeyLogger</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>&nbsp;&gt;&nbsp;<a href="/#products">Products</a>&nbsp;&gt;&nbsp;<span>Gestalt KeyLogger</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->







    <!-- Product Details Section Begin -->
    <section class="product-details">
        <div class="container">


            <div class="row">

                <div class="col-lg-12">
                    <div class="product__details__tab">

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="/gestalt-keylogger/" role="tab" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gestalt-keylogger/how-to-use/" role="tab" aria-selected="false">How to Use</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gestalt-keylogger/download/" role="tab" aria-selected="false">Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gestalt-keylogger/order/" role="tab" aria-selected="false">Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/gestalt-keylogger/version-history/" role="tab" aria-selected="false">Version History</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

<br />

            <div class="row">




                <div class="col-lg-9 col-md-9">
                    <div class="product__details__text">

              <h3>Version History</h3>

<br />

<?php include "../../gestalt-keylogger/version-history.inc"; ?>

<br />


                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="product-details-add">

<?php include "../../gestalt-keylogger/add-block.inc"; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->



<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'footer.php');
?>
