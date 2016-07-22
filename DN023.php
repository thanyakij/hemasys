<?php
global $title;
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

$donor_id = '0000010195';

?>
<script src="assets/js/view/DN023.js"></script>
<script src="assets/js/jquery-2.2.1.js" type="text/javascript"></script>
<script src="assets/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/calendar.js" type="text/javascript"></script>

<link rel="stylesheet" href="assets/jquery-ui/themes/redmond/jquery-ui.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/main.css" type="text/css"/>

<script type="text/javascript">
	$(function(){
		$("input[id^='lastDate']").val(formatDate(new Date()));
		$("input[type='text']").attr("disabled", "disabled");
	});
</script>
<div id="<?php echo $pageClass; ?>" class="container" ng-controller="DN023Ctrl">
    <div ng-init="donor_id='<?php echo $donor_id ?>'"></div>
    <pre>{{ donor_biological | json }}</pre>
    <pre>{{ donor | json }}</pre>
    <pre>{{ pexamen | json }}</pre>
    <pre>{{ presultat | json }}</pre>
    <pre>{{ pparecr | json }}</pre>
    <pre>{{ ptitre | json }}</pre>
    <div class="row">
        <div class="name col-sm-12">
            <p><strong>HIIG Donor No. 1005613568 : </strong><span>MR. Chalachai</span></p>
        </div>

        <!--DN23-Leftbox-->
        <div class="col-sm-6">
            <table class="table table-bordered">
                <tr>
                    <th>Exams</th>
                    <th>Result</th>
                    <th>Date of last det.</th>
                </tr>
                <tr>
                    <td><label for="">HIV Ag/Ab</label></td>
                    <td><input type="text" class="form-control" tabindex="1" value="0"></td>
                    <td><input type="text" class="form-control dndate" tabindex="2" id="lastDate1"></td>
                </tr>
                <tr>
                    <td><label for="">Anti HCV</label></td>
                    <td><input type="text" class="form-control" tabindex="3" value="0"></td>
                    <td><input type="text" class="form-control dndate" tabindex="4" id="lastDate2"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="5"></td>
                    <td><input type="text" class="form-control dndate" tabindex="6" id="lastDate3"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="7"></td>
                    <td><input type="text" class="form-control dndate" tabindex="8" id="lastDate4"></td>
                </tr>
                <tr>
                    <td><label for="">Ab palu</label></td>
                    <td><input type="text" class="form-control" tabindex="11"></td>
                    <td><input type="text" class="form-control dndate" tabindex="12" id="lastDate6"></td>
                </tr>
                <tr>
                    <td><label for="">CMV IgG</label></td>
                    <td><input type="text" class="form-control" tabindex="13"></td>
                    <td><input type="text" class="form-control dndate" tabindex="14" id="lastDate7"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="15"></td>
                    <td><input type="text" class="form-control dndate" tabindex="16" id="lastDate8"></td>
                </tr>
                <tr>
                    <td><label for="">Ag P24</label></td>
                    <td><input type="text" class="form-control" tabindex="17"></td>
                    <td><input type="text" class="form-control dndate" tabindex="18" id="lastDate9"></td>
                </tr>
                <tr>
                    <td><label for="">Conf HBs</label></td>
                    <td><input type="text" class="form-control" tabindex="19"></td>
                    <td><input type="text" class="form-control dndate" tabindex="20" id="lastDate10"></td>
                </tr>
                <tr>
                    <td><label for="">Conf Syph</label></td>
                    <td><input type="text" class="form-control" tabindex="21"></td>
                    <td><input type="text" class="form-control dndate" tabindex="22" id="lastDate11"></td>
                </tr>
                <tr>
                    <td><label for="">HIV Ag/Ab</label></td>
                    <td><input type="text" class="form-control" tabindex="23"></td>
                    <td><input type="text" class="form-control dndate" tabindex="24" id="lastDate12"></td>
                </tr>
            </table>
        </div>

        <!--DN23-Rightbox-->
        <div class="col-sm-6">
            <table class="table table-bordered">
                <tr>
                    <th>Exams</th>
                    <th>Result</th>
                    <th>Date of last det.</th>
                </tr>
                <tr>
                    <td><label for="">Syph</label></td>
                    <td><input type="text" class="form-control" tabindex="25"></td>
                    <td><input type="text" class="form-control dndate" tabindex="26" id="lastDate13"></td>
                </tr>
                <tr>
                    <td><label for="">HBsAg</label></td>
                    <td><input type="text" class="form-control" tabindex="27"></td>
                    <td><input type="text" class="form-control dndate" tabindex="28" id="lastDate14"></td>
                </tr>
                <tr>
                    <td><label for="">anti HBs</label></td>
                    <td><input type="text" class="form-control" tabindex="29"></td>
                    <td><input type="text" class="form-control dndate" tabindex="30" id="lastDate15"></td>
                </tr>
                <tr>
                    <td><label for="">ALAT</label></td>
                    <td><input type="text" class="form-control" tabindex="31"></td>
                    <td><input type="text" class="form-control dndate" tabindex="32" id="lastDate16"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="35"></td>
                    <td><input type="text" class="form-control dndate" tabindex="36" id="lastDate18"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="37"></td>
                    <td><input type="text" class="form-control dndate" tabindex="36" id="lastDate19"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="37"></td>
                    <td><input type="text" class="form-control dndate" tabindex="38" id="lastDate20"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="39"></td>
                    <td><input type="text" class="form-control dndate" tabindex="40" id="lastDate21"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="41"></td>
                    <td><input type="text" class="form-control dndate" tabindex="42" id="lastDate22"></td>
                </tr>
                <tr>
                    <td><label for="">Anti HCV</label></td>
                    <td><input type="text" class="form-control" tabindex="43"></td>
                    <td><input type="text" class="form-control dndate" tabindex="44" id="lastDate23"></td>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="text" class="form-control" tabindex="45"></td>
                    <td><input type="text" class="form-control dndate" tabindex="46" id="lastDate24"></td>
                </tr>
            </table>
        </div>

    </div>
    <section class="text-right">
        <button class="btn btn-lg btn-danger" tabindex="47">EXIT</button>
        <p></p>
    </section>

</div>

<?php
  include ("pages/footer.php");
?>
