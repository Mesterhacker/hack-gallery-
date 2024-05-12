<?php
$to = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$from = "m3st3r.h4cker@gmail.com";
$text = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

if ($to == '') {
    echo "error";
} else {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
    <center>
    $headers .= "From: " . $from . "\r\n";

    $subject = 'H4CK3R_B0T';
	
    $message = '<p style="font-size: 24px;color:green ; font-weight: bold;">' . $subject . '</p>';
    $message .= '<p>' . $text . '</p>';
    $message .= '<p style="color: green; ">     CHANNEL PROGRAMMING M3ST3R_H4CKER   </p>';
	$message .= '<p style="color: green;">  HTTPS://YOUTUBE.COM/M3ST3R_H4CKER   </p>';
	$message .= '<p style="color: green;">      M3ST3R_HACKER : HACKER_BOT      </p>';
        $message .= '<p style="color: green;">        RED ARMY HACKING TEAM         </p>';
	</center>
    if (mail($to, $subject, $message, $headers)) 
     {       
 echo 'true';
     } 

else {
        echo 'false';
     }
}
?>
