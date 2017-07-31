<?php
  session_start();
  if($_SESSION['email']=="" || $_SESSION['role']!="Admin"){
    header("location:login.php");
  }
?>
<html lang="en">
<head>
  <title>Hope HCC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <link rel="stylesheet" href="page2.css">
  <link href="font-awesome.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/addacc.css"></link>
  <style>
.sidebar-nav ul{
  display: none;
}
.tap{

}
.sidebar-nav li.tap ul{
  display: block;
}
.sidebar-nav .subarrow:after{
  content: '\203A';
  float: right;
  margin-right: 20px;
  font-size: 20px;
  margin-top: -8px;
  transform: rotate(90deg);
}
.sidebar-nav li.tap .subarrow:after{
  content:'\2039';
}
i{
  padding-right: 15px;
  font-size: 25px;
}
.i_fa{
    padding-top: 7px;
    position: absolute;
    margin-right: 20px;
    font-size: 25px;
    margin-left: -5px;
}
.spanfa{
  margin-left: 50px;
}
.fadiv{
  float: left;
  z-index: 1;
  padding-left: 0px;
}
.bullets{
  padding-left: 55px;
}
.setting-tab{
    text-align: right;
    float: right;
}
.bbtm{
  border-bottom-style: solid;
  padding-bottom: 10px;
  border-width: 0.2px;
  border-bottom-color: aqua;
  background-color: #fff;
}
.header-icon{
    float: left;
    padding: 20px;
    color: blueviolet;
    font-size: 60px;
    line-height: 60px;
}
.header-title{
    padding: 5px 0px 5px 10px;
    height: 100px;
    margin-left: 100px;
}
.identity{
    font-family: cursive;
    padding-bottom: 20px;
    color: aquamarine;
    width: 250px;
    text-align: center;
    padding-top: 180px;
    font-size: 15px;
}
</style>
</head>
<body id="body" style="margin-top: 0px; overflow-x: hidden;">
  <div id="wrapper">
    <!--sidebar-->
    <div id="sidebar-wrapper" style="height:1300px;">
      <div class="identity">
          <?php
            echo $_SESSION['email'];
            echo "<br>";
            echo $_SESSION['role'];
          ?>
        </div>
      <ul class="sidebar-nav">
      <li ><a href="page2.php">
          <i class="fa fa-tachometer i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Dashboard</span>
        </li>

        <li class="hassub"><a href="javascript://">
          <i class="fa fa-hospital-o i_fa" aria-hidden="true"></i>
              <span class="spanfa">Department</span>
              <span class="subarrow"></span>
              <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="add-dept.php">Add Department</a></li>
                <li><a id="dept-list-side" class="bullets" href="department-list.php">Department Lst</a></li>
              </ul>
        </li>

        <li class="hassub"><a href="javascript://">
          <i class="fa fa-user-md i_fa" aria-hidden="true"></i>
              <span class="spanfa">Doctor</span>
              <span class="subarrow"></span>
              <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="add-doctor.php">Add Doctor</a></li>
                <li><a class="bullets" href="doctor-list.php">Doctor List</a></li>
              </ul>
        </li>
        <li ><a href="pl.php">
            <i class="fa fa-user i_fa" aria-hidden="true"></i>
            <span class="spanfa" >Patient List</span>
          </li>
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-calendar-o i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Schedule</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="add-schedule.php">Add Schedule</a></li>
                <li><a class="bullets" href="schedule-list.php">Schedule List</a></li>
              </ul>
        </li>
        </li>
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-money i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Account Manager</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="add-account.php">Add Account</a></li>
                <li><a class="bullets" href="account-list.php">Account List</a></li>
                <li><a class="bullets" href="add-payment.php">Add Payement</a></li>
                <li><a class="bullets" href="payment-list.php">Payment List</a></li>
              </ul>
        </li>
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-users i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Human Resources</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="add-employee.php">Add Employee</a></li>
                <li><a class="bullets" href="employee-list.php">Employee List</a></li>
              </ul>
        </li>
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-bed i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Bed Management</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="add-bed.php">Add Bed Category</a></li>
                <li><a class="bullets" href="bed-list.php">Bed Category List</a></li>
                <li><a class="bullets" href="bed-assign-list.php">Bed Assign List</a></li>
              </ul>
        </li>
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-hospital-o i_fa" aria-hidden="true"></i>
          <span class="spanfa" >HospitalActivities</span>
          <span class="subarrow"></span>
           <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="add-birth-report.php">Add Birth Report</a></li>
                <li><a class="bullets" href="birth-report-list.php">Birth Report List</a></li>
                <li><a class="bullets" href="add-death-report.php">Add Death Report</a></li>
                <li><a class="bullets" href="death-report-list.php">Death Report List</a></li>
                <li><a class="bullets" href="add-operation-report.php">Add Operation Report</a></li>
                <li><a class="bullets" href="operation-report-list.php">Operation Report List</a></li>
              </ul>
        </li>
        <li ><a href="e.php">
          <i class="fa fa-hospital-o i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Enquiry</span>
        </li>
      </ul>
    </div>
    <!-- container-->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row bbtm" style="margin-top: -15px;padding-top: 15px;margin-right: 0px;">

          <div class="col-lg-12">
            <a href="#" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
            <div class="dropdown" style="padding-right: 20px;float: right;">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Settings
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="logout.php">LogOut</a></li>
                <li><a href="edit-profile.php">Edit Profile</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Doctor</h1>
                    <small>Add Doctor</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="doctor-list.php"><input type="submit" class="myButton" value="Doctor-List"></a>
          </div>
        </div>
        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal">
              <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Doctor Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Doctor-Name">
                    </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div><div class="form-group">
                  <label for="mobile" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
                    </div>
                </div>
                <div class="form-group">
                  <label for="Phone" class="col-sm-2 control-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="phone" placeholder="Doctor-Name">
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
                  <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <textarea rows="3" class="form-control" id="address" placeholder="Address" style="padding-left:5px;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label for="designation" class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="designation" placeholder="Designation">
                    </div>
                </div>
                <div class="form-group">
                    <label for="blood_group" class="col-sm-2 control-label">Department</label>
                    <div class="col-sm-10">
                      <select id="department" class="form-control">
                            <option value="" selected="selected">Select Option</option>
                            <?php
                              require("connection.php");
                              $str="select dname from department where status='active' order by dname;";
                              $result= mysqli_query($con, $str);
                              while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                  echo "<option value=".$row['dname'].">".$row['dname']."</option>";
                                }
                            ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="specialist" class="col-sm-2 control-label">Specialist</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="specialist" placeholder="Specialist">
                    </div>
                </div>
                <div class="form-group">
                  <label for="qualification" class="col-sm-2 control-label">Qualification</label>
                    <div class="col-sm-10">
                      <textarea rows="3" class="form-control" id="qualification" placeholder="Qualification" style="padding-left:5px;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label for="doj" class="col-sm-2 control-label">D.O.Join.</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="doj" name="doj" />
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
                          <input type="button" id="add-doc-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
      $('#add-doc-btn').click(function(){
        //if(d){
          var name=document.getElementById("name").value;
          var email=document.getElementById("email").value;
          var mobile=document.getElementById("mobile").value;
          var phone=document.getElementById("phone").value;
          var sex = $( "input:radio[name=\"sex\"]:checked" ).val();
          var dob=document.getElementById("dob").value;
          var blood_group=document.getElementById("blood_group").value;
          var address=document.getElementById("address").value;
          var designation=document.getElementById("designation").value;
          var department=document.getElementById("department").value;
          var specialist=document.getElementById("specialist").value;
          var qualification=document.getElementById("qualification").value;
          var doj=document.getElementById("doj").value;
          var status = $( "input:radio[name=\"status\"]:checked" ).val();
          $.post("add-doctor-submit.php",{"name":name,"email":email,"mobile":mobile,"phone":phone,"sex":sex,"dob":dob,"blood_group":blood_group,"address":address,"designation":designation,"department":department,"specialist":specialist,"qualification":qualification,"doj":doj,"status":status},function(data){
              alert(data);
              $("#name").val("");
              $("#email").val("");
              $("#mobile").val("");
              $("#phone").val("");
              $("#dob").val("");
              $("#blood_group").val("");
              $("#address").val("");
              $("#designation").val("");
              $("#department").val("");
              $("#specialist").val("");
              $("#qualification").val("");
              $("#doj").val("");
          });

        //}
      });
    });
  </script>
</body>
