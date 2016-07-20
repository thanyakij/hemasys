<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <style>
            body{
              padding-top: 20px;
            }
            .form-group{
               padding-bottom: 20px;
            }
            .rmpad{
               padding: 8px;
            }
            .input-group{
                padding-bottom:  5px;
            }
            .text-input{
                color: white;
                width: auto;
            }
            .text-input2{
                color: #333;
                width: 80px;
            }
            .input-group-addon{
                background-color: whitesmoke;
            }
            .col-sm-12{
              padding-bottom: 40px;
            }
            .radiowidth{
                width:170px;
            }
            input[type="checkbox"]{
                transform:scale(1.5,1.5);
            }
        </style>
		
		<script src="assets/js/jquery-2.2.1.js" type="text/javascript"></script>
		<script src="assets/jquery-ui/jquery-ui.js" type="text/javascript"></script>
		<script src="assets/js/main.js" type="text/javascript"></script>
		<script src="assets/js/calendar.js" type="text/javascript"></script>

		<link rel="stylesheet" href="assets/jquery-ui/themes/redmond/jquery-ui.css" type="text/css"/>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css"/>

		<script type="text/javascript">
			$(function(){
				$("input[id^='dateTime']").val(getCurrentDateTimeString());
				$(".dntime").val(getCurrentTimeWithSecString());
			});
		</script>
    </head>
    <body>
      <div class="container">
          <div class="panel panel-info">
            <div class="panel-heading"><h4>HIIG Donor No. 1005613563 : Mr.Chalachainan Nuttapon</h4></div>
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                      <th style="width:10%">N*</th><th style="width:20%">Sample number</th><th style="width:10%">Date</th><th style="width:20%">Date of laboratory</th>
                      <th style="width:20%">Category</th><th style="width:20%">Bag Type</th>
                  </tr>
                </thead>
                <tbody >
                  <tr>
                      <td>1</td><td>NULL</td><td>a</td><td>a</td><td>a</td><td>a</td>
                  </tr>
                  <tr>
                      <td>2</td><td>NULL</td><td>a</td><td>a</td><td>a</td><td>a</td>
                  </tr>
                  <tr>
                      <td>3</td><td>NULL</td><td>a</td><td>a</td><td>a</td><td>a</td>
                  </tr>
                  <tr>
                      <td>4</td><td>NULL</td><td>a</td><td>a</td><td>a</td><td>a</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Collection point</label>
                <div class="col-sm-7">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Site</label>
                <div class="col-sm-7">
                  <input type="" class="form-control dntime" id="site" name="site" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Time</label>
                <div class="col-sm-7">
                  <input type="" class="form-control dntime" id="time" name="time" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Duration</label>
                <div class="col-sm-7">
                  <input type="" class="form-control dntime" id="duration" name="duration" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Use</label>
                <div class="col-sm-7">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Sampler</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Sampler2</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Location</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Department</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Requester</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>

              <div class="form-group"></div>

              <div class="form-group">
                <label for="" class="col-sm-6 control-label">Test request reason</label>
                <div class="col-sm-6">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Urgency level</label>
                <div class="col-sm-7">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="" class="col-sm-6 control-label">External sample ID</label>
                <div class="col-sm-6">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Type of N*</label>
                <div class="col-sm-7">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Ranks</label>
                <div class="col-sm-7">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-6 control-label">donation ranking</label>
                <div class="col-sm-6">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-5 control-label">Autotransfusion</label>
                <div class="col-sm-7">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Authur</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                
              </div>
          </div>
          <div class="col-md-8">
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Date and Time of registery</label>
                <div class="col-sm-4">
                  <input type="" class="form-control" id="dateTimeRegister" name="dateTimeRegister" placeholder="" disabled>
                </div>
          
                <label for="" class="col-sm-2 control-label">Estimate date</label>
                <div class="col-sm-2">
                  <input type="checkbox" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Date and time recieved</label>
                <div class="col-sm-8">
                  <input type="" class="form-control" id="dateTimeRecieved" name="dateTimeRecieved" placeholder="" disabled>
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Problem</label>
                <div class="col-sm-9">
                  <textarea rows="3" cols="" style="width:100%;"></textarea>
                </div>
              </div>
          </div>
          <div class="col-md-12" style="padding-top:20px;">    </div>
          <div class="col-md-12">
            <div class="col-md-2"><button type="" class="btn btn-info btn-block">History of identity</button></div>
            <div class="col-md-2"><button type="" class="btn btn-success btn-block">Products</button></div>
            <div class="col-md-2"><button type="" class="btn btn-warning btn-block">Letter</button></div>
            <div class="col-md-2"><button type="" class="btn btn-primary btn-block">Exams</button></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><button type="" class="btn btn-danger btn-block">Exit</button></div>
          </div>
        </div>
      </div>
    </body>
</html>
