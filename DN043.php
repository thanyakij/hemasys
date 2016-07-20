<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
<div id="<?php echo $pageClass; ?>" class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>Hermatos No</label>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" id="" name="">
                            </div>
                            <div class="col-sm-5">
                                <a href="#" title="">
                                    <button class="btn btn-info pull-right">
                                        <i class="glyphicon glyphicon-th-list"></i>
                                          Donation Waiting list
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>National ID</label>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" id="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>ABMDR ID</label>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" id="" name="">
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>Identifier</label>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" id="" name="">
                            </div>
                            <div class="col-sm-1">
                                <label>Type</label>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" name="">
                                    <option>Options 1</option>
                                    <option>Options 2</option>
                                    <option>Options 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>First name</label>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>Surname</label>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>DOB</label>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" type="date" id="" name="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body text-right">
                    <a href="#" title="">
                        <button class="btn btn-danger">
                            <i class="glyphicon glyphicon-remove-circle"></i>
                              EXIT
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
    </div>
</div>
<?php 

  include ("pages/footer.php");

?>
