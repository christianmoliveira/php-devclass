<?php 

// Somente com PHP
// function send(object $data)
// {
//   $to = 'christiannmenezes@gmail.com';
//   $subject = $data->subject;
//   $message = $data->message;
//   $headers = "From: {$data->email}" . "\r\n" .
//     'Reply-To: christian97_6@live.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

//   mail($to, $subject, $message, $headers);
// }

// Com PHPMailer
function send(object $data)
{
  $email = new PHPMailer\PHPMailer\PHPMailer;
  
}