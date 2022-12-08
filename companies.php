<html>
  <head>
  </head>
  <body>
    <div class="table-responsive">
      <table id="company_table" class="table table-info table-stripe table-hover table-bordered table-sortable">                     
            <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Industry</th>
                  <th>Location</th>
                  <th>Profile</th>
                </tr>
            </thead>
            <tbody>
          <?php 

            $host = "localhost";
            $user = "root";
            $password = "";
            $db_name = "jobportal";

            $con = mysqli_connect($host, $user, $password, $db_name);

            $sql = "select *from employer";  
            $result = mysqli_query($con, $sql);  
            //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr>
                              <td scope="row">' . $row["eid"]. '</td>
                              <td>' . $row["ename"] .'</td>
                              <td> '.$row["etype"] .'</td>
                                <td> '.$row["industry"] .'</td>
                              <td> '.$row["location"] .'</td>
                              <td> '.$row["profile"] .'</td>
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
    $("company_table").tableSortable();
    </script>

  </body>
</html>