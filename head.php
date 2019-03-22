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
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono" rel="stylesheet">
<!--     anything else that you need; needs formatted as full <link> or <script> tag, proper path included-->
    <?php echo $extras ?>
    
</head>

<body>
    
<nav>
    <a href ="<?php echo $prefix ?>index.php"><img src ="<?php echo $prefix ?>assets/images/AltLogo%20(translucent%20no-tag).png" alt ="Basecamp Unix Logo" title ="Basecamp Unix"></a>
    
    <ul>
        <li><a href ="#">Login</a></li>
        <li><a href ="#">Glossary</a></li>
        <li><a href ="<?php echo $prefix ?>pages/directory.php">Lessons and Quizzes</a></li>
        <li><a href ="#">About</a></li>
    </ul>
    
</nav>