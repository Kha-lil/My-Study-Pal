<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!--Font Awesome CDN-->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />

    <link rel="stylesheet" type="text/css" href="contact.css" />
    <title>Contact Us Page</title>
  </head>
  <body>
    <!--Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="images/Logo.svg" alt="Logo of My Study Pal" class="logo" />
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.html"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
        <span class="navbar-text">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link link" href="../studyplanner/login.php">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="../studyplanner/logout.php">Log Out</a>
            </li>
          </ul>
        </span>
      </div>
    </nav>
    <!-- <nav id="nav" >
      <div class="nav--flex nav--row hide-on-mobile">
        <div class="logo nav--flex nav--col">
          <img src="images/Logo.svg" alt="logo" class="logo" />
        </div>

        <div id="nav-icon">
          <div></div>
          <div></div>
          <div></div>
        </div>

        <ul class="nav--flex nav--row nav--list">
          <li>
            <a class="links" href="../studypal/index.html">Home</a>
          </li>
          <li>
            <a class="links" href="#">Contact us</a>
          </li>
          <li>
            <a class="links" href="#">About Us</a>
          </li>
        </ul>

        <div class="sub--link">
          <ul class="nav--flex nav--row nav--list">
            <li id="log--in">
              <a class="links" href="#">Log in</a>
            </li>
            <li>
              <a class="links" href="#">Sign up</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="hide-on-desktop">
        <div class="topnav">
          <a href="#"><img src="images/Logo.svg" alt="logo" class="logo" /></a>
          <div id="myLinks" class="nav_mobile">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#home">Home</a>
            <a href="#contact">Contact Us</a>
            <a href="#about">About Us</a>
            <div class="sub--link">
              <ul class="nav--flex nav--col nav--list">
                <li id="log--in">
                  <a class="links" href="#">Log in</a>
                </li>
                <li>
                  <a class="links" href="#">Sign up</a>
                </li>
              </ul>
            </div>
            </div>
          <a href="javascript:void(0);" class="icon" onclick="openNav()">
          <i class="fa fa-bars"></i>
          </a>
        </div>     
      </div>

    </nav> -->

    <main class="container">
      <p class="heading">
        Feel like contacting us? Submit your queries here and we will get back
        to you as soon as possible
      </p>

      <form class="form">
        <div class="name">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" />
          <i class="fa fa-user icon"></i>
        </div>

        <div class="email">
          <label for="email">Email-ID</label>
          <input type="text" name="email" id="email" />
          <i class="fa fa-envelope icon"></i>
        </div>

        <div class="message">
          <label for="message">Message</label>
          <textarea id="message" name="message"></textarea>
        </div>

        <button type="submit" class="submit_button">Send Message</button>
      </form>
    </main>

    <footer class="mt-3">
      <div class="row footer">
        <div class="col-lg-6 footer-nav">
          <img
            src="images/Logo.svg"
            alt="Logo of My StudyPal"
            class="footer-logo"
          />
          <nav class="navs">
            <ul class="list">
              <li class="list-row">
                <a href="../index.html" class="footer-links">Home</a>
              </li>
              <li class="list-row">
                <a href="#" class="footer-links">Contact Us</a>
              </li>
              <li class="list-row">
                <a href="#" class="footer-links">About Us</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-6 follow-us">
          <h4>Connect and Follow</h4>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
        </div>
      </div>
    </footer>

    <!-- <script src="contact.js"></script> -->
  </body>
</html>
