<?php 
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Hospital Activities</h1>
                    <small>Operation Report List</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        			  <div class="row" style="padding: 10px;">
        			    <div class="col-sm-12 mbutton">
                    <a href="add-operation-report.php"><input type="button" class="myButton" value="Add Operation Report"></a>
        			    </div>    
        			  </div>
        			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                            require("connection.php");
                            $str="select * from operation;";
                            $result= mysqli_query($con, $str);
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Patient Name</th>
                            <th>Sex</th>
                            <th>Date of Operation</th>
                            <th>Doctor</th>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['pname']."</td>";
                            echo "<td>".$row['sex']."</td>";
                            echo "<td>".$row['doo']."</td>";
                            echo "<td>".$row['doctor']."</td>";
                            echo "<td>".$row['title']."</td>";
                            echo "<td>".$row['status']."</td>";
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
