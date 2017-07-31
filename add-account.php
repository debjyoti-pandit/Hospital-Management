<?php 
 include("structure.php");
?>
        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Account manager</h1>
                    <small>Add account</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="account-list.php"><input type="submit" class="myButton" value="Account-List"></a>
          </div>    
        </div>
        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal">
              <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Account Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Account Name">
                    </div>
              
                
                </div>
                <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-10">
                      <select id="type" class="form-control">
                            <option value="" selected="selected">Select Option</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                            
                      </select>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea rows="3" class="form-control" id="description" placeholder="Description" style="padding-left:5px;"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="date" name="date" />     
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                       <div class="col-sm-10" id="status">
                          <label class="radio-inline">
                             <input type="radio" name="status"  value="active">Active
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="status" value="inactive">Inactive
                          </label>
                       </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                          <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                          <input type="button" id="add-acc-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
                        <input type="button" disabled value="or" class="btn2">
                    </div>
                  </div>
          </form>
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
    /*$(document).ready(function(e){
      $('#add-dept').click(function () {
       $.get("add-department.php",function(e){
          $('html').html(e);
        });
      });
  });*/
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#add-acc-btn').click(function(){
        //if(d){
          var name=document.getElementById("name").value;
          var type=document.getElementById("type").value;
          var description=document.getElementById("description").value;
          var date=document.getElementById("date").value;
          var status = $( "input:radio[name=\"status\"]:checked" ).val();
          $.post("add-account-submit.php",{"name":name,"type":type,"description":description,"date":date,"status":status},function(data){
              alert(data);
              $("#name").val("");
              $("#type").val("");
              $("#description").val("");
              $("input:radio[name=\"status\"]:checked").prop( "checked",false);
          });
        //}
      });
    });
  </script>
</body>
