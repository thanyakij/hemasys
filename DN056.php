<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
  <div id="<?php echo $pageClass; ?>" class="container content">

    <nav class="navbar navbar-default search">
      <form class="form-inline">
        <div class="form-group">
          <label for="select">Search</label>
          <input type="text" class="form-control" id="select_box1" name="select_box1">
          <input type="text" class="form-control" id="select_box2" name="select_box2">
        </div>
        <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
        <button type="submit" class="btn btn-default">+</button>
        <button type="submit" class="btn btn-default">-</button>
      </form>
    </nav>

    <div id="Search-by-criteria">
      <!-- Tabs -->
        <!-- Tabs -->
        <ul id="cr-tabs" class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#criteria" aria-controls="criteria" role="tab" data-toggle="tab">Criteria</a></li>
          <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">List</a></li>
          <li role="presentation"><a href="#infoPricing" aria-controls="infoPricing" role="tab" data-toggle="tab">Informations Pricing</a></li>
        </ul>

        <!-- Tab body -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="criteria">
          <!--Begin DN051-->
            <div class="row">
              <div class="left-panel col-sm-7">
                <div class="inner">
                  <div class="form-group form-inline">
                    <label>Individual</label>
                    <input type="text" id="individual" name="individual" class="form-control" style="margin-right: 20px;">
                    <button class="btn btn-primary">
                      <i class="glyphicon glyphicon-calendar"></i>
                    </button>
                    <label for="">DOB</label>
                    <input type="text" id="individual" name="individual">
                  </div>
                  <div class="form-group form-inline">
                    <label for="name">User</label>
                    <input type="text" id="name" name="name" class="form-control">
                    <small> Kleawkiahan, Widcharawut</small>
                  </div>
                  <div class="form-group form-inline">
                    <label for="site">Site</label>
                    <input type="text" id="site" name="site" class="form-control">
                    <small> RBC 12 - Songkhla</small>
                  </div>
                  <div class="form-group form-inline">
                    <label for="">Creation</label>
                    <input type="text" id="creation" name="creation"  class="form-control">
                  </div>
                  <div class="form-group form-inline">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <strong>Select</strong>
                      </div>
                      <div class="panel-body">
                        <label>Start</label>
                        <input type="text" id="" name=""> 
                        <label>End</label>
                        <input type="text" id="" name=""  class="form-control"> 
                      </div>
                    </div>
                    <label>Search Type</label>
                    <input type="text" id="" name=""  class="form-control">
                    <label for="">Display profile</label>
                    <input type="text" id="" name=""  class="form-control">
                  </div>
                </div>
              </div>
              <div class="right-panel col-sm-5">
                <div class="inner">
                  <label for="select">Select</label>
                  <textarea id="select" class="form-control" style="height: 247px; margin-bottom: 20px;">
                  </textarea>
                  <label for="note">Notes</label>
                  <input type="text" id="notes" name="notes" class="form-control" style="margin-bottom: 20px;">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="left-panel col-sm-5">
                <div class="inner">
                  <div class="form-group form-inline">
                    <label for="sort">Sort</label>
                    <input type="text" name="sort">
                  </div>
                  <table class="table table-bordered">
                    <tr>
                      <th>Catagories</th>
                      <th>Total</th>
                    </tr>
                    <tr>
                      <td>Others</td>
                      <td>376</td>
                    </tr>
                  </table>
                  <div class="form-group form-inline">
                    <label for="total">Total number</label><input type="text" name="total">
                  </div>
                </div>
              </div>
              <div class="right-panel col-sm-7">
                <div class="inner">
                  <div class="col-sm-7">
                    <div class="radio">
                      <label>
                        <input type="radio" name="options_radios" id="options_radios1" value="option1" checked>
                        List
                      </label><br>
                      <label>
                        <input type="radio" name="options_radios" id="options_radios1" value="option1" checked>
                        Mail
                      </label><br>
                      <label>
                        <input type="radio" name="options_radios" id="options_radios1" value="option1" checked>
                        Invitations
                      </label><br>
                      <label>
                        <input type="radio" name="options_radios" id="options_radios1" value="option1" checked>
                        Donor Search Report
                      </label><br>
                      <label>
                        <input type="radio" name="options_radios" id="options_radios1" value="option1" checked>
                        Collection index
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <form action="" class="form-group">
                    <label for="Deferral">Letter</label>
                    <div class="form-group">
                      <div class="input-group">                      
                        <input type="text" class="form-control" id="Deferral" name="Deferral">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">
                            <i class="glyphicon glyphicon-chevron-right"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <label for="Deferral">Date of collection</label>
                    <div class="form-group">
                      <input type="text" class="form-control" id="Deferral" name="Deferral">
                    </div>
                    <label for="Deferral">Donation category</label>
                    <div class="form-group">
                      <input type="text" class="form-control" id="Deferral" name="Deferral">
                    </div>
                    </form>
                    <p>
                      <label class="checkbox-inline">
                      <input type="checkbox" id="inline_checkbox1" name="inline_checkbox1" value="option1"> Reprint
                      </label>
                    </p>
                    <button class="btn btn-success"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Printing</button>
                  </div>
                </div>
              </div>
            </div>
          <!--End DN051-->
          </div>
          <div role="tabpanel" class="tab-pane" id="list">
            List
          </div>
          <div role="tabpanel" class="tab-pane" id="infoPricing">
            Information Pricing
          </div>
        </div>
      <!-- //Tabs -->
    </div>
    <section class="bottom-actions text-right">
      <button class="btn btn-success">
        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
        SAVE
      </button>
      <button class="btn btn-info">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        RUN SEARCH
      </button>
      <button class="btn btn-primary">OK</button>
      <button class="btn btn-danger">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        EXIT
      </button>
    </section>
  </div>
  <script type="text/javascript">
    $('#cr-tabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
  </script>
<?php 

  include ("pages/footer.php");

?>
