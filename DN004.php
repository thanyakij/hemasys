<?php
  include ("pages/setting.php");
  include ("pages/header.php");
?>

<!DOCTYPE html>
<html>
  <meta charset="UTF-8"></meta>
  <head>
    <script src="assets/js/view/DN004.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
      body {
        padding-top:12px;
      }
      .form-group {
        padding-bottom:25px;
      }
      .rmpadding {
        padding-bottom:0px;
        margin-bottom:0px;
      }
      .padBottom {
        padding-top:20px;
        padding-bottom:20px;
      }
      input[type="checkbox"] {
        transform:scale(1.5, 1.5);
      }
      .widthinput {
        max-width:65px;
      }
      .invalid {
        border: 2px solid red;
      }
    </style>

    
  </head>
  <body class="container" ng-controller="collectionPointCtrl">
    <form name="cp" ng-submit="submit()">
      <div class="col-lg-8">
        <div class="form-group" style="padding-bottom:0; margin-bottom:5px;">
          <label class="col-sm-1 control-label">Code</label>
          <div class="col-sm-3">
            <input type="" class="form-control" placeholder=""  maxlength="6" ng-model="cp.COLLECTION_POINT_CODE">
          </div>
          <div class="form-group" style="padding-bottom:0; margin-bottom:15px;">
          <label class="col-sm-1 control-label">Site</label>
          <div class="col-sm-4 input-group">
            <input type="" class="form-control" placeholder=""  maxlength="4" ng-model="cp.SITE_CODE">
            <span class="input-group-btn"><button class="btn btn-default" type="">
              <span class="glyphicon glyphicon-chevron-right"></span>
              </button
            </span>
            <div class="col-sm-3">
              <p></p>
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Description</label>
          <div class="col-sm-9">
            <input type="" class="form-control" placeholder="" ng-model="cp.NAME">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Name of location</label>
          <div class="col-sm-9">
            <input type="" class="form-control" placeholder="" ng-model="cp.LOCATION_NAME">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Address1</label>
          <div class="col-sm-9">
            <input type="" class="form-control" placeholder="" ng-model="cp.ADDRESS1">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Address2</label>
          <div class="col-sm-9">
            <input type="" class="form-control" placeholder="" ng-model="cp.ADDRESS2">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Province</label>
          <div class="col-sm-4">
            <input type="" class="form-control" placeholder="" ng-model="cp.PROVINCE">
          </div>
          <label class="col-sm-2 control-label">Country</label>
          <div class="col-sm-4">
            <input type="" class="form-control" placeholder="" ng-model="cp.COUNTY_CODE">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Rout</label>
          <div class="col-sm-4">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.ROUTE_CODE">
          </div>
          <label class="col-sm-2 control-label">Postcode</label>
          <div class="col-sm-4">
            <input type="" class="form-control" placeholder=""  maxlength="5" ng-model="cp.ZIPCODE">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Region</label>
          <div class="col-sm-4">
            <input type="" class="form-control" placeholder="" ng-disabled="true">
          </div>
          <label class="col-sm-2 control-label">UrbanComm</label>
          <div class="col-sm-4">
            <input type="" class="form-control" placeholder="" ng-disabled="true">
          </div>
        </div>
        <div class="form-group" style="padding-bottom:0; margin-bottom:15px;">
          <label class="col-sm-3 control-label">Association</label>
          <div class="col-sm-5 input-group">
            <input type="" class="form-control" placeholder=""  maxlength="3" ng-model="cp.ASSOCIATION_CODE">
            <span class="input-group-btn"><button class="btn btn-default" type="">
              <span class="glyphicon glyphicon-chevron-right"></span>
              </button>
            </span>
            <div class="col-sm-4">
              <p></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="col-sm-4 control-label">Surface</label>
            <div class="col-sm-8">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.SERFACE">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Sanitary</label>
            <div class="col-sm-8">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.TOILET_COUNT">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Cabin</label>
            <div class="col-sm-8">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.CABIN_COUNT">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">PowerSP</label>
            <div class="col-sm-8">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.ELECTRICAL_SOCKET_COUNT">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Kitchens</label>
            <div class="col-sm-8">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.KITCHEN_COUNT">
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label class="col-sm-4 control-label">Type</label>
            <div class="col-sm-8">
              <select class="form-control" ng-model="cp.COLLECTION_TYPE_CODE">
                <option value="1">Type 1</option>
                <option value="2">Type 2</option>
                <option value="3">Type 3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Category</label>
            <div class="col-sm-8">
              <select class="form-control" ng-model="cp.CATEGORY_CODE">
                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
                <option value="3">Category 3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Method</label>
            <div class="col-sm-8">
              <select class="form-control" ng-model="cp.COLLECTION_MODE">
                <option value="1">Method 1</option>
                <option value="2">Method 2</option>
                <option value="3">Method 3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Plasma</label>
            <div class="col-sm-8">
              <div class="col-xs-8 big-checkbox">
                <input type="checkbox" placeholder="" ng-disabled="true">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Donation</label>
            <div class="col-sm-8">
              <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.STAT_EXPECTED">
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="form-group">
          <label class="col-xs-4 control-label">in use</label>
          <div class="col-xs-8 big-checkbox">
            <input type="checkbox" placeholder="" ng-model="cp.ACTIVE" ng-true-value="'T'" ng-false-value="'F'">
          </div>
        </div>
        <div class="form-group">
          <label class="col-xs-6 control-label">Disactivation date</label>
          <div class="col-xs-6">
            <input class="form-control" placeholder="" ng-model="cp.DEACTIVATED_DATE" date-input>
          </div>
        </div>
        <div class="form-group"></div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Mobile</label>
          <div class="col-sm-9">
            <input type="" class="form-control" placeholder=""  maxlength="10" ng-model="cp.COMMUNITY_TEL">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Tel.</label>
          <div class="col-sm-9">
            <input type="" class="form-control" placeholder=""  maxlength="10" ng-model="cp.COMMUNITY_SITE_TEL">
          </div>
        </div>
        <div class="form-group"> </div>
        <div class="form-group"> </div>
        <div class="col-xs-12 form-group rmpadding">
          <label class="control-label">Condition of assignment to a donor</label>
          <div class="input-group">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.CONDITION_CODE">
            <span class="input-group-btn">
              <button type="" class="btn btn-default">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </button>
            </span>
          </div>
        </div>
        <div class="col-xs-12 form-group rmpadding">
          <label class="control-label">New community if false conditionr</label>
          <div class="input-group">
            <input type="" class="form-control" placeholder="" ng-disabled="true" ng-model="cp.NEW_COLLECTION_POINT_CODE">
            <span class="input-group-btn">
              <button type="" class="btn btn-default">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </button>
            </span>
          </div>
        </div>
      </div>
      <div class="col-lg-12" style="padding-top:10px;">
        <div class="col-lg-1"></div>
        <div class="col-lg-11 form-inline">
          <label class="control-label">Collection frequency</label>
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
          <input type="" class="form-control widthinput" placeholder="" ng-disabled="true">
        </div>
      </div>
      <div class="col-lg-12 padBottom">
        <div class="col-lg-1"> </div>
        <div class="col-lg-3"><button type="submit" class="btn btn-success btn-block">Save</button></div>
        <div class="col-lg-2"></div>
        <div class="col-lg-3"><button type="" class="btn btn-primary btn-block">OK</button></div>
        <div class="col-lg-3"><button type="" class="btn btn-danger btn-block">Abort</button></div>
      </div>
    </form>
  </body>
</html>


<!-- 
  <script>
      var app = angular.module('app',[]);
      app.controller('collectionPointCtrl', function($scope) {
        $scope.submit = function() {
          $scope.cp.$error = {};

          if (typeof $scope.cp.code === 'undefined') {
            $scope.cp.$error.code = true;
          } else {
            if ($scope.cp.code.toString().length != 6) {
              $scope.cp.$error.code = true;
            }
          }

          if (typeof $scope.cp.address1 === 'undefined') {
            $scope.cp.$error.address1 = true;
          }

          if (typeof $scope.cp.description === 'undefined') {
            $scope.cp.$error.description = true;
          }

          if (typeof $scope.cp.site === 'undefined') {
            $scope.cp.$error.site = true;
          } else {
            if ($scope.cp.site.toString().length != 4) {
              $scope.cp.$error.site = true;
            }
          }

          if (typeof $scope.cp.name_of_location === 'undefined') {
            $scope.cp.$error.name_of_location = true;
          }

          if (typeof $scope.cp.address2 === 'undefined') {
            $scope.cp.$error.address2 = true;
          }

          if (typeof $scope.cp.province === 'undefined') {
            $scope.cp.$error.province = true;
          }

          if (typeof $scope.cp.country === 'undefined') {
            $scope.cp.$error.country = true;
          }

          if (typeof $scope.cp.postcode === 'undefined') {
            $scope.cp.$error.postcode = true;
          } else {
            if ($scope.cp.postcode.toString().length != 5) {
              $scope.cp.$error.postcode = true;
            }
          }

          if (typeof $scope.cp.association === 'undefined') {
            $scope.cp.$error.association = true;
          } else {
            if ($scope.cp.association.toString().length != 3) {
              $scope.cp.$error.association = true;
            }
          }

          if (typeof $scope.cp.type === 'undefined') {
            $scope.cp.$error.type = true;
          }

          if (typeof $scope.cp.category === 'undefined') {
            $scope.cp.$error.category = true;
          }

          if (typeof $scope.cp.method === 'undefined') {
            $scope.cp.$error.method = true;
          }

          if (typeof($scope.cp.disactivation_date === 'undefined') && !$scope.cp.in_use) {
            $scope.cp.$error.disactivation_date = true;
          }

          if (typeof $scope.cp.mobile === 'undefined') {
            $scope.cp.$error.mobile = true;
          } else {
            if ($scope.cp.mobile.toString().length != 10) {
              $scope.cp.$error.mobile = true;
            }
          }

          if (typeof $scope.cp.tel === 'undefined') {
            $scope.cp.$error.tel = true;
          } else {
            if ($scope.cp.tel.toString().length != 10) {
              $scope.cp.$error.tel = true;
            }
          }
        };
      });

      app.directive('validNumber', function() {
        return {
          require: '?ngModel',
          link: function(scope, element, attrs, ngModelCtrl) {
            if(!ngModelCtrl) {
              return;
            }

            ngModelCtrl.$parsers.push(function(val) {
              if (angular.isUndefined(val)) {
                  var val = '';
              }
              var clean = val.replace(/[^0-9]+/g, '');
              if (val !== clean) {
                ngModelCtrl.$setViewValue(clean);
                ngModelCtrl.$render();
              }
              return clean;
            });

            element.bind('keypress', function(event) {
              if(event.keyCode === 32) {
                event.preventDefault();
              }
            });
          }
        };
      });

      app.directive('validCode', function() {
        return {
          require: '?ngModel',
          link: function(scope, element, attrs, ngModelCtrl) {
            if(!ngModelCtrl) {
              return;
            }

            ngModelCtrl.$parsers.push(function(val) {
              if (angular.isUndefined(val)) {
                  var val = '';
              }
              var clean = val.replace( /[^(0-9|A-Z|a-z)]+/g, '');
              clean = clean.toUpperCase();
              if (val !== clean) {
                ngModelCtrl.$setViewValue(clean);
                ngModelCtrl.$render();
              }
              return clean;
            });

            element.bind('keypress', function(event) {
              if(event.keyCode === 32) {
                event.preventDefault();
              }
            });
          }
        };
      });
    </script>

 -->
