<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// Verify email
if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST['element_2'])) {
    echo "Invalid email";
    exit;
}


$services_text = '';
$services = [];
if(isset($_POST['element_9_1']) && $_POST['element_9_1'] == 1) {
    $services[] =  'Manicure';
}
if(isset($_POST['element_9_2']) && $_POST['element_9_2'] == 1) {
    $services[] =  'Pedicure';
}
if(isset($_POST['element_9_3']) && $_POST['element_9_3'] == 1) {
    $services[] =  'Spa Pedicure';
}
if(isset($_POST['element_9_4']) && $_POST['element_9_4'] == 1) {
    $services[] =  'Waxing';
}
if(isset($_POST['element_9_5']) && $_POST['element_9_5'] == 1) {
    $services[] =  'Massage';
}

$content = '';

$content .= '<b>Name:</b>' . $_POST['element_1_1'] . ' '. $_POST['element_1_2'] . '<br/>';

$content .= '<b>Email:</b>' . $_POST['element_2'] . '<br/>';
$content .= '<b>Phone:</b>' . $_POST['element_3_1'] . '-'. $_POST['element_3_2'] . '-'. $_POST['element_3_3'] . '<br/>';
$content .= '<b>Select Services:</b>' . implode(',', $services) . '<br/>';
$content .= '<b>Appointment Date:</b>' . $_POST['element_4_1'] . '/'. $_POST['element_4_2'] . '/'. $_POST['element_4_3'] . '<br/>';
$content .= '<b>Appointment Time:</b>' . $_POST['element_5_1'] . ':'. $_POST['element_5_2'] . ':'. $_POST['element_5_3']. ' '. $_POST['element_5_4'] . '<br/>';
$content .= '<b>Numbers of Customers:</b>' . $_POST['element_7'] . '<br/>';
$content .= '<b>Message:</b>' . $_POST['element_8'] . '<br/>';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;// SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.yourwebhosting.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@nailproject.com';                     //SMTP username
    $mail->Password   = 'Am2023!!';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@nailproject.com', 'Nail Project');  // 发送邮件的地址
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('amstudio.usa@gmail.com');               // 接收邮件的地址
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Please note that your appointment will only be confirmed if you received a text from us. If you did not received or hear from us that mean the time slot you chose is not available. Please call us before going in. Thank you!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}