var thai_months = ["ม.ค", "ก.พ", "มี.ค", "ม.ย", "พ.ค", "มิ.ย", "ก.ค", "ส.ค", "ก.ย", "ต.ค", "พ.ย", "ธ.ค"];
var SPLIT_TYPE = "-";
var SPLIT_TYPE_BEFORE_SHOW = "/";
var SPLIT_TYPE_TIME = ":";
var DATE_FORMAT = 'dd'+SPLIT_TYPE+'MM'+SPLIT_TYPE+'yy';
var isCalendar = false;
( function( $ ) {
	$( document ).ready(function() {
		$.ajaxSetup({
			beforeSend: function(){
				//$(".loader").show();
			},
			complete: function(){
				//$(".loader").fadeOut("slow");
			},
	        error : function(data){
	        }
		});
		
		$(".blurdate, .dndate, .dndatetime").attr("maxLength", 10);
		$(".blurdate").blur(function(){
			var val = $(this).val();
			if(!isCalendar){
				var date = new Date();
				if($(this).val()!=""){  
					var arrayDate=val.split(SPLIT_TYPE_BEFORE_SHOW);
					var month = parseInt(arrayDate[1])-1;
					arrayDate[2]=parseInt(arrayDate[2])-543;
					date = new Date(arrayDate[2], month, arrayDate[1]);
					$(this).val(arrayDate[0]+SPLIT_TYPE_BEFORE_SHOW+thai_months[month]+SPLIT_TYPE_BEFORE_SHOW+arrayDate[2]);
					dateBefore = $(this).val();
				}
				var val = autoCompleteDate(val, $(this));
				var arrayDate=val.split(SPLIT_TYPE);  
				arrayDate[2]=parseInt(arrayDate[2])-543;  
				var cnt = 0;
				for(var i in thai_months){
					if(thai_months[i]===arrayDate[1]){
						cnt = i;
					}
				}
				var date = new Date(arrayDate[2], cnt, arrayDate[0]);
				checkDate(date, $(this));
			}
		});
		$(".blurdate, .dndate, .dndatetime").focus(function(){
			var val = $(this).val();
			if($(this).val()!="" && !isCalendar){  
				var arrayDate=val.split(SPLIT_TYPE);  
				var month = arrayDate[1];
				var cnt = 0;
				for(var i in thai_months){
					if(thai_months[i]===month){
						cnt = parseInt(i)+1;
						break;
					}
				}
				if(cnt<10){
					cnt="0"+cnt;
				}
				arrayDate[2]=parseInt(arrayDate[2])-543;
				$(this).val(arrayDate[0]+SPLIT_TYPE_BEFORE_SHOW+cnt+SPLIT_TYPE_BEFORE_SHOW+arrayDate[2]);  
				dateBefore = $(this).val();
			}  
		});
		$(".blurdate, .dndate, .dndatetime").keypress(function(e){
			var result = false;
			var charCode = (e.which) ? e.which : e.keyCode;
			var charStr = String.fromCharCode(charCode);
			var val = $(this).val();
			var len = val.length;
			if (/[\/0-9]/i.test(charStr)) {
				result = true;
			}
			
			return result;
		});
		
		$(".dndate").blur(function(){
			var val = $(this).val();
			if(!isCalendar){
				if($(this).val()!=""){  
					var arrayDate=val.split(SPLIT_TYPE_BEFORE_SHOW);  
					var month = parseInt(arrayDate[1])-1;
					arrayDate[2]=parseInt(arrayDate[2])-543;
					$(this).val(arrayDate[0]+SPLIT_TYPE_BEFORE_SHOW+thai_months[month]+SPLIT_TYPE_BEFORE_SHOW+arrayDate[2]);  
					dateBefore = $(this).val();
				}  
				autoCompleteDate(val, $(this));
			}
		});
		
		$(".dndatetime").blur(function(){
			var val = $(this).val();
			if(!isCalendar){
				if($(this).val()!=""){  
					var arrayDate=val.split(SPLIT_TYPE_BEFORE_SHOW);  
					var month = parseInt(arrayDate[1])-1;
					arrayDate[2]=parseInt(arrayDate[2])-543;
					$(this).val(arrayDate[0]+SPLIT_TYPE_BEFORE_SHOW+thai_months[month]+SPLIT_TYPE_BEFORE_SHOW+arrayDate[2]);  
					dateBefore = $(this).val();
				}  
				var val = autoCompleteDate(val, $(this));
				$(this).val(val + " 00:00:00");
			}
		});
		
		$(".dntime").attr("maxLength", 6);
		$(".dntime").keypress(function(e){
			var result = false;
			var charCode = (e.which) ? e.which : e.keyCode;
			var charStr = String.fromCharCode(charCode);
			var val = $(this).val();
			var len = val.length;
			if (/[0-9]/i.test(charStr)) {
				result = true;
			}
			
			return result;
		});
		$(".dntime").focus(function(){
			var val = $(this).val();
			if($(this).val()!=""){  
				var arrayDate=val.split(SPLIT_TYPE_TIME);
				$(this).val(arrayDate[0]+arrayDate[1]+arrayDate[2]);  
				dateBefore = $(this).val();
			}  
		});
		$(".dntime").blur(function(){
			var val = $(this).val();
			if($(this).val()!=""){  
				var value = "";
				var len = val.length;
				if(len===1){
					value = "0"+val+SPLIT_TYPE_TIME+"00"+SPLIT_TYPE_TIME+"00";
				}else if(len===2){
					value = val+SPLIT_TYPE_TIME+"00"+SPLIT_TYPE_TIME+"00";
				}else if(len===3){
					var hh = val.substring(0, 2);
					var mm = val.substring(2);
					value = hh+SPLIT_TYPE_TIME+mm+"0"+SPLIT_TYPE_TIME+"00";
				}else if(len===4){
					var hh = val.substring(0, 2);
					var mm = val.substring(2);
					value = hh+SPLIT_TYPE_TIME+mm+SPLIT_TYPE_TIME+"00";
				}else if(len===5){
					var hh = val.substring(0, 2);
					var mm = val.substring(2, 4);
					var ss = val.substring(4);
					value = hh+SPLIT_TYPE_TIME+mm+SPLIT_TYPE_TIME+ss+"0";
				}else{
					var hh = val.substring(0, 2);
					var mm = val.substring(2, 4);
					var ss = val.substring(4);
					value = hh+SPLIT_TYPE_TIME+mm+SPLIT_TYPE_TIME+ss;
				}
				var tmps = value.split(SPLIT_TYPE_TIME);
				var hh = "00";
				var mm = "00";
				var ss = "00";
				if(parseInt(tmps[0])<=24){
					hh = tmps[0];
				}
				if(parseInt(tmps[1])<60){
					mm = tmps[1];
				}
				if(parseInt(tmps[2])<60){
					ss = tmps[2];
				}
				$(this).val(hh+SPLIT_TYPE_TIME+mm+SPLIT_TYPE_TIME+ss);
			}
		});
		
	    var dateBefore=null;
		$.datepicker.setDefaults({
			dateFormat: DATE_FORMAT,
			showAnim: "slideDown",
			showOn: "button",
			buttonImageOnly: false,
			showButtonPanel: true,
	        dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
			monthNames: thai_months,
			monthNamesShort: thai_months,
			changeMonth: true,
			changeYear: true,
			regional: "en",
			maxDate: new Date,
			beforeShow:function(){    
	            dateBefore=$(this).val(); 
	            if($(this).val()!=""){ 
	                var arrayDate=dateBefore.split(SPLIT_TYPE);  
					var month = arrayDate[1];
					var cnt = 0;
					for(var i in thai_months){
						if(thai_months[i]===month){
							cnt = parseInt(i)+1;
							break;
						}
					}
	                arrayDate[2]=parseInt(arrayDate[2])-543;
	                $(this).val(arrayDate[0]+SPLIT_TYPE_BEFORE_SHOW+cnt+SPLIT_TYPE_BEFORE_SHOW+arrayDate[2]);  
	                dateBefore = $(this).val();
					isCalendar = true;
	            }  
	            setTimeout(function(){  
	                $.each($(".ui-datepicker-year option"),function(j,k){  
	                    var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;  
	                    $(".ui-datepicker-year option").eq(j).text(textYear);  
	                });               
	            },50);  
	        },  
	        onChangeMonthYear: function(){  
	            setTimeout(function(){  
	                $.each($(".ui-datepicker-year option"),function(j,k){  
	                    var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;  
	                    $(".ui-datepicker-year option").eq(j).text(textYear);  
	                });               
	            },50);        
	        },  
	        onClose:function(){
	            if($(this).val()!="" && $(this).val()===dateBefore){				
	                var arrayDate=dateBefore.split(SPLIT_TYPE_BEFORE_SHOW);  
	                arrayDate[2]=parseInt(arrayDate[2])+543;  
					var month = parseInt(arrayDate[1])-1;
	                $(this).val(arrayDate[0]+SPLIT_TYPE+thai_months[month]+SPLIT_TYPE+arrayDate[2]);      
	            }else{
					var val = autoCompleteDate($(this).val(), $(this));
	                var arrayDate=val.split(SPLIT_TYPE);  
	                arrayDate[2]=parseInt(arrayDate[2])-543;  
					var cnt = 0;
					for(var i in thai_months){
						if(thai_months[i]===arrayDate[1]){
							cnt = i;
						}
					}
					var date = new Date(arrayDate[2], cnt, arrayDate[0]);
					checkDate(date, $(this));
				}
				var tabindex = $(this).attr("tabindex");
				tabindex = parseInt(tabindex)+1;
				$("input[tabindex='"+tabindex+"']").focus();
	        },
	        onSelect: function(dateText, inst){
	            dateBefore=$(this).val();  
	            var arrayDate=dateText.split(SPLIT_TYPE);  
	            arrayDate[2]=parseInt(arrayDate[2])+543;  
	            $(this).val(arrayDate[0]+SPLIT_TYPE+arrayDate[1]+SPLIT_TYPE+arrayDate[2]);
				var cnt = 0;
				for(var i in thai_months){
					if(thai_months[i]===arrayDate[1]){
						cnt = i;
					}
				}
				isCalendar = false;
	        }
		});
	});
	
} )( jQuery );

function autoCompleteDate(val, ele){
	var success = true;
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth()+1;
	var y = date.getFullYear();
	if(val!==""){
		var tmps = val.split(SPLIT_TYPE_BEFORE_SHOW);
		var len = tmps.length;
		
		var currentYear = date.getFullYear();
		var tmpsReal = val.split(SPLIT_TYPE);
		if(tmpsReal.length!=3){
			var validDate = new RegExp(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
			if(validDate.test(val)){
				d = tmps[0];
				m = tmps[1];
				y = tmps[2];
				tmpD = 0;
				if(parseInt(m)>12){
					m = 12;
				}
				
				date = new Date(y, parseInt(m), 0);
				tmpD = date.getDate();
				if(d>tmpD){
					d = tmpD;
				}
			}else{
				if(len===1){
					d = val;
					len = val.length;
					if(len===1 || len===2){
						d = len===1?"0"+val:val;
					}else if(len===3||len===4){
						d = val.substring(0, 2);
						var mm = val.substring(2);
						m = len===3?"0"+mm:mm;
					}else{
						d = val.substring(0, 2);
						m = val.substring(2, 4);
						y = val.substring(4);
					}
				}else if(len===2){
					d = tmps[0];
					m = tmps[1];
				}else if(len===3){
					d = tmps[0];
					m = tmps[1];
					y = tmps[2];
				}else{
					alert("ระบุวันที่ไม่ถูกต้องตาม Format dd/MM/yyyy");
					ele.val("");
					ele.focus();
					success = false;
				}
				if(m===""){
					m = date.getMonth()+1;
				}
				if(y==""){
					y = date.getFullYear();
				}
				tmpD = 0;
				if(parseInt(m)>12){
					m = 12;
				}
				
				date = new Date(y, parseInt(m), 0);
				tmpD = date.getDate();
				if(d>tmpD){
					d = tmpD;
				}
			}
		}else{
			d = tmpsReal[0];
			m = tmpsReal[1];
			y = parseInt(tmpsReal[2])-543;
			for(var i in thai_months){
				if(thai_months[i]===m){
					m = parseInt(i)+1;
					break;
				}
			}
		}
	}
	if(success){
		var maxDate = new Date();
		maxDate = new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate());
		y = ""+y;
		var year = y.substring(0, 2);
		year = parseInt(year);
		var isAD = true;
		if(year<25){
			year = parseInt(y);
		}else{
			year = parseInt(y)-543;
		}
		date = new Date(year, m-1, d);
		if(date>maxDate){
			d = maxDate.getDate();
			m = maxDate.getMonth()+1;
			year = maxDate.getFullYear()+543;
			date = maxDate;
			isAD = false;
		}
		if(isAD){
			year = parseInt(year)+543;
		}
		ele.val(d+SPLIT_TYPE+thai_months[m-1]+SPLIT_TYPE+year);
	}
	
	return ele.val();
}

function checkDate(d, ele){
	var maxDate = new Date();
	maxDate = new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate());
	if(d<maxDate){
		var c = confirm("ต้องการใช้วันที่นี้หรือไม่?");
		if(!c){
			var year = parseInt(maxDate.getFullYear())+543;
			ele.val(maxDate.getDate()+SPLIT_TYPE+thai_months[maxDate.getMonth()]+SPLIT_TYPE+year);
		}
	}
}

function getCurrentDateOnly(){
	var currentDate = new Date();
	
	return new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate());
}

function getCurrentDateTimeString(){
	var date = new Date();
	
	var hour = ""+date.getHours();
	var min = ""+date.getMinutes();
	var sec = ""+date.getSeconds();
	hour = hour.length==1?"0"+hour: hour;
	min = min.length==1?"0"+min: min;
	sec = sec.length==1?sec+"0": sec;
	
	var year = parseInt(date.getFullYear())+543;
	return date.getDate()+SPLIT_TYPE+thai_months[date.getMonth()]+SPLIT_TYPE+year+" "+hour+":"+min+":"+sec;
}

function getCurrentTimeString(){
	var date = new Date();
	
	var hour = ""+date.getHours();
	var min = ""+date.getMinutes();
	hour = hour.length==1?"0"+hour: hour;
	min = min.length==1?"0"+min: min;
	
	return hour+":"+min;
}

function getCurrentTimeWithSecString(){
	var date = new Date();
	
	var hour = ""+date.getHours();
	var min = ""+date.getMinutes();
	var sec = ""+date.getSeconds();
	hour = hour.length==1?"0"+hour: hour;
	min = min.length==1?"0"+min: min;
	sec = sec.length==1?sec+"0": sec;
	
	return hour+":"+min+":"+sec;
}

function formatDate(date){
	var d = date.getDate() + "";
	var m = thai_months[date.getMonth()];
	var y = date.getFullYear()+543;
	var lenDate = d.length;
	if(lenDate == 1){
		d = "0" + d;
	}
	return d + SPLIT_TYPE + m + SPLIT_TYPE + y;
}

function toDatepickerValue(dateStr){
	var tmps = dateStr.split(SPLIT_TYPE);
	var d = tmps[0];
	var y = parseInt(tmps[2])+543;
	return d + SPLIT_TYPE + tmps[1] + SPLIT_TYPE + y;
}

function formatStrDate(date){
	var tmps = date.split(SPLIT_TYPE);
	var m = 0;
	for(var i=0; i < thai_months.length; i++){
		var month = thai_months[i];
		if(tmps[1] === month){
			m = i+1;
			break;
		}
	}
	
	var y = parseInt(tmps[2]) - 543;
	return tmps[0] + SPLIT_TYPE + m + SPLIT_TYPE + y;
}

function strToDate(dateStr){
	var tmps = dateStr.split(SPLIT_TYPE);
	var m = 0;
	for(var i=0; i < thai_months.length; i++){
		var month = thai_months[i];
		if(tmps[1] === month){
			m = i;
			break;
		}
	}
	
	var y = parseInt(tmps[2]) - 543;
	
	return new Date(y, m, tmps[0]);
}

function calDOB(date){
	var current = getCurrentDateOnly();
	var y = date.getFullYear();
	var yCurrent = current.getFullYear();
	return (yCurrent-y);
}