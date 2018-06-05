<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST["phone"];
	$message = $_POST['message'];
	$error = '';
	
	if(!$name) {$error .= 'Fill your name ';}
	if(!$email) {$error .= 'Fill your e-mail ';}
	if(!$phone) {$error .= 'Fill your phone ';}
	if(!$message || strlen($message) < 1) {$error .= 'Fill your message ';}
	
	if(!$error) {
		$address = "kolga210921@gmail.com";    
		$mes = "Name: ".$name."\n\nPhone: " .$phone."\n\nMessage: ".$message."\n\n";
		$send = mail ($address, $phone, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>