<?php

include_once("config.php");
$keyword= $_GET['keyword'];
if($keyword==""){
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Oops!</strong> Please enter a search term</p>
        </div>";

}
else{
$query = "select * from jobs  join employer  on jobs.eid = employer.eid  where title LIKE '%" . $keyword . "%' or employer.ename LIKE '%".$keyword."%' or employer.profile LIKE '%" . $keyword . "%'" ;
$result = mysqli_query($db1, $query);

if (mysqli_num_rows($result) == 0)
{
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Sorry!</strong> No jobs found matching your search, try something else</p>
        </div>";
}
else {
?>

<html>
  <head>
  </head>
  <body>
    <div class="table-responsive">
      <table id="company_table" class="table table-info table-stripe table-hover table-bordered"> <!-- Sortable ver1 -->
      <!--<table id="company_table" class="table table-info table-stripe table-hover table-bordered table-sortable">  <!-- Sortable ver2 -->                 
            <thead class="thead-dark">
                <tr>
                <th>Company</th>
    <th>Position</th>
    <th>Post Date</th>
    <th>Candidate Profile</th>
                </tr>
            </thead>
            <tbody>
            
    <?php
    echo "<h3 style='color:green'> Search Results Matching :" . $keyword . "</h3> ";

    while ($row = mysqli_fetch_array($result)) {
        //$query2 = mysqli_query($db1, "select * from employer where eid = '$row[eid]'");
        //$r2 = mysqli_fetch_array($query2)
        echo " <tr> ";
        echo "<td>" . $row['ename'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['postdate'] . "</td>";
        echo "<td>" . substr($row['profile'],0,120) . "......</td>";  
        echo "</tr>";
    }
    echo "<h4> <a href='login.php'>Login to view more</a> </h4>";
    }

    }     ?>
           </tbody>
      </table>
    </div>

    <script>
    $('#company_table').DataTable(); //1st version
    //$("company_table").tableSortable(); //2nd version
    </script>

  </body>
</html>