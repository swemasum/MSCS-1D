<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MSCS-1D</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MSCS-1D: V1</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">about
            </a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">MSCS-1d :V1 </h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">One dimensional multijunction solar cell simulator:version-1</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">gET STARTED</a><span style="color:white">
        </div>
      </div>
    </div>
  </header>
  <script type="text/javascript">
function check(){
  var email = document.getElementById("email").value;
   var name = document.getElementById("name").value;

return confirm("Dear "+name+".We will send passwprd through this mail '"+email+"'. Are you sure email is currect?");

}

</script>
  <!-- About Section -->
  <section class="page-section bg-primary" id="about">

      <div class=" row">
        <div class="col-md-6" style="border-right:1px solid black">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="text-white mt-0">This version is totally free!</h2>
              <h4 class="text-white mt-0">If you are new. Registration first!</h4>
              <hr class="divider light my-4">
          <?php
          if(isset($_SESSION['requested'])){
          ECHO '  <p class="text-white mb-4">Thank you for your request! Check your mail for MSCS-1D password,it may take upto 5 minutes!</p>';
          }else{
          echo '<form action="request_done.php" method="post">
          <div class="form-group">
          <label for="pwd">Your Full name:</label>
          <input type="text" required name="name" class="form-control" id="name">
          </div>
          <div class="form-group">
          <label for="pwd">Purpose:</label>
          <input type="text" required name="purpose" class="form-control" id="pwd">
          </div>
          <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" required name="email" class="form-control" id="email">
          </div>
           <input type="submit" onclick="return check();" name="submit" class="btn btn-light btn-xl" value="REGISTRATION">


          </form>';
          }
          ?>


            <!--  <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Request!</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-6" style="border-left:1px solid black">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
            <h4 class="text-white mt-0">If you already have got password, login now!</h4>
              <hr class="divider light my-4">
              <?php
                if(isset($_SESSION['wrong_email_pin'])){
                     echo '<p class="text-white mb-4">Wrong email/password!</p>';
                }

               ?>

          <form action="login.php" method="post">
          <div class="form-group">
          <label for="pwd">Email:</label>
          <input type="text" name="email" class="form-control" id="pwd">
          </div>

          <div class="form-group">
          <label for="email">password:</label>
          <input type="password" name="pin" class="form-control">
          </div>
           <input type="submit" name="submit" class="btn btn-light btn-xl" value="Log in">


          </form>


            <!--  <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Request!</a> -->
            </div>
          </div>
        </div>
      </div>


  </section>


  <!-- About Section -->
  <section style="padding-top:0px" class="page-section bg-primary" id="about">
    <div class="container">

    </div>
  </section>

  <!-- Services Section -->

 <section class="page-section" style="    padding: 2rem 0;" id="services">
    <div class="container">
      <h2 class="text-center mt-0">About</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-md-12 ">
           <div  class="card text-white bg-primary flex-md-row mb-4 h-md-250 " style="border: 1px solid; padding: 0px; box-shadow: 5px 10px 8px #888888;" >
              <div class="card-body d-flex flex-column align-items-start " style="background:#002b80"  >

                 <h6 class="mb-0" style="text-align: center;">
                    <a class="text-white" href="#" style="text-align:center;">
About MSCS-1D
  </a>
                 </h6>

                 <p class="section-subheading card-text mb-auto" style="line-height: 1.6; font-style: italic;text-align:justify ">One dimensional multijunction solar cell simulator: Version-1 (MSCS-1D: V-1) is developed by Advanced Photovoltaic Lab, Physical Instrumentation Division, BCSIR Laboratories Dhaka. This work is financially supported by the Ministry of Science and Technology, the People’s Republic of Bangladesh under Special Allocation Project. Mr. Abu Kowsar is the principal investigator of this project, Dr. Syed Farid Uddin Farhad and Khaledun Nahar Babi are the co-investigator of this project. Mr. Syed Nazmus Shakib, University of Dhaka, contributed here as a M.S. Thesis student. The user friendly interface and the dialogue box of this simulation software were accomplished by the assitance of Mr. Md. Masum Billah, Mr. Sujoy Dey and Sazzatul Yeakin, SoftCare IT.</p>

              </div>
             </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
<!--  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
-->
   <!-- Call to Action Section -->
<!--   <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section>
-->
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Concern Scientist </h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">
Abu Kowsar <br>
Senior Scientific Officer & Principal Investigator <br>
Advanced Photovoltaic Lab, <br>
Institute of Fuel Research and Development (IFRD), BCSIR <br>
Dr. Qudrat-I-Khuda Road, New Elephant Road <br>
Dhanmondi, Dhaka-1205, Bangladesh <br>
</p>
        </div>
      </div>
      <div class="row">
   <div class="col-lg-4 ">
             <!--  <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>-->
        </div>
        <div class="col-lg-4 mr-auto text-center" >
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto: apukowsar@gmail.com">Email: apukowsar@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - All rights reserve to BCSIR Laboratories, Dhaka
</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
