<section>
  <div class="page-container UIboxshadow">
    <row class="center row-topic">
      <ul class="trim">
        <li class="tile-like span-6 align-left">
          <h1><?php echo $title; ?></h1>
        </li>
        <li class="tile-like span-3 offset-4">
          <div class="UIblock input-group goto-navi ">
        
          <span class="input-group-addon goto-navi span-1" id="basic-addon1">goto:</span>
          <form style="display:flex" method="get" action="">
            <input type="text" class="form-control goto-navi" placeholder="choice" name="donormoduleitem" autofocus>
          </form>
    
        </div>
        </li>
      </ul>
    </row>
    
    <row class="center">
      <ul class="trim span-4c">
        <li class="tile-like span-4 tile-groupname">Donor</li>
        <li>
          <a href="?donormoduleitem=1" class="UItile tile-active tile-module">
            <span class="mif-shrink"></span>
            <span class="tile-badge">(1)</span>
            <span class="tile-caption">Collection</span>
          </a>
        </li><!--
      --><li>
          <a href="?donormoduleitem=1" class="UItile tile-active tile-module">
            <span class="mif-clipboard"></span>
            <span class="tile-badge">(2)</span>
            <span class="tile-caption">Planning</span>
          </a>
        </li><!--
      --><li>
          <a class="UItile tile-disabled">
            <span class="mif-folder-download"></span>
            <span class="tile-badge">(4)</span>
            <span class="tile-caption">Import from Telecar</span>
          </a>
        </li>
      </ul>
      
      
      <ul class="trim span-2c offset-1c">
        <li class="tile-like span-2 tile-groupname">Reception</li>
        <li>
          <a href="?donormoduleitem=1" class="UItile tile-active tile-module">
            <span class="mif-profile"></span>
            <span class="tile-badge">(11)</span>
            <span class="tile-caption">Donor Reception</span>
          </a>
        </li><!--
      --><li>
          <a href="?donormoduleitem=1" class="UItile tile-active tile-module">
            <span class="mif-user-md"></span>
            <span class="tile-badge">(12)</span>
            <span class="tile-caption">Donor Consultation</span>
          </a>
        </li>
      </ul>
      
      <ul class="trim span-4c offset-1c">
        <li class="tile-like span-4 tile-groupname">Management</li>
        <li>
          <a href="?donormoduleitem=1" class="UItile tile-active tile-module">
            <span class="mif-lab"></span>
            <span class="tile-badge">(23)</span>
            <span class="tile-caption">Samples in progress</span>
          </a>
        </li><!--
      --><li>
          <a class="UItile tile-disabled">
            <span class="mif-search"></span>
            <span class="tile-badge">(25)</span>
            <span class="tile-caption">Search</span>
          </a>
        </li><!--
      --><li>
          <a class="UItile tile-disabled">
            <span class="mif-users"></span>
            <span class="tile-badge">(26)</span>
            <span class="tile-caption">Donor merge</span>
          </a>
        </li>
      </ul>
    </row>   
    
    
    <row class="center row-control">
      <ul class="trim">
        <li>
          <a class="UIblock UIbutton span-2 offset-11"><span>Exit</span></a>
        </li>
      </ul>
    <div class="clearboth"></div>
    </row> 
    
  </div>
</section>

<?php /*

<script>
  $(document).ready(function(){
  
  });
</script>

<section class="body">		
<div class="center-align">
<h3>Donor Module</h3>
		<div class="row">
			<div class="col s12 m4 center-align">
				<h4>Collection</h4>
				<p><a class="btn grey menubtn">Collection</a></p>
				<p><a class="btn grey menubtn">Planning</a></p>
				<!--<p><a class="btn grey menubtn">Collection Returns</a></p>-->
				<p><a class="btn grey menubtn">Import Collection</a></p>
				<!--<p><a class="btn grey menubtn">Booking appointments</a></p>-->
				<!--<p><a class="btn grey menubtn">Appointment Search</a></p>-->
			</div>
			
			<div class="col s12 m4  center-align">
				<h4>Reception</h4>
				<p><a class="btn grey menubtn">Donor Reception</a></p>
				<p><a class="btn grey menubtn">Donor Consulation</a></p>
				<!--<p><a class="btn grey menubtn">Statistics</a></p>-->
				<!--<p><a class="btn grey menubtn">Test Request Entry</a></p>-->
				<!--<p><a class="btn grey menubtn">Verification of the requests</a></p>-->
				<!--<p><a class="btn grey menubtn">Entry of Samples</a></p>-->
			</div>
			
			<div class="col s12 m4  center-align">
				<h4>Management</h4>
				<!--<p><a class="btn grey  menubtn">Import Blood Mixer</a></p>
				<p><a class="btn grey menubtn">Sample Integration</a></p>
				<p><a class="btn grey menubtn">Sample in progress</a></p>
				<p><a class="btn grey menubtn">Print mail</a></p>-->
				<p><a class="btn grey menubtn">Search</a></p>
				<p><a class="btn grey menubtn">Donor Merge</a></p>
				<!--<p><a class="btn grey menubtn">Donor's Task Follow-up</a></p>
				<p><a class="btn grey menubtn">External examination results</a></p>
				<p><a class="btn grey menubtn">List of external examinations</a></p>-->
			</div>
			
</div>

</div>
</section>	

*/ ?>