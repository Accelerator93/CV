<?php
if (isset($_POST['sendMessageButton'])){
  if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['phone']) && !empty($_POST['message']) && !empty($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $m_subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $header = "From: antonioholguin.terrazas@gmail.com" . "\r\n";
    $header .= "Reply-To: antonioholguin.terrazas@gmail.com" . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion();
  $mail = mail($email, $m_subject, $phone, $message, $header);
  $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nphone: $phone\n\nMessage: $message";
  if(!$mail)
  http_response_code(500);
  }
}
?>
