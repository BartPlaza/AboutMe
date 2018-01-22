<?php

$to = 'grzebyk44@gmail.com';
$subject = 'Wiadomość ze strony wizytówki';
$message = $_POST['name'] .' '. $_POST['phone'] . 'wysłał wiadomość: ' . $_POST["message"];
$header = 'Od: ' . $_POST['email'];

if (mail($to, $subject, $message, $header)){
	echo true ;
} else {
	echo false;
}
?>