<?php
  global $title; 
  $title = "Site Search";

  include ("pages/setting.php");
  include ("pages/header.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-1.11.2.min.js"></script>

        <script src="assets/js/view/DN005.js" type="text/javascript"></script>
        <script src="assets/js/angular-service/collection_point-factory.js"></script>
    </head>
    <body ng-controller="siteSearch">
        <style>
            body{
                padding-top:12px;
            }
            .form-group{
                padding-bottom:25px;
            }
            .rmpadding{
                padding-bottom:0px;
                margin-bottom:0px;
            }
            .padBottom{
                padding-top:20px;
                padding-bottom:20px;
            }
            input[type="checkbox"] {
                transform:scale(1.5, 1.5);
            }
            .widthinput{
                max-width:65px;
            }
            .container{
                padding:80px;
            }
            .pad{
                padding-top:10px;
            }
            .headText{
                text-align:center;
                
            }
        </style>  
   <div class="container">
       <div class="col-lg-12">
           <div class="col-lg-6">
               <div class="form-group">
                <label for="" class="col-sm-3 control-label">Choice</label>
                <div class="col-sm-9">
                  <input type="radio"  placeholder="">Code
                </div>
            </div>
           <div class="form-group">
                <label for="" class="col-sm-3 control-label">Type</label>
                <div class="col-sm-9">
                  <input type="" class="form-control" style="width:330px" placeholder="" ng-model="data_search.type">
                </div>
            </div>
            <div class="form-group" style="padding-bottom:0; margin-bottom:15px;">
                <label for="" class="col-sm-3 control-label">Code</label>
                <div class="col-sm-9 input-group">
                  <input type="" class="form-control"  placeholder="" ng-model="data_search.code">
                  <span class="input-group-btn"><button class="btn btn-default" type="">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      </button>
                  </span>
                </div>
            </div>
           </div>
       </div>
       <div class="col-lg-12">
           <div class="col-md-6 headText"><b>List of Sitess</b></div>
           <div class="col-md-6 headText"><b>Regroupments of sites</b></div>
       </div>
       <div class="col-lg-1"></div>
       <div class="col-lg-5" style="width:350px; height:250px; border:2px solid #ddd;">
           <div class="col-xs-6 pad">
               <input type="" class="form-control" name="" value="">
           </div>
       </div>
       <div class="col-lg-2">
           <button style="margin-top:50px;" class="btn btn-default btn-lg btn-block" type="button" 
           data-toggle="modal" data-target="#myModal">
               <span class="glyphicon glyphicon-search"></span>
               Search</button>
       </div>

       <div class="col-lg-5" style="width:350px; height:250px; border:2px solid #ddd;">
           <div class="col-xs-6 pad">
               <input type="" class="form-control" name="" value="">
           </div>           
       </div>
       <div class="col-lg-12 padBottom">
            <div class="col-lg-1"></div>
            <div class="col-lg-3"><button type="" class="btn btn-success btn-block">Save</button></div>    
            <div class="col-lg-2"></div>
            <div class="col-lg-3"><button type="" class="btn btn-primary btn-block" ng-click="search()">OK</button></div>
            <div class="col-lg-3"><button type="" class="btn btn-danger btn-block">Abort</button></div>
        </div>
    </div>  
   </div>
   <div id="myModal" class="modal fade" role="dialog">
       <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
  </div>
       

   </div>
    </body>
</html>
