<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
<div id="<?php echo $pageClass; ?>" class="container">
  <div class="panel panel-default">
    <div class="panel-heading text-center">
      <strong>Collection the </strong>
      <span>27-Apr-2559</span>
      <strong> at : </strong><span>0000W</span>
    </div>
    <table class="table table-bordered table-hover">
      <tr>
        <th>Sample number</th>
        <th>HIIG Donor No.</th>
        <th>Category</th>
        <th>Bag type</th>
        <th>Use</th>
        <th>Volumn</th>
        <th>Time</th>
        <th>Duration</th>
      </tr>
      <tr>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
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
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>NULL</td>
      </tr>
    </table>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-6">
        <!-- DN46-Leftbox-Upper-->
        <div class="row">
          <div class="col-md-5">
            <label for="">HIIG Donor No.</label>
          </div>
          <div class="col-md-7">
            <input type="text" id="donor_id" name="donor_id" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="">Sample number</label>
          </div>
          <div class="col-md-7">
            <input type="text" id="sample_number" name="sample_number" class="form-control">
          </div>      
        </div>
        <hr>
        <!-- DN46-Leftbox-Lower-->
        <div class="row">
          <div class="col-md-5">
            <label for="">Donation category</label>
          </div>
          <div class="col-sm-7">
            <select class="form-control">
              <option>Options 1</option>
              <option>Options 2</option>
              <option>Options 3</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <label for="">Bag type</label>
          </div>
          <div class="col-sm-4">
            <div class="input-group">
              <input type="text" id="bag_type" name="bag_type" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                <i class="glyphicon glyphicon-chevron-right"></i>
                </button>
              </span>
            </div>
          </div>
          <div class="col-sm-3">
            <input type="text" name="" style="width: 100%;">
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <label>Use</label>
          </div>
          <div class="col-sm-7">
            <select class="form-control">
              <option>Options 1</option>
              <option>Options 2</option>
              <option>Options 3</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <label for="">Additional Examinations</label>
          </div>
          <div class="col-sm-7">
            <div class="input-group">
              <input type="text" id="bag_type" name="bag_type" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                <i class="glyphicon glyphicon-chevron-right"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <label for="">Rank</label>
          </div>
          <div class="col-sm-7">
            <div class="form-inline">
              <input type="text" name="" style="width: 50%;">
              <input type="text" name="" style="width: 50%; float: left;">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
              <div class="col-md-10">
                <div class="row">
                <!--DN46-Rightbox-Upper-->
                  <div class="col-md-5">
                    <label for="">Prescribed volumn</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" id="sample_volume" name="sample_volume" class="form-control">
                  </div>
                  <div class="col-md-5">
                    <label for="">Volume</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" id="sampling_time" name="sampling_time" class="form-control">
                  </div>
                  <div class="col-md-5">
                    <label for="">Time</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" id="sampling_duration" name="sampling_duration" class="form-control">
                  </div>
                  <div class="col-md-5">
                    <label for="">Duration</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" id="" name="" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <label for="">Sampler</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" id="name" name="name">
                  </div>
                  <div class="col-md-5">
                    <label for="">Sampler 2</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" id="" name="">
                  </div>
                  <div class="col-md-5">
                    <label for="">Sample problems</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" id="No. of samples" name="sampling_problems">
                  </div>
                </div>
              </div>
              <!--DN46-Rightbox-Lower-->
              <div class="col-sm-2">
                <!--DN46-True-False-->
                <div class="">
                  <button class="btn btn-success btn-lg pull-top"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                  <p></p>
                  <button class="btn btn-danger btn-lg pull-bottom"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </div>
              </div>
            </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-sm-4">
        <div class="form-group form-inline">
          <label for="">No. of samples</label><input type="text" id="" name="">
        </div>
      </div>
      <div class="col-sm-4 pull-right text-right">
        <button class="btn btn-lg btn-danger">EXIT</button>
      </div>
    </div>
  </div>
</div> 
<?php 

  include ("pages/footer.php");

?>