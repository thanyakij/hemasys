( function( $ ) {
	
	$( document ).ready(function() {
		$("textarea").val("");
		$("input[type='text']").keypress(function(e){			
			var result = false;
			var charCode = (e.which) ? e.which : e.keyCode;
			if (charCode!==37) {
				result = true;
			}
			return result;
		});
		
		$.validate = function(){
			var isValid = true;
			$(".required").each(function(){
				var val = $(this).val();
				if(val==="" && isValid){
					$(this).focus();
					alert("โปรดระบุข้อมูลให้ครบถ้วน");
					isValid = false;
					return;
				}
			});
		};
	});
} )( jQuery );

function setGlobalCode(ele, minlength, maxlength, numuriconly){
	if(minlength!==0 && maxlength!==0){
		ele.attr("minlength", minlength);
		ele.attr("maxlength", maxlength);
	}
	ele.keyup(function(e){
		$(this).val($(this).val().toUpperCase());
	}).keypress(function(e){
		var result = false;
		var charCode = (e.which) ? e.which : e.keyCode;
		var charStr = String.fromCharCode(charCode);
		if(numuriconly){
			if (/[0-9]/i.test(charStr)) {
				result = true;
			}
		}else{
			if (/[a-z0-9]/i.test(charStr)) {
				result = true;
			}
		}
		
		return result;
	}).blur(function(){
		var minlength = $(this).attr("minlength");
		var maxlength = $(this).attr("maxlength");
		var val = $(this).val();
		if(val!==""){
			if(minlength!==0&&maxlength!==0){
				if(val.length<minlength){
					alert("โปรดระบุข้อมูลให้ครบตามจำนวนที่กำหนด");
					$(this).focus();
				}
				
				if(val.length>maxlength){
					alert("ระบุข้อมูลเกินกว่าจำนวนที่กำหนด");
					$(this).focus();
				}
			}
		}
	});
}
function setGlobalFloat(ele, minlength, maxlength){
	var validDate = new RegExp(/[\d\.]/);
	if(minlength!==0 && maxlength!==0){
		ele.attr("minlength", minlength);
		ele.attr("maxlength", maxlength);
	}
	ele.keypress(function(e){
		var result = false;
		var charCode = (e.which) ? e.which : e.keyCode;
		var charStr = String.fromCharCode(charCode);
		if (validDate.test(charStr)) {
			result = true;
		
			var point = $(this).val().indexOf(".");
			if (charCode == 46 && point===-1) {
				result = true;
			}
			
			if(point>0){
				result = true;
				var tmps = $(this).val().split(".");
				if(tmps[1].length>1){
					result = false;
				}
			}
		}

		
		return result;
	}).keyup(function(){
		var val = $(this).val();
		if(val==="."){
			$(this).val("0.");
		}
	}).blur(function(){
		var minlength = $(this).attr("minlength");
		var maxlength = $(this).attr("maxlength");
		var val = $(this).val();
		if(val!==""){
			if(minlength!==0&&maxlength!==0){
				if(val.length<minlength){
					alert("โปรดระบุข้อมูลให้ครบตามจำนวนที่กำหนด");
					$(this).focus();
				}
				
				if(val.length>maxlength){
					alert("ระบุข้อมูลเกินกว่าจำนวนที่กำหนด");
					$(this).focus();
				}
			}
		}
	});
}

function globalEdit(eleBtn){
	$(".edit").attr("disabled", "disabled");
	
	eleBtn.click(function(){
		$(".edit").removeAttr("disabled");
	});
}

function currencyFormat(num) {
    return num.toFixed(3).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}
