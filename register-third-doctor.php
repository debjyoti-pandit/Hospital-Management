<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
  <link rel="stylesheet" href="css/login.css"></link>
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .reg-form{
      font-family: cursive;
      font-size: 18px;
      max-width: 850px;
      background-color: white;
      border-style: solid;
      padding: 25px;
      border-color: rgba(0, 152, 7, 0.38);
      border-radius: 15px;
      margin-top: 30px;
      margin-bottom: 30px;
    }
    #dev{
      margin-right: 30px;
      float: right;
      margin-left: 30px;
    }
    #deb{
      float: right;
      display: none;
    }
    #jyoti{
      font-size: 40px;
      font-family: fantasy;
      color: #000984;
      margin-left: 40px;
      line-height: 100px;
    }
    .pandit{
      text-align: left;
      background-color: white;
      border-width: 1px;
      border-bottom-style: solid;
      border-color: rgba(106, 88, 236, 0.8);;
    }
    #dy{
        line-height: 100px;
        margin-top: 10px;
        max-width: 850px;
        color: black;
        font-size: 20px;
       
    }
    #s{
      display: none;
    }
    #f{
      display: none;
    }
    #a{
      display: none;
    }
    #b{
      display: none;
    }
    #c{
      display: none;
    }
  </style>
</head>
<body id="body" style="overflow-x: hidden;">
  <center>
    <div class="row pandit">
      <div class="col-sm-9"><div id="jyoti"> Hope Health Care Center </div></div>
      <div class="col-sm-3" style="line-height: 100px;">
        <div id="dev"><a class="btn btn-success" href="javascript:back()" role="button">Back</a></div>
        <div id="deb"><a class="btn btn-success" href="index.html" role="button">Home</a></div>
      </div>
    </div>
    <div class="row">
      <div class="alert alert-warning" id="a">
          <strong>Warning!</strong> Please enter your name..
      </div>
      <div class="alert alert-warning" id="b">
          <strong>Warning!</strong> please enter your address..
      </div>
      <div class="alert alert-warning" id="c">
          <strong>Warning!</strong> Please enter your mobile number..
      </div>
      <div class="alert alert-success"" id="s">
          <strong>Success!</strong> Successfully Registered..
      </div>
      <div class="alert alert-warning" id="f">
          <strong>Warning!</strong> Please fill the form correctly..
      </div>
    </div>
    <div class="row">
      <form class="form-horizontal reg-form">
        <div class="form-group">
          <label for="firstname" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="firstname" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <label for="phone" class="col-sm-3 control-label">Phone</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="phone" placeholder="Phone (optional)">
          </div>
        </div>
        <div class="form-group">
          <label for="mobile" class="col-sm-3 control-label">Mobile</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
          </div>
        </div>
        <div class="form-group">
          <label for="sex" class="col-sm-3 control-label">Sex</label>
          <div class="col-sm-9" style="text-align: left;">
            <label class="radio-inline">
            <input type="radio" name="sex" id="sex" value="Male">Male</label>
            <label class="radio-inline">
            <input type="radio" name="sex" id="sex" value="Female">Female</label>
          </div>
        </div>
        <div class="form-group">
          <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" id="dob" placeholder="Date of Birth">
          </div>
        </div>
        <div class="form-group">
          <label for="blood_group" class="col-sm-3 control-label">Blood Group</label>
          <div class="col-sm-9">
            <select name="blood_group" id="blood_group" class="form-control">
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
          <label for="address" class="col-sm-3 control-label">Address</label>
          <div class="col-sm-9">
            <textarea name="address" id="address" class="form-control" placeholder="Address" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group">
                  <label for="designation" class="col-sm-3 control-label">Designation</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="designation" placeholder="Designation">
                    </div>
                </div>
                <div class="form-group">
                    <label for="blood_group" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-9">
                      <select id="department" class="form-control">
                            <option value="" selected="selected">Select Option</option>
                            <?php
                              require("connection.php");
                              $str="select dname from department order by dname;";
                              $result= mysqli_query($con, $str);
                              while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                  echo "<option value=".$row['dname'].">".$row['dname']."</option>";
                                }
                            ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="specialist" class="col-sm-3 control-label">Specialist</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="specialist" placeholder="Specialist">
                    </div>
                </div>
                <div class="form-group">
                  <label for="qualification" class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-9">
                      <textarea rows="3" class="form-control" id="qualification" placeholder="Qualification" style="padding-left:5px;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label for="doj" class="col-sm-3 control-label">D.O.Join.</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="doj" name="doj" />     
                    </div>
                </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9" style="text-align: left;">
            <button type="button" id="add-doc-btn" class="btn btn-primary">Sign UP</button>
          </div>
        </div>
      </form>
    </div>
</center> 
<script type="text/javascript">
    $(document).ready(function(){
      $('#add-doc-btn').click(function(){
        //alert();
          var email;
          var password;
          var d=validation();
          if(d){
              var name=document.getElementById("firstname").value;
              var address=document.getElementById("address").value;
              var sex = $( "input:radio[name=\"sex\"]:checked" ).val();
              var dob=document.getElementById("dob").value;
              var phone=document.getElementById("phone").value;
              var mobile=document.getElementById("mobile").value;
              var blood_group=document.getElementById("blood_group").value;
              var designation=document.getElementById("designation").value;
              var department=document.getElementById("department").value;
              var specialist=document.getElementById("specialist").value;
              var qualification=document.getElementById("qualification").value;
              var doj=document.getElementById("doj").value;          
                  $.get("xxx.php",function(data){
                    var obj=JSON.parse(data);
                    email=obj.email;
                    password=obj.password;
                    //alert(email+password+name);
                    $.post("add-doctor-submit.php",{"name":name,"email":email,"mobile":mobile,"phone":phone,"sex":sex,"dob":dob,"blood_group":blood_group,"address":address,"designation":designation,"department":department,"specialist":specialist,"qualification":qualification,"doj":doj,"status":status},function(data){
                      alert(data);
                      if(data=="Succesfully registered"){
                        window.location.href = "login.php";
                      }
                      $("#firstname").val("");
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
                      $("input:radio[name=\"sex\"]:checked").prop( "checked",false);
                    });
                  }); 
          }
      });
      $(window).click(function(){
      document.getElementById("f").style.display = "none";
      document.getElementById("s").style.display = "none";
    });
    });
</script>
<script>
    function validation()
    {
      var firstname=document.getElementById("firstname").value.trim();
      var address=document.getElementById("address").value.trim();
      var sex = $( "input:checked" ).val();
      var dob=document.getElementById("dob").value;
      var phone=document.getElementById("phone").value;
      var mobile=document.getElementById("mobile").value;
      var blood_group=document.getElementById("blood_group").value;
      if(firstname=="")
      {
        document.getElementById("a").style.display = "block";
        document.getElementById("b").style.display = "none";
        document.getElementById("c").style.display = "none";
        return false;
      }
      else if(address=="")
      {
        document.getElementById("b").style.display = "block";
        document.getElementById("a").style.display = "none";
        document.getElementById("c").style.display = "none";
        return false;
      }
      else if(mobile=="")
      {
        document.getElementById("a").style.display = "none";
        document.getElementById("b").style.display = "none";
        document.getElementById("c").style.display = "block";
        return false;
      }
      else
      {
        return true;
      }
      return true;
    }
</script>
<script>
function back(){
  $.get("xxx.php",function(data){
        var obj=JSON.parse(data);
        email=obj.email;
        password=obj.password;
        $.post("cancel.php",{"email":email},function(data){
          if(data=="Success"){
            window.location.href = "register.php";
          }
    });
  });
}
</script>
</body>
</html>
