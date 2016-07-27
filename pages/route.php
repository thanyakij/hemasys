
<?php

if(isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = "HM02";
}

$page = $page . ".php";
?>

<?php /*

route variables
page={DN012, HM02, LB058, ..., etc} //pageID
donorid=xxxxxxxxxx //Donor ID (String)
task= //text
  = login //
  = reception //

*/
?>