<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" />
    <meta name = "description" content = "<?php echo $content ?>">
<!--    comes up to root directory, then gets the style for the common elements across the site - headers, fonts, etc-->
    <link rel ="stylesheet" href ="<?php echo $prefix ?>assets/css/style.css">
    <!-- common mobile responsive css -->
    <link rel = "stylesheet" href ="<?php echo $prefix ?>assets/css/mobile-responsive.css">
    <link rel="shortcut icon" href="<?php echo $prefix ?>assets/images/favicon.ico" type="image/x-icon">
    <!--    comes up to root, then gets any style file unique to a page or group of pages (set this file name at top of document)-->
    <link rel = "stylesheet" href ="<?php echo $prefix ?>assets/css/<?php echo $styleFile ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono" rel="stylesheet">
    <!-- js script for mobile responsive, code for mobile touch listener -->
    <script src="<?php echo $prefix?>assets/js/mobile-responsive-touch.js"></script>
    <script src="<?php echo $prefix?>assets/js/quizScript.js"></script>
<!--     anything else that you need; needs formatted as full <link> or <script> tag, proper path included-->
    <!-- <?php echo $extras ?> -->
    <!-- unknow what is this variable, by:weibin 
    This is anything that's not accounted for by the $script or $style variables. Anything you would put in the head, just type in the extras variable like you're inserting it straight into the head (include <link> or <script> tags) -Christine  -->
</head>

<body>
    
<!--The navigation is in the nav.php file, added in here-->
<!--This should be a separate file because the php is doing some checking to see if the user is logged in, and it would be confusing to put it here-->
<?php require "nav.php" ?>