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
		
		//$("#dateOfBirth").val(formatDate(new Date()));
		$("#age").html(calDOB(strToDate($("#dateOfBirth").val()))+" years");
		$("#dateOfBirth").datepicker();
		$("#dateOfBirth").blur(function(){
			$("#age").html(calDOB(strToDate($(this).val()))+" years");
		});
        $("#exitBtn").click(function(){
            window.location.href="http://127.0.0.1:1212/hemasys/DN016.php"
        })
        $("#donorli form table tbody").on('click','tr',function(){
            var do_id = $(this).children("td:last-child").text()
            console.log($(this).children("td:last-child").text())
            window.location.href = "http://127.0.0.1:1212/hemasys/DN025.php?donor_id="+do_id
        })
	});
    $(document).ready(function(){
        var donorlist = $( "#donorli" ).dialog({
            autoOpen: false,
            height: 500,
            width: 900,
            modal: true,
            buttons: {
                Ok: function() {
                    donorlist.dialog( "close" );
                } ,
                Cancel: function() {
                    donorlist.dialog( "close" );
                }
            },
        });
        $("#searchBtn").click(function(){
            //console.log("Testing Function")
            var doId = $("#donor_id").val();
            var natId = $("#Nid").val();
            var abmId = $("#abmdrId").val();
            var name = $("input[name='firstName']").val();
            var sname = $("input[name='surName']").val();
            var dob = $("input[name='dateOfBirth']").val();
            if(doId != ''){
                var url = "http://192.168.0.145/api/donor/read/"+doId
                $.get(url,function(donor){
                    window.location.href="http://127.0.0.1:1212/hemasys/DN025.php?donor_id="+doId       
                })
                .fail(function() {
                    alert("Hematos ID not found")
                })
            }else if(natId != ''){
                var url = "http://192.168.0.145/api/donor/read_ssid/"+natId
                $.get(url,function(donor){
                    window.location.href="http://127.0.0.1:1212/hemasys/DN025.php?donor_id="+donor.DONOR_ID       
                })
                .fail(function() {
                    alert("National ID not found")
                })
            }else if(abmId != ''){
                var url = "http://192.168.0.145/api/donor/read_abmdr/"+abmId
                $.get(url,function(donor){
                    window.location.href="http://127.0.0.1:1212/hemasys/DN025.php?donor_id="+donor.DONOR_ID       
                })
                .fail(function() {
                    alert("ABMDR ID not found")
                })
            }else if(name != '' && sname != ''||name != '' && dob != ''||dob != '' && sname != ''||name!=''&&sname!=''&&dob!=''){
                var detail = {FIRST_NAME:name,SURNAME:sname,DATE_OF_BIRTH:dob};
                var json = JSON.stringify(detail);
                console.log(json)
                var url = "http://192.168.0.145/api/donor/search_by_detail"
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: json,
                    success: function(data){
                        if(jQuery.isEmptyObject(data)){
                            return alert("Not Found")
                        }else{
                            var innerTr = ''
                            donorlist.dialog("open")
                            for(var i=0;i<data.length;i++){
                                innerTr += "<tr><td>"+data[i].FIRST_NAME+"</td><td>"+data[i].SURNAME+"</td><td>"+data[i].DATE_OF_BIRTH+"</td><td>__</td><td>"+data[i].DONOR_ID+"</td></tr>"
                            }
                            $("#donorli form table tbody").html(innerTr)
                        }
                        },
                    contentType: "application/json",
                    dataType: 'json'
                });
                // $.post(url,json,function(data,status,xhr){
                //     console.log(data+status+xhr)
                // },"json").done(function( data ) {
                //     window.location.href="http://localhost:1212/hemasys2/views/DN025.php?donor_id="+data.DONOR_ID
                // }).fail(function(data){
                //     alert("Not found")
                // });

            }else{
                alert("Please enter some infomation")
            }
        })
    })
</script>
<div id="donorli" title="Search for donor name" class="modal">
    <form action="">
        <table class="table table-bordered table-hover">
                <thead>
                    <th style="width:20%;">Name</th>
                    <th style="width:20%;">Surname</th>
                    <th style="width:20%;">ABO D</th>
                    <th style="width:20%;">DOB</th>
                    <th style="width:20%;">Hematos ID</th>
                </thead>
                <tbody>
            
                </tbody>
        </table>
    </form>
</div>
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
                    <input class="f
                    
                    orm-control" type="text" name="abmdrId" id="abmdrId" value="" tabindex="3">
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
                    <button type="button" id="searchBtn" class="btn btn-info btn-lg" tabindex="9">
                        <i class="glyphicon glyphicon-search"></i>
                         Search
                    </button>
                </a>
            </div>
            <div class="col-sm-3 pull-right text-right">
                <a href="#">
                    <button class="btn btn-danger btn-lg" id="exitBtn" tabindex="10">
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
