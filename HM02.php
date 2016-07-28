<section>
  <div class="page-container UIboxshadow">
    <?php /* <!--
    <row class="center">
      <cell class="col span-1 tile tile-small">1</cell>
      <cell class="col span-1 tile tile-small">2</cell>
      <cell class="col span-1 tile tile-small">3</cell>
      <cell class="col span-1 tile tile-small">4</cell>
      <cell class="col span-1 tile tile-small">5</cell>
      <cell class="col span-1 tile tile-small">6</cell>
      <cell class="col span-1 tile tile-small">7</cell>
      <cell class="col span-1 tile tile-small">8</cell>
      <cell class="col span-1 tile tile-small">9</cell>
      <cell class="col span-1 tile tile-small">10</cell>
      <cell class="col span-1 tile tile-small">11</cell>
      <cell class="col span-1 tile tile-small">12</cell>
      <cell class="col span-1 tile tile-small">13</cell>
    </row>
    --> */ ?>
    <row class="center">
      <tile class="wide bg-white">
        <img src="images/logo-nbc-trcs.png" width="350" height="170" alt=""/>
      </tile>
      <cell class="col span-9 bg-white" style="text-align:left;height:270px;">
        <h1 class="splashtext" 
          style="padding-left:60px;color:#ED1B24;font-size:5em;font-weight:bold;">
          Hemasys by NBC
          <br /><small style="color:#CE352C;font-size:0.8em;">ระบบบริหารงานบริจาคโลหิต</small>
        </h1>
        <span style="padding-left:60px;color:#9A1616;font-size:2.5em;">
          ศูนย์บริการโลหิตแห่งชาติ สภากาชาดไทย
        </span>
      </cell>
    </row>
    
    <?php /* <!--
    <row class="center">
      <tile class="normal mainmenu-tile">
        <a href="?page=DN001">
          <span class="mif-users"></span>
          <span class="tile-badge">(1)</span>
          <span class="tile-caption">Donor</span>
        </a>
      </tile>
      <tile class="disabled">
        <span class="mif-lab"></span>
        <span class="tile-badge">(2)</span>
        <span class="tile-caption">Laboratory</span>
      </tile>
      <tile class="disabled">
        <span class="mif-medkit"></span>
        <span class="tile-badge">(3)</span>
        <span class="tile-caption">Production</span>
      </tile>
      <tile class="disabled">
        <span class="mif-hotel"></span>
        <span class="tile-badge">(4)</span>
        <span class="tile-caption">Patient</span>
      </tile>
      <tile class="disabled">
        <span class="mif-bitcoin"></span>
        <span class="tile-badge">(5)</span>
        <span class="tile-caption">Invoicing</span>
      </tile>
      <tile class="disabled offset-1">
        <span class="mif-tools"></span>
        <span class="tile-badge">(9)</span>
        <span class="tile-caption">Setting</span>
      </tile>
    </row> 
    --> */ ?>
    <row class="center">
      <ul class="trim">
        <li>
          <a href="?page=DN001" class="UItile tile-active mainmenu-tile ">
            <span class="mif-users"></span>
            <span class="tile-badge">(1)</span>
            <span class="tile-caption">Donor</span>
            <div class="clearboth"></div>
          </a>
        </li>
        <li>
          <a class="UItile tile-disabled">
            <span class="mif-lab"></span>
            <span class="tile-badge">(2)</span>
            <span class="tile-caption">Laboratory</span>
          </a>
        </li>
        <li>
          <a class="UItile tile-disabled">
            <span class="mif-medkit"></span>
            <span class="tile-badge">(3)</span>
            <span class="tile-caption">Production</span>
          </a>
        </li>
        <li>
          <a class="UItile tile-disabled">
            <span class="mif-hotel"></span>
            <span class="tile-badge">(4)</span>
            <span class="tile-caption">Patient</span>
          </a>
        </li>
        <li>
          <a class="UItile tile-disabled">
            <span class="mif-bitcoin"></span>
            <span class="tile-badge">(5)</span>
            <span class="tile-caption">Invoicing</span>
          </a>
        </li>
        <li>
          <a class="UItile tile-disabled offset-1 ">
            <span class="mif-tools"></span>
            <span class="tile-badge">(9)</span>
            <span class="tile-caption">Setting</span>
          </a>
        </li>
      </ul>
    </row>
    
    <row class="center">
      <ul class="trim">
      
        <!--li>
          <div class="inline-input-group ">
            goto<input type="text" name="goto"/>
            <button class="addon-r"><span class="mif-search"></span></button>
          </div>
        </li-->
        
        <!--li>
          <div class="input-control text" data-role="input">
            <label for="text">Goto</label><input type="text" name="text" />
            <button class="button"><span class="mif-search"></span></button>
          </div>
          <br />
        </li-->
      </ul>
    </row>
    
    <row class="center">
      <ul class="trim">
        <li>
          <div class="UIblock input-group span-2 offset-8" method="get">
          
            <span class="input-group-addon" id="basic-addon1">goto:</span>
            <form style="display:flex">
              <input type="text" class="form-control" placeholder="choice" name="modulenumber" autofocus>
            </form>
            
            <!--span class="input-group-btn">
              <button class="btn span-1" type="button" >Go</button>
            </span-->
          
          </div>
        </li>
        <li>
          <a class="UIblock UIbutton span-2 offset-1"><span>Exit</span></a>
        </li>
      </ul>
    </row>
    
    <div class="clearboth"></div>
  </div>
</section>

<script>
</script>