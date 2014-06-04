<?php
	session_start();
    mysql_connect('localhost', 'root', 'qwer1234');
    mysql_select_db('cliquedb');
    
    $s_first_name = $_POST['first_name'];
    $s_last_name = $_POST['last_name'];
    $s_email = $_POST['email'];
    $s_password = $_POST['password'];
    $s_location = $_POST['location'];
    $s_birthday = $_POST['birthday'];
 #   $s_picture_url = $_POST['picture_url'];

    $emailQuery = mysql_query("select * from users where email ='$s_email'");
    $count = mysql_num_rows($emailQuery);
    if($count == 1) {
        echo "This Email is used";
    } else {
       $createAccount = mysql_query("insert into users(first_name,last_name,email,password,birthday) values ('$s_first_name','$s_last_name','$s_email','$s_password','$s_birthday')");
       echo "buah";
       echo $createAccount;
       if($createAccount == 1) {
          header('profile.php');
          $queryForId = mysql_query("select id from users where email = '$s_email'");
          $element = mysql_fetch_array($queryForId);
          $_SESSION['first_name'] = $s_first_name;
          $_SESSION['last_name'] = $s_last_name;
          $_SESSION['id'] = $element['id'];
          header('location: http://54.187.133.121/profile.php');
	} else {
          echo "failed to add";
       }
    }
?>
