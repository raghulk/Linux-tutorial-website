<?php
session_start();
session_name("login");

    $title = "About";
    $content ="content";
    $filename = "about.php";
    $prefix ="../";
    $styleFile ="about.css";
    $script ="script.js";

    include "../head.php";

?>
<div id ="wrapper">
    <h1 id ="about-h1">About (h1)</h1>

    <div class = "boxComment">
    <p>This text is the actual content of the box. We have added a 25px padding, 25px margin and a 25px green border.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
   </div>

    <h3 class ="subheading-h3">Subheading (h3)</h3>
    <div class = "boxComment">
    <p>This text is the actual content of the box. We have added a 25px padding, 25px margin and a 25px green border.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
   </div>

    <h3 class ="subheading-h3">Contact (h3)</h3>

    <div class = "contactComment">
    <p>Tariq Afoke tba8537@rit.edu</p>
    <p>Arber Deski ad9238@rit.edu</p>
    <p>Raghul Krishnan rk2384@rit.edu</p>
    <p>Christine McCullough cxm1880@rit.edu</p>
    <p>Christopher St Denny crs2417@rit.edu</p>
    <p>WeiBin Yang wy9077@rit.edu</p>
   </div>
 </div>


<?php include "../foot.php"; ?>
