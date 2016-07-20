<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
<div id="<?php echo $pageClass; ?>" class="container">
  <form class="col-sm-8 col-sm-offset-2">
  <div class="panel panel-default">
    <div class="panel-body text-center">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <label for="">Hematos No</label>
        </div>
        <div class="col-sm-6">
          <input type="text" id="donor_id" name="donor_id" class="form-control">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <label for="">National ID</label>
        </div>
        <div class="col-sm-6">
          <input type="text" id="" name="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <label for="">ABMDR ID</label>
        </div>
        <div class="col-sm-6">
          <input type="text" id="" name="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2 col-sm-offset-1">
          <label for="">Identifier</label>
        </div>
        <div class="col-sm-4">
          <input type="text" id="" name="" class="form-control">
        </div>
        <div class="col-sm-1">
          <label for="">Type</label>
        </div>
        <div class="col-sm-3">
          <select class="form-control">
            <option>Options 1</option>
            <option>Options 2</option>
            <option>Options 3</option>
          </select>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <label for="">First name</label>
        </div>
        <div class="col-sm-6">
          <input type="text" id="" name="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <label for="">Surname</label>
        </div>
        <div class="col-sm-6">
          <input type="text" id="" name="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <label for="">DOB</label>
        </div>
        <div class="col-sm-3">
          <input type="date" id="" name="" class="form-control">
        </div>
      </div>
    </div>
  </div>
    <p></p>
    <div class="panel panel-default">
      <div class="panel-body text-center">
        <button class="btn btn-lg btn-info">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
        <button class="btn btn-lg btn-danger">EXIT</button>
      </div>
    </div>
  </form>
</div>
<?php 

  include ("pages/footer.php");

?>