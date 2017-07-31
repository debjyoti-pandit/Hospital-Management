<?php 
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Schedule</h1>
                    <small>Schedule List</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        			  <div class="row" style="padding: 10px;">
        			    <div class="col-sm-12 mbutton">
                    <a href="add-schedule.php"><input type="button" class="myButton" value="Add Schedule"></a>
        			    </div>    
        			  </div>
        			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                            require("connection.php");
                            $str="select * from schedule;";
                            $result= mysqli_query($con, $str);
                            $s=1;
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Doctor Name</th>
                            <th>Available Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Per Patent Time</th>
                            <th>Serial</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$s."</td>";
                            echo "<td>".$row['dname']."</td>";
                            echo "<td>".$row['adays']."</td>";
                            echo "<td>".$row['stime']."</td>";
                            echo "<td>".$row['etime']."</td>";
                            echo "<td>".$row['pptime']."</td>";
                            echo "<td>".$row['serial']."</td>";
                            echo "<td>".$row['status']."</td>";
                            echo "</tr>";
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
  <script type="text/javascript">
   /* $(document).ready(function(e){
      $('#dlist-addd').click(function () {
       $.get("add-dept.php",function(e){
          $('html').html(e);
        });
      });
  });*/
  </script>
  <script>
      /*$(document).ready(function(){
            alert();
            $.get("viewall.php",function(bb){
              $("#viewall").html(bb);
      });*/
  </script>
</body>
