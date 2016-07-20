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
	$(function(){
		//setGlobal
		setGlobalCode($("#donor_id"), 10, 10, false);
		setGlobalCode($("#Nid"), 13, 13, true);
		setGlobalCode($("#abmdrId"), 0, 0, true);
		setGlobalCode($("#identifier"), 20, 20, true);
		
		$("#dateOfBirth").val(formatDate(new Date()));
		$("#age").html(calDOB(strToDate($("#dateOfBirth").val()))+" years");
		$("#dateOfBirth").datepicker();
		$("#dateOfBirth").blur(function(){
			$("#age").html(calDOB(strToDate($(this).val()))+" years");
		});
	});
</script>
    <div id="<?php echo $pageClass; ?>" class="container">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="donor_id">Hematos No</label>
                </div>
                <div class="col-sm-3">
                    <input id="donor_id" name="donor_id" class="form-control" type="" value="" tabindex="1">
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="Nid">National ID</label>
                </div>
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="Nid" id="Nid" value="" tabindex="2">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="abmdrId">ABMDR ID</label>
                </div>
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="abmdrId" id="abmdrId" value="" tabindex="3">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="">Identifier</label>
                </div>
                <div class="col-sm-3">
                    <input class="form-control" id="identifier" name="identifier" type="text" name="" value="" tabindex="4">
                </div>
                <div class="col-sm-1">
                    <label for="identifier_type">Type</label>
                </div>
                <div class="col-sm-3">
                    <!-- Get data from 'Setting' -->                        
                   <select class="form-control" tabindex="5">
                      <option>Options 1</option>
                      <option>Options 2</option>
                      <option>Options 3</option>
                      <option>Options 4</option>
                      <option>Options 5</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="">First name</label>
                </div>
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="firstName" value="" tabindex="6">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="">Surname</label>
                </div>
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="surName" value="" tabindex="7">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="dateOfBirth">DOB</label>
                </div>
                <div class="col-sm-3">
                    <input class="form-control dndate" type="" name="dateOfBirth" id="dateOfBirth" value="" tabindex="8">
                </div>
                <div class="col-sm-3">
					<h5 id="age"></h5>
                </div>
            </div>
        </div>
        <div class="row actions clearfix">
            <div class="col-sm-3 pull-left">
                <a href="#">
                    <button class="btn btn-info btn-lg" tabindex="9">
                        <i class="glyphicon glyphicon-search"></i>
                         Search
                    </button>
                </a>
            </div>
            <div class="col-sm-3 pull-right text-right">
                <a href="#">
                    <button class="btn btn-danger btn-lg" tabindex="10">
                        <i class="glyphicon glyphicon-remove-sign"></i>
                         Exit
                    </button>
                </a>
            </div>
        </div>
    </div>
<?php 
  include ("pages/footer.php");
?>
