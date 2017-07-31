<?php
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Bed Manager</h1>
                    <small>Bed Assigned List</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                            require("connection.php");
                            $str="SELECT email,doa,dname,dod,description,bedtype FROM `admission` WHERE status='active' ORDER BY doa DESC;";
                            $result= mysqli_query($con, $str);
                            $s=1;
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Bed Type</th>
                            <th>Patient Email</th>
                            <th>Date of Admission</th>
                            <th>Date of Discharge</th>
                            <th>Assigned By</th>
                            <th>Description</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$s."</td>";
                            echo "<td>".$row['bedtype']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['doa']."</td>";
                            echo "<td>".$row['dod']."</td>";
                            echo "<td>".$row['dname']."</td>";
                            echo "<td>".$row['description']."</td>";
                            $s++;
                        }
                        ?>
                        </tbody>
                      </table>
        			  </div>
        			</div>
          </div>
      </div>
    </div>
  </div>
  <script>
    $('#menu-toggle').click(function(e){
      e.preventDefault();
      $('#wrapper').toggleClass('menuDisplayed');
    });
  </script>
  <script>
  $(document).ready(function(e){
    $('.hassub').click(function () {
      $(this).toggleClass("tap");
    });
  });
  </script>
</body>
