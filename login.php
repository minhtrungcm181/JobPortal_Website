<?php
/**
* Created by PhpStorm.
* User: Sreelal
* Date: 2-04-2016
* Time: 8:03 PM
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
<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin</title>
      <?php
      if(isset($_GET['msg']) && ($_GET['msg']=="failed")){
          ?>
          <script type='text/javascript'>alert("Login Failed: Invalid Username or Password!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=="registered"))
      {
          ?>
      <script type='text/javascript'>alert("Successfully registered, Please login now!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=='please_login'))
          {
          ?>
          <script type="text/javascript">alert("Please Login First to access your profile!");</script>
          <?php
      }
      ?>
  </head>

<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">  
    <a class="navbar-brand" href="index.php">Job Portal</a>
    </div>
  </div>
</nav>
  <body>
    <div class="login-modal">
        <form class="form-signin" action="process_login.php" method="post">
            <h1 class="form-signin-heading">Sign in</h1>
            <div class="form-group">
            <label for="inputEmail" >Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
            </div>
            <div class="form-group">
            <label for="inputPassword" >Password</label>
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
            <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="employer/register_emp.php">Company</a></li>
        </div>
        </div>
        </p>
    </div>
</body>

<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link href="css/sign_in.css" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
