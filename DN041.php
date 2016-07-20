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
                    <th style="width:30%;">Link</th>
                    <th style="width:60%;">Indv or Prob</th>
                    <th style="width:10%;">Date type</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select class="form-control" name="">
                                <option>Options 1</option>
                                <option>Options 2</option>
                                <option>Options 3</option>
                            </select>
                        </td>
                        <td>
                            <p>Sample text</p>
                        </td>
                        <td>
                            <select class="form-control" name="">
                                <option>Options 1</option>
                                <option>Options 2</option>
                                <option>Options 3</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bottom-panel">
            <div class="row">
                <div class="col-sm-3">
                    <a href="#" title="">
                        <button type="" class="btn btn-success btn-block">Search</button>
                    </a>
                </div>    
                <div class="col-sm-3">
                    <a href="#" title="">
                        <button type="" class="btn btn-primary btn-block">Add</button>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="#" title="">
                        <button type="" class="btn btn-warning btn-block">Remove</button>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="#" title="">
                        <button type="" class="btn btn-danger btn-block">Return</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php 

  include ("pages/footer.php");

?>
