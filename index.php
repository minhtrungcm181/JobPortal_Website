<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home_page.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title> Job Portal </title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/?page=home">Job Portal</a>
            </div>

            <ul class="nav navbar-nav">
                <li class="active"><a href="/?page=home">Home</a></li>
                <li><a href="#recent">Recent Jobs</a></li>
                <li><a  href="#jobseeker">Job Seeker</a></li>
                <li><a  href="/?page=company">Companies</a></li>    
                <li><a  href="#contact">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/?page=signup_js">Jobseeker</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/?page=signup_emp">Employer</a></li>
                    </ul>
                </li>
                <li><a href="/?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <?php 
      if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
          case 'home':
            include "home.php";
            break;
          case 'signup_js':
            include "jobseeker/register_user.php";
            break;
          case 'signup_emp':
            include "employer/register_emp.php";
            break;
          case 'login':
            include "login.php";
            break;
          case 'company':
            include "companies.php";
            break;
          case 'logout':
            include "logout.php";
            break;
          case 'search':
            include "search.php";
            break; 
          default:
            include "home.php";
            break;
        }
      }
      else{
        include "home.php";
      }
?>
</body>
<footer>
<div class="container bg-grey" id="contact">
        <div class="page-header" style="background: #f4511e"></div>
        <h2 class="text-center">CONTACT US</h2>
        <div class="page-header"></div>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Kozhikode, India</p>
                <p><span class="glyphicon glyphicon-phone"></span> +91 8943 202726</p>
                <p><span class="glyphicon glyphicon-envelope"></span> info@jobportal.com</p>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Contact -->
</footer>
</html>