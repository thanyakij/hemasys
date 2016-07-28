<?php

include "routecheck.php";

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
    case "DN016":
        $page = "DN016.php";
        $title = "Collection Initialisation";
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