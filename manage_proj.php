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

    <title>Clique | Manage Cliques</title>

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

  <!-- JQuery Chart Plugin -->
  <link href="pizza-master/dist/css/pizza.css" media="screen, projector, print" rel="stylesheet" type="text/css" />

  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->


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
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Find Collabs">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <div class = "images">
	<img src=<?php if($_SESSION['picture_url'] == NULL) { echo '"images/profile_pic.jpg"'; } else echo '"'.$_SESSION['picture_url'].'"' ; ?> class="img-responsive" alt="50x50" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojZmZmO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">                    
</img></div>
            <div class="username"><li>@<?php echo $_SESSION['first_name']." ".$_SESSION['last_name'];?></li><br></div>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="friends.php">Friends</a></li>
            <li class="active"><a href="collab.php">Collabs</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Manage Clique Projects</h1>

          <h2 class="sub-header">Project 1: Slumber Party iPad Game (Deadline: 5/31/2014)</h2>
              <ul data-pie-id="my-cool-chart">
                <li data-value="36">User Interface Responsiveness: 36%</li>
                <li data-value="14">Fix Database Errors: 14%</li>
                <li data-value="8">Security Testing: 8%</li>
                <li data-value="11">Marketing Materials: 11%</li>
                <li data-value="7">Enable Cloud Compatibility: 7% (Your Task)</li>
                <li data-value="24">Completeness: 24%</li>
              </ul>
              <div id="my-cool-chart"></div>
          <h2 class="sub-header">Project 2: Space Snap (Deadline: 11/31/2014)</h2>
              <ul data-pie-id="my-cool-chart2">
                <li data-value="36">Media Cloud Hosting: 36% (Your Task)</li>
                <li data-value="4">Security Testing: 4%</li>
                <li data-value="8">Marketing Materials: 8%</li>
                <li data-value="54">Satellite Communications: 54%</li>
                <li data-value="32">Database Setup: 32%</li>
                <li data-value="2">Completeness: 2%</li>
              </ul>
              <div id="my-cool-chart2"></div>
<!--           <h2 class="sub-header">Project 3: Stalker Tracker (Deadline: 4/31/2015)</h2>
              <ul data-pie-id="my-cool-chart">
                <li data-value="36">Pepperoni</li>
                <li data-value="25">Sausage</li>
                <li data-value="34">Cheese</li>
                <li data-value="12">Mushrooms</li>
                <li data-value="2">Chicken</li>
                <li data-value="27">Other</li>
              </ul>
              <div id="my-cool-chart3"></div> -->
        </div>
      </div>
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="pizza-master/dist/js/snap.svg.js"></script> 
    <script src="pizza-master/dist/js/pizza.js"></script>

    <script> Pizza.init(); </script>    
</html>       
