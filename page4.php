<?php
  session_start();
  if($_SESSION['email']=="" || $_SESSION['role']!="Doctor"){
    header("location:login.php");
  }
?>
<html lang="en">
<head>
  <title>Doctor</title>
  <meta charset="utf-8">
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
#sl{
  display: none;
}
#dol{
  display: none;
}
#a{
  display: none;
}
#al{
  display: none;
}
#el{
	display: none;
}
</style>
</head>
<body id="body" style="margin-top: 0px; overflow-x: hidden;">
  <div id="wrapper">
    <!--sidebar-->
    <div id="sidebar-wrapper" style="height: 100%;min-height: 0px;">
      <div class="identity">
          <?php
            echo $_SESSION['email'];
            echo "<br>";
            echo $_SESSION['role'];
          ?>
        </div>
      <ul class="sidebar-nav">
        <li ><a href="page4.php">
          <i class="fa fa-user-md i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Appointment List</span>
        </li>
        <li ><a href="javascript:dol()">
          <i class="fa fa-user-md i_fa" aria-hidden="true"></i>
          <span class="spanfa" >Doctor List</span>
        </li>
      </ul>
    </div>
    <!-- container-->
    <div id="page-content-wrapper" style="background-color: #f1f1f1;height: 100%;min-height: 0px;">
      <div class="container-fluid">
        <div class="row bbtm" style="margin-top: -15px;padding-top: 15px;">
          <div class="col-lg-12">
            <a href="#" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
            <div class="dropdown" style="padding-right: 20px;float: right;">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Settings
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="logout.php">LogOut</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="change">
          	<div id="e">
	            <div class="row bbtm">
	                <div class="col-lg-12">
	                  <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
	                    <div class="header-title">
	                      <h1>Appointment</h1>
	                      <small>Appointment List</small>
	                    </div>
	                </div>
	            </div>
            	<div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
	                <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
	                      	<?php
	                            require("connection.php");
	                            $s=$_SESSION['email'];
                              $str2="select name from doctor where email='$s'";
                              $res=mysqli_query($con,$str2);
                              $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                              $name=$row['name'];
	                            $str="select * from appointment where doctor='$name' order by date desc";
	                            $result= mysqli_query($con, $str);
                              $s=1;
	                      	?>
	                      	<table class="table table-hover">
	                          <thead>
	                            <tr>
                                <th>Serial No</th>
	                              <th>Person Id</th>
	                              <th>Person Name</th>
	                              <th>Problem</th>
                                <th>Date</th>
	                          </tr>
	                          </thead>
	                          <tbody>
	                          <?php
	                          while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
	                              echo "<tr>";
                                echo "<td>".$s."</td>";
	                              echo "<td>".$row['pid']."</td>";
	                              echo "<td>".$row['pname']."</td>";
	                              echo "<td>".$row['problem']."</td>";
                                echo "<td>".$row['date']."</td>";
                                $s++;
	                          }
	                          ?>
	                          </tbody>
	                        </table>
	                </div>
                </div>
            </div>
            <div id="dol">
                <div class="row bbtm">
                  <div class="col-lg-12">
                    <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                      <div class="header-title">
                        <h1>Doctor List</h1>
                      </div>
                  </div>
                </div>
                <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
                  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                       <?php
                            require("connection.php");
                            $str="select * from doctor";
                            $result= mysqli_query($con, $str);
                            $s=1;
                    ?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Email Address</th>
                            <th>Mobile No</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$s."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['department']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['mobile']."</td>";
                            echo "<td>".$row['status']."</td>";
                            $s++;
                        }
                        ?>
                        </tbody>
                      </table>
                  </div>
                </div>
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
  <script>
    function dol(){
      document.getElementById('dol').style.display="block";
      document.getElementById('e').style.display="none";
      document.getElementById('sl').style.display="none";
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#apt-front-btn').click(function(){
          var email=document.getElementById("email-apt").value;
          var dname=document.getElementById("dpt-apt").value;
          var doctor=document.getElementById("dname").value;
          var adate=document.getElementById("apt-date").value;
          var prob=document.getElementById("prob-apt").value;
          $.post("apt-front-submit.php",{"email":email,"dname":dname,"doctor":doctor,"adate":adate,"prob":prob},function(data){
              alert(data);
              $("#email-apt").val("");
              $("#dpt-apt").val("");
              $("#dname").val("");
              $("#apt-date").val("");
              $("#prob-apt").val("");
          });
      });
    });
  </script>
  <script>
  	$(document).ready(function(){
      $('#enquiry-btn').click(function(){
          var email=document.getElementById("email-enquiry").value;
          var mobile=document.getElementById("mobile-enquiry").value;
          alert(mobile);
          var name=document.getElementById("name-enquiry").value;
          alert(name);
          var enquiry=document.getElementById("enquiry").value;
          var date=document.getElementById("date-enquiry").value;
          $.post("enquiry.php",{"email":email,"name":name,"mobile":mobile,"date":date,"enquiry":enquiry},function(data){
              alert(data);
              $("#email-enquiry").val("");
              $("#name-enquiry").val("");
              $("#mobile-enquiry").val("");
              $("#date-enquiry").val("");
              $("#enquiry").val("");
          });
      });
    });
  </script>
</body>
