<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brainstormy</title>
  <!-- Font Awsome Link -->
  <script src="https://kit.fontawesome.com/39afdd33d3.js" crossorigin="anonymous"></script>
  <!-- CSS Link -->
  <link rel="stylesheet" href="styles/admin.css" />
</head>

<body>
  <div class="container">
    <!-- Side Dashboard Pane Start -->
    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="icon"><i class="fas fa-brain"></i></span>
            <span class="title">
              <h2>Brainstormy</h2>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="title">Faculties</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
            <span class="title">Students</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
            <span class="title">Message</span></a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
            <span class="title">Help</span></a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
            <span class="title">Settings</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <span class="title">Password</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
            <span class="title">Sign Out</span></a>
        </li>
      </ul>
    </div>
    <!-- Side Dashboard Pane End -->

    <!-- Main Section -->
    <div class="main">
      <div class="topbar">
        <div class="toogle" onclick="toogleMenu();">
          <i class="fas fa-bars"></i>
        </div>
        <!-- Search Box -->
        <div class="search">
          <label>
            <input type="text" placeholder="Search here" />
            <i class="fa fa-search" aria-hidden="true"></i>
          </label>
        </div>
        <!-- User Image -->
        <div class="user">
          <!-- TODO: Add an user image -->
          <img src="/assets/img/twitter.png" alt="userImage" />
        </div>
      </div>

      <!-- CardBox -->
    </div>
  </div>

  <!-- JS link -->
  <script src="js/admin.js"></script>
</body>

</html>