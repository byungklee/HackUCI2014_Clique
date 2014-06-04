<?php
session_start();

// Server Information
$host = "localhost";
$username = "root";
$password = "qwer1234";
$db_name = "cliquedb";

// Server Connection
mysql_connect($host, $username,$password) or die("Auch!!!");
mysql_select_db($db_name);
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

// Retrieve data from form.
$userid = $_POST['username'];
$password = $_POST['password'];

// Query
$sql = "SELECT * FROM users WHERE email='$userid' and password='$password' ";

// RESULT
$result = mysql_query($sql);
$count = mysql_num_rows($result);
$person_info = mysql_fetch_array($result);
//echo "here";
//echo $person_info['first_name'].$person_info['last_name'].$person_info['id'];

if($count == 1) {
    //session_save_path('./session');
    echo "LOVE YOU <br/>";
    $_SESSION['currentUser'] = $userid;
    $_SESSION['isLogin'] = True;
    $_SESSION['first_name'] = $person_info['first_name'];
    $_SESSION['last_name'] = $person_info['last_name'];
    $_SESSION['id'] = $person_info['id'];
    $_SESSION['email'] =$person_info['email'];
    $_SESSION['picture_url'] = $person_info['picture_url'];
    header('location: http://54.187.133.121/profile.php' );
} else {
	// header('location: http://www.google.com');
	echo "Failed!";
}

?>
