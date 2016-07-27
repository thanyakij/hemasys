<!DOCTYPE html>
<html ng-app="hemasys">
  <head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/components/scripts.js"></script>
		<script src="assets/js/view/DN019-totalDonate.js"></script>
    <style>
      body{
        padding-top:20px;
      }
    </style>
  </head>
  <body class="container">
    <div ng-controller="totalDonateCtrl">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <table class="table table-bordered" ng-model="table" row-selected-color="pink">
          <thead>
            <th style="width:33%;">Number of external donations</th>
            <th style="width:33%;">Categoty</th>
            <th style="width:33%;">Total number of donations</th>
          </thead>
          <tbody>
            <tr ng-repeat="item in total_donation track by $index" ng-click="selectedRow(item)">
              <td>{{ item.DNUMBEROFEXTERNALDONATIONS }}</td>
              <td>{{ item.DCATEGORY }}</td>
              <td>{{ item.DTOTALNUMBEROFDONATIONS }}</td>
            </tr>
          </tbody>
        </table>
        <div class="col-md-12 form-group">
          <div class="col-md-4"><input ng-model="number" class="form-control"></div>
          <div class="col-md-4"><input ng-model="category" class="form-control"></div>
          <div class="col-md-4"><input ng-model="total" class="form-control"></div>
        </div>
        <div class="col-md-12 form-group">
          <div class="col-md-3"></div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-block" ng-click="addTotalDonation()">Add</button>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-2">
            <button class="btn btn-danger btn-block" ng-click="removeTotalDonation()">Remove</button>
          </div>
          <div class="col-md-3"></div>
        </div>

        <div class="col-md-12" style="padding:20px;"></div>
        <div class="col-lg-3"><button class="btn btn-success btn-block" ng-click="doSave()">Save</button></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3"><button class="btn btn-primary btn-block" ng-click="doOk()">OK</button></div>
        <div class="col-lg-3"><button class="btn btn-danger btn-block" ng-click="doAbort()">Abort</button></div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </body>
</html>
