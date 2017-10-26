<?php

    include('check.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <title>SLEMA</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/custom.css">
        <link rel="stylesheet" type="text/css" href="../css/buttons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Bitter">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto Slab" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" style="margin-top: 5px; margin-bottom: 5px;">
                <img class="roundedd-block" src="/Images/logo.png" width="180" height="75">
        </div>
        <nav class="navbar navbar-toggleable-sm navbar-light navbar-background">

              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#" style="color: #b63056;">H</a>
              <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto navbar-font">
                  <li class="nav-item">
                    <a class="nav-link" href="/"><font color="#FFFFF"><b>HOME</b></font></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about-us"><font color="#FFFFF"><b>ABOUT US</b></font></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/join-us"><font color="#FFFFF"><b>JOIN US</b></font></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/publications"><font color="#FFFFF"><b>PUBLICATIONS</b></font></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/services"><font color="#FFFFF"><b>SERVICES</b></font></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/news"><font color="#FFFFF"><b>NEWS & EVENTS</b></font></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact-us"><font color="#FFFFF"><b>CONTACT US</b></font></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/member"><font color="#FFFFF"><b>MEMBER AREA</b></font></a>
                  </li>
                </ul>
              </div>
        </nav>
        <div class="simple-page-wrap">
            <div class="simple-page-logo">
                <a href="#">
                    <span><i class="fa fa-gg"></i></span>
                    <span>SLEMA</span>
                </a>
            </div><!-- logo -->
            <div class="simple-page-form" id="login-form">
                <h1 class="form-title m-b-xl text-center">Log In</h1>
                <form method="post" action="">
                    <div class="m-b-xl">
                        <input id="sign-in-email" type="text" name="name" class="form-control input-lg" placeholder="Membership Number">
                    </div>

                    <div class="m-b-xl">
                        <input id="sign-in-password" type="password" name="password" class="form-control input-lg" placeholder="Password">
                    </div>

                    <input type="submit" name="submit" class="btn btn-danger btn-block no-text-transform" value="LOG IN" style="color: ##b63056;">
                </form>
                </br>
                <div style="text-align: center; color: #b63056;"><?php echo $error; ?></div>
            </div><!-- #login-form -->
            <div class="simple-page-footer">
                <p>
                    <small>Forgot your password ?</small>
                    <a href="forgotPassword.php">RESET IT</a>
                </p>
            </div><!-- .simple-page-footer -->
        </div><!-- .simple-page-wrap -->
    </body>
</html>