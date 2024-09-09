<?php
session_start();

if (!isset($_SESSION['email'])) {
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bracket Plus">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/bracketplus">
  <meta property="og:title" content="Bracket Plus">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

  <?php include "partial/styles.php"; ?>


</head>

<body>

  <!-- ########## START: LEFT PANEL ########## -->
  <?php include "partial/left_panel.php"; ?>
  <!-- ########## END: LEFT PANEL ########## -->

  <!-- ########## START: HEAD PANEL ########## -->
  <?php include "partial/top_panel.php"; ?>
  <!-- ########## END: HEAD PANEL ########## -->

  <!-- ########## START: RIGHT PANEL ########## -->
  <?php include "partial/right_panel.php"; ?>
  <!-- ########## END: RIGHT PANEL ########## --->

  <!-- ########## START: MAIN PANEL ########## -->
  
  <!-- ########## END: MAIN PANEL ########## -->

  <?php include "partial/js_files.php"; ?>

</body>

</html>