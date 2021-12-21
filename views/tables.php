<!DOCTYPE html>
<html>

<head>
    <title>Alstar - Bootstrap one page parallax template</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

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
                <li><a href="index.php">Create a website</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Service</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Register</a></li>
            </ul>
        </div>
    </div>
</nav>





<section id="contact" class="home-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-heading">
                    <h2>Contact us</h2>
                    <div class="heading-line"></div>
                    <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and we will be get in touch with you within 24 hours. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <form class="form-horizontal" role="form" method="get" action="generateTables.php">



                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label for="name">Nom de votre table :</label>
                            <input type="text" class="form-control"  name="tabname" placeholder="Name of your table">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label for="name" class="col-sm-8 control-label">Nombre d'attributs de votre table :)</label>
                            <input type="number" onchange="getTableItemsCount()" class="form-control" id="tableItemsCount" name="tableItemsCount" >

                        </div>
                    </div>
                    <div class="form-group" id="items">
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="submit" name="submit" class="btn btn-theme btn-lg btn-block" value="Generate Table"/>

                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>
    <script>
        var count = 0
        function getTableItemsCount() {
            count = document.getElementById('tableItemsCount').value
            insertItems()
        }

        function insertItems(){
            document.getElementById('items').innerHTML=setTableBody();
        }


        function setTableBody(){
            var body=``
            for(i=0;i<count;i++){
                body += `<div class="col-md-offset-2 col-md-8"><label for="email" class="col-sm-2 control-label">Attribut</label><div class="col-sm-8"><input type="text" class="form-control" id=item${i} name=item${i} placeholder=item${i} ></div></div><br/>`
            }
            return body
        }
    </script>
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