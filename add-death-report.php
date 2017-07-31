<?php 
 include("structure.php");
?>
        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Hospital Activities</h1>
                    <small>Add Death Report</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="death-report-list.php"><input type="submit" class="myButton" value="Death Report List"></a>
          </div>    
        </div>
        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal">
              <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Patient Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Patient Name">
                    </div>
                </div>
                  <div class="form-group">
                  <label for="dob" class="col-sm-2 control-label">Date of Death</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="dob" name="dob" />     
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
                  <label for="tob" class="col-sm-2 control-label">Time of Death</label>
                    <div class="col-sm-10">
                      <input type="time" class="form-control" id="tob" name="dob" />     
                    </div>
                </div>
                <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="title" placeholder="title">
                    </div>
                </div>
              
              
                   <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea rows="3" class="form-control" id="description" placeholder="description" style="padding-left:5px;"></textarea>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="doctor" class="col-sm-2 control-label">Doctor Name</label>
                    <div class="col-sm-10">
                      <select id="doctor" class="form-control">
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
                          <input type="button" id="add-death-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
      $('#add-death-btn').click(function(){
        //if(d){
          var name=document.getElementById("name").value;
          var doctor=document.getElementById("doctor").value;
          var title=document.getElementById("title").value;
          var tob=document.getElementById("tob").value;
          var sex = $( "input:radio[name=\"sex\"]:checked" ).val();
          var dob=document.getElementById("dob").value;
          var description=document.getElementById("description").value;
          var status = $( "input:radio[name=\"status\"]:checked" ).val();
          $.post("add-death-report-submit.php",{"name":name,"doctor":doctor,"title":title,"tob":tob,"sex":sex,"dob":dob,"description":description,"status":status},function(data){
              alert(data);
              $("#name").val("");
              $("#doctor").val("");
              $("#title").val("");
              $("#tob").val("");
              $("#dob").val("");
              $("#description").val("");
              $("input:radio[name=\"status\"]:checked").prop( "checked",false);
              $("input:radio[name=\"sex\"]:checked").prop( "checked",false);
          });

        //}
      });
    });
  </script>
</body>
