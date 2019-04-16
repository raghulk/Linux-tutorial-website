<?php 
session_start();
session_name("login");

    $title = "Lesson 2";
    $content ="Unix Lesson 2";
    $filename = "lesson2.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="script.js";

    include "../head.php"; 

?>
<div id ="lesson-wrap">
    <?php include"../assets/includes/sideMenu.php"; ?>
    <div id="rightColumn"> 
    <div class="content" >
        <h1> Lesson 2 </h1>
        <div class="lesson">
            <h3>Title </h3>
            <p> Content</p>

        </div> <!-- end of lesson -->
        <div class ="quiz">
            <h5>Ready to begin the quiz?</h5>
            <button id ="quiz-btn" type="button"><a href="#">Quiz 1</a></button>
        </div> <!-- end of quiz -->
    </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>
<?php include "../foot.php" ?>