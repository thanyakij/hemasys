<?php
  include ("pages/setting.php");
  include ("pages/header.php");
?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
    <!--<link rel="stylesheet" type="text/css" href="assets/jquery-ui/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/primeui/production/primeui-2.1-min.css" />
    <link rel="stylesheet" type="text/css" href="assets/primeui/themes/smoothness/theme.css" />-->
		<script src="jquery.min.js"></script>
		<script src="js/materialize.min.js"></script>	
		<script src="assets/js/view/DN004.js"></script>
		
		<script>
			$(document).ready(function(){
				var month = new Array("", "ม.ค." , "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
					$('.modal-trigger').leanModal();
					$("select").material_select();
					$("#disactivationdate").hide();
					$("#disactivationlabel").hide();

					$("#inuse").change(function(){
					//alert();
				if (!$(this).prop("checked")) {$("#disactivationdate").val("12-Apr-2016");$("#disactivationdate").show();$("#disactivationlabel").hide();}else{$("#disactivationlabel").hide();$("#disactivationdate").hide();$("#disactivationdate").val("");}
					});
					
					$("#allsite").click(function(){
						if ($("#allsite").prop("checked")) {$("#sitelistbutton").hide();}else{
						$("#sitelistbutton").show();}
					});
					
					
				/*$(document).on("click", ".commentlist", function(){
					$(".commentlist").removeClass("yellow lighten-1");
					$(this).addClass("yellow");
				});*/
				
							// Binding event to code type
				$('#code').bind('keypress', function(e) {
//					if($('#point').val().length != 0){
						var k = e.which;
						var ok = k == 8 || k >= 65 && k <= 90 || // A-Z
								k >= 97 && k <= 122 || // a-z
								k >= 48 && k <= 57; // 0-9
						if (!ok){
							e.preventDefault();
						}else{}
//					}
				}); 
				$('#code').bind('keyup', function(e) {
					$(this).val($(this).val().toUpperCase());
				});

							// Binding event to code type
				$('#getassociation').bind('keypress', function(e) {
//					if($('#point').val().length != 0){
						var k = e.which;
						var ok = k == 8 || k >= 65 && k <= 90 || // A-Z
								k >= 97 && k <= 122 || // a-z
								k >= 48 && k <= 57; // 0-9
						if (!ok){
							e.preventDefault();
						}else{}
//					}
				}); 
				$('#getassociation').bind('keyup', function(e) {
					$(this).val($(this).val().toUpperCase());
				});

							// Binding event to code type
				$('#site').bind('keypress', function(e) {
//					if($('#point').val().length != 0){
						var k = e.which;
						var ok = k == 8 || k >= 65 && k <= 90 || // A-Z
								k >= 97 && k <= 122 || // a-z
								k >= 48 && k <= 57; // 0-9
						if (!ok){
							e.preventDefault();
						}else{}
//					}
				}); 
				$('#site').bind('keyup', function(e) {
					$(this).val($(this).val().toUpperCase());
				});
				
				/*
			// DATE VALIDATION
				$("#disactivationdate").blur(function(){
				
				var getdate = $("#disactivationdate").val().split("/");
				var now = new Date();
				var today = now.getDate();
				var thismonth = now.getMonth()+1;
				var thisyear = now.getYear(); if (thisyear<2500) {thisyear+=543;}
				
				var newstrdate = "";
				if (getdate[0] > 31) {getdate[0] = 31;}
				if (getdate[1] > 12) {getdate[1] = 12;}
				if (getdate[0]) {newstrdate+=getdate[0]+" ";}else{newstrdate+=today+" ";}
				if (getdate[1]) {newstrdate+=month[getdate[1]] + " ";}else{newstrdate+=month[thismonth] + " ";}
				if (getdate[2]) {
				      if (getdate[2] < 25) {getdate[2]=2543+parseInt(getdate[2]);}
					  if (getdate[2] > 25 && getdate[2] < 99) {getdate[2]=2500+parseInt(getdate[2]);}
					  if (getdate[2] < 2100) {getdate[2]=543+parseInt(getdate[2]);}
					  newstrdate+=getdate[2];
					  }else{
					  if (parseInt(thisyear) < 2500) {newstrdate+=1900+parseInt(thisyear);}
					  if (parseInt(thisyear) >= 2500) {newstrdate+=1900+parseInt(thisyear);}
					  }
				// กรณีใส่มาติดกันไม่มีคั่น
				if ($("#disactivationdate").val().length == 8 && !isNaN($("#disactivationdate").val())) {
					var data1 = parseInt($("#disactivationdate").val().substr(0,2));
					var data2 = parseInt($("#disactivationdate").val().substr(2,2));
					var data3 = parseInt($("#disactivationdate").val().substr(4,4));
					if (data3 < 2500) {data3+=543;}
					newstrdate = data1 + " " + month[data2] + " " + data3;
				}
				$("#disactivationdate").val(newstrdate);
			});
			
			$("#disactivationdate").focus(function(){
				if ($("#disactivationdate").val()){
					var getdate = $("#disactivationdate").val().split(" ");
					var newstrdate = "";
					newstrdate+=getdate[0]+"/";
					switch(getdate[1]) {
					case "ม.ค." : getdate[1]="1";break;
					case "ก.พ." : getdate[1]="2";break;
					case "มี.ค." : getdate[1]="3";break;
					case "เม.ย." : getdate[1]="4";break;
					case "พ.ค." : getdate[1]="5";break;
					case "มิ.ย." : getdate[1]="6";break;
					case "ก.ค." : getdate[1]="7";break;
					case "ส.ค." : getdate[1]="8";break;
					case "ก.ย." : getdate[1]="9";break;
					case "ต.ค." : getdate[1]="10";break;
					case "พ.ย." : getdate[1]="11";break;
					case "ธ.ค." : getdate[1]="12";break;
					}
					newstrdate+=getdate[1]+"/";		
					newstrdate+=getdate[2];
					$("#disactivationdate").val(newstrdate);
				}
			});
			
			$('#disactivationdate').bind('keypress', function(e) {
	//				if($('#point').val().length != 0){
						var k = e.which;
						var ok = k == 8 || k == 47 || // a-z, / , bspc
								k >= 48 && k <= 57; // 0-9
						if (!ok){
							e.preventDefault();
						}else{}
	//				}
			}); 
			
			*/
			
			
			});
		</script>
    </head>
    <body ng-controller="collectionPointCtrl">
        <style>
            body{
               
            }
            .form-group{
                padding-bottom:25px;
            }
            .rmpadding{
                padding-bottom:0px;
                margin-bottom:0px;
            }
            .padBottom{
                padding-top:20px;
                padding-bottom:20px;
            }
            input[type="checkbox"] {
                transform:scale(1.5, 1.5);
            }
            .widthinput{
                max-width:65px;
            }
				  			   .input-field label {
				 color: #333;
			   }
			   /* label focus color */
			   .input-field input[type=text]:focus + label {
				 color: #333;
			   }
        </style>  

			<!-- Collection Point List -->
  <div id="collectionlist" class="modal" >
    <div class="modal-content">
      <h4>List of collection points</h4>
	  <p>Choice: 
	  <input name="group1" type="radio" id="test1" checked/>
      <label for="test1">Site</label>
	  
	  <input name="group1" type="radio" id="test2" />
      <label for="test2">Regroupment</label>
	  
	  <input name="group1" type="radio" id="test3" />
      <label for="test3">Centre</label>
	  
	  <input name="group1" type="radio" id="test4" />
      <label for="test4">All</label>
	  </p>
	  
	  <div>
	  Filter
	  </div>
	  <div class="input-field">
			<label>Description</label><input type="text" id="searchfilter">
	  </div>
	  
   <div class="collection" style="height: 200px;overflow: scroll;">
   <a  class="collection-item grey lighten-3">Code<span class="badge">Description</span></a>
    <a href="#!" class="collection-item">00000W<span class="badge">COLLECTION POINT TEST</span></a>
    <a href="#!" class="collection-item">0A000<span class="badge">ศูนย์บริการโลหิตแห่งชาติ</span></a>
    <a href="#!" class="collection-item">0A0900<span class="badge">เนื่องในโอกาสพิเศษต่างๆ</span></a>
    <a href="#!" class="collection-item">0A0901<span class="badge">เจ้าหน้าที่ศูนย์บริการโลหิตฯ</span></a>
  </div>
    </div>
    <div class="modal-footer">
		  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Abort</a>
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn green">Ok</a>

    </div>
  </div>
  
  
  
  
    <div id="periodmodal" class="modal" >
    <div class="modal-content">
      <h4>Information about the periods</h4>
	  
	  <div>
	  
	  
	  <div class="input-field">
			<select id="period">
				<option>Afternoon</option>
			</select>
			<label for="period">Period</label>
	  </div>
	  
	  
	  <div class="row " style="border: 1px solid #333; padding: 5px;">
			<div class="input-field">
				<input type="text">
				<label>Leaving Time</label>
			</div>
			<div class="input-field">
				<input type="text">
				<label>Installation Time</label>
			</div>

			<div class="input-field">
				<input type="text">
				<label>Start Time</label>
			</div>
			<div class="input-field">
				<input type="text">
				<label>Finishing Time</label>
			</div>
			<div class="input-field">
				<input type="text">
				<label>Departure Time</label>
			</div>
			<div class="input-field">
				<input type="text">
				<label>Return Time</label>
			</div>			
	  </div>
	  
	  	  <div class="row " style="border: 1px solid #333">
			<div class="input-field">
				<input type="text">
				<label>Break time</label>
			</div>


			<div class="input-field">
				<input type="text">
				<label>End of break</label>
			</div>

			<div class="input-field">
				<input type="text">
				<label>% Cost Covered</label>
			</div>
		
		</div>
		
		
			  	  <div class="row " style="border: 1px solid #333">
			<div class="input-field">
				<input type="text">
				<label>Cafeteria</label>
			</div>


			<div class="input-field">
				
				<p>Meal allowance</p>
				<input type="radio" name="meal" id="meal1">Yes <input type="radio" name="meal" id="meal2">No
			</div>

			<div class="input-field">
				<input type="text">
				<label>% Cost Covered</label>
			</div>
		
		</div>
	  
		<div class="center-align"><a class="btn grey">+</a><a class="btn grey">-</a></div>
	  </div>
	  
   <div class="collection" style="height: 200px;overflow: scroll;">
   <a  class="collection-item grey lighten-3">Code<span class="badge">Description</span></a>
    <a href="#!" class="collection-item">00000W<span class="badge">COLLECTION POINT TEST</span></a>
    <a href="#!" class="collection-item">0A000<span class="badge">ศูนย์บริการโลหิตแห่งชาติ</span></a>
    <a href="#!" class="collection-item">0A0900<span class="badge">เนื่องในโอกาสพิเศษต่างๆ</span></a>
    <a href="#!" class="collection-item">0A0901<span class="badge">เจ้าหน้าที่ศูนย์บริการโลหิตฯ</span></a>
  </div>
    </div>
    <div class="modal-footer">
		  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Abort</a>
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Ok</a>
			<button class="modal-action modal-close waves-effect waves-green btn green" ng-click="addCollectionPoint()">Save</button>
    </div>
  </div>
  
  
  
  
		
		  				<nav class="red lighten-2">
		 <a href="#" class="brand-logo"> &nbsp;NBCSys</a>
		 
		 <ul class="right hide-on-med-and-down">
          <li><a href="sass.html" class="btn grey">Logout</a></li>
		  </ul>
		  <div class="right">
		 &nbsp; ชื่อชื่อชื่อ นามสกุลนามสกุล
		  </div>
		 <div class="right-align ">
			<div class="valign-wrapper right">
				<img src="images/profile1.jpg" class="circle valign" style="width: 40px;">
			</div>
		  </div>
	</nav>
	
	
	
	  <!-- Site List -->
  <div id="sitelist" class="modal" >
    <div class="modal-content">
      <h4>Site list</h4>
	  
	  <table class="highlight">
		<thead>
			<TR>
				<TD>Code</TD>
				<TD>X</TD>
				<TD>Description</TD>
			</TR>
		</thead>
		
		<tbody>
			<TR class="siteitem">
				<TD>1008</TD>
				<TD><input type="checkbox"><label></label></TD>
				<TD>NBC - WHO</TD>
			</TR>
			<TR class="siteitem">
				<TD>1111</TD>
				<TD><input type="checkbox"><label></label></TD>
				<TD>Site use for training sessions</TD>
			</TR>
			<TR class="siteitem">
				<TD>9999</TD>
				<TD><input type="checkbox"><label></label></TD>
				<TD>Useless</TD>
			</TR>
			<TR  class="siteitem">
				<TD>1000</TD>
				<TD><input type="checkbox"><label></label></TD>
				<TD>NBC - National Blood Centre</TD>
			</TR>
		</tbody>
	  </table>
	  
	
    </div>
    <div class="modal-footer">
 
	  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">All</a>
	  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">(None)</a>
	  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Abort</a>
	       <a href="#!" class="btn green modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
  </div>
	
	  <!-- Association -->
  <div id="associationlist" class="modal" >
    <div class="modal-content">
      <h4>List of Association</h4>
	  <p>Choice: 
	  <input name="group1" type="radio" id="test1" checked/>
      <label for="test1">Site</label>
	  
	  <input name="group1" type="radio" id="test2" />
      <label for="test2">Regroupment</label>
	  
	  <input name="group1" type="radio" id="test3" />
      <label for="test3">Centre</label>
	  
	  <input name="group1" type="radio" id="test4" />
      <label for="test4">All</label>
	  </p>
        <div class="collection">
    <a href="#!" class="collection-item">101<span class="badge">เหล่ากาชาดจังหวัดเชียงใหม่</span></a>
    <a href="#!" class="collection-item">102<span class="badge">โรงพยาบาลระนอง</span></a>
    <a href="#!" class="collection-item">103<span class="badge">เหล่ากาชาดจังหวัดจันทบุรี</span></a>
    <a href="#!" class="collection-item">104<span class="badge">เหล่ากาชาดจังหวัดสมุทรปราการ</span></a>
  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
	  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Abort</a>
    </div>
  </div>
	
	<br><br>
    <div class="container">
       
        <div class="row">
		
			<div class="col s2 input-field">
				<input type="text" id="code" maxlength="6" ng-model="cp.COLLECTION_POINT_CODE">
				<label>Code</label>
			</div>
			<div class="col s4 input-field">
				<input type="text" maxlength="4" id="site" ng-model="cp.SITE_CODE">
				<label>Site</label>
			</div>
				<div class="col s2 input-field">
				<input type="checkbox" id="allsite">
				<label for="allsite">All Site</label>
			</div>
			
			<div class="col s2 input-field">
				<a class="btn grey modal-trigger" href="#sitelist" id="sitelistbutton">>></a>
			</div>
			<div class="col s2 input-field">
				<input type="checkbox" id="inuse" ng-model="cp.ACTIVE" ng-true-value="'T'" ng-false-value="'F'">
				<label for="inuse">In use</label>
			</div>
			<div class="col s9 input-field">
				<input type="text" ng-model="cp.NAME">
				<label>Description</label>
			</div>
			<div class="col s3 input-field">
				Disactivation date
				<input id="disactivationdate" ng-model="cp.DEACTIVATED_DATE" readonly date-input>
				<!--<label id="disactivationlabel" for="disactivationdate">Disactivation date</label>-->
			</div>
			
			<div class="col s6 input-field">
				<input type="text" ng-model="cp.LOCATION_NAME">
				<label>Name of Location</label>
			</div>
			<div class="col s12 input-field">
				<input type="text" ng-model="cp.ADDRESS1">
				<label>Address 1</label>
			</div>
			<div class="col s12 input-field">
				<input type="text" ng-model="cp.ADDRESS2">
				<label>Address 2</label>
			</div>	

			<!--<div class="col s6 input-field">
				<input type="text">
				<label>Rout</label>
			</div>-->
			<div class="col s6 input-field">
				<select ng-model="cp.COUNTY_CODE">
					<option value="THAI">THAILAND</option>
					<option value="LAO">LAOS</option>
					<option value="CHA">CHINA</option>
				</select>
				<label>Country</label>
			</div>

			<div class="col s6 input-field">
				<input type="text" ng-model="cp.ZIPCODE">
				<label>Postcode</label>
			</div>	
			<!--<div class="col s6 input-field">
				<input type="text">
				<label>County</label>
			</div>-->
			
			
			
	<div class="col s5">		
		<div  >	

				<div class="col s12 input-field">
				<select ng-model="cp.REGION_CODE">
					<option value="NA">NA</option>
					<option value="NB">NB</option>
					<option value="NE">NE</option>
				</select>
				<label>Region</label>
			</div>
			
				<div class="col s12 input-field">
				<select ng-model="cp.LAND_CODE">
					<option value="NA">NA</option>
					<option value="NB">NB</option>
					<option value="NE">NE</option>
				</select>
				<label>Region</label>
			</div>
		
			<!--<div class="col s12 input-field">
								<select>
					<option></option>
				</select>
				<label>UrbanComm</label>
			</div>	-->
	
			<div class="col s3 input-field">
				<input type="text" maxlength="3" id="getassociation" ng-model="cp.ASSOCIATION_CODE">
				<label>Association</label>
			</div>


			<div class="col s4 input-field">
				<a class="btn grey modal-trigger" href="#associationlist">>></a>
			</div>
		<div class="col s5 input-field blue-text text-darken-2" ng-model="cp.NAME">
				<p>SiteDesc</p>
			</div>			
		</div>	
		<div class="col s12" style="border: solid #333 1px;">
			<div class="col s12 input-field">
				<input type="text" ng-model="cp.NEW_COLLECTION_POINT_CODE">
				<label>Community</label>
			</div>
			<div class="col s12 input-field">
				<input type="text" >
				<label>Collection Location</label>
			</div>
			
		</div>
		<div class="col s12 input-field" style="border: solid 1px #333">
		
			<div class="col s12 input-field">
				<input type="text" ng-disabled="true" ng-model="cp.SERFACE">
				<label>Surface</label>
			</div>

			<!--
					<div class="col s6 input-field">
				<input type="text" ng-disabled="true" ng-model="cp.TOILET_COUNT">
				<label>Sanitary Installation</label>
			</div>

			-->
		
			<div class="col s12 input-field">
				<input type="text" ng-disabled="true" ng-model="cp.ELECTRICAL_SOCKET_COUNT">
				<label>PowerSupply</label>
			</div>
			
			<div class="col s12 input-field">
				<input type="text" ng-disabled="true" ng-model="cp.TOILET_COUNT">
				<label>Sanitary</label>
			</div>

			<div class="col s12 input-field">
				<input type="text" ng-disabled="true" ng-model="cp.KITCHEN_COUNT">
				<label>Kitchen</label>
			</div>	

			<div class="col s12 input-field">
				<input type="text" ng-disabled="true" ng-model="cp.CABIN_COUNT">
				<label>Cabin</label>
			</div>	
		</div>	
	</div>	

		
		<div class="col s1">
			&nbsp;
		</div>
		
	<div class="col s6">	
		<div style="border: solid 1px #333" class="col s12">		
			<div class="col s9 input-field">
				<input type="text">
				<label>Condition of assignment to a donor</label>
			</div>
			<div class="col s3 input-field">
				<a class="btn grey modal-trigger" href="#periodmodal">>></a>
			</div>
			<div class="col s9 input-field">
				<input type="text">
				<label>New community if false condition</label>
			</div>
						<div class="col s3 input-field">
				<a class="btn grey modal-trigger" href="#collectionlist">>></a>
			</div>
			
		</div>
		
		<div  class="col s12">	
			&nbsp;
		</div>
		
		<div style="border: solid 1px #333" class="col s12">	
			<div class="col s12 input-field">
				<select ng-model="cp.COLLECTION_TYPE_CODE">
					<option value="1">Type 1</option>
          <option value="2">Type 2</option>
          <option value="3">Type 3</option>
				</select>
				<label>Type</label>
			</div>
			<div class="col s12 input-field">
				<select ng-model="cp.CATEGORY_CODE">
					<option value="1">Category 1</option>
          <option value="2">Category 2</option>
          <option value="3">Category 3</option>
				</select>
				<label>Category</label>
			</div>
			<div class="col s12 input-field">
				<select ng-model="cp.COLLECTION_MODE">
					<option value="1">Method 1</option>
          <option value="2">Method 2</option>
          <option value="3">Method 3</option>
				</select>
				<label>Method</label>
			</div>
			<div class="col s12 input-field">
				<input type="text" ng-model="cp.DISTANCE" ng-disabled="true">
				<label>Distance</label>
			</div>	
			<div class="col s12 input-field">
				<input type="text" ng-model="cp.TRAVEL_TIME" ng-disabled="true">
				<label>AccessTime</label>
			</div>	
			<div class="col s9 input-field">
				<input type="text" ng-model="cp.MAP" ng-disabled="true">
				<label>Map</label>
			</div>	
			<div class="col s3 input-field">
				<a class="btn grey">>></a>
			</div>	
			<div class="col s12 input-field">
				<input type="checkbox" id="plasmaquarantine" ng-model="cp.PLASMA_QUARANTINE_POSSIBLE" ng-true-value="'T'" ng-false-value="'F'" ng-disabled="true">
				<label for="plasmaquarantine">Plasma-quarantine</label>
			</div>
			<div class="col s12 input-field">
				<input type="text" ng-model="cp.STAT_EXPECTED" ng-disabled="true">
				<label>Donation Number</label>
			</div>	
		</div>	
	</div>



		
		
		
		<div style="" class="col s12">	
		 &nbsp;
		</div>
		
		
			
			
			

		
	
			

			
			
			

			<div class="col s12 " >
			Connection frequency
			</div>
				<div class="col s12 input-field" style="border: 1px solid #333">
				
				
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
						<div class="col s1">
						<input type="text" maxlength="2">
					</div>
					<div class="col s1">
						<input type="text" maxlength="2">
					</div>					
			</div>
		</div>
		<!--
            <div class="form-group" style="padding-bottom:0; margin-bottom:5px;">
                <label for="" class="col-sm-1 control-label">Code</label>
                <div class="col-sm-2">
                  <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-1 control-label">Site</label>
                    <div class="col-sm-3">
                        <input type="" class="form-control" name="" value="">
                    </div>
                <div class="col-sm-5 input-group">
                    <input type="" class="form-control" disabled placeholder="">
                    <span class="input-group-addon">
                        <input type="checkbox" aria-label="...">
                    </span>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Name of location</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Address1</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Address2</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Province</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">Country</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Rout</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">Postcode</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Region</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">UrbanComm</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group" style="padding-bottom:0; margin-bottom:15px;">
                <label for="" class="col-sm-3 control-label">Association</label>
                <div class="col-sm-9 input-group">
                  <input type="" class="form-control"  placeholder="">
                  <span class="input-group-btn"><button class="btn btn-default" type="">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      </button>
                  </span>
                  <input type="" class="form-control" name="" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Surface</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">Distance</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">PowerSupply</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">AccessTime</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">Sanitary</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Map</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">Cusine</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <label for="" class="col-sm-4 control-label">Plasma-quarantine</label>
                <div class="col-sm-2 checkbox">
                   <input type="checkbox"  placeholder="">
                </div>
                <label for="" class="col-sm-2 control-label">Cabin</label>
                <div class="col-sm-4">
                   <input type="" class="form-control"  placeholder="">
                </div>
                <div class="form-group" >
                <label for="" class="col-xs-3 control-label">Donation number</label>
                <div class="col-xs-3">
                  <input type="" class="form-control" placeholder="">
                </div>
            </div>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label for="" class="col-xs-4 control-label">in use</label>
                <div class="col-xs-8 big-checkbox">
                  <input type="checkbox" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-xs-6 control-label">Disactivation date</label>
                <div class="col-xs-6">
                  <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group"></div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Mobile</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Tel.</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="">
                </div>
            </div>
             <div class="form-group"> </div>
            <div class="form-group">
                <label for="" class="col-xs-4 control-label">Type</label>
                <div class="col-xs-8 ">
                  <input type="" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-xs-4 control-label">Category</label>
                <div class="col-xs-8 ">
                  <input type="" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-xs-4 control-label">Method</label>
                <div class="col-xs-8 ">
                  <input type="" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group"> </div>
            <div class="col-xs-12 form-group rmpadding">
                <label for="" class="control-label">Condition of assignment to a donor</label>
                <div class="input-group">
                    <input type="" class="form-control" placeholder="">
                    <span class="input-group-btn">
                        <button type="" class="btn btn-default">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-xs-12 form-group rmpadding">
                <label for="" class="control-label">New community if false conditionr</label>
                <div class="input-group">
                    <input type="" class="form-control" placeholder="">
                    <span class="input-group-btn">
                        <button type="" class="btn btn-default">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-12" style="padding-top:10px;">
            <div class="col-lg-1"></div>
            <div class="col-lg-11 form-inline">
                <label for="" class="control-label">Collection frequency</label>
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
                    <input type="" class="form-control widthinput" placeholder="">
            </div>
        </div>
		
		
        <div class="col-lg-12 padBottom">
            <div class="col-lg-1"> </div>
            <div class="col-lg-3"><button type="" class="btn btn-success btn-block">Save</button></div>    
            <div class="col-lg-2"></div>
            <div class="col-lg-3"><button type="" class="btn btn-primary btn-block">OK</button></div>
            <div class="col-lg-3"><button type="" class="btn btn-danger btn-block">Abort</button></div>
            </div>
        </div>
    </div>
         -->
		 
		 </div>
		<footer class="page-footer red lighten-2">
			<div class="container">
			<div class="row center-align ">
            <div class="col m4"><button type="" class="btn green" ng-click="addCollectionPoint()">Save</button></div>    
            <div class="col m4"><button type="" class="btn grey">OK</button></div>
            <div class="col m4"><button type="" class="btn grey">Abort</button></div>
			</div>
			</div>
<div class="footer-copyright">
            <div class="container">
            <p>© 2016 สงวนลิขสิทธิ์โดย ศูนย์บริการโลหิตแห่งชาติ สภากาชาดไทย เลขที่ 1871 ถ.อังรีดูนังต์ ปทุมวัน กรุงเทพฯ 10330</p><br>
			<p>© 2016 Copyright by National Blood Centre, The Thai Red Cross Society 1871 Henry Dunant Rd., Patumwan Bangkok, 10330</p>
			</div>
			</div>
		</footer>
    </body>
</html>
