<!DOCTYPE html>
<html>
<head>
  <title>HOPE HEALTH CARE CENTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="font-awesome.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="css/doctor.css">
  <link rel="stylesheet" href="css/login.css"></link>
  <link rel="stylesheet" type="text/css" href="css/aboutus.css">
  <link rel="stylesheet" type="text/css" href="css/department.css">
  <link rel="stylesheet" href="page2.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/contactus.css">
  <link rel="stylesheet" type="text/css" href="css/general.css">

  <script src="js/login.js"></script>
  <script src="js/page2.js"></script>

  <script type="text/javascript" href="js/department.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fresca" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="overflow-x: hidden;">
  <header>
    <div class="container">
      <div style="height: 32;" >
        <div class="row">
          <div class="col-md-6">
            <div class="row" id="header_email">
              <div class="col-md-6 header_text">
                <span class="glyphicon glyphicon-envelope" style="padding-right: 5;" aria-hidden="true"></span>
                <a class="header_text" href="www.gmail.com">johndoe@gmail.com</a>
              </div>
              <div class="col-md-6 header_text " style="height: 32;line-height: 32px;">
                <span class="glyphicon glyphicon-earphone" style="padding-right: 5;" aria-hidden="true"></span>
                <a class="header_text" href="#">(+91)9876543210</a>
              </div>
            </div>
          </div>
          <div class="col-md-6" style="text-align: right;height: 32;line-height: 32px;">
            <a href="#" id="log-in-btn">Login</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container" style="padding-right: 0px;">
    <nav id="nav" class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 10px;margin-bottom: 0;padding-top: 10px;">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
        </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar" style="float:right;">
            <ul class="nav navbar-nav">
              <li><a href="#section1" class="page-sroll">Home</a></li>
              <li><a href="#section2" class="page-sroll">About Us</a></li>
              <li><a href="#section3" class="page-sroll">Service</a></li>
              <li><a href="#section4" class="page-sroll">Appointment</a></li>
              <!--<li><a href="#section5" class="page-sroll">Section 5</a></li>-->
              <li><a href="#section6" class="page-sroll">Department</a></li>
              <li><a href="#section7" class="page-sroll">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div id="section1" class="container-fluid">
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('images/22.jpg')">
                <div class="carousel-caption">
                  <h3>INTENSIVE CARE UNIT</h3>
                  <p>Equipped with latest technologies and tools.</p>
                </div>
            </div>
            <div class="item" style="background-image: url('images/33.jpg')">
                <div class="carousel-caption">
                  <h3>Patient Waiting Room</h3>
                  <p>We serve each patient as god.</p>
                </div>
            </div>
            <div class="item" style="background-image: url('images/44.jpg')">
                <div class="carousel-caption">
                  <h3>MOST EXPERIENCE DOCTORS</h3>
                  <p>Our operation department serve the best in the region</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" id="slider_nav" data-target="#carouselFade" role="button" data-slide="prev" >
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" id="slider_nav" data-target="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
  <div id="section2" class="container-fluid">
    <div class="container" style="padding-top: 75px;">
      <div class="row">
        <div class="col-md-6 center" ><img src="Images/a1.jpg" id="image"/></div>
        <div class="col-md-6" style="padding-top: 30;">
          <table id="table">
            <div>
              <tr><td id="au" >ABOUT US</td></tr>
              <tr><td><p id="para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra felis. Phasellus eu dolor orci. Duis et dictum sem, sit amet sagittis dolor. Curabitur scelerisque, nunc eget viverra malesuada, nunc ligula…
              </p></td> </tr>
            </div>
            <tr><td><button onclick="window.location.href='/page2'" id="sub"/>READ MORE</button></td></tr>
            <tr><td><p id="vis">OUR VISION & MISSION</p></td></tr>
            <tr><td ><p id="para2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra felis. Phasellus eu dolor orci. Duis et dictum sem, sit amet sagittis dolor. Curabitur scelerisque, nunc eget viverra malesuada, nunc ligula…</p></td></tr>
            <tr><td><button onclick="window.location.href='/page2'" id="sub"/>READ MORE</button></td></tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div id="section3" class="container-fluid">
    <div  class="container"style="">
      <div class="row" style="  margin-bottom: 20px;">
          <!-- Main Title -->
          <div class="col-md-6 col-md-offset-3"  style="text-align: center;">
              <div class="title-block" style="font-family: fantasy;">
                  <h2>Service We Offer</h2>
                  <p>Our department &amp; special service </p>
              </div>
          </div>
      </div>
      <div class="row servicebox">
        <div class="col-md-4 service">
          Emergency Care
          <div style="padding: 10;text-align: center;font-family: cursive;">
            <h5>Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities.Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities. </h5>
          </div>
        </div>
        <div class="col-md-4 service">Call center 24x7
          <div style="padding: 10;text-align: center;font-family: cursive;">
            <h5>Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities.Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities. </h5>
          </div>
        </div>
        <div class="col-md-4 service">Cardiac Surgery
          <div style="padding: 10;text-align: center;font-family: cursive;">
            <h5>Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities.Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities. </h5>
          </div>
        </div>
      </div>
      <div class="row servicebox">
        <div class="col-md-4 service">Dental Care
          <div style="padding: 10;text-align: center;font-family: cursive;">
            <h5>Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities.Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities. </h5>
          </div>
        </div>
        <div class="col-md-4 service">Opthalmology
          <div style="padding: 10;text-align: center;font-family: cursive;">
            <h5>Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities.Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities. </h5>
          </div>
        </div>
        <div class="col-md-4 service">Neurology
          <div style="padding: 10;text-align: center;font-family: cursive;">
            <h5>Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities.Specialized doctors for emergency situation 24x7. Equipped with oxygen facilities. </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="section4" class="container-fluid">
    <div  class="container"style="padding-top: 60;margin-bottom: 60;">
      <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" style="padding-bottom: 10;text-align: center;">
          <div class="title-block"  style="font-family: 'Luckiest Guy', cursive;color:#207fdd;">
              <h2>Enroll with us</h2>
          </div>
        </div>
      </div>
      <div class="row" style="margin: 0 0 0 -15px;">
      <div class="col-sm-6" style="border-color: aliceblue;border-style: solid;padding: 20px;">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="">
              <a data-target="#appRegister" aria-controls="appRegister" role="tab" data-toggle="tab" aria-expanded="false">Appointment</a>
          </li>
          <li role="presentation" class="active">
              <a data-target="#patientRegister" aria-controls="patientRegister" role="tab" data-toggle="tab" aria-expanded="true">Registration</a>
          </li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane" id="appRegister">
              <div id="form" class="form-area">
                  <form action="" id="appointmentForm">
                    <div class="form-padding" style="padding-top: 20px;">
                        <!-- patient id -->
                        <div class="form-group">
                            <label>Patient Email <i class="text-danger">*</i></label>
                            <input name="name" autocomplete="off" type="text" class="form-control" id="pname-apt" placeholder="Patient Email" value="">
                            <span></span>
                        </div>
                        <div class="form-group">
                            <label>Department Name <i class="text-danger">*</i></label>
                            <select name="dpt-apt" class="form-control" id="dpt-apt">
                              <option value="" selected="selected">Select Department</option>
                              <?php
                                  require("connection.php");
                                  $str="select dname from department where status='active' order by dname;";
                                  $result= mysqli_query($con, $str);
                                  while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                      echo "<option value=".$row['dname'].">".$row['dname']."</option>";
                                    }
                                ?>
                            </select>
                            <span class="doctor_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Doctor Name<i class="text-danger">*</i></label>
                            <select name="dname" class="form-control" id="dname">
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
                         <div class="form-group">
                            <label>Appointment Date <i class="text-danger">*</i></label>
                            <input type="date" class="form-control" name="apt-date" id="apt-date"/>
                        </div>
                        <div class="form-group">
                            <label>Problem </label>
                            <textarea name="problem" class="form-control" id="prob-apt" placeholder="Problem" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="button" id="apt-front-btn" class="btn thm-btn appointment_btn">Submit</button>
                    </div>
                </form>
              </div>
          </div>
          <!-- Register -->
          <div role="tabpanel" class="tab-pane active" id="patientRegister">
              <div id="form" class="form-area">
                  <form id="appointmentForm">
                   <div class="form-padding" style="padding-top:20px;">
                      <h4></h4>
                      <div class="form-group">
                          <label>Full Name <i class="text-danger">*</i></label>
                          <div class="row">
                              <div class="col-sm-6">
                                  <input id="firstname" type="text" class="form-control" placeholder="First Name">
                              </div>
                              <div class="col-sm-6">
                                  <input id="lastname" type="text" class="form-control" placeholder="Last Name">
                              </div>
                          </div>
                      </div>
                      <div class="form-group" style="text-align: left;">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
							  </div>
					<div class="form-group" style="text-align: left;">
							    <label for="password">Password</label>
							    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
                      <div class="form-group">
                          <label>Contact <i class="text-danger">*</i></label>
                          <div class="row">
                              <div class="col-sm-6">
                                  <input id="phone" type="text" class="form-control" placeholder="Phone No (Optional)">
                              </div>
                              <div class="col-sm-6">
                                  <input id="mobile" type="text" class="form-control" placeholder="Mobile No">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-check">
                          <label>Sex <i class="text-danger">*</i></label>
                              <label class="radio-inline">
                              <input type="radio" name="sex" value="Male">Male</label>
                              <label class="radio-inline">
                              <input type="radio" name="sex" value="Female">Female</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Date of Birth <i class="text-danger">*</i></label>
                          <div class="input-group input-append date" >
                              <input type="date" class="form-control" id="dob" name="dob" />
                              <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Blood Group </label>
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
                      <div class="form-group">
                          <label>Address <i class="text-danger">*</i></label>
                          <textarea id="address" class="form-control" placeholder="Address" rows="3"></textarea>
                      </div>
                  </div>
                  <div class="form-footer">
                      <button type="button" id="submit-register-front" class="btn thm-btn appointment_btn">Register</button>
                  </div>
                  </form>
                </div>
          </div>
        </div>
      </div>
        <div class="col-md-6" style="text-align: center;padding-top: 100px;">
          <img src="Images/bgd.jpg" id="apt_beside_img">
        </div>
      </div>
      </div>
    </div>
  </div>
  <br>
  <div id="section6" class="container-fluid">
     <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-block">
                                <h3 id="dep">DEPARTMENT</h3>
                                <p id="our"><nobr>Our department & special services</nobr></p>
                                </div>
                        </div>
              </div>
      <div class="row">
                <div class="col-md-2" >
                          <div class="list-group" >
                                    <a href="javascript://" class="list-group-item">General Surgery</a>
                                    <a href="javascript://" class="list-group-item">Gynaecology</a>
                                    <a href="javascript://" class="list-group-item">Microbiology</a>
                                    <a href="javascript://" class="list-group-item">Neonatal</a>
                                    <a href="javascript://" class="list-group-item">Nephrology</a>
                                    <a href="javascript://" class="list-group-item">Neurology</a>
                              </div>
              </div>

                      <div class="col-md-2" >
                                <div class="list-group" >
                                    <a href="javascript://" class="list-group-item">Obstetrics</a>
                                    <a href="javascript://" class="list-group-item">Oncology</a>
                                    <a href="javascript://" class="list-group-item">Orthopaedics</a>
                                    <a href="javascript://" class="list-group-item">Pharmacy</a>
                                    <a href="javascript://" class="list-group-item">Radiotherapy</a>
                                    <a href="javascript://" class="list-group-item">Rheutomology</a>
                          </div>
                </div>


                <div class="col-md-7" id="value">


                 </div>

      <div class="cont" id="niket" >
        <h2 >General Surgery</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra tra accumsan ligula</p>

        </div>

        <div class="cont" id="niket1" style="display:none;">
          <h2>Gynaecology</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra haretra accumsan ligula</p>

        </div>
        <div class="cont" id="niket2" style="display:none;">
          <h2>Microbiology</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra ra accumsan ligula</p>

        </div>
        <div class="cont" id="niket3" style="display:none;">
          <h2>Rheutomology</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra
          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket4" style="display:none;">
          <h2>Neonatal</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra Aliquam erat volutpat.
          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket5" style="display:none;">
          <h2>Nephrology</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra t a ligula nec dapibus. Aliquam erat volutpat.
          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket6" style="display:none;">
          <h2>Neurology</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra . Aliquam erat volutpat.
          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket7" style="display:none;">
          <h2>Obstetrics</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra  a ligula nec dapibus. Aliquam erat volutpat.
          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket8" style="display:none;">
          <h2>Oncology</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra Aliquam erat volutpat.
          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket9" style="display:none;">
          <h2>Orthopaedics</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra felis.

          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket10" style="display:none;">
          <h2>Pharmacy</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra s. Aliquam erat volutpat.
          Donec auctor elementum accumsan. Vestibulum velit augue, feugiat ac nisl in, pharetra accumsan ligula</p>

        </div>
        <div class="cont" id="niket11" style="display:none;">
          <h2>Radiotherapy</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum magna, gravida nec erat ac, malesuada pharetra felis.
          etra accumsan ligula</p>

        </div>

      </div>
  </div>
  </div>
  <div id="section7" class="container-fluid">
    <div class="container"style="padding-top: 70;">
      <div class="row">
        <div class="col-sm-12">
           <div class="output hide alert"></div>
        </div>
        <div class="col-sm-9">
            <div class="appointment-link">
                <div class="ap-inner">
                    <div class="ap-icon">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </div>
                    <div class="ap-text">
                        <h3>Need a Doctor for Check-up?</h3>
                        <h2 style="font-weight: 800;">JUST MAKE AN APPOINTMENT &amp; YOU'RE DONE ! </h2>
                    </div>
                </div>
                <div class="ap-btn">
                    <a href="#section4" class="btn page-scroll appointment_btn">Get an appointment</a>
                </div>
            </div>
          </div>
        <div class="col-sm-3">
            <form>

              <div class="form-group">
                <input type="name" name="name" id="name-en" class="form-control" placeholder="Full Name">
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email-en" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="phone" name="phone" id="mobile-en" class="form-control" placeholder="Mobile No">
              </div>
              <div class="form-group">
                <input type="date" name="date" id="date-en" class="form-control" placeholder="Date">
              </div>
              <div class="form-group">
                <textarea name="enquiry" id="enquiry" class="form-control" placeholder="Enquiry"></textarea>
              </div>
              <div class="form-group">
                <button type="button" id="enquiry-btn" class="appointment_btn btn">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
  <div id="totopcont" style="display:none;"><a  class="page-scroll totop" href="#section1"><span class="glyphicon glyphicon-chevron-up"></a></span></div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#enquiry-btn').click(function(){
        //if(d){
          var name=document.getElementById("name-en").value;
          var email=document.getElementById("email-en").value;
          var mobile=document.getElementById("mobile-en").value;
          var date=document.getElementById("date-en").value;
          var enquiry=document.getElementById("enquiry").value;
          $.post("enquiry.php",{"name":name,"email":email,"mobile":mobile,"date":date,"enquiry":enquiry},function(data){
              alert(data);
              $("#name-en").val("");
              $("#email-en").val("");
              $("#mobile-en").val("");
              $("#date-en").val("");
              $("#enquiry").val("");
          });
        //}
      });
    });
  </script>
  <script>
    $('#carouselFade').carousel();
  </script>
  <script>
    $(window).scroll(function () {
      if ($(window).scrollTop() > 42) {
        $('#nav').addClass('navbar-fixed-top');
      }
      if ($(window).scrollTop() < 42) {
        $('#nav').removeClass('navbar-fixed-top');
      }
    });
  </script>
  <script>
    $(document).on('click', 'a', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    });
  </script>
  <script>
    jQuery(document).ready(function() {
      jQuery('.carousel[data-type="multi"] .item').each(function(){
        var next = jQuery(this).next();
        if (!next.length) {
          next = jQuery(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo(jQuery(this));

        for (var i=0;i<2;i++) {
          next=next.next();
          if (!next.length) {
            next = jQuery(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
        }
      });

    });
    $('.carousel-control').click(function (e) {
      e.preventDefault();
    });
  </script>
  <script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            document.getElementById("totopcont").style.display = "block";
        } else {
            document.getElementById("totopcont").style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
  </script>
  <script type="text/javascript">
        $(document).ready(function() {
        $(".list-group-item").on('click', function(){
          $('.list-group-item').removeClass('active');
          $(this).addClass('active');
        var str=($(this).html());
          console.log(str);
        if(str.match(/General Surgery/)){
        $("#value").append($("#niket"));
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket").style.display = "block";
        }
         else if(str.match(/Gynaecology/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket1").style.display = "block";
        }

       else if(str.match(/Microbiology/)){

          $("#value").append($("#niket"));
          document.getElementById("niket1").style.display = "none";
        document.getElementById("niket").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket2").style.display = "block";
        }
        else if(str.match(/Rheutomology/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket3").style.display = "block";
        }
        else if(str.match(/Neonatal/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket4").style.display = "block";
        }
        else if(str.match(/Nephrology/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket5").style.display = "block";
        }
        else if(str.match(/Neurology/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket6").style.display = "block";
        }
        else if(str.match(/Obstetrics/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket7").style.display = "block";
        }
        else if(str.match(/Oncology/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket8").style.display = "block";
        }
        else if(str.match(/Orthopaedics/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket10").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket9").style.display = "block";
        }
        else if(str.match(/Pharmacy/)){

          $("#value").append($("#niket"));
          document.getElementById("niket").style.display = "none";
        document.getElementById("niket2").style.display = "none";
        document.getElementById("niket3").style.display = "none";
        document.getElementById("niket4").style.display = "none";
        document.getElementById("niket5").style.display = "none";
        document.getElementById("niket6").style.display = "none";
        document.getElementById("niket7").style.display = "none";
        document.getElementById("niket8").style.display = "none";
        document.getElementById("niket9").style.display = "none";
        document.getElementById("niket1").style.display = "none";
        document.getElementById("niket11").style.display = "none";
        document.getElementById("niket10").style.display = "block";
        }
        else if(str.match(/Radiotherapy/)){
              $("#value").append($("#niket"));
              document.getElementById("niket").style.display = "none";
            document.getElementById("niket2").style.display = "none";
            document.getElementById("niket3").style.display = "none";
            document.getElementById("niket4").style.display = "none";
            document.getElementById("niket5").style.display = "none";
            document.getElementById("niket6").style.display = "none";
            document.getElementById("niket7").style.display = "none";
            document.getElementById("niket8").style.display = "none";
            document.getElementById("niket9").style.display = "none";
            document.getElementById("niket10").style.display = "none";
            document.getElementById("niket1").style.display = "none";
            document.getElementById("niket11").style.display = "block";
        }
        });
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#log-in-btn').click(function(){
        window.location.href = "login.php";
      });
    });
  </script>
  <script type="text/javascript">
		$(document).ready(function(){
			$('#submit-register-front').click(function(){
				var d=validation();
				if(d){
					var email=document.getElementById("email").value;
					var password=document.getElementById("password").value;
					var firstname=document.getElementById("firstname").value;
					var sex = $( "input:checked" ).val();
					var lastname=document.getElementById("lastname").value;
					var address=document.getElementById("address").value;
					var dob=document.getElementById("dob").value;
					var phone=document.getElementById("phone").value;
					var mobile=document.getElementById("mobile").value;
					var blood_group=document.getElementById("blood_group").value;
          if(email==""||password==""||firstname==""||sex==""||lastname==""||address==""||dob==""||mobile==""||blood_group==""){
            alert("Please fill up.!");
          }else {
            $.post("reg-pat-front.php",{"email":email,"password":password,"firstname":firstname,"sex":sex,"lastname":lastname,"address":address,"dob":dob,"phone":phone,"mobile":mobile,"blood_group":blood_group},function(data){
  							alert(data);
                $("#email").val("");
                $("#password").val("");
                $("#firstname").val("");
                $("#lastname").val("");
                $("#address").val("");
                $("#dob").val("");
                $("#phone").val("");
                $("#mobile").val("");
                $("#blood_group").val("");
                $("input:checked").val("");
  					});
          }
				}
			});
		});
</script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#apt-front-btn').click(function(){
          var email=document.getElementById("pname-apt").value;
          var dname=document.getElementById("dpt-apt").value;
          var doctor=document.getElementById("dname").value;
          var adate=document.getElementById("apt-date").value;
          var prob=document.getElementById("prob-apt").value;
          if(email==""||dname==""||doctor==""||adate==""||prob==""){
            alert("Please Fill Up.!");
          }else {
            $.post("apt-front-submit.php",{"email":email,"dname":dname,"doctor":doctor,"adate":adate,"prob":prob},function(data){
                alert(data);
                $("#pname-apt").val("");
                $("#dpt-apt").val("");
                $("#dname").val("");
                $("#apt-date").val("");
                $("#prob-apt").val("");
            });
          }
      });
    });
</script>
<script>
    function validation()
    {
      var email=document.getElementById("email").value;
      var password=document.getElementById("password").value;
      if(email=="" || email==null)
      {
        alert("Email Field Is Empty");
        return false;
      }
      else if(validateEmail())
      {
        alert("Invalid Email Id");
        return false;
      }
      else if(password=="" || password==null)
      {
        alert("Password Field Is Empty");
        return false;
      }
      else
      {
        return true;
      }
      return true;
    }
    function validateEmail()
    {
      var x=document.getElementById("email").value;
      var atpos=x.indexOf("@");
      var dotpos=x.indexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
      {
        return true;
      }
      return false
    }
</script>
<script>
    $(document).ready(function(e){
      $('#pname-apt').focusout(function() {
          $.post("check_email.php",{"email":$('#pname-apt').val()},function(data){
            if(data!="Email registered"){
              alert(data);
            }
          });
      });
    });
  </script>
  <script>
    $(document).ready(function(e){
      $('#email').focusout(function() {
          $.post("check_email.php",{"email":$('#email').val()},function(data){
            if(data=="Email registered"){
              alert("Email Already Registered");
            }
          });
      });
    });
  </script>
</body>
</html>
