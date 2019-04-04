<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name = "description" content = "<?php echo $content ?>">
<!--    comes up to root directory, then gets the style for the common elements across the site - headers, fonts, etc-->
    <link rel ="stylesheet" href ="<?php echo $prefix ?>assets/css/style.css">
<!--    comes up to root, then gets any style file unique to a page or group of pages (set this file name at top of document)-->
    <link rel = "stylesheet" href ="<?php echo $prefix ?>assets/css/<?php echo $styleFile ?>">
    <!-- common mobile responsive css -->
    <link rel = "stylesheet" href ="<?php echo $prefix ?>assets/css/mobile-responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono" rel="stylesheet">
<!--     anything else that you need; needs formatted as full <link> or <script> tag, proper path included-->
    <!-- <?php echo $extras ?> -->
    <!-- unknow what is this variable, by:weibin -->
</head>

<body>
    
<?php require "nav.php" ?>