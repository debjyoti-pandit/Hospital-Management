<?php
 include("structure.php");
?>
        <div id="change">
        	<div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Department</h1>
                    <small>Add Department</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
			  <div class="row" style="padding: 10px;">
			    <div class="col-sm-12 mbutton">
			      <a href="department-list.php"><input type="submit" class="myButton" value="Department-List"></a>
			    </div>
			  </div>

        <?php
		      $id=$_GET['id'];
			    include("connection.php");
			    $str="select * from department where id=$id";
			    $result=mysqli_query($con,$str);
			    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		    ?>

			  <div class="row" style="padding-top:5px;margin-right: 40px;">
			    <form class="form-horizontal" action="modifydep.php" method="GET">
            <div class="form-group">
              <label for="id" class="col-sm-2 control-label">ID</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" readonly value="<?php echo $row['id']?>" name="id" >
                </div>
            </div>
			        <div class="form-group">
			          <label for="dn" class="col-sm-2 control-label">Department Name</label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control" id="dname" value="<?php echo $row['dname']?>" name="dname">
			            </div>
			        </div>
			        <div class="form-group">
			          <label for="des" class="col-sm-2 control-label">Description</label>
			            <div class="col-sm-10">
			              <textarea rows="10" class="form-control" id="description" name="description" style="padding-left:5px;"><?php echo $row['description']?></textarea>
			            </div>
			        </div>
			        <div class="form-group">
			          <label for="status" class="col-sm-2 control-label">Status</label>
			            <div class="col-sm-10" id="status" name="status">
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
                         echo "Inactive<input type='radio' checked name='status' value='inactive'/>";
                     }
                    ?>
			            </div>
			        </div>
			        <div class="form-group">
			          <div class="col-sm-offset-2 col-sm-10">
			              	<input type="submit" value="Delete" name="btnud" class="btn button cursor" style="vertical-align: baseline;">
			              	<input type="submit" id="add-dept-btn" name="btnud" value="Update" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
  <script type="text/javascript">
    /*$(document).ready(function(e){
      $('#add-dept').click(function () {
       $.get("add-department.php",function(e){
          $('html').html(e);
        });
      });
  });*/
  </script>
  <script type="text/javascript">
  	$(document).ready(function(){
			$('#add-dept-btn').click(function(){
				//if(d){
					var name=document.getElementById("dn").value;
					var des=document.getElementById("des").value;
					var status = $( "input:checked" ).val();
					$.post("add-dept-submit.php",{"name":name,"des":des,"status":status},function(data){
							alert(data);
							$("#dname").val("");
							$("#description").val("");
							$("#status").val("");
					});

				//}
			});
		});
  </script>
</body>
