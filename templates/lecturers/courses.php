<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BRAINSTORMY</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="styles/courses.css"/>
    <script src="https://kit.fontawesome.com/c7c0e3b23f.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--Navbar Section-->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo"><img src="assets/img/logo.png" alt="logo" class="logo" /></a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/index.php" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="#services" class="navbar__links" id="services-page"
              >Classes</a
            >
          </li>
          <li class="navbar__btn">
            <a href="#join-class" class="button" id="join-class">Join Class</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="services" id="services">
      <h1>Classes</h1>
      <div class="services__wrapper">
        <div class="services__card">
          <h2>CSE 482</h2>
          <p>INTERNET AND WEB TECHNOLOGY</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>CSE 323</h2>
          <p>OPERATING SYSTEMS DESIGN</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>CSE 327</h2>
          <p>SOFTWARE ENGINEERING</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>ENG 111</h2>
          <p>PUBLIC SPEAKING</p>
          <div class="services__btn"><button>Get Started</button></div>
        </div>
      </div>
    </div>
    <!-- 1:46:18 Adding Javascript Smooth Scroll -->
    <!-- JS links -->
    <script src="js/courses.js"></script>
  </body>
</html>
