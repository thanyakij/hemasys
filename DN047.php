<?php
global $title; 
$title = "Planning File";

include ("pages/setting.php");
include ("pages/header.php");

?>
<div id="<?php echo $pageClass; ?>" class="container">
  <!--DN47-->
  <table class="table table-bordered table-hover">
    <tr>
      <th>Code</th>
      <th>Description</th>
    </tr>
    <tr>
      <td>NULL</td>
      <td>NULL</td>
    </tr>
    <tr>
      <td>NULL</td>
      <td>NULL</td>
    </tr>
    <tr>
      <td>NULL</td>
      <td>NULL</td>
    </tr>
    <tr>
      <td>NULL</td>
      <td>NULL</td>
    </tr>
  </table>
  <div class="panel panel-default">
    <div class="panel-body text-center">
      <button class="btn btn-lg btn-success">OK</button>
      <button class="btn btn-lg btn-danger">Abort</button>
    </div>
  </div>
</div>
<?php 

  include ("pages/footer.php");

?>
