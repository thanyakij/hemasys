<!DOCTYPE html>
<html ng-app="hemasys">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <script src="assets/js/components/scripts.js"></script>
      <script src="assets/js/angular-service/variables-service.js"></script>
      <script src="assets/js/jquery-2.2.1.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <style type="text/css">
      </style>
      <?php

      include ("pages/setting.php");
      include ("pages/route.php");

      ?>
      <title><?php
        echo $title;
        echo " ".$separator." ";
        echo $siteName;
        echo $titleSuffix;
      ?></title>

      <?php
        $pageClass = basename($_SERVER["SCRIPT_FILENAME"], '.php');
      ?>

    </head>
    <body>
