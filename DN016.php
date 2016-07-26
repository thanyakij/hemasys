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
<style>
    div#myDate form table.table tbody tr:hover{background-color:red;}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        var host = window.location.host
        $("#bagTypeBtn").click(function(){
            window.location.href= "http://"+host+"/hemasys2/views/DN019.php"
        });
        // $("div#myDate form table.table tbody tr:hover").mouseup(function(){
        //     console.log("aaa")
        // })
        $("div#myDate form table.table tbody").on('click', 'tr', function() {
            console.log("My TD:first-child is:" + $(this).children('td:first-child').html())
            //alert("You clicked my <tr>!");
            //get <td> element values here!!??
        });
    });
	$(function(){
		//setGlobal
		setGlobalCode($("#collection_point_code"), 6, 6, false);
		setGlobalCode($("#bagType"), 3, 3, false);
		$("#plan_date").datepicker().datepicker("setDate", new Date());
		$("#plan_date").val(toDatepickerValue($("#plan_date").val()));
		$(".datepicker-plandate").click(function(){
			$("#plan_date").datepicker("show");
		});
        var planDate = $("#plan_date").val()
        var pointCode = $("#collection_point_code").val()
        var bagType = $("#bagType").val()
        // var  = $("#").val()
        // var  = $("#").val()
        // var  = $("#").val()
        // var  = $("#").val()
        // var  = $("#").val()
        // var  = $("#").val()
        // var  = $("#").val()

        var dialog1 = $( "#myDate" ).dialog({
            autoOpen: false,
            height: 500,
            width: 800,
            modal: true,
            buttons: {
                Ok: function() {
                    dialog1.dialog( "close" );
                } ,
                Cancel: function() {
                    dialog1.dialog( "close" );
                }
            },
        });
        var dialog2 = $( "#myCode" ).dialog({
            autoOpen: false,
            height: 500,
            width: 800,
            modal: true,
            buttons: {
                Ok: function() {
                    dialog2.dialog( "close" );
                } ,
                Cancel: function() {
                    dialog2.dialog( "close" );
                }
            },
        });
        $("#plandateBtn").click(function(){
            // var date = $("#plan_date").val().toString()
            // var url = "http://192.168.0.145/api/donor/read/"+date
            //     $.post(url,function(donor){
            //         console.log(donor)
            //     })
            dialog1.dialog( "open" );
        })
        $("#codeBtn").click(function(){
            dialog2.dialog( "open" );
        });
        
	});
</script>

<div id="myDate" title="Collection plan date" class="modal">
    <form action="">
        <table class="table table-bordered table-hover">
                <thead>
                    <th style="width:25%;">Date</th>
                    <th style="width:25%;">Code</th>
                    <th style="width:50%;">Description</th>
                </thead>
                <tbody>
                    <tr><td>1</td><td>a</td><td>a</td></tr>
	                <tr><td>2</td><td>a</td><td>a</td></tr>
                    <tr><td>3</td><td>a</td><td>a</td></tr>
                    <tr><td>4</td><td>a</td><td>a</td></tr>
                    <tr><td>5</td><td>a</td><td>a</td></tr>
                </tbody>
        </table>
    </form>
</div>
<div id="myCode" class="modal">
    <form action="">
        <table class="table table-bordered table-hover">
                <thead>
                    <th style="width:25%;">Date</th>
                    <th style="width:25%;">Code</th>
                    <th style="width:50%;">Description</th>
                </thead>
                <tbody>
                    <tr><td>User</td><td>a</td><td>a</td></tr>
	                <tr><td>User</td><td>a</td><td>a</td></tr>
                    <tr><td>User</td><td>a</td><td>a</td></tr>
                    <tr><td>User</td><td>a</td><td>a</td></tr>
                </tbody>
        </table>
    </form>
</div>

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
                              <button class="btn btn-default" id="plandateBtn" type="button">
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
                              <button class="btn btn-default" id="codeBtn" type="button">
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
                              <button class="btn btn-default" id="bagTypeBtn" type="button">
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
                <a href="DN017.php">
                    <button href="#" id="Secretarial" class="btn btn-lg btn-primary main-btn" tabindex="6">Secretarial<br/>Reception</button>
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
