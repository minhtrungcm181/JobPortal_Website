<?php

/**
 * Online-Job-Portal - A web application built on PHP HTML & javascript
Copyright (C) 2016 Sreelal C

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

 */
?>
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
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>

            <ul class="nav navbar-nav">
                <li class="active"><a data-toggle="tab" href="#main1">Home</a></li>
                <li><a data-toggle="tab" href="#recent">Recent Jobs</a></li>
                <li><a data-toggle="tab" href="#jobseeker">Job Seeker</a></li>
                <li><a data-toggle="tab" href="#">Employer</a></li>
                <li><a data-toggle="tab" href="#contact">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="employer/register_emp.php">Employer</a></li>
                    </ul>
                </li>
                <li><a href="/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="/images/test1.jpg">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/images/test2.jpg">
                <div class="container">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/images/test3.jpg">
                <div class="container">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
        </div>
        <form class="col-sm-12" id="searchForm">
            <div class="form-group col-sm-4 col-sm-offset-4">
                <div class="input-group input-group-lg ">
                    <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button type="button" onclick="search()" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="glyphicon glyphicon-chevron-right"></i>
        </a>
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h2>Register</h2>
            <h4>Register in this website for a better experience</h4>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Employers</h1>
                    </div>
                    <div class="panel-body">
                        <p style="font-size: 16px">Register today and post a job in easy steps and start receiving applications the same day.
                            Find the right candidates easily and quickly through our Search feature.</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$0</h3>
                        <a href="employer/register_emp.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Job Seekers</h1>
                    </div>
                    <div class="panel-body">
                        <p style="font-size: 16px">Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.
                            Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$0</h3>
                        <a href="jobseeker/register_user.php" style="color: inherit"><button class="btn btn-lg">Sign Up</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Premium</h1>
                    </div>
                    <div class="panel-body">
                        <p style="font-size: 16px;">Better Exposure <br>
                            Better Support</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$4</h3>
                        <h4>per month</h4>
                        <button class="btn btn-lg disabled">Upgrade</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

    </div> <!-- sub content -->
    <div class="page-header" style="background: #f4511e"></div>
    </div> <!-- Container -->
    <!-- Set height and width with CSS -->
    <div id="googleMap" style="height:400px;width:100%;"></div>

    <!-- Add Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter = new google.maps.LatLng(11.2680519, 75.7891479);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 12,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    <footer class="container-fluid text-center">
        <a href="#insidenav" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Job Portal</p>
    </footer>
</body>

</html>