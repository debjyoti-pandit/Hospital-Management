<?php
  session_start();
  if($_SESSION['email']=="" || $_SESSION['role']!="Receptionists"){
    header("location:login.php");
  }
  $id=$_REQUEST['d'];
  require("connection.php");
  $str="select * from admission where id='$id';";
  $result= mysqli_query($con, $str);
  $num=mysqli_num_rows($result);
  if($result && $num>0){
    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
    $gt=0;
  }else{
    header("location:something.php");
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
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-user i_fa" aria-hidden="true"></i>
          <span class="spanfa">Patient</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">
                <li><a class="bullets" href="page5.php">Admit Patient Bed</a></li>
                <li><a class="bullets" href="page5.php">Register Patient</a></li>
                <li><a class="bullets" href="page5.php">Generate Invoice</a></li>
              </ul>
        </li>
        <li ><a href="page5.php">
          <i class="fa fa-hospital-o i_fa" aria-hidden="true"></i>
          <span class="spanfa">Add Enquiry</span>
        </li>
        <li class="hassub"><a href="javascript://">
          <i class="fa fa-pencil-square-o i_fa" aria-hidden="true"></i>
          <span class="spanfa">Appointment</span>
          <span class="subarrow"></span>
          <ul style="list-style-type: none;padding: 0;">

                <li><a class="bullets" href="page5.php">Add Appointment</a></li>
                <li><a class="bullets" href="page5.php">Appointment List</a></li>
              </ul>
        </li>
        <li><a href="javascript:dol()">
          <i class="fa fa-user-md i_fa" aria-hidden="true"></i>
          <span class="spanfa">Doctor List</span>
        </li>
        <li><a href="page5.php">
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
        <div>
          <div id="change">
          	<div class="row bbtm">
                <div class="col-lg-12">
                  <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <div class="header-title">
                      <h1>Account Manager</h1>
                      <small>Add Invoice</small>
                    </div>
                </div>
              </div>
              <div class="container-fluid relative" style="margin-top: 10px;margin-right: 30px;">
          			  <div class="row" id="viewall" style="padding-right: 30px;padding-left: 10px;">
                    <form action="addinvoice4.php" method="post">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                      <input type="hidden" name="p" value="<?php echo $row['paid']; ?>">
                      <input type="hidden" name="email" readonly value="<?php echo $row['email']; ?>">
                      <?php
                        $dev="select * from patient where email='".$row['email']."';";
                        $jyoti= mysqli_query($con, $dev);
                        $pandit= mysqli_fetch_array($jyoti,MYSQLI_ASSOC);
                      ?>
                      <div class="form-group row">
                          <label for="type" class="col-sm-2 control-label" style="text-align: right;">Name</label>
                            <div class="col-sm-5"><input type="text" readonly class="form-control" value="<?php echo $pandit['firstname']; ?>"></div>
                            <div class="col-sm-5"><input type="text" readonly class="form-control" value="<?php echo $pandit['lastname']; ?>"></div>
                      </div>
                      <div class="form-group row">
                          <label for="type" class="col-sm-2 control-label" style="text-align: right;">Address</label>
                            <div class="col-sm-10"><input type="text" readonly class="form-control" value="<?php echo $pandit['address']; ?>"></div>
                      </div>
                      <div class="form-group row">
                          <label for="type" class="col-sm-2 control-label" style="text-align: right;">Assigned By</label>
                            <div class="col-sm-10"><input type="text" readonly class="form-control" value="<?php echo $row['dname']; ?>"></div>
                      </div>
                      <div class="form-group row">
                          <label for="type" class="col-sm-2 control-label" style="text-align: right;">Date of Admission</label>
                          <div class="col-sm-4"><input type="text" readonly class="form-control" value="<?php echo $row['doa']; ?>"></div>
                          <label for="type" class="col-sm-2 control-label" style="text-align: right;">Date:</label>
                          <div class="col-sm-4"><input type="date" class="form-control" name="date" required=""></div>
                      </div>
                      <table class="table table-hover"style="margin-top: 30px;">
                          <thead>
                            <tr class="row active"  style="text-align:center;">
                              <th class="col-sm-1" style="text-align:center;">Serial No.</th>
                              <th class="col-sm-5" style="text-align:center;">Description</th>
                              <th class="col-sm-2" style="text-align:center;">Per Day Charge</th>
                              <th class="col-sm-2" style="text-align:center;">Quantity</th>
                              <th class="col-sm-2" style="text-align:center;">Amount(Rs.)</th>
                          </tr>
                          </thead>
                          <tbody>
                              <tr class='row ' style='text-align:center;'>
                              <td class='col-sm-1'>1</td>
                            <td class='col-sm-5' style='text-align:left;'>Hospital Charge</td>
                              <td class='col-sm-2'>NaN</td>
                              <td class='col-sm-2'>2000 (one time payment)</td>
                              <td class='col-sm-2'><?php echo $row['hoscharge'];
                                                      $gt+=$row['hoscharge'];
                                                    ?></td>
                              </tr>
                              <tr class='row' style='text-align:center;'>
                              <td class='col-sm-1'>2</td>
                              <td class='col-sm-5' style='text-align:left;'>Bed Charge</td>
                              <td class='col-sm-2'><?php echo $row['bedcost']?></td>
                              <td class='col-sm-2'>
                                <?php
                                  $str2="select datediff(CURDATE(),'".$row['doa']."')count;";
                                  $result2= mysqli_query($con, $str2);
                                  $row2= mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                  $c=$row2['count'];
                                  $c++;
                                  echo "$c";
                                  $perc=$row['bedcost'];
                                  $t=$c*$perc;
                                  $gt+=$t;
                                  $str3="UPDATE `admission` SET `bfee` = '$t' WHERE `admission`.`id` = $id;";
                                  $result3= mysqli_query($con, $str3);
                                ?> days
                              </td>
                              <td class='col-sm-2'><?php echo $t?></td>
                              </tr>
                              <tr class='row' style='text-align:center;'>
                              <td class='col-sm-1'>3</td>
                              <td class='col-sm-5' style='text-align:left;'>Doctor Fee</td>
                              <td class='col-sm-2'>
                                <?php
                                  $str4="SELECT fee from doctor where name='".$row['dname']."';";
                                  $result4= mysqli_query($con, $str4);
                                  $row4= mysqli_fetch_array($result4,MYSQLI_ASSOC);
                                  $f=$row4['fee'];
                                  echo $f;
                                  $td=$c*$f;
                                  $gt+=$td;
                                  $str5="UPDATE `admission` SET `dfee` = '$td' WHERE `admission`.`id` = $id;";
                                  $result5= mysqli_query($con, $str5);
                                ?>
                              </td>
                              <td class='col-sm-2'><?php echo $c; ?> days</td>
                              <td class='col-sm-2'><?php echo $td?></td>
                              </tr>
                          <tr class='row' style='text-align:center;'>
                            <td class='col-sm-1'>4</td>
                            <td class='col-sm-5' style='text-align:left;'>Medicines</td>
                            <td class='col-sm-2'></td>
                            <td class='col-sm-2'></td>
                            <td class='col-sm-2'>
                              <?php echo  $row['medi'];
                                    $gt+=$row['medi'];
                               ?></td>
                          </tr>
                            <tr class='row' style='text-align:center;'>
                              <td class='col-sm-1'>5</td>
                              <td class='col-sm-5' style='text-align:left;'>Pathelogy Charge</td>
                              <td class='col-sm-2'></td>
                              <td class='col-sm-2'></td>
                              <td class='col-sm-2'>
                                <?php echo  $row['path'];
                                      $gt+=$row['path'];
                                ?></td>
                            </tr>
                            <tr class='row' style='text-align:center;'>
                              <td class='col-sm-1'>6</td>
                              <td class='col-sm-5' style='text-align:left;'>Laboratory Charge</td>
                              <td class='col-sm-2'></td>
                              <td class='col-sm-2'></td>
                              <td class='col-sm-2'>
                                <?php echo  $row['labtestfee'];
                                      $gt+=$row['labtestfee'];
                                ?></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr class="row info" style="text-align:right;">
                              <td class="col-sm-1"></td>
                              <td class="col-sm-5"></td>
                              <td class="col-sm-2"></td>
                              <td class="col-sm-2">Grand Total</td>
                              <td class="col-sm-2"><input style="text-align:left;" type="text" id="gt" required="" autocomplete="off" class="form-control" readonly value="<?php echo  $gt;
                                      $str6="UPDATE `admission` SET `total` = '$gt' WHERE `admission`.`id` = $id;";
                                      $result6= mysqli_query($con, $str6);
                                ?>"></td>
                            </tr>
                            <tr class="row info" style="text-align:right;">
                              <td class="col-sm-1"></td>
                              <td class="col-sm-5"></td>
                              <td class="col-sm-2"></td>
                              <td class="col-sm-2">Already Paid</td>
                              <td class="col-sm-2"><input style="text-align:left;" type="text" id="alreadypaid" required="" autocomplete="off" class="form-control" readonly value="<?php
                                echo $row['paid'];
                                ?>"></td>
                            </tr>
                            <tr class="row info" style="text-align:right;">
                              <td class="col-sm-1"></td>
                              <td class="col-sm-5"></td>
                              <td class="col-sm-2"></td>
                              <td class="col-sm-2">Total</td>
                              <td class="col-sm-2"><input style="text-align:left;" type="text" id="total" required="" autocomplete="off" class="form-control" readonly></td>
                            </tr>
                            <tr class="row" style="text-align:right;">
                              <td class="col-sm-1"></td>
                              <td class="col-sm-5"></td>
                              <td class="col-sm-2"></td>
                              <td class="col-sm-2">Paid</td>
                              <td class="col-sm-2"><input type="text" required="" name="paid" id="paid" autocomplete="off" class="form-control" placeholder="0.00"></td>
                            </tr>
                            <tr class="row danger" style="text-align:right;">
                              <td class="col-sm-1"></td>
                              <td class="col-sm-5"></td>
                              <td class="col-sm-2"></td>
                              <td class="col-sm-2">Due</td>
                              <td class="col-sm-2"><input type="text" required="" name="due" id="due" autocomplete="off" class="form-control" readonly placeholder="0.00"></td>
                            </tr>
                          </tfoot>
                        </table>
                        <div class="form-group">
                           <div class="col-sm-12"  style="margin-bottom: 20px;">
                                 <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                                 <input type="submit" value="Pay" class="btn btn1 cursor" id="generate" style="vertical-align: baseline;">
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
  $(document).ready(function(){
    var gt=document.getElementById("gt").value;
    var p=document.getElementById("alreadypaid").value;
    var t=gt-p;
    $("#total").val(t);
  });
  </script>
  <script>

  $('#paid').focusout(function() {
    var gpt=document.getElementById("total").value;
    var p=document.getElementById("paid").value;
    var t=gpt-p;
    if(t<0){
      alert("Thank you, But we dont need more money");
      $("#due").val(0.00);
      $("#paid").val(0.00);
    }
    else{
        $("#due").val(t);
    }
  });
  </script>
  <script>
    $('#generate').click(function(e){
      var p=document.getElementById("paid").value;
      if(p==0){
        e.preventDefault();
        alert("Please pay something.!")
      }
    });
  </script>
</body>
