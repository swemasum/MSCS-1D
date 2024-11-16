<?php include_once "check.php" ;?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simulator:V2</title>
<!-- Latest compiled and minified CSS -->

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
<style>
    @media (min-width: 992px)
header.masthead {
    height: 100vh;
    min-height: 40rem;
    padding-top: 72px;
    padding-bottom: 0;
}
    
</style>
  </head>

  <body id="page-top">
<!-- select number of junction -->
<table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade col-lg-12" id="exampleModal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    How many junctions do you want to simulate &nbsp<h2 style="color:red;font-weight:bold"> ? </h2>
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-12">
						<div class="input-group">


					<a class="btn btn-info" type="button" href="calculation2.php">TWO</sua>&nbsp
					<a class="btn btn-info" type="button" href="calculation3.php">THREE</a>&nbsp
					<a class="btn btn-info" type="button" href="calculation4.php">FOUR</a>&nbsp
					<a class="btn btn-info" type="button" href="calculation5.php">FIVE</a>&nbsp
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>
<!-- select number of junction end-->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" >Simulator:V2</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
                            <a target="_blank" class="nav-link js-scroll-trigger" style="font-weight:bold" href="MSCS-1D-V2 maunual.pdf">Manual</a>

                        </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="font-weight:bold" href="#about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="font-weight:bold" href="logout.php"  >log out</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
     <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in" style="margin-bottom:0px"> <p style=" font-size: 30px;margin:0;padding-bottom:0;text-shadow: 2px 5px 10px #000000;">One dimensional multijunction solar cell simulator: Version - 2</p></div>
          <div class="intro-heading text-uppercase" style=" font-size: 40px;margin-bottom:0px;text-shadow: 2px 5px 10px #000000;"><p>MSCS-1d : v2</p></div>
          <a class="btn btn-xl text-uppercase js-scroll-trigger" style="background: #00004d" data-target="#exampleModal" data-toggle="modal">Simulate</a>
          <a class="btn btn-xl text-uppercase" href="MSCS-1D(v2)-setup.exe" style="background: #7B1526" >Download EXE</a>
        </div>
      </div>
    </header>
    <footer style="padding:0px;">
<div class="row" style="background-color:#00004d;color:white;font-weight:bold">
          <div class="col-md-6">
            <span class="copyright">Copyright © All rights reserve to Bangladesh Council of Scientific and Industrial Research (BCSIR).</span>
          </div>
          <div class="col-md-6">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
        </footer>

    <!-- About -->

    <!--<section id="about" style="padding:20px 0">

      <div style="margin-top:0px" class="container">




	    <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 style="margin-bottom:15px; text-align:justify" class="section-subheading text-muted">

			</h3>
          </div>
        </div>

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
<div class="row">
      <div class="col-md-12 ">
         <div  class="card text-white bg-primary flex-md-row mb-4 h-md-250 " style="border: 1px solid; padding: 0px; box-shadow: 5px 10px 8px #888888;" >
            <div class="card-body d-flex flex-column align-items-start " style="background:#0000b3"  >

               <h6 class="mb-0">
                  <a class="text-white" href="#">Multijunction Solar Cell

</a>
               </h6>

               <p class="card-text mb-auto">Multijunction solar cells offer the champion cell efficiencies in photovoltaic literature. Generally speaking, multijunction solar cells are to design in a fashion so that by absorbing the entire solar spectrum into the different sub cells, it could be overcome the detail balance efficiency limit of single junction solar cell. Incorporating the concentrator photovoltaic (CPV) technologies with .... </p>
               <a class="btn btn-outline-light btn-sm" role="button" data-target="#exampleModalR1" data-toggle="modal">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="img/pic1.PNG" style="width: 400px; height: 250px;">
         </div>
      </div>
	  </div>
	  <div class="row">
       <div class="col-md-12">
         <div class="card text-white bg-success flex-md-row mb-4 " style="border: 1px solid; padding: 0px; box-shadow: 5px 10px 8px #888888;">
            <div class="card-body d-flex flex-column align-items-start" style="background:rebeccapurple">

               <h6 class="mb-0">
                  <a class="text-white" href="#">Theoretical Model</a>
               </h6>

               <p class="card-text mb-auto">The simulator has been performed using a modified version of the standard equations for calculating the electrical characteristics of a multijunction solar cell, which is basically a modification of spectral p-n junction model developed by Nell and Barnett.  According to this model, the short-circuit current density, Jsc, has been calculated directly from the ASTM G173-03 reference spectra derived from SMARTS ...</p>
               <a class="btn btn-outline-light btn-sm" data-target="#exampleModalR2" data-toggle="modal">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="img/pic1.gif" style="width: 400px; height: 250px;">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card text-white bg-primary flex-md-row mb-4 h-md-250" style="border: 1px solid; padding: 0px; box-shadow: 5px 10px 8px #888888;">
            <div class="card-body d-flex flex-column align-items-start" style="background:#008860">

               <h6 class="mb-0">
                  <a class="text-white" href="#">Device design</a>
               </h6>

               <p class="card-text mb-auto">Multijunction solar cell is comprised of different sub layer. In this work, GaInP2 was used as a top cell in all cell combinations; GaAs as a second layer for three-junction (3J) and four-junction (4J) solar cell, an emerging material GaAs1-xBix was used as a bottom layer. This material could be obtained by mixing of ... </p>
               <a class="btn btn-outline-light btn-sm" role="button" data-target="#exampleModalR3" data-toggle="modal">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="img/pic3.png" style="width: 400px; height: 250px;">
         </div>
      </div>
	  </div>
	  <div class="row">
       <div class="col-md-12">
         <div class="card text-white bg-success flex-md-row mb-4 h-md-250" style="border: 1px solid; padding: 0px; box-shadow: 5px 10px 8px #888888;">
            <div class="card-body d-flex flex-column align-items-start" style="background:red">

               <h6 class="mb-0">
                  <a class="text-white" href="#">Ultra-high theoretical efficiency milestone!</a>
               </h6>

               <p class="card-text mb-auto">They determined around 49% theoretical efficiency for airmass AM 1.5G at normal atmospheric condition and around 60% for concentrating condition. The following graph shows their sun efficiency versus concentration response.</p>
               <a class="btn btn-outline-light btn-sm" data-target="#exampleModalR4" data-toggle="modal">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="img/pic4.PNG" style="width: 400px; height: 250px;">
         </div>
      </div>
   </div>




        </div>
      </div>
    </section>


-->


    <!-- Footer -->
   <!-- <footer>
      <div class="container" style="background-color:#009900;color:white;font-weight:bold">
        <div class="row">
          <div class="col-md-6">
            <span class="copyright">Copyright &copy; All rights reserve to
BCSIR Laboratories, Dhaka</span>
          </div>
          <div class="col-md-6">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </footer>

-->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
<!--  How many junctions-->
	<style type="text/css">
ul#mylist  {

  top: 5px;
  bottom: 5px;
  left: 15px;
  right: 5px;
  overflow: scroll;
  margin: 0;
  padding: 0;

  border: 2px solid #ccc;

  font-size: 14px;
  font-family: Arial, sans-serif;

  // Again, this is where the magic happens
  -webkit-overflow-scrolling: touch;
}


td { padding-left:5px; }
</style>




	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<!--how many soler end-->
<!--  read more 1-->


<table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade" id="exampleModalR1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    Read more
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-12">
						<div class="input-group">

						         <li class="timeline-inverted">
                <div class="timeline-image">
                  <img style="max-height:400px;max-width:600px" class="rounded img-fluid" src="img/pic1.PNG" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   <!-- <h4>March 2011</h4> -->
                    <h4 class="subheading">Multijunction Solar Cell  </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Multijunction solar cells offer the champion cell efficiencies in photovoltaic literature. Generally speaking, multijunction solar cells are to design in a fashion so that by absorbing the entire solar spectrum into the different sub cells, it could be overcome the detail balance efficiency limit of single junction solar cell. Incorporating the concentrator photovoltaic (CPV) technologies with multijunction solar cells promise further improvement of the overall cell efficiency. This CPV technologies significantly reduce the amount of material required for cell fabrication that consequently reduce the overall manufacturing cost of the multijunction solar cell. Concentrator multijunction solar cell is used for terrestrial application.  </p>
                  </div>
                </div>
              </li>
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>


	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<!--read more 1 end-->
<!--  read more 2-->


<table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade" id="exampleModalR2" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    Read more
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-12">
						<div class="input-group">

						         <li class="timeline-inverted">
                <div class="timeline-image">
                  <img style="max-height:400px;max-width:600px" class="rounded img-fluid" src="img/pic1.gif" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   <!-- <h4>March 2011</h4> -->
                    <h4 class="subheading">Theoretical Model</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The simulation has been performed using a modified version of the standard equations for calculating the electrical characteristics of a multijunction solar cell, which is basically a modification of spectral p-n junction model developed by Nell and Barnett.  According to this model, the short-circuit current density, Jsc, has been calculated directly from the ASTM G173-03 reference spectra derived from SMARTS v. 2.9.2 (AM1.5), where the top cell thickness is taken as an adjusted parameter with other layers. For evaluating of the impact of the sun concentration, an additional concentrator factor (C) is incorporated with the short-circuit current density, Jsc, equation of spectral p-n junction model. The reverse saturation current density, Jo, has been calculated for each cell as the sum of the currents for the n-type and p-type layers. The open circuit voltage, Voc, maximum voltage, Vm, maximum current density, Jm, fill-factor, FF and efficiencies () have been calculated by using standard solar cell equations.



</p>
                  </div>
                </div>
              </li>
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>


	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<!--read more 2 end-->
<!--  read more 3-->


<table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade" id="exampleModalR3" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    Read more
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-12">
						<div class="input-group">

						         <li class="timeline-inverted">
                <div class="timeline-image">
                  <img style="max-height:400px;max-width:600px" class="rounded img-fluid" src="img/pic3.PNG" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   <!-- <h4>March 2011</h4> -->
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">BCSIR scientists proposed a novelmultijunction solar cell, where all sub-layers were comprised of III-V semiconductor materials. They used GaInP2 as first layer, GaAs assecond layer and Geas bottom cell or fourth layer. For third layer, they used Gallium Arsenic Bismide (GaAs1-xBix) for the first time and got very promising results.


</p>
                  </div>
                </div>
              </li>
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>


	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<!--read more 3 end-->
<!--  read more 4-->


<table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade" id="exampleModalR4" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    Read more
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-12">
						<div class="input-group">

						         <li class="timeline-inverted">
                <div class="timeline-image">
                  <img style="max-height:400px;max-width:600px" class="rounded img-fluid" src="img/pic4.PNG" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   <!-- <h4>March 2011</h4> -->
                    <h4 class="subheading">Ultra-high theoretical efficiency milestone! </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">They determined around 49% theoretical efficiency for airmass AM 1.5G at normal atmospheric condition and around 60% for concentrating condition. The following graph shows theirsun efficiency versus concentration response.


</p>
                  </div>
                </div>
              </li>
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>


	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<!--read more 4 end-->
<!--  read more 5-->


<table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade" id="exampleModalR5" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    Read more
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-12">
						<div class="input-group">

						         <li class="timeline-inverted">
                <div class="timeline-image">

                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   <!-- <h4>March 2011</h4> -->
                    <h4 class="subheading">Development of a one dimensional multijunction solar cell simulator (MSCS-1d): version-2 (MSCS-1d: V-2)</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Scientist of IPD, BCSIR developed a theoretical model and based on this model, a preliminary version of one dimensional multijunction solar cell simulator (MSCS-1d:V-1) is under construction. In our on-going project, our intention is to resolve the technical problems of the preliminary version, and develop a more efficient simulator for multijunction solar cell using Java programming language along with the help of PHP and  *.net framework. Basically this simulator could simulate all required standard equations and automatically generate all types of optoelectronic properties such as cell short-circuit current density, open circuit voltage, dark current, bandgap, thickness, width, temperature, mobility, surface recombination velocity, maximum power, fill-factor and efficiency of a multijunction solar cell that is crucially required for solar panel fabrication.


</p>
                  </div>
                </div>
              </li>
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>


	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<!--read more 5 end-->
<!--  read more 6-->


<table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade" id="exampleModalR6" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    Read more
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-12">
						<div class="input-group">

						         <li class="timeline-inverted">
                <div class="timeline-image">
                  <img style="max-height:400px;max-width:600px" class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                   <!-- <h4>March 2011</h4> -->
                    <h4 class="subheading">Multijunction Solar Cell </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Multijunction solar cells offer the champion cell efficiencies in photovoltaic literature. Generally speaking, multijunction solar cells are to design in a fashion so that by absorbing the entire solar spectrum into the different sub cells, it could be overcome the detail balance efficiency limit of single junction solar cell. Incorporating the concentrator photovoltaic (CPV) technologies with multijunction solar cells promise further improvement of the overall cell efficiency. This CPV technologies significantly reduce the amount of material required for cell fabrication that consequently reduce the overall manufacturing cost of the multijunction solar cell. Concentrator multijunction solar cell is used for terrestrial application.
</p>
                  </div>
                </div>
              </li>
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>


	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
<!--read more 6 end-->
<!--  start to simulate -->
<!--
	<style type="text/css">
ul#mylist  {

  top: 5px;
  bottom: 5px;
  left: 15px;
  right: 5px;
  overflow: scroll;
  margin: 0;
  padding: 0;

  border: 2px solid #ccc;

  font-size: 14px;
  font-family: Arial, sans-serif;

  // Again, this is where the magic happens
  -webkit-overflow-scrolling: touch;
}


td { padding-left:5px; }
</style>

<table>
      <tr>
        <td valign="top">
          <span id="ctl00_Content_ShowSession_lblRegisterCWFTypeText">Click here to process your registration</span>
        </td>
        <td align="right" valign="top">
          <button class="btn btn-primary btn-block" type="button" data-target="#exampleModal" data-toggle="modal">Register Myself</button><br>
        </td>
      </tr>
      <tr>
        <td valign="top">
          <span id="ctl00_Content_ShowSession_lblRegisterCWFTypeText">You are not registered</span>
        </td>
        <td>
          <button class="btn btn-info pull-right btn-block" type="button" data-target="#exampleModal" data-toggle="modal">Register Someone Else</button>
          <div tabindex="-1" class="modal fade" id="exampleModal" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">
                    How many cell do you want to simulate
                  </h2><button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                    <div class="row">


				</div>

                    <div class="row">

                      <div class="col-sm-6">
						<div class="input-group">

						  <select name="" id="" class="form-control">
						    <option value="1" style="font-weight: bold;">One</option>
						    <option value="2">Two</option>
						    <option value="3">Three</option>
						    <option value="4">Four</option>
						    <option value="5">Five</option>
						  </select>
						</div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> <button class="btn btn-primary" type="button">Continue</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>


	<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
-->
<!-- start to simulate end-->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>



  </body>

</html>
