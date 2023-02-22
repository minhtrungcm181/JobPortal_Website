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

  else if (isset($_GET['page']) && $_GET['page'] == 'jobs')
  { 
    echo '<div class="container bg-grey" id="jobseeker">';
    include("jobs.php");
    echo '</div>';
  }

  else {
      include("home.php");
    }
  ?>
