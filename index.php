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
      
        <title> Job Portal </title>
        <script type="application/javascript">
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#insidenav']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>
    </head>

<nav class="navbar" id="insidenav">
  <!-- <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Job Portal</a>
      </div> -->
      <nav class="navbar navbar-expand-sm" style ="background-color: aqua">
        <div class="top-left-part">
            <b>
                <img src="images/logo_nav.png" alt="home" style="float:left;width:140px;padding-right: 10px;" >
            </b>
              <h1 style="color: white;"> BK Company LTC.</h1>
        </div>
        
    </nav>
    <ul class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="#main1">Home</a></li>
        <!-- <li><a data-toggle="tab" href="#recent"">Recent Jobs</a></li> -->
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
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

    <!--- -------------------------------------------------------------------------------------------------- -->
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class = "container"> 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/carousel1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="images/carousel2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="images/carousel3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<

<div class="container" id="main1"> <!-- jumbotron fluid -->
<div class="jumbotron text-center" id="searchjum">
    <p>Search for Jobs</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
        <button type="button" onclick="search()" class="btn btn-lg " style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
</div>
</div> <!-- jumbotron --

<div class="container" id="subcontent" style="background: transparent">
    <!-- div for search contents -->
</div>
<div class="container">
    <div class="page-header">
        <h1 id="timeline">Nhận Xét Nhà Tuyển Dụng</h1>
    </div>
    <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Marvel</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>This website bring us a tons of good employer</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">NAB Innovation Centre Vietnam</h4>
            </div>
            <div class="timeline-body">
              <p>
- Lương rất cạnh tranh, cao hơn hẳn mặt bằng chung.
- Chắc do tuyển dụng khắt khe nên đồng nghiệp toàn siêu nhân, mình chắc là đứa kém nhất công ty được ae bao gánh =)
- Devices cho nhân viên khá ổn (macbook M1 M2, bàn làm việc rộng rãi)</p>
              <p></p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">MB Bank</h4>
            </div>
            <div class="timeline-body">
              <p>
Việc nhiều nhất là đơn vị làm về Digital Banking và Open Banking, môi trường tốt để học hỏi kinh nghiệm
Sếp rất nice, đặc biệt bên Open Banking
Chỉ phải OT khi golive hoặc công việc check lỗi live gấp</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Tosshiba</h4>
            </div>
            <div class="timeline-body">
              <p>
-Đồng nghiệp thân thiện
-Giờ giấc thoải mái
-Có common activities ( nghe nhạc giữa giờ, birthday party)
Du án mình làm thì ít khi phải OT, OT cũng được tiền</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Intel</h4>
            </div>
            <div class="timeline-body">
              <p>
Traning bài bản phù hợp với các bạn mới ra trường.
OT không lương</p>
              <hr>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <!-- <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li> -->
    </ul>
</div>
    <div class="container bg-grey" id="contact">
        <div class="page-header" style="background: white"></div>
        <h2 class="text-center">CONTACT US</h2>
        <div class="page-header"></div>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Ho Chi Minh City, Viet Nam</p>
                <p><span class="glyphicon glyphicon-phone"></span> +84926268595</p>
                <p href = "#"><span class="glyphicon glyphicon-home" href="https://www.facebook.com/trinh.buller"></span> facebook/trinh.buller</p>
            </div>

            <div class="col-sm-7">
                <div class="row">
                <p>Copyright © 2022 Group 5</p>
                </div>
            </div>
        </div>
    </div> <!-- Contact -->

</div> <!-- sub content -->
 <!-- <div class="page-header" style="background: #f4511e"></div> -->
</div> <!-- Container -->
<!-- Set height and width with CSS -->
<!-- <div id="googleMap" style="height:400px;width:100%;"></div> -->

<!-- Add Google Maps -->
<!-- <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(11.2680519,75.7891479);

    function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script> -->
<footer class="container-fluid text-center">
    <a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Job Portal</p>
</footer>
</body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home_page.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link href="css/timeline.css" rel="stylesheet">

    
</html>