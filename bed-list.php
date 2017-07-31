<?php
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Bed Manager</h1>
                    <small>Bed Category List</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        			  <div class="row" style="padding: 10px;">
        			    <div class="col-sm-12 mbutton">
                    <a href="add-bed.php"><input type="button" class="myButton" value="Add Bed Category"></a>
        			    </div>
        			  </div>
        			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                            require("connection.php");
                            $str="select * from bed;";
                            $result= mysqli_query($con, $str);
                            $s=1;
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Bed Type</th>
                            <th>Bed Count</th>
                            <th>Bed Available</th>
                            <th>Charge</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Add Bed</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$s."</td>";
                           //echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['type']."</td>";
                            echo "<td>".$row['capacity']."</td>";
                            echo "<td>".$row['avail']."</td>";
                            echo "<td>".$row['charge']."</td>";
                            echo "<td>".$row['status']."</td>";
                            echo "<td style='text-align: center;'>"."<a href='editbed.php?id=$row[id]'><i style='color:red;' class='fa fa-pencil-square-o' aria-hidden='true'></i></a>"."</td>";
                            echo "<td style='text-align: center;'><a href='javascript:addbed(".$row['id'].")'><i style='color:#37a000;' class='fa fa-plus-square' aria-hidden='true'></i></td>";
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
    function addbed(d){
      $.post("addbedcat.php",{"id":d},function(data){
        alert(data);
      });
    }
  </script>
</body>
