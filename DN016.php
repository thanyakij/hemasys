<section>
  <div id="<?php echo $pageClass; ?>" class="page-container UIboxshadow">
    <row class="center row-topic">
      <ul class="trim">
        <li class="tile-like span-13 align-left">
          <h1><span class="mif-users h1-mif"></span><?php echo $title; ?></h1>
        </li>
      </ul>
    </row>  
    
    <row class="center">
      <ul class="trim">
        <li class="tile-like span-6 offset-1 align-left">
          <div class="input-group input-inline">
            <span class="input-group-addon span-2 align-left" id="basic-addon1">Planning date:</span>
            <form style="display:flex" method="get" action="">
              <input type="text" class="form-control blurdate" id="plan_date" name="plan_date" tabindex="1" autofocus value="">
            </form>
            <span class="input-group-btn">
              <button class="btn" id="plandateBtn" type="button"><span class="mif-forward"></span></button>
            </span>         
          </div>
        </li>
      </ul>
    </row> 
    
    <row class="center">
      <ul class="trim">
        <li class="tile-like span-6 offset-1 align-left">
          <div class="input-group input-inline">
            <span class="input-group-addon span-2 align-left" id="basic-addon1">Point code:</span>
            <form style="display:flex" method="get" action="">
              <input type="text" class="form-control" id="collection_point_code" name="collection_point_code" tabindex="2" value="">
            </form>
            <span class="input-group-btn">
              <button class="btn" id="plandateBtn" type="button"><span class="mif-forward"></span></button>
            </span>         
          </div>
        </li>
      </ul>
    </row>
    
    
    
  </div>
</section>

<script src="assets/js/jquery-2.2.1.js" type="text/javascript"></script>
<script src="assets/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/calendar.js" type="text/javascript"></script>
<script src="assets/js/components/ng-module/moment.min.js" type="text/javascript"></script>

<script type="text/javascript">
        function disableBtn(){
            $("#Secretarial").attr('disabled','disabled')
            $("#medrec2").attr('disabled','disabled')
            $("#medrec3").attr('disabled','disabled')
            $("#medrec4").attr('disabled','disabled')
            $("#donreq").attr('disabled','disabled')
            $("#donwait").attr('disabled','disabled')
            $("#medwait").attr('disabled','disabled')
            $("#enter").attr('disabled','disabled')
            $("#end").attr('disabled','disabled')
            $("#exam").attr('disabled','disabled')
        }
        function enableBtn(){
            $("#Secretarial").removeAttr('disabled','disabled')
            $("#medrec2").removeAttr('disabled','disabled')
            $("#medrec3").removeAttr('disabled','disabled')
            $("#medrec4").removeAttr('disabled','disabled')
            $("#donreq").removeAttr('disabled','disabled')
            $("#donwait").removeAttr('disabled','disabled')
            $("#medwait").removeAttr('disabled','disabled')
            $("#enter").removeAttr('disabled','disabled')
            $("#end").removeAttr('disabled','disabled')
            $("#exam").removeAttr('disabled','disabled')
        }
    $(document).ready(function(){
        var ppp = $("#plan_date").val();
        var ccc = $("#collection_point_code").val();
        if(ppp==''||ppp==null&&ccc==''||ccc==null){
            disableBtn()
        }
        $("#collection_point_code").keyup(function(){
            let cc = $("#collection_point_code").val();
            let ccccc = cc.split('')
            console.log(ccccc.length)
            if(ccccc.length==6){
                enableBtn()
            }else{
                disableBtn()
            }
        })
    });
	$(function(){
        
        localStorage.setItem('lastname','Smith');
        $.get('http://192.168.0.145/api/pcatdon',function(cate){
            var opt = ''
            for(let i=0;i<cate.length;i++){
                opt += '<option>'+cate[i].PCATD_LIB+'</option>'
            }
            $("#category").html(opt)
        })
        $.get('http://192.168.0.145/api/putildon/',function(use){
            var opt = ''
            for(let i=0;i<use.length;i++){
                opt += '<option>'+use[i].PUTD_LIB+'</option>'
            }
            $("#use").html(opt)
        })
		//setGlobal
		setGlobalCode($("#collection_point_code"), 0, 6, false);
		setGlobalCode($("#bagType"), 3, 3, false);
		$("#plan_date").datepicker().datepicker("setDate", new Date());
		$("#plan_date").val(toDatepickerValue($("#plan_date").val()));
		$(".datepicker-plandate").click(function(){
			$("#plan_date").datepicker("show");
		});
        var planDate = $("#plan_date").val()
        var pointCode = $("#collection_point_code").val()
        var bagType = $("#bagType").val()
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
        var dialog3 = $( "#BagType" ).dialog({
            autoOpen: false,
            height: 400,
            width: 600,
            modal: true,
            buttons: {
                Ok: function() {
                    dialog3.dialog( "close" );
                } ,
                Cancel: function() {
                    dialog3.dialog( "close" );
                }
            },
        });
        var host = window.location.host
        $("#bagTypeBtn").click(function(){
            dialog3.dialog( "open" );
            $.get('http://192.168.0.145/api/ptyppoche/',function(bag){
            let opt = ''
            for(let i=0;i<bag.length;i++){
                opt += '<tr><td>'+bag[i].PTYPP_CD+'</td><td>'+bag[i].PTYPP_LIB+'</td></tr>'
            }
            $("#BagType form table tbody").html(opt)
        })
        });
        $("div#myDate form table.table tbody").on('dblclick', 'tr', function() {
            $("#collection_point_code").val($(this).children('td:nth-child(2)').html())
            dialog1.dialog( "close" );
        });
        $("div#myCode form table.table tbody").on('dblclick', 'tr', function() {
            
            $("#codeDesc").text($(this).children('td:last-child').html())
            $("#collection_point_code").val($(this).children('td:first-child').html())
            let site = '1000'
            let strDate = moment(strToDate($("#plan_date").val())).format('YYYY-MM-DD')
            $.get("http://192.168.0.145/api/collection_plan/search_by_date/"+site+"/"+strDate,function(data){
                //console.log(data)
                var asd = 0;
                for(let i=0;i<data.length;i++){
                    let a = $("#collection_point_code").val()
                    if(a==data[i].COLLECTION_POINT_CODE){
                        $("#collection_point_code").val(data[i].COLLECTION_POINT_CODE)
                        break;
                    }else{
                        asd+=1;
                    }
                    if(asd==data.length){
                        if(confirm("Plan does not exist. Are you want to create this plan ?")){

                        }else{

                        }
                    } 
                }
            })
            let ppp = $("#plan_date").val();
            let ccc = $("#collection_point_code").val();
            let ccccc = ccc.split('')
            if(ppp!=null||ppp!=''&&ccccc.length==6){
                enableBtn()
            }
            dialog2.dialog( "close" );
        });
        $("div#BagType form table.table tbody").on('dblclick', 'tr', function() {
            $("#bagType").val($(this).children('td:first-child').html())
            $("#bagDesc").text($(this).children('td:last-child').html())
            dialog3.dialog( "close" );
        });
        $("#plandateBtn").click(function(){
            var strDate = moment(strToDate($("#plan_date").val())).format('YYYY-MM-DD')
            console.log(strDate)
            dialog1.dialog( "open" );
            let site = "1000"
            $.get("http://192.168.0.145/api/collection_plan/search_by_date/"+site+"/"+strDate,function(date){
                var innerTbody = ''
                for(let i=0;i<date.length;i++){
                    innerTbody += '<tr><td>'+date[i].PLAN_DATE+'</td><td>'+date[i].COLLECTION_POINT_CODE+'</td><td>'+date[i].NAME+'</td></tr>'
                }
                $("#myDate form table tbody").html(innerTbody)
            })
        })
        $("#codeBtn").click(function(){
            dialog2.dialog( "open" );
            let site = "1000"
            let id = $("#collection_point_code").val()
            $.get("http://192.168.0.145/api/collection_point/search_by_id/"+site+"/"+id,function(did){
                var innerTbody = ''
                for(let i=0;i<did.length;i++){
                    innerTbody += '<tr><td>'+did[i].COLLECTION_POINT_CODE+'</td><td>'+did[i].NAME+'</td></tr>'
                }
                $("#myCode form table tbody").html(innerTbody)
            })
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

                </tbody>
        </table>
    </form>
</div>
<div id="myCode" class="modal">
    <form action="">
        <table class="table table-bordered table-hover">
                <thead>
                    <th style="width:30%;">Code</th>
                    <th style="width:70%;">Description</th>
                </thead>
                <tbody>

                </tbody>
        </table>
    </form>
</div>
<div id="BagType" class="modal">
    <form action="">
        <table class="table table-bordered table-hover">
                <thead>
                    <th style="width:30%;">Code</th>
                    <th style="width:70%;">Description</th>
                </thead>
                <tbody>

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
                            <input class="form-control blurdate" tabindex="1" type="text" value="">
                            <span class="input-group-btn">
                              <button type="button">
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
                            <input tabindex="2" class="form-control" type="text" value="">
                            <span class="input-group-btn">
                              <button class="btn btn-default" id="codeBtn" type="button">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                              </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p id="codeDesc"></p>
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
                        <select class="form-control" tabindex="3" id="category">

                        </select>
                    </div>
                    <div class="col-sm-3">
                        <p></p>
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
                        <p id="bagDesc"></p>
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
                       <select class="form-control" id="use" tabindex="5">
                          
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <p></p>
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
                <button href="#" id="medrec2" class="btn btn-lg btn-primary main-btn" tabindex="7">Medical<br/>Reception</button>
            </div>
            <div class="col-sm-2">
                <button href="#" id="medrec3" class="btn btn-lg btn-primary main-btn" tabindex="8">Medical<br/>Reception</button>
            </div>
            <div class="col-sm-2">
                <button href="#" id="medrec4" class="btn btn-lg btn-primary main-btn" tabindex="9">Medical<br/>Reception</button>
            </div>
            <div class="col-sm-2">
                <button href="#" id="donreq" class="btn btn-lg btn-primary main-btn" tabindex="10">Donation<br/>request</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <button href="#" id="enter" class="btn btn-lg btn-primary main-btn" tabindex="11">Enter<br/>donations</button>
            </div>
            <div class="col-sm-2">
                <button href="#" id="medwait" class="btn btn-lg btn-primary main-btn" tabindex="12">Madical<br/>Waiting list</button>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
                <button href="#" id="donwait" class="btn btn-lg btn-primary main-btn" tabindex="13">Donation<br/>waiting list</button>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </section>
    <hr>
    <section class="button-actions">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <button href="#" id="exam" class="btn btn-lg btn-success" tabindex="14">Exams</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <button href="#" id="end" class="btn btn-lg btn-success" tabindex="15">End of collection statement</button>
            </div>
        </div>
    </section>
    <hr>
    <section class="button-actions text-right">
        <button href="#" class="btn btn-lg btn-danger" tabindex="16">EXIT</button>
    </section>
</div>