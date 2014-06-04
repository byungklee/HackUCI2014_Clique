<?php
session_start();
$host = "localhost";
$username = "root";
$password = "qwer1234";
$db_name = "cliquedb";

// Server Connection
mysql_connect($host, $username,$password) or die("Auch!!!");
mysql_select_db($db_name);
require("sendgrid-php/sendgrid-php.php");
$pid = $_GET['project_id'];
echo "pid:".$pid;
$myEmail = $_SESSION['email'];
$sql = mysql_query("select * from projects where id = $pid");
$element = mysql_fetch_array($sql);
$creator = $element['creator'];
echo "creator".$creator;
$sql = mysql_query("select * from users where id = $creator");
$element = mysql_fetch_array($sql);
$targetEmail = $element['email'];

echo "tareamil".$targetEmail;
echo "myemail".$myEmail;

$username = "byunghl";
$password = "uiop1334";

$sendgrid = new SendGrid($username, $password);
$email    = new SendGrid\Email();
$email->addTo($targetEmail)->
	setFrom($myEmail)->
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
$s_key = $_SESSION['s_key'];
echo "key:".$s_key;
header("location: http://54.187.133.121/collab.php?keyword=$s_key");
?>
