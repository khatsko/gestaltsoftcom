<?php
  $title = 'GestaltSoft - Modern and high-quality desktop software';

  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'header.php');
?>

<?php
  $error = '';
  $isSent = false;
?>

<?php

// Функция отправки сообщения, в случае, если CAPTCHA пройдена
function sendMail() {

  $vars = $_POST;

  if (isset($vars['email']) && $vars['email']!='') {

    $url = 'https://api.sendgrid.com/';
    $user = 'khatsko';
    $pass = 'Fritz1982';

    $message = '';
    $message .= 'Form from http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '<br /><br />';
    $message .= 'Name: ' . $vars['name'] . '<br />';
    $message .= 'E-mail: ' . $vars['email'] . '<br />';
    $message .= 'Message: ' . $vars['message'] . '<br /><br />';

    $ip = $_SERVER['REMOTE_ADDR'];
    $hostname = gethostbyaddr($ip);

    $message .= 'IP: ' . $ip . '<br />';
    $message .= 'Host: ' . gethostbyaddr($ip) . '<br />';

    $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'khatsko@gmail.com',
      'subject' => 'Form from http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],

      'html' => $message,

      'text' => $vars['message'],

      'from' => 'torerosoft@gmail.com',
      'fromname' => 'GestaltSoft',

      'replyto' => $vars['email'],
    );

    $request = $url . 'api/mail.send.json';

    // Generate curl request
    $session = curl_init($request);

    // Tell curl to use HTTP POST
    curl_setopt ($session, CURLOPT_POST, true);

    // Tell curl that this is the body of the POST
    curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

    // Tell curl not to return headers, but do return the response
    curl_setopt($session, CURLOPT_HEADER, false);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

    // obtain response
    $response = curl_exec($session);
    curl_close($session);

  }
}

?>





<?php

if (!empty($_POST)) {

  // Получаем пост от recaptcha
  $recaptcha = $_POST['g-recaptcha-response'];
 
  // Сразу проверяем, что он не пустой
  if (!empty($recaptcha)) {

    // Получаем HTTP от recaptcha
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    // Сюда пишем СЕКРЕТНЫЙ КЛЮЧ, который нам присвоил гугл
    $secret = '6LdXIOQUAAAAABYt47MBhadT6zZIwjIFXM2zem_m';
    // Формируем utl адрес для запроса на сервер гугла
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
 
    // Инициализация и настройка запроса
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");

    // Выполняем запрос и получается ответ от сервера гугл
    $curlData = curl_exec($curl);
 
    curl_close($curl); 

    // Ответ приходит в виде json строки, декодируем ее
    $curlData = json_decode($curlData, true);
 
    // Смотрим на результат
    if ($curlData['success']) {
      // Сюда попадем если капча пройдена, дальше выполняем обычные
      // действия(добавляем коммент или отправляем письмо) с формой

      $error = '';
      sendMail();
      $isSent = true;
 
    } else {
      // Капча не пройдена, сообщаем пользователю, все закрываем стираем и так далее

      $error = 'Wrong CAPTCHA';

    }
  }
  else {
    // Капча не введена, сообщаем пользователю, все закрываем стираем и так далее

    $error = 'Invalid CAPTCHA';

  }

}

?>



<div class="container-fluid pb-4 pt-4 paddding">
  <div class="container paddding">
    <div class="row mx-0">
      <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
        <div>
          <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Contact Us</div>
        </div>
        <div class="row pb-4">








<p>
<b>Your feedback is extremely important to us.</b> Telling us about your experience, good or bad, means that we can better understand what is important to you, what we are doing well and where there are areas where we need to make improvements.
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

<?php
if ($isSent) {
  echo '<center><span style="color: red; font-weight: bold;">Thank you. We received your message. We will contact you as soon as possible.</span></center>';
}
?>

				<div class="widget change-email mb-0">
					<h3 class="widget-header user">Please fill out the form:</h3>

                                <form id="contact-form" method="post" role="form">

                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name" value="<?= $_POST['name'] ?>" required>
<br />
                                        <input type="email" placeholder="Your E-mail" class="form-control" name="email" id="email" value="<?= $_POST['email'] ?>" required>
<br />
                                        <textarea rows="12" style="height: 200px;" placeholder="Message" class="form-control" name="message" id="message" required><?= $_POST['message'] ?></textarea>
<br />

<!-- элемент для вывода ошибок -->
<div class="text-danger" id="recaptchaError"><strong><?= $error ?></strong></div>

<br />

    <div class="g-recaptcha" data-sitekey="6LdXIOQUAAAAAMY7oKn0EgLNtGBBpmYRG1yaQl0U"></div>

<br />

                                       <button class="btn btn-transparent">Send Message</button>
<br /><br />
                                </form>
                            </div>











        </div>
        
      </div>
      
    </div>
  </div>
</div>


<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/' . 'footer.php');
?>
