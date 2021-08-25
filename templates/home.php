<?php include("../libs/db_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brainstormy</title>
    <link rel="stylesheet" href="../assets/css/style.css" />

    <!-- *Smooth Scroll Link -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>
    <!-- Header Start -->
    <section id="header">
        <div class="container">
            <img src="../assets/img/logo.png" alt="logo" class="logo" />
            <div class="header-text">
                <h1>The purpose is to<br />tech, bring learning to people</h1>
                <!-- small square box -->
                <span class="square"></span>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio odio
                    laudantium sequi sapiente ratione maiores ex possimus quibusdam
                    maxime. Distinctio mollitia illum nesciunt cupiditate tenetur.
                </p>
                <!-- common button -->
                <button class="common-btn">Read More</button>
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Side Navbar Start -->
    <nav id="sideNav">
        <ul>
            <!-- *added link according to id -->
            <li><a href="#header">HOME</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#features">FEATURES</a></li>
            <li><a href="#courses">COURSES</a></li>
            <li><a href="#offer">OFFER</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="templates/Comment/index.php">COMMENT</a></li>
            <li><a href="Registrations/index.php">LOGIN / REGISTRATIONS</a></li>
        </ul>
    </nav>
    <!-- Navbar menu image -->
    <img src="../assets/img/menu.png" alt="Menu" id="menuBtn" />
    <!-- Side Navbar End -->
    <!-- Header End -->

    <!-- ABOUT US Start -->
    <section id="about">
        <div class="about-left-col">
            <img src="../assets/img/about.png" alt="" />
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1>About Us</h1>
                <!-- small square box -->
                <span class="square"></span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
                    laborum ducimus, fugiat illo ullam autem nostrum obcaecati incidunt
                    est assumenda amet? Libero iusto, doloremque ea sed autem fugit
                    similique possimus? Repellendus voluptatibus impedit doloremque
                    magnam ducimus quam cumque qui saepe nesciunt esse quisquam facilis
                    aspernatur nemo, in quod rerum enim.
                </p>
                <br /><br />
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>

                <h2>
                    "Learning is not attained by chance, it must be sought for with ador
                    and attended to with diligence
                </h2>
                <h3>---Abigail Adams</h3>
            </div>
        </div>
    </section>
    <!-- ABOUT US End -->

    <!-- FEATURES Start -->
    <section id="features">
        <div class="feature-row">
            <div class="feature-col">
                <img src="../assets/img/pic-1.png" alt="" />
                <h4>Learn Anywhere</h4>
                <p>Switch between your computer, tablet or mobile device</p>
            </div>
            <div class="feature-col">
                <img src="../assets/img/pic-2.png" alt="" />
                <h4>Expert Teachers</h4>
                <p>Learn from industry experts who are passionate about teaching.</p>
            </div>
            <div class="feature-col">
                <img src="../assets/img/pic-3.png" alt="" />
                <h4>Unlimited Access</h4>
                <p>
                    Choose what yo'd like to learn from our extensive subscription
                    library.
                </p>
            </div>
        </div>
        <!-- Button -->
        <div class="feature-btn">
            <!-- 2line & a box -->
            <div class="line">
                <span class="line-1"></span><br />
                <span class="line-2"></span><br />
                <span class="line-3"></span>
            </div>
            <!-- common button -->
            <button class="common-btn">Start Free Trial</button>
        </div>
    </section>
    <!-- FEATURES End -->

    <!-- COURSES Strat -->
    <section id="courses">
        <div class="container course-row">
            <div class="course-left-col">
                <div class="course-text">
                    <h1>Browse our top<br />courses</h1>
                    <!-- small square box -->
                    <span class="square"></span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia
                        necessitatibus, aut facere ipsum adipisci eveniet voluptatibus
                        reiciendis nihil accusamus, consequatur hic neque, beatae
                        repellendus rerum porro sunt nam? Quia, obcaecati?
                    </p>
                    <!-- common button -->
                    <button class="common-btn">View All Courses</button>
                    <!-- 2line & a box -->
                    <div class="line">
                        <span class="line-1"></span><br />
                        <span class="line-2"></span><br />
                        <span class="line-3"></span>
                    </div>
                </div>
            </div>
            <div class="course-right-col">
                <img src="../assets/img/course.png" alt="" />
            </div>
        </div>
    </section>
    <!-- COURSES End -->

    <!-- OFFER Start -->
    <!-- OFFER section almost same as ABOUT US section -->
    <section id="offer">
        <div class="about-left-col">
            <img src="../assets/img/offer.png" alt="" />
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1>Limitless learning,<br />limitless possibilities</h1>
                <!-- small square box -->
                <span class="square"></span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
                    laborum ducimus, fugiat illo ullam autem nostrum obcaecati incidunt
                    est assumenda amet? Libero iusto, doloremque ea sed autem fugit
                    similique possimus? Repellendus voluptatibus impedit doloremque.
                </p>
                <!-- common button -->
                <button class="common-btn">Start Free Trial</button>
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- OFFER End -->

    <!-- CONTACT Start -->
    <section id="contact">
        <div class="container contact-row">
            <div class="contact-left-col">
                <h1>Sign Up to join our<br />learning community</h1>
                <!-- TODO: Validate this form -->
                <form action="">
                    <input type="text" placeholder="Enter Name" />
                    <input type="email" placeholder="Enter Email" />
                    <input type="password" placeholder="Enter Password" />
                    <div class="btn-box">
                        <!-- 2 common button -->
                        <button class="common-btn">Sign Up</button>
                        <button class="common-btn">Start Free Trial</button>
                    </div>
                </form>
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>
            </div>
            <div class="contact-right-col">
                <img src="../assets/img/contact.png" alt="" />
            </div>
        </div>
    </section>
    <!-- CONTACT End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container footer-row">
            <hr />
            <div class="footer-left-col">
                <div class="footer-links">
                    <div class="link-title">
                        <h4>Product</h4>
                        <small>Our Plan</small><br />
                        <small>Free Trial</small>
                    </div>
                    <div class="link-title">
                        <h4>About Us</h4>
                        <small>Request Demo</small><br />
                        <small>FAQs</small>
                    </div>
                    <div class="link-title">
                        <h4>Support</h4>
                        <small>Features</small><br />
                        <small>Contact Us</small>
                    </div>
                    <div class="link-title">
                        <h4>Explore</h4>
                        <small>Find a nonprofit</small><br />
                        <small>Corporate Solution</small>
                    </div>
                </div>
            </div>
            <div class="footer-right-col">
                <div class="footer-info">
                    <div class="copyright-text">
                        <small>support@brainstormy.com</small><br />
                        <small>copyright 2021 Brainstormy</small>
                    </div>
                    <div class="footer-logo">
                        <img src="../assets/img/logo.png" alt="" />
                        <!-- common button -->
                        <button class="common-btn">English</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Social-icons -->
    <div class="social-icons">
        <img src="../assets/img/facebook.png" alt="" />
        <img src="../assets/img/instagram.png" alt="" />
        <img src="../assets/img/twitter.png" alt="" />
        <img src="../assets/img/linkedin.png" alt="" />
    </div>

    <!-- JS Link -->
    <script src="../assets/js/main.js"></script>
</body>

</html>