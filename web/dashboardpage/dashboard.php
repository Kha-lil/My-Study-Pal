<?php 

	// Initialize session
	session_start();

	if(!isset($_COOKIE['userid']) || !isset($_COOKIE['useremail'])){
		if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
		header("location: login.php");
			exit();
		}
		
		
	}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!--Google Font-->
  <link
  href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,400;0,700;1,700&family=Open+Sans:wght@400;600;700;800&display=swap"
  rel="stylesheet"
  />

  <!--Font Awesome CDN-->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />

  <link rel="stylesheet" href="dashboard.css" />
  <title>Hello, world!</title>
</head>

<body>

  <!-- Navigation -->
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
          <a class="nav-link" href="../contact-page/contact.php">Contact us</a>
        </li>
        <li>
        <a class="nav-link" href="../studyplanner/logout.php">Log Out</a>
        </li>
      </ul>
      <span class="navbar-text">
        <!-- <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link link" href="#">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link" href="#">Sign up</a>
          </li>
        </ul> -->
        <!-- <img class="nav-item" src="./images/bell.png" alt="">
        <span class="nav-item">James Jones</span>
        <img class="nav-item dashboard-img" src="./profile setup page/images/Vector.png" alt="">
        <img class="nav-item" src="./images/carrot.png" alt=""> -->
        <ul class="nav nav-tabs border-bottom-0">
          <li><img class="" src="./images/bell.png" alt=""></li>
          <li class="nav-item dropdown">
            <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="">James Jones</span>
        <img class="dashboard-img mx-3" src="./profile setup page/images/Vector.png" alt="">
        <img class="" src="./images/carrot.png" alt="">
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./profile setup page/index.html">Profile Setup</a>
              <a class="dropdown-item" href="./change password/change password.html">Change Password</a>
              <a class="dropdown-item" href="#">Badges</a>
              <a class="dropdown-item" href="../free E-book page/Free Ebook index.html">Get Free E-book</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../landingpage/index.html">Log out</a>
            </div>
          </li>
        </ul>
      </span>
    </div>
  </nav>

  <div class="p-container mt-5">
    <div class="row">
      <div class="col-lg-7">
        <div class="jumbotron">
          <div class="container">
            <h1 class="display-4 font-weight-bold pb-5 text-white">HELLO JAMES</h1>
          </div>
        </div>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#staticBackdrop">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.20007 6.8V11.6H6.80007V6.8H11.6V5.2H6.80007V0.400002H5.20007V5.2H0.400024V6.8H5.20007Z"
              fill="white" />
          </svg>
          Add Task
        </button>
      </div>
      <div class="col-lg-1"></div>
      <div class="card col-lg-4 calendar">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Calendar</h5>


        </div>
      </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">ADD TASK</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              <div class="head d-flex mb-2">
                <div class="one rounded-circle text-center font-weight-bold mr-3">
                  1
                </div>
                <div class="question">What will you be studying?</div>
              </div>

              <div class="ans ml-3 pl-4 border-left">
                <form id="first-form" class="py-3">
                  <div class="form-group">
                    <input type="text" placeholder="Required*" class="form-control w-50 first-question"
                      id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <button id="first-btn" type="button" class="btn btn-primary btn-color border-0 px-3">
                    NEXT
                  </button>
                </form>
              </div>
            </div>
            <div class="mb-2">
              <div class="head d-flex mb-2">
                <div class="two rounded-circle text-center font-weight-bold mr-3">
                  2
                </div>
                <div class="question">What time will you start?</div>
              </div>

              <div class="ans ml-3 pl-4 border-left">
                <form id="second-form" class="py-3 invisible">
                  <div class="form-group">
                    <input type="number" placeholder="Required*" class="form-control w-50 second-question"
                      id="exampleInputEmail1" aria-describedby="emailHelp" required />
                  </div>
                  <button id="back-second-btn" type="button" class="btn btn-back mr-3">BACK</button>
                  <button id="second-btn" type="button" class="btn btn-primary btn-color border-0 px-3">
                    NEXT
                  </button>
                </form>
              </div>
            </div>
            <div class="mb-2">
              <div class="head d-flex mb-2">
                <div class="three rounded-circle text-center font-weight-bold mr-3">
                  3
                </div>
                <div class="question">What time will you end?</div>
              </div>

              <div class="ans ml-3 pl-4 border-left">
                <form id="third-form" class="py-3 display-none">
                  <div class="form-group">
                    <input type="number" placeholder="Required*" class="form-control w-50 third-question"
                      id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <button id="back-third-btn" type="button" class="btn btn-back mr-3">BACK</button>
                  <button id="third-btn" type="button" class="btn btn-primary btn-color border-0 px-3">
                    NEXT
                  </button>
                </form>
              </div>
            </div>

            <div class="review-and-create mt-3 display-none">
              <h4 class="mb-3">Review and Create</h4>
              <p class="font-weight-bold">What will you be studying? <span class="ans-q-1 ml-2"></span></p>
              <p class="font-weight-bold">What time will you start? <span class="ans-q-2 ml-4"></span></p>
              <p class="font-weight-bold">What time will you end? <span class="ans-q-3 ml-5"></span></p>

              <div class="mt-3">
                <button id="back-RAC-btn" type="button" class="btn btn-back mr-3">BACK</button>
                <button id="reset" type="button" class="btn btn-back mr-3">RESET</button>
                <button id="create" type="button" class="btn btn-primary btn-color border-0 px-3">CREATE</button>
              </div>
            </div>

            <div class="success-msg display-none">
              <h4 class="sucess">Success!!!</h4>
              <p>You have created a new task!!!</p>
            </div>
          </div>

          <div class="modal-footer border-top-0">
            <button id="btn-close" type="button" class="btn" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex flex-column justify-content-between flex-lg-row mb-3">
      <div class="card col-lg-7 mt-4 mr-3 c-progress">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">July 16, 2020</h5>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Task</th>
                <th scope="col" class="text-center">Duration</th>
                <th scope="col">Progress</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="d-flex">
                  <div class="circle rounded-circle mr-2"></div>Read Maths
                </th>
                <td><span class="d-flex justify-content-between"><span>14:00hrs</span><span>16:00hrs</span></span></td>
                <td colspan="4">
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row" class="d-flex">
                  <div class="circle rounded-circle mr-2"></div>Read Maths
                </th>
                <td><span class="d-flex justify-content-between"><span>14:00hrs</span><span>16:00hrs</span></span></td>
                <td colspan="4">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row" class="d-flex">
                  <div class="circle rounded-circle mr-2"></div>Read Maths
                </th>
                <td><span class="d-flex justify-content-between"><span>14:00hrs</span><span>16:00hrs</span></span></td>
                <td colspan="4">
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>


        </div>
      </div>
      <div class="card col-lg-5 mt-4 c-completed">
        <div class="card-body">
          <h5 class="card-title font-weight-bold pb-3 border-bottom">Completed Tasks</h5>


        </div>

      </div>
    </div>
  </div>

   <!--Footer Section-->
   <footer>
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
              <a href="#" class="footer-links">Home</a>
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





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <script src="addTask.js"></script>
</body>

</html>