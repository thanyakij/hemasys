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
		setGlobalCode($("#collection_point_code"), 6, 6, false);
		setGlobalCode($("#bagType"), 3, 3, false);
		
		$("#plan_date").datepicker().datepicker("setDate", new Date());
		$("#plan_date").val(toDatepickerValue($("#plan_date").val()));
		$(".datepicker-plandate").click(function(){
			$("#plan_date").datepicker("show");
		});
	});
</script>

<div id="<?php echo $pageClass; ?>" class="container">
        <form>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="plan_date">Planning date</label>
                    </div>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input id="plan_date" name="plan_date" class="form-control blurdate" tabindex="1" type="text" value="">
                            <span class="input-group-btn">
                              <button class="btn btn-default datepicker-plandate" type="button">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                              </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p>วันที่ของแผนการรับบริจาค</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="collection_point_code">Code</label>
                    </div>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input id="collection_point_code" name="collection_point_code" tabindex="2" class="form-control" type="text" value="">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                              </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p>ศูนย์บริการโลหิตแห่งชาติ<br/>รหัสหน่วยบริจาค และชื่อหน่วย</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="category_code">Category</label>
                    </div>
                    <div class="col-sm-4">
                        <!-- Get data from 'Setting' -->
                        <select class="form-control" tabindex="3">
                          <option>Options 1</option>
                          <option>Options 2</option>
                          <option>Options 3</option>
                          <option>Options 4</option>
                          <option>Options 5</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <p>ประเภทการบริจาค</p>
                    </div>
                </div>
            </div>
            <div class="form-group form-inline">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="">Bag type</label>
                    </div>
                    <div class="col-sm-2">
                       <div class="input-group">
                            <input class="form-control" type="text" id="bagType" name="bagType" tabindex="4" name="" value="">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                              </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p>ประเภทถุงบรรจุโลหิต</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="">Use</label>
                    </div>
                    <div class="col-sm-4">
                        <!-- Get data from 'Setting' -->                        
                       <select class="form-control" tabindex="5">
                          <option>Options 1</option>
                          <option>Options 2</option>
                          <option>Options 3</option>
                          <option>Options 4</option>
                          <option>Options 5</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <p>ประเภทถุงการใช้งาน</p>
                    </div>
                </div>
            </div>
            <hr>
        </form>
    <section class="button-actions">
        <div class="row clearfix">
            <div class="col-sm-2 col-sm-offset-1">
                <a href="dn017.php">
                    <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="6">Secretarial<br/>Reception</button>
                </a>
            </div>
            <div class="col-sm-2">
                <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="7">Medical<br/>Reception</button>
            </div>
            <div class="col-sm-2">
                <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="8">Medical<br/>Reception</button>
            </div>
            <div class="col-sm-2">
                <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="9">Medical<br/>Reception</button>
            </div>
            <div class="col-sm-2">
                <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="10">Donation<br/>request</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="11">Enter<br/>donations</button>
            </div>
            <div class="col-sm-2">
                <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="12">Madical<br/>Waiting list</button>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
                <button href="#" class="btn btn-lg btn-primary main-btn" tabindex="13">Donation<br/>waiting list</button>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </section>
    <hr>
    <section class="button-actions">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <button href="#" class="btn btn-lg btn-success" tabindex="14">Exams</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <button href="#" class="btn btn-lg btn-success" tabindex="15">End of collection statement</button>
            </div>
        </div>
    </section>
    <hr>
    <section class="button-actions text-right">
        <button href="#" class="btn btn-lg btn-danger" tabindex="16">EXIT</button>
    </section>
</div>
<?php 
  include ("pages/footer.php");
?>
