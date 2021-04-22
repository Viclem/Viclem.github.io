<?php
  use PHPMailer\PHPMailer\PHPMailer;

  $email = $_POST['email'];
  $name = $_POST['name'];
  $body = $_POST['message'];
  $subject = "Nalouette nouveau message!";
  /*
  $email = "hellooclem.5@gmail.com";
  $name = "Violette";
  $subject = "coucouu peticha";
  $body = "Coucou mon peticha comment ca va ? tu veux un bisou?";
*/
  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();
  //SMTP Settings
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "hellooclem.5@gmail.com";
  $mail->Password = "gmailClem5";
  $mail->Port = 465; //587
  $mail->SMTPSecure = "ssl"; //tls

  //Email Settings
  $mail->isHTML(true);
  $mail->setFrom("hellooclem.5@gmail.com", $name);
  $mail->addReplyTo($email, $name);
  $mail->addAddress("hellooclem.5@gmail.com");
  $mail->Subject = $subject;
  $mail->Body = $body;

  if ($mail->send()) {

    header("Refresh:3; url=confirm_message.html");
  }


?>
