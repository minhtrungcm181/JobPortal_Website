
    <!--- -------------------------------------------------------------------------------------------------- -->
        <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

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

        <div class="container" id="main1">

            <div class="jumbotron text-center" id="searchjum">
                <p>Search for Jobs</p>
                <form class="form-inline" id="homesearch">
                    <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
                    <button type="button" onclick="search()" class="btn btn-secondary "><span class="glyphicon glyphicon-search"></span></button>
                </form>
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
                </ul>
            </div>
