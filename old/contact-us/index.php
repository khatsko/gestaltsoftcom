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
          <li>Contact Us</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

          <h2>Contact Us</h2>

<p>
<b>Your feedback is extremely important to us.</b>
</p>
<p>
Telling us about your experience, good or bad, means that we can better understand what is important to you, what we are doing well and where there are areas where we need to make improvements.
</p>
<p>
Your feedback can help us to improve and enhance our software. When we do something well or could do something better, we want to hear about it. Your stories and feedback really count.
</p>
<p>
<b>Our goal is to make each of our products the best in their field.</b>
</p>
<p>
If you have any questions, ideas or suggestions, please do not hesitate to contact us.
</p>
<br />

        <div class="row">

          <div class="col-lg-12 mt-12 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'footer.php');
?>
