<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
<script src="assets/js/jquery-2.2.1.js" type="text/javascript"></script>
<script src="assets/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/calendar.js" type="text/javascript"></script>
<script src="assets/js/view/DN019.js"></script>

<link rel="stylesheet" href="assets/jquery-ui/themes/redmond/jquery-ui.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/main.css" type="text/css"/>

<script type="text/javascript">
	$(function(){		
		//setGlobal
		setGlobalCode($("#nid"), 13, 13, true);
		setGlobalCode($("#abmdrID"), 9, 9, true);
		setGlobalCode($("#rank"), 0, 0, true);
		setGlobalCode($("#postcode"), 5, 5, true);
		
		$("#dob").val("18-ธ.ค-2528");
		$("#age").val(calDOB(strToDate($("#dob").val())));
		$("#btnSave").click(function(){
			$.validate();
		});
		$("#dob").datepicker();
		$("#dob").blur(function(){
			$("#age").val(calDOB(strToDate($(this).val())));
		});
		
		$("input[id^='date']").val(formatDate(new Date()));
		$("#timeConsultation").val(getCurrentTimeWithSecString());
		
		$("#latinFirstname").attr("disabled", "disabled");
		$("#latinLastname").attr("disabled", "disabled");
		$("#abmdrID").keyup(function(e){
			var val = $(this).val();
			if(val.length>0){
				$("#latinFirstname").removeAttr("disabled");
				$("#latinLastname").removeAttr("disabled");
			}else{
				$("#latinFirstname").attr("disabled", "disabled");
				$("#latinLastname").attr("disabled", "disabled");
			}
		});
		$("#postcode").keyup(function(e){
			var val = $(this).val();
			if(val.length===5){
				var option = '<option value="1">Thailand</option><option value="2">Laos</option>';
				$("#country").html(option);
			}
		});
	});
</script>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="" href="">    
    </head>
    <body>
        <style>
            body{
                padding:20px;
            }
            .rmpadding{
                padding:0;
            }
            .padding{
                padding-bottom:18px;
            }
            .radiowidth{
                width:150px;
            }
        </style>
    <div class="" ng-controller="dn019">
        <div class="col-lg-8">
            <form class="fomr-inline">
                <div class="form-group">
                <label for="" class="col-md-2 control-label">Hematos No.</label>
                <div class="col-md-4">
                    <p>{{donor.DONOR_ID}}</p>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-md-2 control-label">Status</label>
                <div class="col-md-4">
                    <select class="form-control" tabindex="1">
						<option value="1">Status1</option>
						<option value="2">Status2</option>
						<option value="3">Status3</option>
						<option value="4">Status4</option>
					</select>
                </div>
            </div>
            </form>
            <div class="col-md-10">
                <form class="form-inline">
                    <label for="" class="col-md-2">Gender</label>
                    <div class="col-md-3 form-group">
                         <label class="radio-inline radiowidth">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" tabindex="2" ng-model="donor.GENDE" value="M">Male
                        </label>
                    </div>
                    <div class="col-md-3 form-group">
                         <label class="radio-inline radiowidth">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" tabindex="3" ng-model="donor.GENDE" value="F">Female
                        </label>
                    </div>
                    <div class="col-md-4"></div>
                </form> 
            </div>
            <div  class="col-md-10 padding">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <select class="form-control" ng-model="donor.DONOR_IDENTITY_TITLE">
                            <option value="000">AAA</option>
                            <option value="001">BBB</option>
                            <option value="002">CCC</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Fist Names</label>
                    <div class="col-sm-4">
                        <input type="" class="form-control required"  tabindex="5" placeholder="" ng-model="donor.FIRST_NAME">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Surname</label>
                    <div class="col-sm-4">
                        <input type="" class="form-control required" tabindex="6" placeholder="" ng-model="donor.SURNAME">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="col-sm-2 control-label">DOB</label>
                    <div class="col-sm-4">
                        <input id="dob" name="dob" class="form-control"  tabindex="7" placeholder="" ng-model="donor.DATE_OF_BIRTH" date-input>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="age" name="age" placeholder="" tabindex="8" value="0">
                    </div>
                    <div class="col-sm-2" style="line-height: 30px">
                        ปี
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <h1 style="font-size: 500%; color:red;"><b>{{donor.ABORH}}</b></h1>
            </div>   
            <div class="col-md-12">
                <div class="form-group" style="margin-bottom:0;">
                    <label for="nid" class="col-sm-2 control-label">National ID</label>
                    <div class="col-sm-4">
                        <input type="" class="form-control required" id="nid" name="nid" placeholder="" tabindex="9">
                    </div>
                </div>
                <div class="form-group">
                    <label for="abmdrID" class="col-sm-2 control-label">ABMDR ID</label>
                    <div class="col-sm-4">
                        <input type="" class="form-control" id="abmdrID" name="abmdrID" placeholder="" tabindex="10">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label for="" class="col-sm-2 control-label">Latin fistname</label>
                    <div class="col-sm-4">
                        <input type="" class="form-control" id="latinFirstname" name="latinFirstname" placeholder="" tabindex="11">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Latin name</label>
                    <div class="col-sm-4">
                        <input type="" class="form-control" id="latinLastname" name="latinLastname" placeholder="" tabindex="12">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label for="" class="col-sm-1 control-label">Country</label>
                    <div class="col-sm-3">
                        <select class="form-control" tabindex="13" ng-model="donor.CODE_OF_COUNTRY_OF_NATIONALITY">
							<option value="1">Thailand</option>
							<option value="2">Laos</option>
						</select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Region</label>
                    <div class="col-sm-3">
                        <select class="form-control" tabindex="14" ng-model="donor.CODE_OF_REGION">
							<option value="1">Central</option>
							<option value="2">North</option>
						</select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-1 control-label">County</label>
                    <div class="col-sm-3">
                        <select class="form-control" tabindex="15">
							<option value="1">Thailand</option>
							<option value="2">Laos</option>
						</select>
                    </div>
                </div>
                <div class="col-xs-12 padding"></div>
                <div class="form-group" style="margin-bottom:0;">
                    <label for="" class="col-sm-1 control-label">Address</label>
                    <div class="col-sm-6">
                        <input type="" class="form-control"  placeholder="" tabindex="16" ng-model="donor.ADDRESS">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Town</label>
                    <div class="col-sm-4">
                        <input type="" class="form-control" tabindex="17" placeholder="" ng-model="donor.TOWN">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Postcode</label>
                    <div class="col-sm-2">
                        <input type="" class="form-control required" id="postcode" name="postcode" tabindex="18" placeholder="" ng-model="donor.POSTAL_OR_ZIP_CODE">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label for="" class="col-sm-1 control-label">Country</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="country" name="country" tabindex="19" ng-model="donor.CODE_OF_COUNTRY_OF_RESIDENCE">
                            <option value="1">Thailand</option>
                            <option value="2">Laos</option>
						</select>
                    </div>
                </div>
                <div class="form-group" >
                    <label for="" class="col-sm-1 control-label">Category</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="category" name="category" ng-model="donor.USUAL_CATEGORY_OF_DONATION">
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-1 control-label">Profession</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="profession" name="profession" ng-model="donor.SOCIO_PROFESSIONAL_CATEGORY">
                            <option value="1">ไม่ทราบ</option>
                            <option value="2">ประชาชนทั่วไป</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" >
                    <label for="" class="col-sm-1 control-label">Company</label>
                    <div class="col-sm-5">
                        <input type="" class="form-control" tabindex="22" placeholder="" ng-model="donor.COMPANY">
                    </div>
                </div>
                <div class="col-sm-12 padding"></div>     
            </div>         
        </div>
            
        <div class="col-lg-4">
                <div class="form-group"></div>
                <div class="form-group" >
                    <label for="" class="col-sm-2 control-label">Mobile</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" tabindex="23" placeholder="" ng-model="donor.PERSONAL_PHONE_NUMBER">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Tel.</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" tabindex="24" placeholder="" ng-model="model.OTHER_TELEPHONE_NUMBER">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-6">
                        <input type="" class="form-control" tabindex="25" placeholder="">
                    </div>
                    <label for="" class="col-sm-1 control-label">Ext</label>
                    <div class="col-sm-3">
                        <input type="" class="form-control" tabindex="26" placeholder="">
                    </div>
                </div>
                <div class="form-group" >
                    <label for="" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" tabindex="27" placeholder="">
                    </div>
                </div>
                <div class="form-group" >
                    <label for="" class="col-sm-2 control-label">Note1</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" tabindex="28" placeholder="" ng-model="donor.NOTES_ABOUT_THE_PHONE">
                    </div>
                </div>
                <div class="form-group form-group-sm" >
                    <label for="" class="col-sm-2 control-label">Note2</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" tabindex="29" placeholder="" ng-model="donor.NOTES_OTHER_TELEPHONE_NUM">
                    </div>
                </div>
                <div class="col-xs-12 padding"></div>
                <div class="form-group form-group-sm">
                    <label for="dateLastAttendance" class="col-sm-4 control-label">Last attendance</label>
                    <div class="col-sm-8">
                        <input class="form-control" tabindex="30" id="dateLastAttendance" name="dateLastAttendance" placeholder="" ng-model="donor.DATE_OF_LAST_VISIT" date-input>
                    </div>
                    <label for="" class="col-sm-4 control-label">Total donations</label>
                    <div class="col-sm-2 rmpadding">
                        <input type="" class="form-control" tabindex="31" placeholder="" ng-model="donor.NUMBER_OF_EXTERNAL_DONATIONS">   
                    </div>
                    <div class="col-sm-1 rmpadding">
                        <button type="" class="btn btn-default" tabindex="32">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                    </div>
                    <label for="" class="col-sm-2 control-label">Computer</label>
                    <div class="col-sm-3">
                        <input type="" class="form-control" name="" value="" tabindex="33" ng-model="donor.NR_OF_COMPUTERIZED_DONATIONS">
                    </div>
                    <label for="" class="col-sm-4 control-label">Last award </label>
                    <div class="col-sm-8">
                        <select class="form-control" tabindex="34" ng-model="donor.LAST_AWARD">
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
                    </div>
        
                    
                 </div>
                
                <div class="form-group" >
                    <label for="" class="col-sm-2 control-label">Doctor</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="" class="form-control" tabindex="34" placeholder="" ng-model="donor.FAMILY_DOCTOR">
                            <span class="input-group-btn">
                                <button type="" class="btn btn-default">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </button>
                            </span>
                            <input type="" class="form-control"  placeholder="">
                        </div>
                        
                    </div>
                </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group" >
                    <label for="" class="col-sm-1 control-label">Consultation</label>
                    <div class="col-sm-2">
                        <input type="" class="form-control" tabindex="35" id="dateConsultation" name="dateConsultation" disabled>
                    </div>
                    <label for="" class="col-sm-1 control-label">at</label>
                    <div class="col-sm-2">
                        <input type="" class="form-control" tabindex="36" id="timeConsultation" name="timeConsultation" disabled>
                    </div>
                    <label for="" class="col-sm-1 control-label rmpadding">Sample number</label>
                    <div class="col-sm-2">
                        <input type="" class="form-control" tabindex="37" placeholder="" ng-model="dornor.SAMPLE_NUMBER">
                    </div>
                    <label for="rank" class="col-sm-1 control-label">Ranks</label>
                    <div class="col-sm-1">
                        <input type="" class="form-control" tabindex="38" id="rank" name="rank" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <button type="" tabindex="39" class="btn btn-success btn-block">Print</button>
                    </div>
                </div>
        </div>
            <div class="col-md-12 padding">
                
            </div>
            <div class="col-md-2">
                <button type="button" tabindex="40" id="btnSave" name="btnSave" class="btn btn-success btn-block" ng-click="checkEvent()">Save</button>
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-2">
                <button type="" tabindex="41" class="btn btn-info btn-block">Events</button>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <button type="" tabindex="42" class="btn btn-primary btn-block">OK</button>
            </div>
            <div class="col-md-2">
                <button type="" tabindex="43" class="btn btn-danger btn-block">Abort</button>
            </div>

    </div>
    </body>
</html>
