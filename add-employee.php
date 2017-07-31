<?php 
 include("structure.php");
?>
        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Human Resources</h1>
                    <small>Add Employee</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="employee-list.php"><input type="submit" class="myButton" value="Employee-List"></a>
          </div>    
        </div>
        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal">
            <div class="form-group">
                    <label for="role" class="col-sm-2 control-label">User Role</label>
                    <div class="col-sm-10">
                      <select id="role" class="form-control">
                            <option value="" selected="selected">Accountant</option>
                            <option value="Laboratorist">Laboratorist</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Pharmacist">Pharmacist</option>
                            <option value="Receptionist">Receptionist</option>
                            <option value="Representative">Representative</option>
                            <option value="Case Manager">Case_Manager</option>                           
                      </select>
                    </div>
                </div>
              <div class="form-group">
                  <label for="fname" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="fname" placeholder="first-Name">
                    </div>
                    </div>
                     <div class="form-group">
                  <label for="lname" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lname" placeholder="last-Name">
                    </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                 <div class="form-group">
                  <label for="dob" class="col-sm-2 control-label">D.O.B.</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="dob" name="dob" />     
                    </div>
                </div>
                 <div class="form-group">
                    <label for="blood_group" class="col-sm-2 control-label">Blood Group</label>
                    <div class="col-sm-10">
                      <select id="blood_group" class="form-control">
                            <option value="" selected="selected">Select Option</option>
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
                  <label for="mobile" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mobile" placeholder="Mobile number">
                    </div>
                </div>
                <div class="form-group">
                        <label for="sex" class="col-sm-2 control-label">Sex</label>
                          <div class="col-sm-10" id="sex">
                           <label class="radio-inline">
                              <input type="radio" name="sex"  value="Male">Male
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="sex" value="Female">Female
                          </label>
                          </div>
                </div>
               
                <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <textarea rows="3" class="form-control" id="address" placeholder="Address" style="padding-left:5px;"></textarea>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                       <div class="col-sm-10" id="status">
                          <label class="radio-inline">
                             <input type="radio" name="status"  value="active">Active
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="status" value="inactive">Inactive
                          </label>
                       </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                          <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                          <input type="button" id="add-emp-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
      $('#add-emp-btn').click(function(){
        //if(d){
          var lname=document.getElementById("lname").value;
          var email=document.getElementById("email").value;
          var mobile=document.getElementById("mobile").value;
          var dob=document.getElementById("dob").value;
          var blood_group=document.getElementById("blood_group").value;
          var fname=document.getElementById("fname").value;
          var sex = $( "input:radio[name=\"sex\"]:checked" ).val();
          var address=document.getElementById("address").value;
          var role=document.getElementById("role").value;
          var status = $( "input:radio[name=\"status\"]:checked" ).val();
          /*var fileInput=document.getElementById("picture");
          var file=fileInput.file[0];
          var formData=new FormData();
          formData.append('file',file);
*/

          $.post("add-employee-submit.php",{"lname":lname,"email":email,"mobile":mobile,"fname":fname,"sex":sex,"dob":dob,"blood_group":blood_group,"address":address,"role":role,"status":status},function(data){
              alert(data);
              $("#lname").val("");
              $("#email").val("");
              $("#mobile").val("");
              $("#fname").val("");
              $("#dob").val("");
              $("#blood_group").val("");
              $("#address").val("");
              $("#role").val("");
              $("input:radio[name=\"status\"]:checked").prop( "checked",false);
              $("input:radio[name=\"sex\"]:checked").prop( "checked",false);
          });

        //}
      });
    });
  </script>
</body>

           