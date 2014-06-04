<?php
require("sendgrid-php/sendgrid-php.php");


$username = "byunghl";
$password = "uiop1334";

$sendgrid = new SendGrid($username, $password);
$email    = new SendGrid\Email();
$email->addTo("byunghl@uci.edu")->
	setFrom("byunghl@uci.edu")->
	setSubject('UCIHACK with SendGrid')->
	setText('Hello World!')->
	setHtml('<strong>Hello World!</strong>');

////$emails = array("foo@bar.com", "another@another.com", "other@other.com");
////$email->setTos($emails);
try {
	$response = $sendgrid->send($email);
	
} catch (Exception $e) {
	echo $e;
}
echo "hi";
?>
