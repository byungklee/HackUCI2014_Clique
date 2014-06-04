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

    <title>Clique | Create Clique</title>

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
            <li><a href="friends.php">Friends</a></li>
            <li class="active"><a href="collab.php">Cliques</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Create Your Own Clique</h1><br>
            <h4 class="sub-header">State your billion dollar idea and find your ideal hacker/designer clique.</h4>

            <form role="form" method="POST" action="createProject.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Project Name:</label>
                <input type="name" name="title" class="form-control" id="inputname" placeholder="Insert Your Billion Dollar Idea Here">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Project Description:</label>
                <input type="description" name="description" class="form-control" id="inputdesc" placeholder="Describe your idea and it's potential for the future.">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Github Link:</label>
                <input type="link" name="github" class="form-control" id="inputgit" placeholder="Github Link Here!">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Seeking:</label>
                <input type="text" name ="seeking" class="form-control" id="inputseek" placeholder="(ex: Hackers/Graphic Designers/Marketing)">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Select Clique Picture:</label>
                <input type="file" name="clique_picture" id="exampleInputFile">
                <p class="help-block">I am confident that I will do everything in my power to succeed.</p>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">Check This If You Agree!
                </label>
              </div>
              <button type="submit" class="btn btn-default">Here Goes Nothing!</button>
            </form>

        </div>
      </div>
    </div>
