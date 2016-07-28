<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>

<script src="assets/js/view/DN045.js"></script>
<script src="assets/js/main.js"></script>

<div id="<?php echo $pageClass; ?>" class="container" ng-controller="donationRequestCtrl">
    <div class="row">
        <div class="col-sm-5">
            <p>
                <span>
                    <strong>Hermatos No</strong>
                </span>
                <span> : </span>
                <span>{{ donMed.DONOR_ID }}</span>
            </p>
        </div>
        <div class="col-sm-5 pull-right">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" id="" name="" class="form-control" style="margin-bottom: 10px;" disabled="true" ng-model="donor.FULL_NAME">
                </div>
            </div>
            <div class="form-group form-inline">
                <div class="col-sm-8">
                    <input type="text" id="" name="" class="form-control" ng-model="donor.DATE_OF_BIRTH"><small style="margin-left: 10px;">( years)</small>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">
            Donation request
        </div>
        <div class="panel-body">
            <form>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Date</h5>
                            </div>
                            <div class="col-sm-5">
                                <input name="" class="form-control" date-input="true"  ng-model="donMed.DATE_OF_INTERVIEW">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Outcome</h5>
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control" ng-model="donMed.DONATION_ORIENTATION">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Category</h5>
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control" ng-model="donMed.CATEGORY_OF_DONATION">
                                    <option value="WA">A</option>
                                    <option value="WB">B</option>
                                    <option value="WC">C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Bag type</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <input type="text" name="" class="form-control" placeholder="Bag type" ng-model="donMed.TYPE_OF_BAG">
                                    <div class="input-group-addon">Sample bag type</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Use</h5>
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control" ng-model="donMed.USE_OF_DONATION">
                                    <option value="A">A</option>
                                    <option value="G">G</option>
                                    <option value="H ">H</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Volume</h5>
                            </div>
                            <div class="col-sm-1">
                                <input type="text" name="" class="form-control" ng-model="donMed.EXPECTED_VOLUME">
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Sample number</h5>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" name="" class="form-control" ng-model="donMed.SAMPLE_NUMBER">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 

  include ("pages/footer.php");

?>
