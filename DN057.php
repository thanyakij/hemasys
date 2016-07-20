<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
    <div id="<?php echo $pageClass; ?>" class="container">
    <div class="panel panel-default">
      <div class="panel-heading panel-heading-width">
        <div class="left-panel pull-left">
          <a href="#" title=""><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
          <a href="#" title=""><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
        </div>
        <div class="right-panel pull-right">
          <a href="#" title=""><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
          <a href="#" title=""><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></a>
        </div>
      </div>
      <div class="panel-body">
        <div class="filter form-inline">
          <label for="">Choice</label>
          <div class="radio">
            <label for="">
              <input type="radio" id="choice" name="site"><span>Site</span>
            </label>
            <label for="">
              <input type="radio" id="choice" name="regroupment"><span>Regroupment</span>
            </label>
            <label for="">
              <input type="radio" id="choice" name="center"><span>Centre</span>
            </label>
            <label for="">
              <input type="radio" id="choice" name="all"><span>All</span>
            </label>
          </div>
          <p></p>
          <table class="table table-bordered" style="width:100%">
            <tr>
              <th>Code</th>
              <th>Description</th>
            </tr>
            <tr>
              <td>CONFIRM</td>
              <td>Confirmation Mail</td>
            </tr>
            <tr>
              <td>Null</td>
              <td>Null</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    </div>
<?php 
include ("pages/footer.php"); 
?>
