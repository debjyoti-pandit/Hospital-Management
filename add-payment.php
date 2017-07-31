<?php 
 include("structure.php");
?>
        <div id="change">
          <div class="row bbtm">
              <div class="col-lg-12">
                <div class="header-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  <div class="header-title">
                    <h1>Account Manager</h1>
                    <small>Add payment</small>
                  </div>
              </div>
            </div>
            <div class="container-fluid relative" style="margin-top: 10px;">
        <div class="row" style="padding: 10px;">
          <div class="col-sm-12 mbutton">
            <a href="payment-list.php"><input type="submit" class="myButton" value="Payment List"></a>
          </div>    
        </div>
        <div class="row" style="padding-top:5px;margin-right: 40px;">
          <form class="form-horizontal">
            <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="date" name="date" />     
                    </div>
                </div>
                     <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Reason</label>
                    <div class="col-sm-10">
                      <select id="name" class="form-control">
                            <option value="" selected="selected">Select Option</option>
                            <option value="Maintainence of Hospital">Maintainence of Hospital</option>
                            <option value="Salary">Salary</option>
                            <option value="Equipments">Equipments</option>
                         </select>  
                    </div>
                </div>
              
              <div class="form-group">
                  <label for="payto" class="col-sm-2 control-label">Pay To</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="payto" placeholder="Pay To">
                    </div>
                </div>
                  <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea rows="3" class="form-control" id="description" placeholder="Description" style="padding-left:5px;"></textarea>
                    </div>
                </div>
               
           
                <div class="form-group">
                  <label for="amount" class="col-sm-2 control-label">Amount</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="amount" placeholder="amount">
                    </div>
                </div>
               
              
                
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                       <div class="col-sm-10" id="status">
                          <label class="radio-inline">
                             <input type="radio" name="status"  value="Paid">Paid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="status" value="Delayed">Delayed
                          </label>
                       </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                          <input type="reset" value="Reset" class="btn button cursor" style="vertical-align: baseline;">
                          <input type="button" id="add-pay-btn" value="Save" class="btn btn1 cursor"  style="vertical-align: baseline;">
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
    $(document).ready(function(){
      $('#add-pay-btn').click(function(){
          var name=document.getElementById("name").value;
          var date=document.getElementById("date").value;
          var payto=document.getElementById("payto").value;
          var description=document.getElementById("description").value;
          var amount=document.getElementById("amount").value;
          var status = $( "input:radio[name=\"status\"]:checked" ).val();
          $.post("add-payment-submit.php",{"name":name,"date":date,"payto":payto,"description":description,"amount":amount,"status":status},function(data){
              alert(data);
              $("#name").val("");
              $("#date").val("");
              $("#payto").val("");
              $("#description").val("");
              $("#amount").val("");
              $("input:radio[name=\"status\"]:checked").prop( "checked",false);
          });
      });
    });
  </script>
</body>
