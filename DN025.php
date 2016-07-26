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

<link rel="stylesheet" href="assets/jquery-ui/themes/redmond/jquery-ui.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/main.css" type="text/css"/>

<script type="text/javascript">
    $(window).load(function(){
        $.urlParam = function (name){
            var param = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if(param == null){return null}else{return param[1]||0}
        }
        var donorId = $.urlParam("donor_id")
        var url = "http://192.168.0.145/api/donor/read/"+donorId
        $.get( url, function( data ) {
            console.log(data.SEX_OF_DONOR)
            if(data.SEX_OF_DONOR=="1"){
                $("#mr1").attr({"checked":true})
            }
            else if(data.SEX_OF_DONOR=="2"){
                $("#mr2").attr({"checked":true})
            }
            else if(data.SEX_OF_DONOR=="3"){
                $("#mr3").attr({"checked":true})
            }
            else if(data.SEX_OF_DONOR=="4"){
                $("#mr4").attr({"checked":true})
            }
            $("input[name=Fname]").val(data.FIRST_NAME)
            $("input[name=Sname]").val(data.SURNAME)
            $("input[name=dob]").val(data.FIRST_NAME)
            $("#addr").val(data.ADDRESS)
            $(".id").html(data.DONOR_ID)
            $("input[name=postCode]").val(data.POSTAL_OR_ZIP_CODE)
            $("input[name=town]").val(data.MARRIED_TOWN)
            $("input[name=rout]").val(data.ROUT_CODE)
            $("input[name=country]").val(data.CODE_OF_COUNTRY_OF_NATIONALITY)
            $("input[name=county]").val()
            $("select[name=region]").val(data.REGION_CODE)
            $("input[name=rout]").val(data.ROUT_CODE)
        });
    })

	$(function(){		
		$("#dob").val("18-ธ.ค-2528");
		$("#calDob").html(calDOB(strToDate($("#dob").val()))+" years");
		$("#dob").datepicker();
		$("#dob").blur(function(){
			$("#calDob").html(calDOB(strToDate($(this).val()))+" years");
		});
		$("#dateTimeOfSearch").val(getCurrentDateTimeString());
		$(".date").html(getCurrentDateTimeString());
	});
    
</script>
<div id="<?php echo $pageClass; ?>" class="container">
    <!--Donor ID-->
    <div class="panel panel-default">
        <div class="panel-body text-center">
        <strong>Donor : </strong>
        <span class="id"><span> - 
        <strong>Administrative coordinates</strong> - 
        <span class="date">8 Dec 2016</span>
        </div>
    </div>
    <!--Identity-->
    <div class="row">
        <div class="col-sm-6">
        <!-- Identity -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Identity</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="radio" name="mr" id="mr1" value="1" tabindex="1">
                        <label for="mr">Mr.</label>
                        <input type="radio" name="mr" id="mr2" value="2" tabindex="2">
                        <label for="mr">Mrs.</label>
                        <input type="radio" name="mr" id="mr3" value="3" tabindex="3">
                        <label for="mr">Miss.</label>
                        <input type="radio" name="mr" id="mr4" value="4" tabindex="4">
                        <label for="mr">???</label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Firstname</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="Fname" class="form-control" tabindex="5">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Surname</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="Sname" class="form-control" tabindex="6">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Married name</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="Mname" class="form-control" tabindex="7">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">DOB</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" name="dob" id="dob" class="form-control dndate" tabindex="8">
                            </div>
                            <div class="col-sm-4">
                                <h5 id="calDob"></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Place of birth</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Country</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="country" class="form-control" tabindex="9">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Region</label>
                            </div>
                            <div class="col-sm-7">
                                <select name="region" class="form-control" tabindex="10">
                                    <option>Oprion 1</option>
                                    <option>Oprion 2</option>
                                    <option>Oprion 3</option>
                                    <option>Oprion 4</option>
                                    <option>Oprion 5</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" style="width: 100%" tabindex="11">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">County</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="county" class="form-control" tabindex="12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Address-->
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Address</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="">Address</label>
                            </div>
                            <div class="col-sm-10">
                                <textarea id="addr" class="form-control" tabindex="13">
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="">Town</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="town" class="form-control" tabindex="14">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Post Code/Country</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="postCode" class="form-control" tabindex="15">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="">Rout</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="rout" class="form-control" tabindex="16">
                            </div>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="">Rout</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" tabindex="17">
                            </div>
                            <div class="col-sm-2">
                                <label for="">Country</label>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" tabindex="18">
                                    <option>Thailand</option>
                                    <option>Thailand</option>
                                    <option>Thailand</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="">Region</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="region1" class="form-control" tabindex="19">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="">Region</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="region2" class="form-control" tabindex="20">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Urban Comm.</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" tabindex="21">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Date and time of search</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control dndatetime" name="dateTimeOfSearch" id="dateTimeOfSearch" tabindex="22">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="button" onclick="search()" class="btn btn-info" tabindex="23"> Search</button>
                    <button class="btn btn-danger" tabindex="24"> Exit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 

  include ("pages/footer.php");

?>

