<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
  <div id="<?php echo $pageClass; ?>" class="container">
    <div class="panel panel-default col-sm-6 col-sm-offset-3">
      <div class="panel-body">
        <form>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">HIIG Donor No.</label><br>
              <input type="text" id="donor_id" name="donor_id" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Sample number</label><br>
              <input type="text" id="sample_number" name="sample_number" class="form-control">
            </div>
          </div>
          <div class="col-sm-12 text-right">
            <a href="#" title="OK">
              <button class="btn btn-success">OK</button>
            </a>
            <a href="#" title="Cancel">
              <button class="btn btn-default">CANCEL</button>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php 

  include ("pages/footer.php");

?>