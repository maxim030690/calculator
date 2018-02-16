<?php

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

if(isset($_POST)){

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$location = $_POST['location'];
$looking = $_POST['looking'];
$approximate = $_POST['approximate'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alan.harder.jointoit@gmail.com';                 // SMTP username
$mail->Password = '123456789!';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('maxim030690@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Calculator';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

$mail->Body = '<table>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>Name: </td><td>'.$name.'</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>Phone: </td><td>'.$phone.'</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<td>Email:</td><td>'.$email.'</td>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>Location: </td><td>'.$location.'</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<td>Looking: </td><td>'.$looking.'</td>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>Approximate: </td><td>'.$approximate.'</td>';
$mail->Body .= '</tr>';
$mail->Body .= '</table>';

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}
