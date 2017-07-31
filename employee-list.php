<?php 
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Human Resources</h1>
                    <small>Employee List</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        			  <div class="row" style="padding: 10px;">
        			    <div class="col-sm-12 mbutton">
                    <a href="add-employee.php"><input type="button" class="myButton" value="Add Employee"></a>
        			    </div>    
        			  </div>
        			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                            require("connection.php");
                            $str="select * from employee";
                            $result= mysqli_query($con, $str);
                            $s=1;
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email Address</th>
                            <th>Mobile No</th>
                            <th>Address</th>
                            <th>Sex</th>
                            <th>Status</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$s."</td>";
                            echo "<td>".$row['lname']."</td>";
                            echo "<td>".$row['fname']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['mobile']."</td>";
                            echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['sex']."</td>";
                            echo "<td>".$row['status']."</td>";
                            echo "<td>".$row['role']."</td>";
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
