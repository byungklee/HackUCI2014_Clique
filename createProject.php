<?php
session_start();
mysql_connect('localhost', 'root', 'qwer1234');
mysql_select_db('cliquedb');
#$insert_project = mysql_query('insert into projects (title,creator,description,location) values (\''.mysql_real_escape_string($_POST['title']).'\','.mysql_real_escape_string($_POST['id']).',\''
#					.mysql_real_escape_string($_POST['description']).'\',\''.mysql_real_escape_string($_POST['location']).'\')');
$s_title = $_POST['title'];

$s_creator = $_SESSION['id'];
echo $s_creator;
$s_description = $_POST['description'];
$s_github = $_POST['github'];
echo $s_title.$s_creator.$s_description.$s_github;
$insert_project = mysql_query("insert into projects ( title,creator, description, github ) values ('$s_title',$s_creator,'$s_description','$s_github')");
#$insert_project = mysql_query("insert into projects ( title,creator, description, github ) values ('1',1,'3','4')");
echo $insert_project;
if($insert_project == 1) {
   
   echo "success";
   header("location: http://54.187.133.121/manage_proj.php");
} else { 
   echo "fail";
  header("location: http://54.187.133.121/create.php");
   
}
