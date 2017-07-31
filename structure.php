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
    <div id="sidebar-wrapper">
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
