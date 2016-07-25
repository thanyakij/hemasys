<?php

  global $title; 
  $title = "Medical History File";

  include ("pages/setting.php");
  include ("pages/header.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

    <script src="assets/js/view/DN021.js" type="text/javascript"></script>
  </head>
  <body ng-controller="dn021">
    <style media="screen">
      body{
        padding-top: 20px;
      }
      .form-group{
        padding-bottom: 30px;
      }
    </style>

      <div class="container">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
        <div class="panel panel-default">
          <div class="panel-heading">HIIG Donor No. {{donor.DONOR_ID}} : {{donor.FIRST_NAME}} {{donor.SURNAME}}</div>
          <table class="table table-bordered table-hover">
            <tr>
              <th width="30%">Exams</th>
              <th width="30%">Result</th>
              <th width="10%">unit</th>
              <th >Date of first det.</th>
              <th >Date of last det.</th>
            </tr>
            <tr>
              <td>Null</td><td>Null</td><td>Null</td><td>Null</td><td>Null</td>
            </tr>
            <tr>
              <td>Null</td><td>Null</td><td>Null</td><td>Null</td><td>Null</td>
            </tr>
            <tr>
              <td>Null</td><td>Null</td><td>Null</td><td>Null</td><td>Null</td>
            </tr>
            <tr>
              <td>Null</td><td>Null</td><td>Null</td><td>Null</td><td>Null</td>
            </tr>
          </table>
          </div>
        </div>
        </div>
      </div>

      <!--DN29-Detailbox-->
      <div class="container">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="form-group">
            <label for="" class="col-sm-5 control-label"></label>
            <div class="col-sm-7"></div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-4 control-label">First sample</label>
            <div class="col-sm-8">
              <input type="" class="form-control"  placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Last sample</label>
            <div class="col-sm-8">
              <input type="" class="form-control"  placeholder="">
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="form-group">
            <label for="" class="col-sm-5 control-label">Sample tested</label>
            <div class="col-sm-3">
              <input type="" class="form-control"  placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-5 control-label">First authorising lab</label>
            <div class="col-sm-7">
              <input type="" class="form-control"  placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-5 control-label">Last authorising lab</label>
            <div class="col-sm-7">
              <input type="" class="form-control"  placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-5 control-label"></label>
            <div class="col-sm-7"></div>
          </div>
          <div class="col-sm-6"></div>
          <div class="col-sm-6">
            <button class="btn btn-danger btn-lg btn-block">Exit</button>
          </div>
        </div>
      </div>

  </body>
</html>
