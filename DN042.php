<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
    <div id="<?php echo $pageClass; ?>" class="container">
        <div class="panel panel-default">
        <div class="panel-heading">
            <span> 
                <strong>
                Donor links <span class="id">1005901646</span>
                </strong>
            </span> : 
            <span class="name">Mr. Sonchai todsob</span>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <th style="width:20%;">Vacine code</th>
                <th style="width:20%;">Date</th>
                <th style="width:20%;">Injection type</th>
                <th style="width:40%;">Observ</th>
            </thead>
            <tbody>
                <tr>
                <td>
                    <select class="form-control" name="">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </td>
                <td>
                    <p>Sample text</p>
                </td>
                <td>
                    <select class="form-control" name="">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </td>
                <td>
                    <p>Sample text</p>
                </td>
            </tbody>
        </table>
        </div>
        <div class="bottom-panel">
            <div class="row">
                <div class="col-sm-3">
                    <button type="" class="btn btn-info btn-block">Add</button>
                </div>
                <div class="col-sm-3">
                    <button type="" class="btn btn-warning btn-block">Remove</button>
                </div>
                <div class="col-sm-3">
                    <button type="" class="btn btn-primary btn-block">OK</button>
                </div>
                <div class="col-sm-3">
                    <button type="" class="btn btn-danger btn-block">Abort</button>
                </div>
            </div>
        </div> 
    </div>
<?php 

  include ("pages/footer.php");

?>