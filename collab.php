<?php
session_start();
if($_SESSION['isLogin'] == false) {
        header("location: http://54.187.133.121/signin.php");
}
$_SESSION['s_key'] = $_GET['keyword'];
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Clique | Clique Search</title>

    <!-- Bootstrap core CSS 
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  -->

     <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="css/profile.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style id="holderjs-style" type="text/css"></style></head>

  <body style="">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class ="navlogo"><a class="navbar-brand" href="index.php"><img src="images/climini.png"></a></div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="signout.php">Sign Out</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="GET" action="collab.php">
            <input type="text" name="keyword" class="form-control" placeholder="Find Cliques">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <div class = "images">

<img src=<?php echo '"'.$_SESSION['picture_url'].'"' ; ?> class="img-responsive" alt="50x50" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojZmZmO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4="></div>
            <div class="username"><li><?php echo '@'.$_SESSION['first_name'].'&nbsp'.$_SESSION['last_name'];?></li><br></div>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="friends.php">Friends</a></li>
            <li class="active"><a href="collab.php">Cliques</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Find Cliques</h1>    
          <form class="col-xs-11" method="GET" action="collab.php">
              <input type="text" name="keyword" class="form-control" placeholder="Find Cliques">
            </form>
          <br><br><br>
          <div class="table-responsive">
            <div class="panel panel-default">
            <div class="panel-heading"> Search Results: <b>"<?php echo $keyword = $_GET['keyword'];?>"</b> </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Clique Type</th>
                  <th>Description</th>
                  <th>Clique Leader</th>
                  <th>Github</th>
		  <th>Send Request</th>
                </tr>
              </thead>
              <tbody>
<?php
	$host = "localhost";
$username = "root";
$password = "qwer1234";
$db_name = "cliquedb";

// Server Connection
mysql_connect($host, $username,$password) or die("Auch!!!");
mysql_select_db($db_name);

$keyword = $_GET['keyword'];

$sql = mysql_query("select * from projects where title like '%$keyword%'");

while($row = mysql_fetch_array($sql)) {
        $s_creator = $row['creator'];
        echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['title']."</td>";
        echo "<td>".$row['description']."</td>";
        $queryCreator = mysql_query("select first_name, last_name from users where id = '$s_creator'");
        $creator = mysql_fetch_array($queryCreator);
	echo "<td>".$creator['first_name']." ".$creator['last_name']."</td>";
	echo "<td><a href='".$row['github']."'>".$row['github']."</a></td>";
        $p_id = $row['id'];
	$my_id = $_SESSION['id'];
	$queryStatus = mysql_query("select * from user_project where project_id = $p_id and user_id = $my_id");
	if(mysql_num_rows($queryStatus) == 0) {
		echo "<td><a href='requestCollab.php?project_id=$p_id'><span class='glyphicon glyphicon-envelope'></span></a></td>";
	} else {
		echo "<td><span class='glyphicon glyphicon-envelope'></span></td>";
	}

	
}
echo "</tr>";

?>
</tbody>            
</table>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="http://code.jquery.com/jquery-latest.js"></script>

 <!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
