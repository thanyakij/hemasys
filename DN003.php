<?php
  include ("pages/setting.php");
  include ("pages/header.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <script src="assets/js/view/DN004.js"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
  
    </head>
    <body ng-controller="collectionPointCtrl">
        <style>
            body{
                padding:20px;
            }
            .UIboxborder{
                border:1px #999 solid; 
                padding:5px;
            }
            .padding{
                padding-bottom:30px;
            }

        </style>
        <script>
            var d = new Date()
            
            //d.setDate()=d.getDate()
            console.log(d)
            $("#plandate").val(d.getUTCDate());
        </script>
    <div class="container">
        <div class="col-lg-6">
            <div class="form-group padding">
                <label for="" class="col-sm-3 control-label">Code</label>
                <div class="col-sm-9">
                  <input type="" class="form-control"  placeholder="" ng-model="cpCode">
                </div>
            </div>
            <div class="form-group padding">
                <label for="" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                  <input type="" class="form-control" id="plandate"  placeholder="" ng-model="cpDesc">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <button class="btn btn-primary btn-block" type="">Create</button>
            </div>
            <div class="col-lg-2">
                <button type="" class="btn btn-info btn-block" ng-click="searchCollectionPoint()">Search</button>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-danger btn-block" type="">Exit</button>
            </div> 
        </div>
            
        
    </div>
    </body>
</html>
