<?php 
 include("structure.php");
?>
        <div id="change">
            <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Dashboard</h1>
                    <small>Home</small>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="padding: 30px;">
                <canvas id="aptchart" height="100px" style="background-color: white;"></canvas>
                <div style="padding: 10px;font-size: 20px;font-weight: 700;font-family: cursive;color: #2e6da4;text-align: center;">Appointments</div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="padding: 30px;">
                <canvas id="ptchart"  height="100px" style="background-color: white;"></canvas>
                <div style="padding: 10px;font-size: 20px;font-weight: 700;font-family: cursive;color: #2e6da4;text-align: center;">Patients</div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6" style="padding: 30px;">
                <canvas id="expchart" height="150px" style="background-color: white;"></canvas>
                <div style="padding: 10px;font-size: 20px;font-weight: 700;font-family: cursive;color: #2e6da4;text-align: center;">Expenses</div>
              </div>
              <div class="col-lg-6" style="padding: 30px;">
                <div style="padding: 10px;font-size: 20px;font-weight: 700;font-family: cursive;color: #2e6da4;text-align: center;">Enquiry</div>
                <?php
                            require("connection.php");
                            $str="select * from enquiry where status='Pending';";
                            $result= mysqli_query($con, $str);
                    ?>
                    <table class="table table-hover" style="border-style: solid;border-width: 2px;border-color:rgba(49, 141, 1, 0.29);">
                        <thead>
                          <tr >
                           
                            <th style="font-size: 16px;font-family: monospace;color: #37a000;text-align: center;">Name</th>
                            <th style="font-size: 16px;font-family: monospace;color: #37a000;text-align: center;">Email</th>
                            <th style="font-size: 16px;font-family: monospace;color: #37a000;text-align: center;">Mobile</th>
                            <th style="font-size: 16px;font-family: monospace;color: #37a000;text-align: center;">Date</th>
                            <th style="font-size: 16px;font-family: monospace;color: #37a000;text-align: center;">Enquiry</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            echo "<tr style='font-size: 13px;text-align: center;''>";
                            
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['mobile']."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['enquiry']."</td>";
                            echo "</tr>";
                        }
                        ?>
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
  <script type="text/javascript">
    $(document).ready(function(){
      $.post("chart.php",function(data){
        console.log(data);
        var d = [];
        var count = [];
        for (var i in data) {
          d[i]=data[i].date;
          count[i]=data[i].count;
          console.log(count[i]);
        }
        var ctx = document.getElementById("aptchart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:d,
                datasets: [{
                    label: 'Appointments',
                    data:count,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',

                       
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',                        
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                            
                        }
                    }]
                },
              xAxes: [{
                        display: false
                    }]
            }
        });
      });
    });
</script>
  <script type="text/javascript">
    $(document).ready(function(){
      $.post("chart2.php",function(data){
        console.log(data);
        var d = [];
        var count = [];
        for (var i in data) {
          d[i]=data[i].doa;
          count[i]=data[i].count;
          console.log(count[i]);
        }
        var ctx = document.getElementById("ptchart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels:d,
                datasets: [{
                    label: 'Patients',
                    data:count,
                    backgroundColor: [
                      'rgba(255,99,132,0.2)',
                    ],
                    borderColor: [
                      'rgba(255,99,132,1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                            
                        }
                    }]
                },
              xAxes: [{
                        display: false
                    }]
            }
        });
      });
    });
</script>
  <script type="text/javascript">
    $(document).ready(function(){
      $.post("chart3.php",function(data){
        console.log(data);
        var d = [];
        var credit = [];
        var debit = [];
        for (var i in data) {
          d[i]=data[i].date;
          credit[i]=data[i].credit;
          debit[i]=data[i].debit;
          console.log(credit[i]+"fff"+debit[i]);
        }
        var ctx = document.getElementById("expchart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels:d,
                datasets: [{
                    label: 'Credit',
                    data:credit,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 1
                },{
                    label: 'Debit',
                    data:debit,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                            
                        }
                    }]
                },
              xAxes: [{
                        display: false
                    }]
            }
        });
      });
    });
</script>
</body>
