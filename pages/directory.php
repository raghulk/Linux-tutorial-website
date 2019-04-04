<?php 
    session_start();
    $title = "Lessons and Quizzes";
    $content ="Basecamp Unix Lessons and Quizzes";
    $prefix ="../"; 
    $styleFile ="LQ_directory.css";
    $script ="script.js";

    include "../head.php";
        
?>
<div id ="LQ-wrap">
    <h1 id ="lessons-h1">Lessons</h1>
    <div id ="lessons-dir">
        <div id ="l1" class ="lesson-card">
            <div class ="icon-holder"> &nbsp;</div>
            <h4>Lesson One</h4>
            <p>A very short lesson description.</p>
            <button>Begin</button>
        </div>
        <div id ="l2" class ="lesson-card">
            <div class ="icon-holder"> &nbsp;</div>
            <h4>Lesson Two</h4>
            <p>A very short lesson description.</p>
            <button>Begin</button>
        </div>
        <div id ="l3" class ="lesson-card">
            <div class ="icon-holder"> &nbsp;</div>
            <h4>Lesson Three</h4>
            <p>A very short lesson description.</p>
            <button>Begin</button>
        </div>
    </div>
<!--    end lessons-dir div-->
    <h1 id ="quizzes-h1">Quizzes</h1>
    <div id ="quizzes-dir">
        <div id ="q1" class ="quiz-card">
            <div class ="icon-holder"> &nbsp;</div>
            <h4>Quiz One</h4>
            <p>A very short quiz description.</p>
            <button>Begin</button>
        </div>
        <div id ="q2" class ="quiz-card">
            <div class ="icon-holder"> &nbsp;</div>
            <h4>Quiz Two</h4>
            <p>A very short quiz description.</p>
            <button>Begin</button>
        </div>
        <div id ="q3" class ="quiz-card">
            <div class ="icon-holder"> &nbsp;</div>
            <h4>Quiz Three</h4>
            <p>A very short quiz description.</p>
            <button>Begin</button>
        </div>
    </div>
</div>


<?php include "../foot.php"; ?>