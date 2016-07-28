<?php

if(isset($_GET['page'])) {
  $pageID = $_GET['page'];
} else {
  $pageID = "HM02";
}

//$page = $page . ".php";


if(isset($_GET['modulenumber'])) {
  $goto = $_GET['modulenumber'];
  switch ($goto) {
    case 1:
        $pageID = "DN001";
        break;
    default:
        break;
   }
} 

if(isset($_GET['donormoduleitem'])) {
  $goto = $_GET['donormoduleitem'];
  switch ($goto) {
    case 11:
        $pageID = "DN016";
        break;
    default:
        break;
   }
} 

?>