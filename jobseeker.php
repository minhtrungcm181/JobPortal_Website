<html>
  <head>
  </head>
  <body>
    <div class="table-responsive">
      <table id="jobseeker_table" class="table table-info table-stripe table-hover table-bordered"> <!-- Sortable ver1 -->
      <!--<table id="jobseeker_table" class="table table-info table-stripe table-hover table-bordered table-sortable">  <!-- Sortable ver2 -->         
            <thead class="thead-dark">
                <tr>
                  <th>Name</th>
                  <th>Experience</th>
                  <th>Skill</th>
                  <th>Basic Education</th>
                  <th>Advanced Education</th>
                </tr>
            </thead>
            <tbody>
          <?php 

            $host = "localhost";
            $user = "root";
            $password = "";
            $db_name = "jobportal";

            $con = mysqli_connect($host, $user, $password, $db_name);

            $sql = "select *from jobseeker";  
            $result = mysqli_query($con, $sql);  
            //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr>
                              <td scope="row">' . $row["name"]. '</td>
                              <td> '.$row["experience"] .'</td>
                                <td> '.$row["skills"] .'</td>
                              <td> '.$row["basic_edu"] .'</td>
                              <td> '.$row["master_edu"] .'</td>
                            </tr>';
                }
            }
            else {
            } 
          ?>
           </tbody>
      </table>
    </div>

    <script>
    $('#jobseeker_table').DataTable(); //1st version
    //$("jobseeker_table").tableSortable(); //2nd version
    </script>

  </body>
</html>