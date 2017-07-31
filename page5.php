<?php
  session_start();
  if($_SESSION['email']=="" || $_SESSION['role']!="Receptionists"){
    header("location:login.php");
  }
?>
<html lang="en">
<head>
  <title>Patient</title>
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
#dl{
  display: none;
}
#dol{
  display: none;
}
#a{
  display: none;
}
#en{
  display: none;
}
#al{
  display: none;
}
#rp{
  display: none;
}
#i{
  display: none;
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
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-user i_fa" aria-hidden="true"></i>
          <span class="spanfa">Patient</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="page5.php">Admit Patient Bed</a></li>
                <li><a class="bullets" href="javascript:rp()">Register Patient</a></li>
                <li><a class="bullets" href="javascript:i()">Generate Invoice</a></li>
              </ul>
        </li>
        <li ><a href="javascript:e()">
          <i class="fa fa-hospital-o i_fa" aria-hidden="true"></i>
          <span class="spanfa">Add Enquiry</span>
        </li>
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-pencil-square-o i_fa" aria-hidden="true"></i>
          <span class="spanfa">Appointment</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">

                <li><a class="bullets" href="javascript:a()">Add Appointment</a></li>
                <li><a class="bullets" href="javascript:al()">Appointment List</a></li>
              </ul>
        </li>
        <li><a href="javascript:dol()">
          <i class="fa fa-user-md i_fa" aria-hidden="true"></i>
          <span class="spanfa">Doctor List</span>
        </li>
        <li><a href="javascript:dl()">
          <i class="fa fa-hospital-o i_fa" aria-hidden="true"></i>
          <span class="spanfa">Department List</span>
        </li>
      </ul>
    </div>
    <!-- container-->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row bbtm" style="margin-top: -15px;padding-top: 15px;margin-right: 10px;">
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
            <div id="dl">
                <div class="row bbtm">
                  <div class="col-lg-12">
                    <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                      <div class="header-title">
                        <h1>Department List</h1>
                      </div>
                  </div>
                </div>
                <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
                  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                      <?php
                              require("connection.php");
                              $str="select * from department;";
                              $result= mysqli_query($con, $str);
                              $s=1;
                      ?>
                      <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Serial No.</th>
                              <th>Department Name</th>
                              <th>Description</th>
                              <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                              echo "<tr>";
                              echo "<td>".$s."</td>";
                              echo "<td>".$row['dname']."</td>";
                              echo "<td>".$row['description']."</td>";
                              echo "<td>".$row['status']."</td>";
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
            <div id="ab">
                <div class="row bbtm">
                  <div class="col-lg-12">
                    <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                      <div class="header-title">
                        <h1>Patient</h1>
                        <small>Admit Patient</small>
                      </div>
                  </div>
                </div>
                <div class="container-fluid relative" style="margin-top: 10px;">
                <div class="row" style="padding-top:5px;margin-right: 40px;">
                  <form class="form-horizontal">
                    <div class="form-group">
                        <label for="type" class="col-sm-2 control-label">Patient Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" required id="pname" placeholder="Patient Email">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="type" class="col-sm-2 control-label">Bed Type</label>
                            <div class="col-sm-10">
                              <select id="type" required class="form-control">
                                    <option value="" selected="selected">Select Option</option>
                                    <?php
                                      require("connection.php");
                                      $str="select type from bed order by type;";
                                      $result= mysqli_query($con, $str);
                                      while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                          echo "<option value=".$row['type'].">".$row['type']."</option>";
                                        }
                                    ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="doa" class="col-sm-2 control-label">Date of Addmission</label>
                            <div class="col-sm-10">
                              <input type="date" required class="form-control" id="doa" name="doa" />
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="dod" class="col-sm-2 control-label">Date of Discharge</label>
                            <div class="col-sm-10">
                              <input type="date" required class="form-control" id="dod" name="dod" />
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                              <textarea rows="5" required class="form-control" id="description" placeholder="Bed Description" style="padding-left:5px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                           <label for="assigned_by" class="col-sm-2 control-label">Assigned By</label>
                           <div class="col-sm-10">
                             <select id="doctor" required="" class="form-control">
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
                            <div class="col-sm-offset-2 col-sm-10">
                                  <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                                  <input type="button" id="add-bed-assign-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
                                <input type="button" disabled value="or" class="btn2">
                            </div>
                          </div>
                  </form>
                </div>
              </div>
            </div>
            <div id="a">
                <div class="row bbtm">
                  <div class="col-lg-12">
                    <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                      <div class="header-title">
                        <h1>Appointment</h1>
                        <small>Add Appointment</small>
                      </div>
                  </div>
                </div>
                <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="email-apt" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email-apt" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="dpt-apt" class="col-sm-2 control-label">Department Name</label>
                        <div class="col-sm-10">
                          <select name="dpt-apt" class="form-control" id="dpt-apt">
                                  <option value="" selected="selected">Select Department</option>
                                    <?php
                                      require("connection.php");
                                      $str="select dname from department where status='active' order by dname;";
                                      $result= mysqli_query($con, $str);
                                      while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                          //alert($row['dname']);
                                          echo "<option value=".$row['dname'].">".$row['dname']."</option>";
                                        }
                                    ?>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dname" class="col-sm-2 control-label">Doctor Name</label>
                        <div class="col-sm-10">
                          <select name="doc-apt" class="form-control" id="dname">
                                  <option value="" selected="selected">Select Doctor</option>
                                  <?php
                                  require("connection.php");
                                  $str="select name from doctor where status='active' order by name;";
                                  $result= mysqli_query($con, $str);
                                  while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                      echo "<option value=".$row['name'].">".$row['name']."</option>";
                                    }
                                ?>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="apt-date" class="col-sm-2 control-label">Appointment Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="apt-date" name="apt-date" />
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="prob-apt" class="col-sm-2 control-label">Problem</label>
                        <div class="col-sm-10">
                          <textarea rows="4" class="form-control" id="prob-apt" placeholder="Problem" style="padding-left:5px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                              <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                              <input type="button" id="apt-front-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
                            <input type="button" disabled value="or" class="btn2">
                        </div>
                    </div>
                  </form>
                </div>
            </div>
            <div id="rp">
              <div class="row bbtm">
                <div class="col-lg-12">
                  <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <div class="header-title">
                      <h1>Patient</h1>
                      <small>Register Patient</small>
                    </div>
                </div>
              </div>
              <div class="container-fluid relative" style="margin-top: 10px;">
                <div class="row" style="padding-top:5px;margin-right: 40px;">
                  <form class="form-horizontal">
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
                            <div class="col-sm-offset-3 col-sm-10">
                                  <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                                  <input type="button" id="add-p-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
                                <input type="button" disabled value="or" class="btn2">
                            </div>
                          </div>
                  </form>
                </div>
              </div>
            </div>
            <div id="i">
              <div class="row bbtm">
                  <div class="col-lg-12">
                    <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                      <div class="header-title">
                        <h1>Account Manager</h1>
                        <small>Invoice List</small>
                      </div>
                  </div>
                </div>
                <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
            			  <div class="row" style="padding: 10px;">
            			    <div class="col-sm-12 mbutton">
                         <button type="button" class="btn btn-info btn-lg mybutton" data-toggle="modal" data-target="#myModal">Generate Invoice</button>
                         <div class="modal fade" id="myModal" role="dialog" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.15);">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Please Fill These...</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Email:</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="email-invoice" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="pwd">DOA:</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" id="doa-invoice" placeholder="Enter Date of Admission" name="doa">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="dname" class="col-sm-3 control-label">Assigned By:</label>
                        <div class="col-sm-9">
                          <select name="dname" class="form-control" id="dname-invoice">
                                  <option value="" selected="selected">Select Doctor</option>
                                  <?php
                                  require("connection.php");
                                  $str="select name from doctor where status='active' order by name;";
                                  $result= mysqli_query($con, $str);
                                  while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                      //alert($row['name']);
                                      echo "<option value=".$row['name'].">".$row['name']."</option>";
                                    }
                                ?>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-9">
                        <button type="button" id="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

            			    </div>
            			  </div>
            			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                        <?php
                                require("connection.php");
                                $str="SELECT * FROM `admission` ORDER BY doa desc LIMIT 15;";
                                $result= mysqli_query($con, $str);
                                $sl=1;
                        ?>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Serial No.</th>
                                <th>Patient Email</th>
                                <th>Date of Admission</th>
                                <th>Assigned By</th>
                                <th>Total</th>
                                <th>Paid</th>
                                <th>Due</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                echo "<tr>";
                                echo "<td>".$sl."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['doa']."</td>";
                                echo "<td>".$row['dname']."</td>";
                                echo "<td>".$row['total']."</td>";
                                echo "<td>".$row['paid']."</td>";
                                echo "<td>".$row['due']."</td>";
                                echo "<td>".$row['status']."</td>";
                                echo "<td style='text-align:center;'><a href='page52.php?d=".$row['id']."'><i class='fa fa-eye' aria-hidden='true'></i></i></a></td>";
                                $sl++;
                            }
                            ?>
                            </tbody>
                          </table>
            			  </div>
            			</div>
            </div>
            <div id="al">
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
                <div class="row" style="padding-right: 30px;padding-left: 10px;">
                    <?php
                          require("connection.php");
                          $str="SELECT * FROM `appointment` ORDER BY date DESC LIMIT 18;";
                          $result= mysqli_query($con, $str);
                          $s=1;
                  ?>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Serial No.</th>
                          <th>Department Name</th>
                          <th>Doctor Name</th>
                          <th>Patient Name</th>
                          <th>Date</th>
                          <th>Problem</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                          echo "<tr>";
                          echo "<td>".$s."</td>";
                          echo "<td>".$row['dname']."</td>";
                          echo "<td>".$row['pname']."</td>";
                          echo "<td>".$row['doctor']."</td>";
                          echo "<td>".$row['date']."</td>";
                          echo "<td>".$row['problem']."</td>";
                          $s++;
                      }
                      ?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
            <div id="en">
              <div class="row bbtm">
                <div class="col-lg-12">
                  <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <div class="header-title">
                      <h1>Enquiry</h1>
                      <small>Add Enquiry</small>
                    </div>
                </div>
              </div>
              <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="email-enquiry" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email-enquiry" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile-enquiry" class="col-sm-2 control-label">Mobile</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="mobile-enquiry" placeholder="Mobile Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name-enquiry" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="name-enquiry" placeholder="Name">
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="date-enquiry" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="date-enquiry" name="apt-date" />
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="enquiry" class="col-sm-2 control-label">Enquiry</label>
                        <div class="col-sm-10">
                          <textarea rows="4" class="form-control" id="enquiry" placeholder="Enquiry" style="padding-left:5px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                              <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                              <input type="button" id="enquiry-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
                            <input type="button" disabled value="or" class="btn2">
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
    function dl(){
      document.getElementById('dl').style.display="block";
      document.getElementById('i').style.display="none";
      document.getElementById('dol').style.display="none";
      document.getElementById('a').style.display="none";
      document.getElementById('al').style.display="none";
      document.getElementById('ab').style.display="none";
      document.getElementById('en').style.display="none";
      document.getElementById('rp').style.display="none";

    }
    function dol(){
      document.getElementById('dol').style.display="block";
      document.getElementById('i').style.display="none";
      document.getElementById('dl').style.display="none";
      document.getElementById('en').style.display="none";
      document.getElementById('a').style.display="none";
      document.getElementById('al').style.display="none";
      document.getElementById('ab').style.display="none";
      document.getElementById('rp').style.display="none";
      document.getElementById('i').style.display="none";
    }
    function a(){
      document.getElementById('a').style.display="block";
      document.getElementById('i').style.display="none";
      document.getElementById('dl').style.display="none";
      document.getElementById('dol').style.display="none";
      document.getElementById('al').style.display="none";
      document.getElementById('en').style.display="none";
      document.getElementById('ab').style.display="none";
      document.getElementById('rp').style.display="none";
      document.getElementById('i').style.display="none";
    }
    function i(){
      document.getElementById('i').style.display="block";
      document.getElementById('a').style.display="none";
      document.getElementById('dl').style.display="none";
      document.getElementById('dol').style.display="none";
      document.getElementById('al').style.display="none";
      document.getElementById('en').style.display="none";
      document.getElementById('ab').style.display="none";
      document.getElementById('rp').style.display="none";
    }


    function e(){
      document.getElementById('en').style.display="block";
      document.getElementById('i').style.display="none";
      document.getElementById('dl').style.display="none";
      document.getElementById('dol').style.display="none";
      document.getElementById('a').style.display="none";
      document.getElementById('al').style.display="none";
      document.getElementById('ab').style.display="none";
      document.getElementById('rp').style.display="none";
    }
    function rp(){
      document.getElementById('rp').style.display="block";
      document.getElementById('i').style.display="none";
      document.getElementById('dl').style.display="none";
      document.getElementById('dol').style.display="none";
      document.getElementById('a').style.display="none";
      document.getElementById('al').style.display="none";
      document.getElementById('ab').style.display="none";
      document.getElementById('en').style.display="none";
    }
    function al(){
      document.getElementById('al').style.display="block";
      document.getElementById('i').style.display="none";
      document.getElementById('dl').style.display="none";
      document.getElementById('dol').style.display="none";
      document.getElementById('a').style.display="none";
      document.getElementById('rp').style.display="none";
      document.getElementById('ab').style.display="none";
      document.getElementById('en').style.display="none";
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
          var name=document.getElementById("name-enquiry").value;
          var enquiry=document.getElementById("enquiry").value;
          var date=document.getElementById("date-enquiry").value;
          if(email==""||mobile==""||name==""||enquiry==""||date==""){
            alert("Please fill up.!");
          }else{
            $.post("enquiry.php",{"email":email,"name":name,"mobile":mobile,"date":date,"enquiry":enquiry},function(data){
                alert(data);
                $("#email-enquiry").val("");
                $("#name-enquiry").val("");
                $("#mobile-enquiry").val("");
                $("#date-enquiry").val("");
                $("#enquiry").val("");
            });
          }
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#add-bed-assign-btn').click(function(){
          var type=document.getElementById("type").value;
          var doa=document.getElementById("doa").value;
          var dod=document.getElementById("dod").value;
          var description=document.getElementById("description").value;
          var doctor=document.getElementById("doctor").value;
          var name=document.getElementById("pname").value;
          if(name==""||doa==""||description==""||doctor==""||type==""){
            alert("Please fill up.!");
          }else{
            $.post("add-bed-assign-submit.php",{"type":type,"description":description,"doa":doa,"dod":dod,"doctor":doctor,"name":name},function(data){
                alert(data);
                $("#description").val("");
                $("#doa").val("");
                $("#dod").val("");
                $("#pname").val("");
            });
          }
      });
    });
  </script>
  <script>
    $(document).ready(function(e){
      $('#pname').focusout(function() {
          $.post("check_email.php",{"email":$('#pname').val()},function(data){
            if(data!="Email registered"){
              alert(data);
            }
          });
      });
    });
  </script>
  <script>
    $(document).ready(function(e){
      $('#email-admit').focusout(function() {
          $.post("check_email.php",{"email":$('#email-admit').val()},function(data){
            if(data!="Email registered"){
              alert(data);
            }
          });
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#add-p-btn').click(function(){
          var lname=document.getElementById("lname").value;
          var email=document.getElementById("email").value;
          var mobile=document.getElementById("mobile").value;
          var blood_group=document.getElementById("blood_group").value;
          var fname=document.getElementById("fname").value;
          var sex = $("input:radio[name=\"sex\"]:checked" ).val();
          var address=document.getElementById("address").value;
          $.post("add-p-submit.php",{"lname":lname,"email":email,"mobile":mobile,"fname":fname,"sex":sex,"blood_group":blood_group,"address":address},function(data){
              alert(data);
              $("#lname").val("");
              $("#email").val("");
              $("#mobile").val("");
              $("#fname").val("");
              $("#blood_group").val("");
              $("#address").val("");
              $("input:radio[name=\"sex\"]:checked").prop( "checked",false);
          });
      });
    });
  </script>
  <script>
		$(document).ready(function(e){
			$('#email-invoice').focusout(function() {
			  	$.post("check_email.php",{"email":$('#email-invoice').val()},function(data){
			  		if(data!="Email registered"){
			  			alert(data);
			  		}
			  	});
			});
      $('#doa-invoice').focusout(function() {
			  	$.post("checkdoa.php",{"doa":$('#doa-invoice').val()},function(data){
			  		if(data!="Doa registered"){
			  			alert(data);
			  		}
			  	});
			});
		});
	</script>
  <script>
  $(document).ready(function(){
    $('#submit').click(function(){
        var email=document.getElementById("email-invoice").value;
        var doctor=document.getElementById("dname-invoice").value;
        var doa=document.getElementById("doa-invoice").value;
        $.post("addinvoice2.php",{"email":email,"doctor":doctor,"doa":doa},function(data){
          if(data!="failure"){
            window.location.href = "page51.php?d="+data;
            $("#email-invoice").val("");
            $("#dname-invoice").val("");
            $("#doa-invoice").val("");
          }
          else {
            alert("There is no such entry on "+doa+" assigned by Dr. "+doctor);
            $("#email-invoice").val("");
            $("#dname-invoice").val("");
            $("#doa-invoice").val("");
          }
        });
    });
  });
  </script>

</body>
