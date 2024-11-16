<?php
include_once "connection.php";

 ?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MSCS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Vendor CSS Files -->
<!--  <link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

  @media only screen and (min-width: 1200px) {
    .container {
      max-width: 1640px;
    }
  }
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:mscsbcsir@gmail.com">mscsbcsir@gmail.com</a>
    <!--    <i class="icofont-phone"></i> +880 1722 281618 -->
      </div>
     <div class="social-links">
    <i>Visitors <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/756125/t/9"></script></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">SCS-<span>BCSIR</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li class="active"><a href="simulator.php">Simulator</a></li>

          <li><a   href="publication.php">Publications</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="overview_about.php">Overview</a></li>

              <li><a href="research_group.php">Research Group</a></li>

            </ul>
          </li>
          <li ><a href="contact.php">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main" >

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg" >
      <div class="container" style="margin-top:50px">

        <div class="section-title">
          <h2>Simulator</h2>


        </div>

        <ul class="faq-list"  >
          <?php
          $sql = "SELECT * FROM simulator order by simulator_id DESC";
          $result = mysqli_query($conn, $sql);
    $count=1;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {

              if($count==1){
                echo '<li>
                <a data-toggle="collapse" style="text-align: justify;" class="" href="#faq'.$count.'">'.$row['title'].' <i class="icofont-simple-up"></i></a>
                <div id="faq'.$count.'" class="collapse show" style="text-align: justify;" data-parent=".faq-list">
                    <p>
                    '.$row['description'].'
                    </p>
                    <p><a href="admin/simulator_file/'.$row['simulator_file_name'].'">Download user manual</a></p>
                  </div>
                </li>';
              }else{
                echo '<li>
                  <a data-toggle="collapse" style="text-align: justify;" class="" href="#faq'.$count.'">'.$row['title'].' <i class="icofont-simple-up"></i></a>
                  <div id="faq'.$count.'"  style="text-align: justify;" class="collapse " data-parent=".faq-list">
                    <p>
                    '.$row['description'].'
                    </p>
                  </div>
                </li>';
              }
              $count++;

            }
          }

        //  mysqli_close($conn);
           ?>


        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    <!-- ======= Team Section ======= -->



  </main><!-- End #main -->
<?php

include_once "footer_website.php";

 ?>
  <!-- ======= Footer ======= -->


  <!--<div id="preloader"></div> -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
</body>

</php>
