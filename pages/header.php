<!DOCTYPE html>
<html ng-app="hemasys"><head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/metro-ui/metro.css">
      <link rel="stylesheet" type="text/css" href="assets/css/metro-ui/metro-icons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/metro-ui/metro-colors.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/_metronacci.css">
      <link rel="stylesheet" type="text/css" href="assets/css/_colour.css">
      
      <script src="assets/js/components/scripts.js"></script>
      <script src="assets/js/jquery-2.2.1.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/materialize.min.js"></script>	
      <script src="assets/js/metro-ui/metro.js"></script>
      <?php

      include ("pages/setting.php");

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
