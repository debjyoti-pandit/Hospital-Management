<?php
 include("structure.php");
?>
        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"> <i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Enquiry</h1>
                    <small>Enquiry Update</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="e.php"><input type="submit" class="myButton" value="Enquiry-List"></a>
          </div>
        </div>

        <?php
		      $id=$_GET['id'];
			    include("connection.php");
			    $str="select * from enquiry where id=$id";
			    $result=mysqli_query($con,$str);
			    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		    ?>

        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal" action="modifyenq.php" method="GET">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Serial No.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" readonly value="<?php echo $row['id']?>">
                  </div>
              </div>
              <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" readonly name="name" value="<?php echo $row['name']?>">
                    </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" readonly name="email" value="<?php echo $row['email']?>">
                    </div>
                </div><div class="form-group">
                  <label for="mobile" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mobile" readonly name="mobile" value="<?php echo $row['mobile']?>">
                    </div>
                </div>
                <div class="form-group">
                  <label for="enquiry" class="col-sm-2 control-label">Enquiry</label>
                    <div class="col-sm-10">
                      <textarea rows="3" class="form-control" id="enquiry" name="enquiry" style="padding-left:5px;" readonly ><?php echo $row['enquiry']?></textarea>
                    </div>
                </div>


                <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Enquary Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="date" readonly name="date" value="<?php echo $row['date']?>" />
                    </div>
                </div>





                <div class="form-group">
                  <label for="doj" class="col-sm-2 control-label">Solution Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="sdate" name="sdate" value="<?php echo $row['sdate']?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                       <div class="col-sm-10" id="status">
                         <?php
                          $status=$row['status'];
                          if($status=='Pending')
                          {
                             echo "Pending<input type='radio' checked name='status' value='Pending'/>";
                             echo "Completed<input type='radio' name='status' value='Completed'/>";
                          }
                          else
                          {
                              echo "Pending<input type='radio'  name='status' value='Pending'/>";
                              echo "Completed<input type='radio' checked  name='status' value='Completed'/>";
                          }
                         ?>
                       </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                          <input type="reset" value="Reset" name="btnud" class="btn button cursor" style="vertical-align: baseline;">
                          <input type="submit" id="add-doc-btn" value="Update" name="btnu" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
</body>
