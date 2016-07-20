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
		$("input[id^='firstDate']").val(formatDate(new Date()));
		$("input[id^='lastDate']").val(formatDate(new Date()));
	});
</script>
    <div id="<?php echo $pageClass; ?>"" class="container">
        <p><strong>HIIG Donor No. 1005613568 : </strong><span>MR. Chalachai</span><p>

        <!--Exam-->     
        <table class="table table-bordered table-re-2">
            <tr>
                <th>Exams</th>
                <th>Result</th>
                <th>No.</th>
                <th>Date of first det.</th>
                <th>Date of last det.</th>
            </tr>
            <tr>
                <td>ABOD</td>
                <td><input type="text" tabindex="1"></td>
                <td><input type="text" tabindex="2"></td>
                <td><input type="text" tabindex="3" class="dndate" id="firstDate1"></td>
                <td><input type="text" tabindex="4" class="dndate" id="lastDate1"></td>
            </tr>
            <tr>
                <td>Ext Pheno</td>
                <td><input type="text" tabindex="5"></td>
                <td><input type="text" tabindex="6"></td>
                <td><input type="text" tabindex="7" class="dndate" id="firstDate2"></td>
                <td><input type="text" tabindex="8" class="dndate" id="lastDate2"></td>
            </tr>
            <tr>
                <td>Ab Screen</td>
                <td><input type="text" tabindex="9"></td>
                <td><input type="text" tabindex="10"></td>
                <td><input type="text" tabindex="11" class="dndate" id="firstDate3"></td>
                <td><input type="text" tabindex="12" class="dndate" id="lastDate3"></td>
            </tr>
        </table>

        <!--Antigen-->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Antigens</h3>
          </div>
          <div class="panel-body table-overflow-x">
            <table class="table">
                <tr>
                    <th width="5%">Rh</th>
                    <th>Ag C</th>
                    <th>Ag c</th>
                    <th>Ag E</th>
                    <th>Ag e</th>
                    <th>Ag K</th>
                    <th>Ag Mia</th>
                    <th>Ag Mur</th>
                    <th>Ag Dia</th>
                    <th>Ag Dib</th>
                    <th>Ag Xga</th>
                    <th>Ag Tja</th>
                    <th>Ag Jsa</th>
                    <th>Ag Jsb</th>
                    <th>Ag Lwa</th>
                    <th>Ag U</th>
                </tr>
                <tr>
                    <td><input type="text" tabindex="13" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="14" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="15" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="16" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="17" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="18" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="19" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="20" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="21" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="22" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="23" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="24" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="25" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="26" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="27" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="28" style="width: 30px" value="-"></td>
                </tr>
                <tr>
                    <th>Fya</th>
                    <th>Fyb</th>
                    <th>Jka</th>
                    <th>Jkb</th>
                    <th>M</th>
                    <th>N</th>
                    <th>S</th>
                    <th>s</th>
                    <th>Lea</th>
                    <th>Leb</th>
                    <th>Anti-Vel</th>
                    <th>Ag Doa</th>
                    <th>Ag Dob</th>
                    <th>Ag Coa</th>
                    <th>Ag Cob</th>
                    <th>Mga</th>
                </tr>
                <tr>
                    <td><input type="text" tabindex="29" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="30" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="31" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="32" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="33" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="34" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="35" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="36" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="37" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="38" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="39" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="40" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="41" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="42" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="43" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="44" style="width: 30px" value="+"></td>

                </tr>
                <tr>
                    <th>Cw</th>
                    <th>Lua</th>
                    <th>Lub</th>
                    <th>Kpa</th>
                    <th>Kpb</th>
                    <th>P1</th>
                    <th>k</th>
                    <th>Ag H</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><input type="text" tabindex="45" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="46" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="47" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="48" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="49" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="50" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="51" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="52" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="53" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="54" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="55" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="56" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="57" style="width: 30px" value="-"></td>
                    <td><input type="text" tabindex="58" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="59" style="width: 30px" value="+"></td>
                    <td><input type="text" tabindex="60" style="width: 30px" value="+"></td>
                </tr>
            </table>
          </div>
        </div>
        

        <!--Antibodies-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Antibodies</h3>
            </div>
            <div class="panel-body table-overflow-x">
                <table class="table">
                    <tr>
                        <th>D</th>
                        <th>C</th>
                        <th>c</th>
                        <th>E</th>
                        <th>e</th>
                        <th>K</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input type="text" tabindex="61" style="width: 30px"></td>
                        <td><input type="text" tabindex="62" style="width: 30px"></td>
                        <td><input type="text" tabindex="63" style="width: 30px"></td>
                        <td><input type="text" tabindex="64" style="width: 30px"></td>
                        <td><input type="text" tabindex="65" style="width: 30px"></td>
                        <td><input type="text" tabindex="66" style="width: 30px"></td>
                        <td><input type="text" tabindex="67" style="width: 30px"></td>
                        <td><input type="text" tabindex="68" style="width: 30px"></td>
                        <td><input type="text" tabindex="69" style="width: 30px"></td>
                        <td><input type="text" tabindex="70" style="width: 30px"></td>
                        <td><input type="text" tabindex="71" style="width: 30px"></td>
                        <td><input type="text" tabindex="72" style="width: 30px"></td>
                        <td><input type="text" tabindex="73" style="width: 30px"></td>
                        <td><input type="text" tabindex="74" style="width: 30px"></td>
                        <td><input type="text" tabindex="75" style="width: 30px"></td>
                        <td><input type="text" tabindex="76" style="width: 30px"></td>
                    </tr>
                    <tr>
                        <th>Fya</th>
                        <th>Fyb</th>
                        <th>Jka</th>
                        <th>Jkb</th>
                        <th>M</th>
                        <th>N</th>
                        <th>S</th>
                        <th>s</th>
                        <th>Lea</th>
                        <th>Leb</th>
                        <th>Jsa</th>
                        <th>Jsb</th>
                        <th>Lwa</th>
                        <th>U</th>
                        <th>Pk</th>
                        <th>Mia</th>
                    </tr>
                    <tr>
                        <td><input type="text" tabindex="77" style="width: 30px"></td>
                        <td><input type="text" tabindex="78" style="width: 30px"></td>
                        <td><input type="text" tabindex="79" style="width: 30px"></td>
                        <td><input type="text" tabindex="80" style="width: 30px"></td>
                        <td><input type="text" tabindex="81" style="width: 30px"></td>
                        <td><input type="text" tabindex="82" style="width: 30px"></td>
                        <td><input type="text" tabindex="83" style="width: 30px"></td>
                        <td><input type="text" tabindex="84" style="width: 30px"></td>
                        <td><input type="text" tabindex="85" style="width: 30px"></td>
                        <td><input type="text" tabindex="86" style="width: 30px"></td>
                        <td><input type="text" tabindex="87" style="width: 30px"></td>
                        <td><input type="text" tabindex="88" style="width: 30px"></td>
                        <td><input type="text" tabindex="89" style="width: 30px"></td>
                        <td><input type="text" tabindex="90" style="width: 30px"></td>
                        <td><input type="text" tabindex="91" style="width: 30px"></td>
                        <td><input type="text" tabindex="92" style="width: 30px"></td>
                    </tr>
                    <tr>
                        <th>Cw</th>
                        <th>Lua</th>
                        <th>Lub</th>
                        <th>Kpa</th>
                        <th>Kpb</th>
                        <th>P1</th>
                        <th>k</th>
                        <th>Vel</th>
                        <th>TJA</th>
                        <th>Doa</th>
                        <th>Dob</th>
                        <th>Coa</th>
                        <th>Cob</th>
                        <th>H</th>
                        <th>Mga</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input type="text" tabindex="93" style="width: 30px"></td>
                        <td><input type="text" tabindex="94" style="width: 30px"></td>
                        <td><input type="text" tabindex="95" style="width: 30px"></td>
                        <td><input type="text" tabindex="96" style="width: 30px"></td>
                        <td><input type="text" tabindex="97" style="width: 30px"></td>
                        <td><input type="text" tabindex="98" style="width: 30px"></td>
                        <td><input type="text" tabindex="99" style="width: 30px"></td>
                        <td><input type="text" tabindex="100" style="width: 30px"></td>
                        <td><input type="text" tabindex="101" style="width: 30px"></td>
                        <td><input type="text" tabindex="102" style="width: 30px"></td>
                        <td><input type="text" tabindex="103" style="width: 30px"></td>
                        <td><input type="text" tabindex="104" style="width: 30px"></td>
                        <td><input type="text" tabindex="105" style="width: 30px"></td>
                        <td><input type="text" tabindex="106" style="width: 30px"></td>
                        <td><input type="text" tabindex="107" style="width: 30px"></td>
                        <td><input type="text" tabindex="108" style="width: 30px"></td>
                    </tr>
                </table>
            </div>
        </div>

        <!--HLA-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">HLA</h3>
            </div>
            <div class="panel-body table-overflow-x">
                <table class="table table-re">
                    <tr>
                        <th>HLA-Ax</th>
                        <th>HLA-Ay</th>
                        <th>HLA-Bx</th>
                        <th>HLA-By</th>
                        <th>HLA-DRB1X</th>
                        <th>HLA-DRB1y</th>
                    </tr>
                    <tr>
                        <td><input type="text" tabindex="109" style="width: 150px"></td>
                        <td><input type="text" tabindex="110" style="width: 150px"></td>
                        <td><input type="text" tabindex="111" style="width: 150px"></td>
                        <td><input type="text" tabindex="112" style="width: 150px"></td>
                        <td><input type="text" tabindex="113" style="width: 150px"></td>
                        <td><input type="text" tabindex="114" style="width: 150px"></td>
                    </tr> 
                    <tr>
                        <th>HLA-DRB3x</th>
                        <th>HLA-DRB3y</th>
                        <th>HLA-DRB4x</th>
                        <th>HLA-DRB4y</th>
                        <th>HLA-DRB5x</th>
                        <th>HLA-DRB5y</th>
                    </tr>
                    <tr>
                        <td><input type="text" tabindex="115" style="width: 150px"></td>
                        <td><input type="text" tabindex="116" style="width: 150px"></td>
                        <td><input type="text" tabindex="117" style="width: 150px"></td>
                        <td><input type="text" tabindex="118" style="width: 150px"></td>
                        <td><input type="text" tabindex="119" style="width: 150px"></td>
                        <td><input type="text" tabindex="120" style="width: 150px"></td>
                    </tr>               
                </table>
            </div>
        </div>

        <section class="exit text-right">
            <a href="#">
                <button class="btn btn-lg btn-danger" tabindex="115">Exit</button>
            </a>
        </section>
    </div>
<?php 

  include ("pages/footer.php");

?>

