<?php

if(isset($_GET['page'])) {
  $pageID = $_GET['page'];
} else {
  $pageID = "HM02";
}

//$page = $page . ".php";


if(isset($_GET['modulenumber'])) {
  $modulenumber = $_GET['modulenumber'];
  switch ($modulenumber) {
    case 1:
        $pageID = "DN001";
        break;
    default:
        break;
   }
} 

/* -------------------------------------------------- * 
 *
 * routing below this line, setup page and title here
 *
 * -------------------------------------------------- */

if(isset($pageID)) {
  switch ($pageID) {
    case "DN001":
        $page = "DN001.php";
        $title = "Donor Module";
        break;
    default:
        $page = "HM02.php";
        $title = "Main menu";
        break;  
  }
} 


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