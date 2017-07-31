<?php
 include("structure.php");
?>
<div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Edit Profile</h1>
                    <small>Admin</small>
                  </div>
              </div>
            </div>
    <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
        <div class="row" style="padding: 10px;">
        	<?php
		      	$email=$_SESSION['email'];
			    include("connection.php");
			    $str="select * from admin where email='$email'";
			    $result=mysqli_query($con,$str);
			    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		    ?>
        
        <form class="form-horizontal">
        	<div class="form-group">
	            <label class="col-lg-2 control-label">Email:</label>
	            <div class="col-lg-10">
	              <input class="form-control" type="text" value="<?php echo $row['email']?>" id="email" readonly="">
	            </div>
	        </div>
          	<div class="form-group">
	            <label class="col-lg-2 control-label">First name:</label>
	            <div class="col-lg-10">
	              <input class="form-control" type="text" value="<?php echo $row['firstname']?>" id="firstname">
	            </div>
          	</div>
	        <div class="form-group">
	            <label class="col-lg-2 control-label">Last name:</label>
	            <div class="col-lg-10">
	              <input class="form-control" type="text" value="<?php echo $row['lastname']?>" id="lastname">
	            </div>
	        </div>
          	<div class="form-group">
	            <label class="col-lg-2 control-label">Password:</label>
	            <div class="col-lg-10">
	              <input class="form-control" type="text" value="<?php echo $row['password']?>" id="password">
	            </div>
          	</div>
          	<div class="form-group">
                  <label for="mobile" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']?>">
                    </div>
            </div>
            <div class="form-group">
                  <label for="Phone" class="col-sm-2 control-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']?>">
                    </div>
            </div>
          	<div class="form-group">
                        <label for="sex" class="col-sm-2 control-label">Sex</label>
                          <div class="col-sm-9" id="sex">
                            <?php
                             $sex=$row['sex'];
                             if($sex=='Male')
                             {
                                echo "Male<input type='radio' checked name='sex' value='Male'/>";
                                echo "Female<input type='radio' name='sex' value='Female'/>";

                             }
                             else
                             {
                                 echo "Male<input type='radio'  name='sex' value='Male'/>";
                                 echo "Female<input type='radio' checked name='sex' value='Female'/>";

                             }
                            ?>
                          </div>
            </div>
            <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <textarea rows="4" class="form-control" id="address" style="padding-left:5px;" name="address"><?php echo $row['address']?></textarea>
                    </div>
            </div>
            <div class="form-group">
                  <label for="dob" class="col-sm-2 control-label">D.O.B.</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $row['dob']?>" />
                    </div>
            </div>
            <div class="form-group">
                  <label for="dob" class="col-sm-2 control-label">D.O.Join.</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="doa" name="doa" value="<?php echo $row['doa']?>" />
                    </div>
            </div>
            	<div class="form-group">
                    <label for="blood_group" class="col-sm-2 control-label">Blood Group</label>
                    <div class="col-sm-10">
                      <select id="blood_group" name="blood_group" class="form-control">
                        <?php
                          echo "<option value='$row[blood_group]'>$row[blood_group]</option>";
                        ?>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                      </select>
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
                          <input type="button" id="editadminbtn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
                        <input type="button" disabled value="or" class="btn2">
                    </div>
                  </div>
        </form>
      </div>
  	</div>
</div>
</div>
</div>
</div>
<script>
	$(document).ready(function(){
		$('#editadminbtn').click(function(){
			var email=document.getElementById("email").value;
			var password=document.getElementById("password").value;
			var firstname=document.getElementById("firstname").value;
              var lastname=document.getElementById("lastname").value;
              var address=document.getElementById("address").value;
              var sex = $( "input:radio[name=\"sex\"]:checked" ).val();
              var dob=document.getElementById("dob").value;
              var doa=document.getElementById("doa").value;
              var phone=document.getElementById("phone").value;
              var mobile=document.getElementById("mobile").value;
              var blood_group=document.getElementById("blood_group").value;
              var status = $( "input:radio[name=\"status\"]:checked" ).val();
              //alert(status);
              $.post("adminedit.php",{"email":email,"password":password,"firstname":firstname,"lastname":lastname,"address":address,"sex":sex,"dob":dob,"doa":doa,"phone":phone,"mobile":mobile,"blood_group":blood_group,"status":status},function(data){
              	alert(data);
              });

		});
	});
</script>
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
</html>