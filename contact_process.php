<?php
// Sécurité : utiliser $_POST plutôt que $_REQUEST
$to = "hasa.mirlind@gmail.com";

$from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
$number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
$cmessage = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$headers  = "From: {$from}\r\n";
$headers .= "Reply-To: {$from}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_subject = "You have a message from your Bitmap Photography.";

$logo = 'img/logo.png';
$link = '#';

$body = "
<!DOCTYPE html>
<html lang='en'>
<head><meta charset='UTF-8'><title>Mail</title></head>
<body>
<table style='width:100%;'>
<thead style='text-align:center;'>
<tr><td colspan='2' style='border:none;'>
<a href='{$link}'><img src='{$logo}' alt='Logo'></a><br><br>
</td></tr></thead>
<tbody>
<tr><td><strong>Name:</strong> {$name}</td><td><strong>Email:</strong> {$from}</td></tr>
<tr><td><strong>Subject:</strong> {$subject}</td><td><strong>Phone:</strong> {$number}</td></tr>
<tr><td colspan='2'>{$cmessage}</td></tr>
</tbody></table>
</body></html>
";

$send = mail($to, $email_subject, $body, $headers);

if ($send) {
    echo "Message sent successfully.";
} else {
    echo "Message sending failed.";
}
?>
