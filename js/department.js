$(document).ready(function() {
  $(".list-group-item").on('click', function(this){ 
    $(this).preventDefault();
    $('.active').removeClass('active');
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
   
		$("#value").append($("#niket1"));
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
   
		$("#value").append($("#niket2"));
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
         
		$("#value").append($("#niket3"));
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
   
		$("#value").append($("#niket4"));
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
   
		$("#value").append($("#niket5"));
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
   
		$("#value").append($("#niket6"));
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
   
		$("#value").append($("#niket7"));
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
   
		$("#value").append($("#niket8"));
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
   
		$("#value").append($("#niket9"));
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
   
		$("#value").append($("#niket10"));
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
   
		$("#value").append($("#niket11"));
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