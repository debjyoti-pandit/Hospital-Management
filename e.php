<?php
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Enquiry</h1>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                            require("connection.php");
                            $str="SELECT * FROM `enquiry` WHERE status='Pending' ORDER BY date DESC LIMIT 15;";
                            $result= mysqli_query($con, $str);
                            $s=1;
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Date</th>
                            <th>Enquiry</th>
                            <th>Solution Date<th>
                            <th>Status</th>
                              <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$s."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['mobile']."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['enquiry']."</td>";
                            echo "<td>".$row['sdate']."</td>";
                            echo "<td colspan='2' style='text-align:center;'>".$row['status']."</td>";
                            echo "<td style='text-align: center;'>"."<a href='editenq.php?id=$row[id]'>
                            <i style='color:red;' class='fa fa-pencil-square-o' aria-hidden='true'></i>
                            </a>"."</td>";


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
