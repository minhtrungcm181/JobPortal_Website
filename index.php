<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Job Portal </title>
  
<link href="css/home_page.css" rel="stylesheet">
<link href="css/timeline.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

<!--Add table sorting first version-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<link href="css/addons/datatables.min.css" rel="stylesheet">
<script type="text/javascript" src="js/addons/datatables.min.js"></script>




</head>

<body>
  <nav class="navbar" id="insidenav">
    <!-- <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Job Portal</a>
      </div> -->
    <nav class="navbar navbar-expand-sm" style="background-color: aqua">
      <div class="top-left-part">
        <b>
          <a href="/?page=home"><img src="images/logo_nav.png" alt="home" style="float:left;width:140px;padding-right: 10px;"></a>
        </b>
        <h1 style="color: white;"> BK Company LTC.</h1>
      </div>

    </nav>
    <ul class="nav navbar-nav">
      <li class="active"><a  href="?page=home">Home</a></li>
      <!-- <li><a data-toggle="tab" href="#recent"">Recent Jobs</a></li> -->
      <li><a href="/?page=jobseeker">Job Seekers</a></li>
      <li><a  href="/?page=company">Employers</a></li>
      <li><a  href="#contact">Contact Us</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?page=signup_js">Jobseeker</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="?page=signup_emp">Employer</a></li>
        </ul>
      </li>
      <li><a href="?page=login">
          <span class="glyphicon glyphicon-log-in"></span> Login </a></li>
    </ul>
    </div>
  </nav>

<?php
  if (isset($_GET['page']) && $_GET['page'] == 'home')
  { include("home.php");}

  else if (isset($_GET['page']) && $_GET['page'] == 'signup_js')
  { header("location:jobseeker/register_user.php") ;}

  else if (isset($_GET['page']) && $_GET['page'] == 'signup_emp')
  { header("location:employer/register_emp.php");}

  else if (isset($_GET['page']) && $_GET['page'] == 'login')
  {  header("location:login.php");}

  else if (isset($_GET['page']) && $_GET['page'] == 'company')
  {
    echo '<div class="container bg-grey" id="company">';
    include("companies.php");
    echo '</div>';
  }

  else if (isset($_GET['page']) && $_GET['page'] == 'logout')
  { include("logout.php");}

  else if (isset($_GET['page']) && $_GET['page'] == 'search')
  { include("search.php");}

  else if (isset($_GET['page']) && $_GET['page'] == 'jobseeker')
  { 
    echo '<div class="container bg-grey" id="jobseeker">';
    include("jobseeker.php");
    echo '</div>';
  }

  else {
      include("home.php");
    }
  ?>

</body>
<footer>
  <div class="container bg-grey" id="contact">
    <div class="page-header" style="background: white"></div>
    <h2 class="text-center">CONTACT US</h2>
    <div class="page-header"></div>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Ho Chi Minh City, Viet Nam</p>
        <p><span class="glyphicon glyphicon-phone"></span> +84926268595</p>
        <a href="https://www.facebook.com/trinh.buller"><span class="glyphicon glyphicon-home" href="https://www.facebook.com/trinh.buller"></span> facebook/trinh.buller</a>
      </div>

      <div class="col-sm-7">
        <div class="row">
          <p>Copyright © 2022 Group 5</p>
        </div>
      </div>
    </div>
  </div> <!-- Contact -->
</footer>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/search.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/jquery.tableSorter.js"></script>--> <!--Add table sorting second version-->
</html>