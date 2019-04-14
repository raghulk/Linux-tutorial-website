<?php 
    $title = "Quiz 2";
    $content ="Unix Quiz 2";
    $filename = "quiz2.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="script.js";

    include "../head.php"; 
?>

<div id ="quiz-wrap">
    <?php include"../assets/includes/sideMenu.php"; ?>
    <div id="rightColumn"> 
    <div class="content" >
        <h1> Quiz 2 </h1>
        <div class="lesson">
            <p>Questions go here</p>

        </div> <!-- end of lesson -->
        <div class ="quiz">
            <button id ="quiz-btn" type="button"><a href="#">Submit</a></button>
        </div> <!-- end of quiz -->
    </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>
<?php include "../foot.php" ?>