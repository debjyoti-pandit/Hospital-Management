<?php
 include("structure.php");
?>
        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Bed Manager</h1>
                    <small>Add Bed Category</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="bed-list.php"><input type="submit" class="myButton" value="Bed Category List"></a>
          </div>
        </div>

        <?php
          $id=$_GET['id'];
			    include("connection.php");
			    $str="select * from bed where id=$id";
			    $result=mysqli_query($con,$str);
			    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		    ?>

        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal" method="GET" action="modifybed.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Serial No.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" readonly value="<?php echo $row['id']?>">
                  </div>
              </div>
              <div class="form-group">
                  <label for="type" class="col-sm-2 control-label">Bed Category</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="type" name="type" value="<?php echo $row['type'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea rows="5" class="form-control" id="description"  style="padding-left:5px;"><?php echo $row['description'] ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label for="capacity" class="col-sm-2 control-label">Bed Count</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="capacity" name="capacity" value="<?php echo $row['capacity'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label for="charger" class="col-sm-2 control-label">Charge</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="charge" name="charge" value="<?php echo $row['charge'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                       <div class="col-sm-10" id="status">
                         <?php
                          $status=$row['status'];
                          if($status=='active')
                          {
                             echo "Active<input type='radio' checked name='status' value='active'/>";
                             echo "Inactive<input type='radio' name='status' value='inactive'/>";
                          }
                          else
                          {
                              echo "Active<input type='radio'  name='status' value='active'/>";
                              echo "Inactive<input type='radio' checked  name='status' value='inactive'/>";
                          }
                         ?>
                       </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                          <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                          <input type="submit" id="add-bed-btn" value="Update" name="btnu" class="btn btn1 cursor"  style="vertical-align: baseline;">
                        <input type="button" disabled value="or" class="btn2">
                    </div>
                  </div>
          </form>
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
  <!--<script type="text/javascript">
    $(document).ready(function(){
      $('#add-bed-btn').click(function(){
        //if(d){
          var type=document.getElementById("type").value;
          var description=document.getElementById("description").value;
          var capacity=document.getElementById("capacity").value;
          var charge=document.getElementById("charge").value;
          var status = $( "input:radio[name=\"status\"]:checked" ).val();
          $.post("add-bed-submit.php",{"type":type,"description":description,"capacity":capacity,"charge":charge,"status":status},function(data){
              alert(data);
              $("#type").val("");
              $("#description").val("");
              $("#capacity").val("");
              $("#charge").val("");
              $("input:radio[name=\"status\"]:checked").prop( "checked",false);
          });

        //}
      });
    });
  </script>-->
</body>
