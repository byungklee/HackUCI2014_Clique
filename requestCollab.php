<?php
session_start();

$host = "localhost";
$username = "root";
$password = "qwer1234";
$db_name = "cliquedb";

// Server Connection
mysql_connect($host, $username,$password) or die("Auch!!!");
mysql_select_db($db_name);
$project_id = $_GET['project_id'];
$user_id = $_SESSION['id'];
$sql = mysql_query("insert into user_project (user_id,project_id,status) values ($user_id,$project_id,0)");
echo "dfdfdf";
echo $_SESSION['s_key'];

if($sql == 1) {
	header("location: http://54.187.133.121/sendEmail.php?project_id=$project_id");
}
else {
	$temp = $_SESSION['s_key'];
	header("location: http://54.187.133.121/collab.php?keyword=$temp");
}
?>
