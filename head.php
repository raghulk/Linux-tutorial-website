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
    
<nav>
    <a href ="<?php echo $prefix ?>index.php"><img src ="<?php echo $prefix ?>assets/images/AltLogo%20(translucent%20no-tag).png" alt ="Basecamp Unix Logo" title ="Basecamp Unix"></a>
    <div class="screen-max-570">
        <ul>
            <li><a href ="#">Login</a></li>
            <li><a href ="<?php echo $prefix ?>pages/grossary.php">Glossary</a></li>
            <li><a href ="<?php echo $prefix ?>pages/directory.php">Lessons and Quizzes</a></li>
            <li><a href ="#">About</a></li>
        </ul>
    </div>
    <div class="screen-min-570">
        <div class="nav">
            <div class="burger-menu">
                <div class="burger-menu-block">
                    <div class="burger-float-block-right">
                        <div class="burger-float-right">
                            <div class="burger"></div>
                            <div class="burger"></div>
                            <div class="burger"></div>
                        </div>
                    </div>
                    <!-- .div menu -->
                    <div class="li">
                        <div><a href ="#">Login</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/grossary.php">Glossary</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/directory.php">Lessons and Quizzes</a></div>
                        <div><a href ="#">About</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>