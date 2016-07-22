<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <style>
            body{
              padding-top: 20px;
            }
            .form-group{
               padding-bottom: 30px;
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
            .clickHighlight tr.selected {
              background-color: rgba(41, 103, 182, 0.89);
              color: #FFF;
            }
        </style>
		

		<script src="assets/js/jquery-2.2.1.js" type="text/javascript"></script>
		<script src="assets/jquery-ui/jquery-ui.js" type="text/javascript"></script>
		<script src="assets/js/main.js" type="text/javascript"></script>
		<script src="assets/js/calendar.js" type="text/javascript"></script>
    <script src="assets/js/view/DN020.js" type="text/javascript"></script>
		<link rel="stylesheet" href="assets/jquery-ui/themes/redmond/jquery-ui.css" type="text/css"/>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css"/>

		<script type="text/javascript">
			$(function(){
				//setGlobal
				globalEdit($("#btnModification"));
				setGlobalFloat($("#height"), 0, 0);
				setGlobalFloat($("#weight"), 0, 0);
				setGlobalFloat($("#temperature"), 0, 0);
				
				setGlobalCode($("#hb"), 0, 0, true);
				setGlobalCode($("#plt"), 0, 0, true);
				
				setGlobalCode($("#pressure"), 3, 3, true);
				setGlobalCode($("#pulseRate"), 3, 3, true);
				setGlobalCode($("#volume"), 3, 3, true);
				setGlobalCode($("#ranks"), 3, 3, true);
				
				$("input[id^='date']").val(getCurrentTimeWithSecString());
			});
      $(document).ready(function(){
        $("tbody").click(function() {
          console.log("qweqwe");
        })
      });
		</script>
    </head>
    <body>
      <div class="container">
        <div class="col-lg-1"></div>
        <div class="col-lg-10" ng-controller="medicalFile">
          <div class="panel panel-default">
            <div class="panel-heading">HIIG Donor No. {{donor.DONOR_ID}} : {{donor.FIRST_NAME}} {{donor.SURNAME}}</div>
              <table class="table table-bordered table-hover" id="dataTable">
                <thead>
                  <tr>
                      <th>Date</th>
                      <th>Point</th>
                      <th>Site</th>
                      <th>Outcome</th>
                      <th>Donation type</th>
                      <th>Doctor</th>
                      <th>Secretary</th>
                  </tr>
                </thead>
                <tbody class="clickHighlight">
                  <tr class="highlight" ng-repeat="med in medical" ng-click="clickRow(med)">
                      <td>{{med.DATE_OF_INTERVIEW}}</td>
                      <td>{{med.COLLECTION_POINT}}</td>
                      <td>{{med.SITE}}</td>
                      <td>{{med.NOTE}}</td>
                      <td>{{med.CATEGORY_OF_DONATION}}</td>
                      <td>{{med.PHYSICIAN}}</td>
                      <td>{{med.CODE_OF_SECRETARY}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="container">
            <div class="col-lg-1"></div>
            <div class="detail">
            <div class="col-lg-3">
              <div class="form-group rmpad">
                <label for="" class="control-label">Secretarial Consultation</label>
                  <input type="text" class="form-control edit dntime" tabindex="1" id="dateSecretarial" name="dateSecretarial" placeholder="">
              </div>
              <div class="form-group rmpad">
                <label for="" class="control-label">Medical Consultationn</label>
                  <input type="text" class="form-control edit dntime" tabindex="2" id="dateMedical" name="dateMedical" placeholder="">
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Height</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="3" id="height" name="height" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Weight</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="4" id="weight" name="weight" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Pressure</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="5" id="pressure" name="pressure" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Pulse Rate</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="6" id="pulseRate" name="pulseRate" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Temperature</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="7" id="temperature" name="temperature" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Volumn</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="8" id="volume" name="volume" placeholder="">
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">HB</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="9" id="hb" name="hb" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Plt</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="10" id="plt" name="plt" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Ranks</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="11" id="ranks" name="ranks" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Heart/Lung</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Outcome</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="12" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Category</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="13" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Bag type</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="14" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Use</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="15" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Donation No.</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="16" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Incidents</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control edit" tabindex="17" placeholder="">
                </div>
              </div>
            </div>
          </div>
            <div class="col-lg-4">
                <table class="table">
                  <thead>
                    <tr>
                        <th>Question</th>
                        <th>Response</th>
                    </tr>
                  </thead>
                    <tbody>
                      <tr><td>Is there any problem?</td><td>NO</td></tr>
                      <tr><td>Which type do you want to donate blood?</td><td></td></tr>
                      <tr><td>Stem Cell donation?</td><td></td></tr>
                    </tbody>
                </table>
                <div class="col-sm-12">
                  <button class="btn btn-default btn-lg btn-block" tabindex="18" id="btnModification" name="btnModification">Modification</button>
                </div>
                <div class="col-sm-12">
                  <button class="btn btn-info btn-lg btn-block" tabindex="19"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>Events</button>
                </div>
                <div class="col-sm-12">
                  <button class="btn btn-danger btn-lg btn-block" tabindex="20">Exit</button>
                </div>
            </div>
        </div>
      </div>
    </body>
</html>
