<?php

require "../vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
function SendMail($recepient){
    

$subject="You've Joined Our Platform!";
$message="Congrats you are added to the platform by the admins";
$mail = new PHPMailer(true);
try {
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "osaad4899@gmail.com";
$mail->Password = "xcvx cxsl tgqk vlnh
";

$mail->setFrom('osaad4899@gmail.com','Omar');
$mail->addAddress($recepient);

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();
echo "Mail has been sent successfully!";
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
