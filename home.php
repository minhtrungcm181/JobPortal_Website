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
                        <a href="/?page=signup_js" style="color: inherit"><button class="btn btn-lg">Sign Up</button></a>
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




<!-- 
    <div class="page-header" style="background: #f4511e"></div>
    </div> 

    <div id="googleMap" style="height:400px;width:100%;"></div>


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
    </script> -->
</body>