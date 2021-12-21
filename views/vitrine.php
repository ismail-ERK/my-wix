<!DOCTYPE html>
<html>

<head>
  <title>Alstar - Bootstrap one page parallax template</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="../public/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../public/css/style.css" rel="stylesheet" media="screen">
  <link href="../public/color/default.css" rel="stylesheet" media="screen">

  <!-- =======================================================
    Theme Name: Alstar
    Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

<?php
session_start();
if( isset($_SESSION["created"]) && $_SESSION["created"]==true){ ?>
<script>
    alert("Created");
</script>
<?php  } ?>
<?php
$_SESSION["created"]=false; ?>
  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="vitrine.php">Alstar</a>

      </div>
      <div class="collapse navbar-collapse ">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
            <li><a href="#contact">Create website</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#team">Team</a></li>

            <?php if(!isset($_SESSION["loggedin"]) ){  ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Register</a></li>
            <?php }  ?>

            <?php if(isset($_SESSION["loggedin"]) != null && $_SESSION["loggedin"] == true ){  ?>
            <li><a href="logout.php">Logout</a></li>
            <?php }  ?>


        </ul>
      </div>
    </div>
  </nav>


  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Details are the key for perfection</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">We mix all detailed things together</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Services</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Website Design</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="../public/img/screenshots/1.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Brand Identity</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="../public/img/screenshots/2.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Web & Mobile Apps</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="../public/img/screenshots/3.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- Team -->
  <section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Our Team</h2>
            <div class="heading-line"></div>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="../public/img/team/1.jpg" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Art Director</p>
          </div>
        </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="../public/img/team/1.jpg" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Art Director</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Create WebSite</h2>
            <div class="heading-line"></div>
            <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and we will be get in touch with you within 24 hours. </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">

            <form class="form-horizontal" role="form" method="get" action="generate.php">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                  <label for="webname">Name of your website !</label>
                  <input type="text" class="form-control"  id="webname" name="webname" placeholder="Name of your website">
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                  <label for="navItems">Nombre des items que vous voulez !</label>

                  <input type="number" onchange="getNavItemsCount()" class="form-control" id="navItems" name="itemsCount" >
              </div>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group" id="items">
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                  <label for="navItems">Orientation de navbar :</label>

                  <div class="form-check">
                          <input class="form-check-input" type="radio" name="orientation" id="exampleRadios1" value="horizontal" checked>
                          <label class="form-check-label" for="exampleRadios1">
                              Horizontal
                          </label>
                      </div>

                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="orientation" id="exampleRadios2" value="vertical">
                          <label class="form-check-label" for="exampleRadios2">
                              Vertical
                          </label>
                      </div>

              </div>
            </div>

            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit"   name="submit"  class="btn btn-theme btn-lg btn-block">Generate</button>
              </div>
            </div>
          </form>


        </div>
      </div>
        <script>
            var count = 0
            function getNavItemsCount() {
                count = document.getElementById('navItems').value
                insertItems()
            }

            function insertItems(){
                document.getElementById('items').innerHTML=setNavBody();
            }


            function setNavBody(){
                var body=``
                for(i=0;i<count;i++){
                    body += `<div class="form-group"><label for="email" class="col-sm-2 control-label">Item ${i}</label><div class="col-sm-10"><input type="text" class="form-control" id=item${i} name=item${i} placeholder=item${i} ></div></div>`
                }
                return body
            }
        </script>
    </div>
  </section>

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              109 Borough High Street,<br />London SE1 1NL
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
              +1 111 9998 7774<br> +1 245 4544 6855

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
              hello@alstarstudio.com<br />sales@alstarstudio.com
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
            <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
            <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
            <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
              Designed by <a href="https://www.google.com/search?client=firefox-b-d&q=ERROUK+AABILLA+company">ERROUK_&_AABILLA company</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="../public/js/jquery.js"></script>
  <script src="../public/js/bootstrap.min.js"></script>
  <script src="../public/js/wow.min.js"></script>
  <script src="../public/js/mb.bgndGallery.js"></script>
  <script src="../public/js/mb.bgndGallery.effects.js"></script>
  <script src="../public/js/jquery.simple-text-rotator.min.js"></script>
  <script src="../public/js/jquery.scrollTo.min.js"></script>
  <script src="../public/js/jquery.nav.js"></script>
  <script src="../public/js/modernizr.custom.js"></script>
  <script src="../public/js/grid.js"></script>
  <script src="../public/js/stellar.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../public/contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="../public/js/custom.js"></script>

</body>
</html>
