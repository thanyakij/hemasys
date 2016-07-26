<section class="body">
<div style="display:inline-block;width:600px;background:#ffffff;" >
  <div style="float:left;display:block;width:150px;padding:20px;"><img src="images/logo-drop.jpg" style="width: 100px;" /></div>
  <div style="float:left;display:block;width:400px;">
    <h4>please sign in</h4>
		<div class="">
			<div class="input-field">
				<input type="text" id="username">
				<label for="username" class="validate active" tabindex="1">Username</label>
			</div>
			<div class="input-field">
				<input type="password" id="pass">
				<label for="pass" class="validate" tabindex="2">Password</label>
			</div>
      <div class="">
		    <a class="btn green" tabindex="3">Login</a> <button class="btn grey">Exit</button>
      </div>
		</div>
  </div>
  <div class="clearboth"></div>
</div>

</section>

<script>
			$(document).ready(function(){
			$('#username').bind('keypress', function(e) {
						var k = e.which;
						var ok = k == 8 || k >= 65 && k <= 90 || // A-Z
								k >= 97 && k <= 122 || // a-z
								k >= 48 && k <= 57 || // 0-9
								k >= 33 && k <= 47 || // Special Char
								k >= 58 && k <= 64; // Special Char
						if (!ok){
							e.preventDefault();
						}else{}
			}); 
			
			$('#pass').bind('keypress', function(e) {
						var k = e.which;
						var ok = k == 8 || k >= 65 && k <= 90 || // A-Z
								k >= 97 && k <= 122 || // a-z
								k >= 48 && k <= 57 || // 0-9
								k >= 33 && k <= 47 || // Special Char
								k >= 58 && k <= 64; // Special Char
						if (!ok){
							e.preventDefault();
						}else{}
			}); 
			
			});
</script>

<div style="display:none;">

      <!--
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/primeui/production/primeui-2.1-min.css" />
        <link rel="stylesheet" type="text/css" href="assets/primeui/themes/smoothness/theme.css" />
		<script src="jquery.min.js"></script>
		<script src="js/materialize.min.js"></script>	
    -->
    <!--
        <link rel="" href=""> 
        <style>
            .UIboxborder{
                border:1px #999 solid; 
                padding:5px;
            }
			
					   .input-field label {
				 color: #333;
			   }
			   /* label focus color */
			   .input-field input[type=text]:focus + label {
				 color: #333;
			   }
        </style>   
        -->

</div>
