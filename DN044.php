<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
  <div id="<?php echo $pageClass; ?>" class="container">
    <div class="col-sm-8">
      <h2>Donation waiting line</h2>
    </div>
    <div class="col-sm-4 text-right">
      <div class="form-group form-inline">
        <label for="">Point</label>
        <input type="text" id="" name="" class="form-control">
      </div>
      <div class="form-group form-inline">
        <label for="">Date</label>
        <input type="date" id="" name="" class="form-control">
      </div>
    </div>
                  
    <table class="table table-bordered table-hover">
      <tr>
        <th>Time</th>
        <th>Donor</th>
        <th>Sample Number</th>
        <th>Notes</th>
      </tr>
      <tr>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
      </tr>
      <tr>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
      </tr>
      <tr>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
      </tr>
      
    </table>
  </div>
<?php 

  include ("pages/footer.php");

?>
