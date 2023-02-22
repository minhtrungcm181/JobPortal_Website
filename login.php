<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Signin</title>
    <?php
    if (isset($_GET['msg']) && ($_GET['msg'] == "failed")) {
    ?>
        <script type='text/javascript'>
            alert("Login Failed: Invalid Username or Password!");
        </script>
    <?php
    } else if (isset($_GET['msg']) && ($_GET['msg'] == "registered")) {
    ?>
        <script type='text/javascript'>
            alert("Successfully registered, Please login now!");
        </script>
    <?php
    } else if (isset($_GET['msg']) && ($_GET['msg'] == 'please_login')) {
    ?>
        <script type="text/javascript">
            alert("Please Login First to access your profile!");
        </script>
    <?php
    }
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-sm" style="background-color: aqua">
        <div class="top-left-part">
            <b>
                <a href="index.php"><img src="images/logo_nav.png" alt="home" style="float:left;width:140px;padding-right: 10px;"></a>
            </b>
            <h1 style="color: white;"> BK Company LTC.</h1>
        </div>

    </nav>
    <div class="login-modal">
        <form class="form-signin" action="process_login.php" method="post">
            <h1 class="form-signin-heading">Sign in</h1>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="remember-me"> Remember me </label>
                <a href="forgotpass.php">/Forgot Password</a>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        <p class="text-center">Need an account?
        <div class="dropdown text-center "><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
            <div class="dropdown-menu pull-right">
                <li><a href="/?page=signup_js">Jobseeker</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/?page=signup_emp">Employer</a></li>
            </div>
        </div>
        </p>
    </div>
</body>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/search.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>