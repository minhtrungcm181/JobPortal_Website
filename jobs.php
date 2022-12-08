<html>
  <head>
  </head>
  <body>
    <div class="table-responsive">
      <table id="job_table" class="table table-info table-stripe table-hover table-bordered"> <!-- Sortable ver1 -->
      <!--<table id="job_table" class="table table-info table-stripe table-hover table-bordered table-sortable">  <!-- Sortable ver2 -->                 
            <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Vacation</th>
                  <th>Pay</th>
                  <th>Post date</th>
                </tr>
            </thead>
            <tbody>
          <?php 

            $host = "localhost";
            $user = "root";
            $password = "";
            $db_name = "jobportal";

            $con = mysqli_connect($host, $user, $password, $db_name);

            $sql = "select *from jobs";  
            $result = mysqli_query($con, $sql);  
            //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr>
                              <td scope="row">' . $row["eid"]. '</td>
                              <td>' . $row["title"] .'</td>
                              <td> '.$row["jobdesc"] .'</td>
                                <td> '.$row["vacno"] .'</td>
                              <td> '.$row["basicpay"] .'</td>
                              <td> '.$row["postdate"] .'</td>
                            </tr>';
                }
            }
            else {
                //echo "0 results";
            } 
          ?>
           </tbody>
      </table>
    </div>

    <script>
    $('#job_table').DataTable(); //1st version
    //$("job_table").tableSortable(); //2nd version
    </script>

  </body>
</html>