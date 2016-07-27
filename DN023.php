<?php
global $title;
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

$donor_id = $_GET['donorid']; // Example: 0000010195
?>
<script src="assets/js/view/DN023.js"></script>
<script src="assets/js/jquery-2.2.1.js" type="text/javascript"></script>
<script src="assets/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/calendar.js" type="text/javascript"></script>

<link rel="stylesheet" href="assets/jquery-ui/themes/redmond/jquery-ui.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/main.css" type="text/css"/>

<div id="<?php echo $pageClass; ?>" class="container" ng-controller="DN023Ctrl">
    <div ng-init="donor_id='<?php echo $donor_id ?>'"></div>

    <div class="row">
        <div class="name col-sm-12">
            <p><strong>HIIG Donor No. {{ donor_id }} : </strong><span>{{ donor.FIRST_NAME }} {{ donor.SURNAME }}</span></p>
        </div>

        <!--DN23-Leftbox-->
        <div class="col-sm-6">
            <table class="table table-bordered">
                <tr>
                    <th>Exams</th>
                    <th>Result</th>
                    <th>Date of last det.</th>
                </tr>
                <tr ng-repeat="item in first_list">
                    <td><label for="">{{ item.SHORT_EXAM_NAME }}</label></td>
                    <td><input type="text" ng-model="item.RESULT" disabled class="form-control"></td>
                    <td><input type="text" ng-model="item.DATE_OF_LAST_DETERMINATION" disabled class="form-control dndate"></td>
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
                <tr ng-repeat="item in second_list">
                    <td><label for="">{{ item.SHORT_EXAM_NAME }}</label></td>
                    <td><input type="text" ng-model="item.RESULT" disabled class="form-control"></td>
                    <td><input type="text" ng-model="item.DATE_OF_LAST_DETERMINATION" disabled class="form-control dndate"></td>
                </tr>
            </table>
        </div>

    </div>
    <section class="text-right">
        <button class="btn btn-lg btn-danger">EXIT</button>
        <p></p>
    </section>

</div>

<?php
  include ("pages/footer.php");
?>
