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
			  <div class="row" style="padding-top:5px;margin-right: 40px;">
			    <form class="form-horizontal">
			        <div class="form-group">
			          <label for="dn" class="col-sm-2 control-label">Department Name</label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control" id="dn" placeholder="Department-Name">
			            </div>
			        </div>
			        <div class="form-group">
			          <label for="des" class="col-sm-2 control-label">Description</label>
			            <div class="col-sm-10">
			              <textarea rows="10" class="form-control" id="des" placeholder="Description" style="padding-left:5px;"></textarea>
			            </div>
			        </div>
			        <div class="form-group">
			          <label for="status" class="col-sm-2 control-label">Status</label>
			            <div class="col-sm-10" id="status">
			             <label class="radio-inline">
			                <input type="radio" name="inlineRadioOptions"  value="active">Active
			            </label>
			            <label class="radio-inline">
			                <input type="radio" name="inlineRadioOptions" value="inactive">Inactive
			            </label>
			            </div>
			        </div>
			        <div class="form-group">
			          <div class="col-sm-offset-2 col-sm-10">
			              	<input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
			              	<input type="button" id="add-dept-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
							$("#dn").val("");
							$("#des").val("");
							$("#status").val("");
					});

				//}
			});
		});
  </script>
</body>
