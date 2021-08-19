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
  <link rel="stylesheet" href="styles/lecturers.css" />
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
            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
            <span class="title">Students</span>
          </a>
        </li>

        <li>
          <a href="courses.php">
            <span class="icon"><i class="fas fa-book"></i></i></span>
            <span class="title">Course</span>
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

      <!-- CardBox Start -->

      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">MD Arif</div>
            <div class="cardName">ECE, NSU</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-user"></i> <!-- TODO: Add an user image -->
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">1,042</div>
            <div class="cardName">Students</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-user"></i>
          </div>
        </div>
    <!--    <div class="card">
          <div>
            <div class="numbers">80</div>
            <div class="cardName">Lecturers</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-user-tie"></i>
          </div>
        </div> -->
        <div class="card">
          <div>
            <div class="numbers">15</div>
            <div class="cardName">Courses</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-book"></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">42</div>
            <div class="cardName">Comments</div>
          </div>
          <div class="iconBox">
            <i class="fas fa-comments"></i>
          </div>
        </div>
      </div>
      <!-- CardBox End -->

      <!-- Details View Start -->
      <div class="details">
        <div class="recentCourses">
          <div class="cardHeader">
            <h2>Recent Courses</h2>
            <a href="courses.php" class="btn">View All</a>
          </div>
          <table>
            <thead>
              <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Payment</td>
                <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CSE482</td>
                <td>1200</td>
                <td>FUll</td>
                <td><span class="status launched">Launched</span></td>
              </tr>
              <tr>
                <td>CSE323</td>
                <td>1100</td>
                <td>Offer</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>ENG111</td>
                <td>800</td>
                <td>Paid</td>
                <td><span class="status launched">Launched</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="recentStudents">
          <div class="cardHeader">
            <h2>Recent Students</h2>
          </div>
          <table>
            <tbody>
              <tr>
                <td width="60px">
                  <div class="imgBox">
                    <img src="/assets/img/twitter.png" alt="" />
                  </div>
                </td>
                <td>
                  <h4>Mitu<br /><span>Bangladesh</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgBox">
                    <img src="/assets/img/twitter.png" alt="" />
                  </div>
                </td>
                <td>
                  <h4>Nusrat<br /><span>Bangladesh</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgBox">
                    <img src="/assets/img/twitter.png" alt="" />
                  </div>
                </td>
                <td>
                  <h4>Anandah<br /><span>Bangladesh</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <div class="imgBox">
                    <img src="/assets/img/twitter.png" alt="" />
                  </div>
                </td>
                <td>
                  <h4>Shadia<br /><span>Bangladesh</span></h4>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Details View End -->
    </div>
  </div>

  <!-- JS link -->
  <script src="js/lecturers.js"></script>
</body>

</html>
