<!DOCTYPE html>
<html>
<head>
<title>
Login_page
</title>
	<link rel="stylesheet" href="css/login.css"></link>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="page2.css">
  	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
</head>
<body id="body" style="background-color: #f1f1f1;overflow-x: hidden;">
<center>
    <div class="row pandit">
      <div class="col-sm-9"><div id="jyoti"> Hope Health Care Center </div></div>
      <div class="col-sm-3" style="line-height: 100px;">
        <div id="dev"><a class="btn btn-success" href="index.php" role="button">Home</a></div>
        <div id="deb"><a class="btn btn-success" href="register.php" role="button">Sign Up</a></div>
      </div>
    </div>
    <div class="row">
      <div class="alert alert-warning" id="f">
        <strong>Warning!</strong> Please enter correct credentials..
      </div>
      <div class="alert alert-warning" id="a">
          <strong>Warning!</strong> Email Field Is Empty..
      </div>
      <div class="alert alert-warning" id="b">
          <strong>Warning!</strong> Invalid Email Id
      </div>
      <div class="alert alert-warning" id="c">
          <strong>Warning!</strong> Password Field Is Empty
      </div>
    </div>
    <div class="row">
      <form class="form-horizontal reg-form">
        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="password" placeholder="Password (Default 123)">
          </div>
        </div>
        <div class="form-group">
          <label for="role" class="col-sm-3 control-label">Role</label>
          <div class="col-sm-9">
            <select name="role" id="role" class="form-control">
              <option value="" selected="selected">Select Option</option>
              <option value="Admin">Admin</option>
						  <option value="Doctor">Doctor</option>
						  <option value="Patient">Patient</option>
							<option value="Receptionists">Receptionists</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9" style="text-align: left;">
            <button type="button" id="login-btn" class="btn btn-primary">Login</button>
          </div>
        </div>
      </form>
    </div>
</center>
<script type="text/javascript">
		$(document).ready(function(){
			$('#login-btn').click(function(){

				var d=validation();
				if(d){
					var email=document.getElementById("email").value;
					var password=document.getElementById("password").value;
					var role=document.getElementById("role").value;

					$.post("login-submit.php",{"email":email,"password":password,"role":role},function(data){
            if(data=="admin"){
							window.location.href = "page2.php";
						}
            else if(data=="patient"){
              window.location.href = "page3.php";
            }
            else if(data=="doctor"){
              window.location.href = "page4.php";
            }
						else if(data=="Receptionists"){
              window.location.href = "page5.php";
            }
            else{
							document.getElementById("f").style.display = "block";
							document.getElementById("dev").style.display = "block";
							$("#email").val("");
		          $("#password").val("");
		          $("#role").val("");
						}
					});
				}
			});
		});
		$(window).click(function(){
	      document.getElementById("f").style.display = "none";
	      document.getElementById("s").style.display = "none";
	    });
</script>
<script>
		function validation()
    {
      var email=document.getElementById("email").value;
      var password=document.getElementById("password").value;
      if(email=="" || email==null)
      {
        document.getElementById("a").style.display = "block";
        return false;
      }
      else if(validateEmail())
      {
        document.getElementById("b").style.display = "block";
        return false;
      }
      else if(password=="" || password==null)
      {
        document.getElementById("c").style.display = "block";
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
<script type="text/javascript">
    function register(){

	    $.get("register.php",function(e){
	        $('html').html(e);
	    });
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#new-user').click(function(){
      	$.get("register.php",function(e){
		$('body').html(e);
      });
      });
    });
  </script>
</body>
</html>
