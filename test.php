<?php
mysql_connect('localhost', 'root', 'qwer1234');
mysql_select_db('cliquedb');
$list_result = mysql_query('SELECT * FROM users where email = \''.mysql_real_escape_string($_GET['username']).'\' and password = \''.mysql_real_escape_string($_GET['password']).'\'');

$num_rows = mysql_num_rows($list_result);
if($num_rows == 0) {
         echo 'dfdfdf';
} else {
        echo 'dfdf';
}
?>
