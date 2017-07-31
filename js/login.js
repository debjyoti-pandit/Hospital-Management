		$(document).ready(function(){
			$('#login-btn').click(function(){
				alert();
				var d=validation();
				if(d){
					var email=document.getElementById("email").value;
					var password=document.getElementById("password").value;
					var role=document.getElementById("role").value;
					$.post("login-submit.php",{"email":email,"password":password,"role":role},function(data){
						if(data=="Successfully Logged In"){
							$.get("page2.php",function(e){
						        $('body').html(e);
						    });
							
						}
						else{
							alert(data);
						}
					});
				}
			});
		});


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

    function register(){
      $.get("register.php",function(e){
        $('body').html(e);
      });
    }
 