<?php 
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Hospital Activities</h1>
                    <small>Death Report List</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        			  <div class="row" style="padding: 10px;">
        			    <div class="col-sm-12 mbutton">
                    <a href="add-death-report.php"><input type="button" class="myButton" value="Add Death Report"></a>
        			    </div>    
        			  </div>
        			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                            require("connection.php");
                            $str="select * from death;";
                            $result= mysqli_query($con, $str);
                            $s=1;
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Patient Name</th>
                            <th>Sex</th>
                            <th>Date of Death</th>
                            <th>Time of Death</th>
                            <th>Doctor</th>
                            <th>Title</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$s."</td>";
                            echo "<td>".$row['pname']."</td>";
                            echo "<td>".$row['sex']."</td>";
                            echo "<td>".$row['dod']."</td>";
                            echo "<td>".$row['tob']."</td>";
                            echo "<td>".$row['doctor']."</td>";
                            echo "<td>".$row['title']."</td>";
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
