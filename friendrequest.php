<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Clique | Friend Requests</title>

    <!-- Bootstrap core CSS 
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  -->

     <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

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
            <li><a href="index.php">Sign Out</a></li>
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

<img src=<?php if($_SESSION['picture_url'] == NULL) { echo '"images/profile_pic.jpg"'; } else echo '"'.$_SESSION['picture_url'].'"' ; ?> class="img-responsive" alt="50x50" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojZmZmO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4="></div>
            <div class="username"><li><?php echo '@'.$_SESSION['first_name'].'&nbsp'.$_SESSION['last_name'];?></li><br></div>
            <li><a href="profile.php">My Profile</a></li>
            <li class="active"><a href="friends.php">Friends</a></li>
            <li><a href="collab.php">Cliques</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Friend Requests</h1>
                <div class="row placeholders"><br>
                  <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="images/minaj.png">
                    <h4>Nicki Minaj</h4>
                    <span class="text-muted">Computer Science | Irvine, CA</span><br><br>
                    <button type="button" class="btn btn-primary">Accept</button>
                  </div>
                  <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="images/yeezus.png">
                    <h4>Kanye West</h4>
                    <span class="text-muted">Astrophysics | Berkeley, CA</span><br><br>
                    <button type="button" class="btn btn-primary">Accept</button>
                  </div>
                  <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="images/page.png">
                    <h4>Larry Page</h4>
                    <span class="text-muted">Political Science | Compton, CA</span><br><br>
                    <button type="button" class="btn btn-primary">Accept</button>
                  </div>
                  <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="images/gates.png">
                    <h4>Bill Gates</h4>
                    <span class="text-muted">Sociology | South Central, CA</span><br><br>
                    <button type="button" class="btn btn-primary">Accept</button>
                  </div>
            </div>
        </div>
      </div>
    </div>
