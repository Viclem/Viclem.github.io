<?php
  use PHPMailer\PHPMailer\PHPMailer;

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $body = $_POST['message'];

  $subject = "Nalouettecreation : nouveau message";

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

  for($var=0;$var<count($_FILES['attachment']['name']);$var++){
     $mail->AddAttachment($_FILES['attachment']['tmp_name'][$var], $_FILES['attachment']['name'][$var]);
  }

  $mail->Subject = $subject;
  $mail->Name = $name;
  $mail->Body = "
            <html>
                <body>
                <img src='https://github.com/Viclem/Viclem.github.io/blob/main/images/Logo/Nalouette_logo.png?raw=true' width='40'/>
                <h3>Nouveau message via nalouettecreation.com</h3>
                  <table style='width:800px;'>
                      <tbody>
                          <tr>
                              <td style='width:100px'><b>Nom : <b></td>
                              <td style='width:700px'>$name</td>
                          </tr>
                          <tr>
                              <td style='width:100px'><b>Email : <b></td>
                              <td style='width:700px'>$email</td>
                          </tr>
                          <tr>
                              <td style='width:100px'><b>Téléphone : <b></td>
                              <td style='width:700px'>$phone</td>
                          </tr>
                          <tr>
                              <td style='width:100px; vertical-align: top;'><b>Message : <b></td>
                              <td style='width:700px; text-align: justify;'>$body</td>
                          </tr>
                      </tbody>
                  </table>
                </body>
            </html>
            ";

  if ($mail->send()) {

    header("Refresh:3; url=confirm_message.html");
  }


?>
