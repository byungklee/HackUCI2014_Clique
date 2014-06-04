 <?php
 include('header_main_clique.php');
 ?>

 
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <div class = "images">
                  <img src=<?php if($_SESSION['picture_url'] == NULL) { echo '"images/profile_pic.jpg"'; } else echo '"'.$_SESSION['picture_url'].'"' ; ?> class="img-responsive" alt="50x50" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojZmZmO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">
              </div>
            <div class="username"><li> <?php echo '@'.$_SESSION['first_name'].'&nbsp'.$_SESSION['last_name'];?> </li><br></div>
            <li class="active"><a href="profile.php">My Profile</a></li>
            <li><a href="friends.php">Friends</a></li>
            <li><a href="collab.php">Cliques</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Welcome <?php echo '@'.$_SESSION['first_name'].'&nbsp'.$_SESSION['last_name'];?></h1>
          <div class = "dashboard_stuff">
          <p> </p>
          <p><img src="images/requests_icon.png" alt="Logo"><a href="friendrequest.php"> You Have New Friend Requests (4)</a></p><br>
          <p><img src="images/create_icon.png" alt="Logo"><a href="create.php"> Create A New Clique</a></p><br>
          <p><img src="images/manage_icon.png" alt="Logo"><a href="manage_proj.php"> Manage Your Cliques</a></p><br>
          <p><img src="images/search_icon.png" alt="Logo"><a href="collab.php"> Find Cliques</a></p><br>
          <p><img src="images/deadline_icon.png" alt="Logo"><a href="deadline.php"> Deadline Alerts (1)</a></p><br>
          <p><img src="images/settings_icon.png" alt="Logo"><a href="#"> Settings</a></p>
        </div>
      </div>
    </div>

 <?php
 include('footer_main_clique.php');
 ?>
