<?php 
    
    session_start();  /* Start of the session */
    include ('../database.php');

  if(!isset($_SESSION['isLoggedIn'])){
    header("location: ../log-in/");
  }

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
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Bitter">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto Slab" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.min.js"></script>
        <script src="../js/app.js"></script>
        <script src="https://use.fontawesome.com/4884b64af8.js"></script>

    </head>
    <body ng-app="slemaApp">
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
                    <a class="nav-link" href="/log-out"><font color="#FFFFF"><b>LOGOUT</b></font></a>
                  </li>
                </ul>
              </div>
        </nav>

        <div class="container">

            <div class="tab">

                <a href="#!/" ng-click="open('1')" style="margin: 0px;"><button class="{{profile}}"><font size="3">Profile</font><button></a>
                <a href="#!/dues" ng-click="open('2')" ng-hide="isLifeMember"><button class="{{dues}}"><font size="3">Subscription Dues</font><button></a>
                <a href="#!/presentations" ng-click="open('3')"><button class="{{presentations}}"><font size="3">E - Library</font><button></a>
                <a href="#!/news" ng-click="open('4')"><button class="{{news}}"><font size="3">Member News</font><button></a>
                
            </div>

            <div ng-view style="background-color: #f1f1f1; padding: 0px;"></div>

        </div>

</body>

</html>
