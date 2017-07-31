<?php 
 include("structure.php");
?>
        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Schedule</h1>
                    <small>Add Schedule</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="schedule-list.php"><input type="submit" class="myButton" size="180px" value="Schedule List"></a>
          </div>    
        </div>
        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal">
            <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Doctor Name</label>
                    <div class="col-sm-10">
                      <select id="name" class="form-control">
                            <option value="" selected="selected">Select Option</option>
                            <?php
                              require("connection.php");
                              $str="select name from doctor order by name;";
                              $result= mysqli_query($con, $str);
                              while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                  echo "<option value=".$row['name'].">".$row['name']."</option>";
                                }
                            ?>
                      </select>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="days" class="col-sm-2 control-label">Available Days</label>
                    <div class="col-sm-10">
                      <select id="days" class="form-control">
                            <option value="" selected="selected">Select Option</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                      </select>
                    </div>
                </div>
             
             
                  <div class="form-group">
                  <label for="dob" class="col-sm-2 control-label">Available Time</label>
                    <div class="col-sm-5">
                      <input type="time" class="timepicker form-control hasDatepicker" id="stime" name="start_time" placeholder="Start Time" />     
                    </div>
                     <div class="col-sm-5">
                      <input type="time" class="timepicker form-control hasDatepicker" id="etime" name="end-time" placeholder="End Time" />     
                    </div>
               </div>

                  <div class="form-group">
                  <label for="dob" class="col-sm-2 control-label">Per patient Time</label>
                    <div class="col-sm-10">
                      <input type="text" class="timepicker form-control hasDatepicker" id="pptime" name="per-patient-time (mins)" placeholder="Per Patient Time" />     
                    </div>
                    </div>
                 <div class="form-group">
                    <label for="serial" class="col-sm-2 control-label">Serial Visibility</label>
                    <div class="col-sm-10">
                      <select id="serial" class="form-control">
                            <option value="" selected="selected">Select Option</option>
                            <option value="Sequential">Sequential</option>
                            <option value="Timestamp">Timestamp</option>
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
                          <input type="button" id="add-sch-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
      $('#add-sch-btn').click(function(){
        //if(d){
          var name=document.getElementById("name").value;
          var days=document.getElementById("days").value;
          var stime=document.getElementById("stime").value;
          var etime=document.getElementById("etime").value;        
          var pptime=document.getElementById("pptime").value;
          var serial=document.getElementById("serial").value;
          var status = $( "input:radio[name=\"status\"]:checked" ).val();
          $.post("add-schedule-submit.php",{"name":name,"days":days,"stime":stime,"etime":etime,"pptime":pptime,"serial":serial,"status":status},function(data){
              alert(data);
              $("#name").val("");
              $("#days").val("");
              $("#stime").val("");
              $("#etime").val("");
              $("#pptime").val("");
              $("#serial").val("");
          });
        //}
      });
    });

  </script>
   <script type="text/javascript">
            $("#dob").click(function () {
                $("#dob").datetimepicker();
            });
        </script>
</body>
