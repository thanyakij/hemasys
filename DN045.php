<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
<div id="<?php echo $pageClass; ?>" class="container">
    <div class="row">
        <div class="col-sm-5">
            <p>
                <span>
                    <strong>Hermatos No</strong>
                </span>
                <span> : </span>
                <span>1123123213</span>
            </p>
        </div>
        <div class="col-sm-5 pull-right">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" id="" name="" class="form-control" style="margin-bottom: 10px;">
                </div>
            </div>
            <div class="form-group form-inline">
                <div class="col-sm-8">
                    <input type="text" id="" name="" class="form-control"><small style="margin-left: 10px;">(28 years)</small>
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
                                <input type="date" name="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-right">
                                <h5>Outcome</h5>
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
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
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
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
                                    <input type="text" name="" class="form-control" placeholder="Bag type">
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
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
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
                                <input type="text" name="" class="form-control">
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
                                <input type="text" name="" class="form-control">
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
