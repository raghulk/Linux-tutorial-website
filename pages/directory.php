<?php 
session_start();
session_name("login");
if(isset($_SESSION['name'])){
    $welcome = $_SESSION['name'];
}else{
    $welcome = '';
}

    $title = "Lessons and Quizzes";
    $content ="Basecamp Unix Lessons and Quizzes";
    $filename = "directory.php";
    $prefix ="../"; 
    $styleFile ="LQ_directory.css";
    $script ="script.js";

    include "../head.php";
        
?>
<div id ="LQ-wrap">
    <h1 id ="lessons-h1">Lessons</h1>
    <div id ="lessons-dir">
        <div id ="l1" class ="lesson-card">
            <div class ="icon-holder"><img src ="../assets/images/monitor_DkBl.png"></div>
            <h4>Lesson One</h4>
            <p>Basic Unix commands and navigation</p>
            <a href ="<?php echo $prefix;?>pages/lesson1.php"><button>Begin</button></a>
        </div>
        <div id ="l2" class ="lesson-card">
            <div class ="icon-holder"><img src ="../assets/images/cp_DkBl.png"></div>
            <h4>Lesson Two</h4>
            <p>Creating, editing, and protecting files</p>
            <a href ="<?php echo $prefix;?>pages/lesson2.php"><button>Begin</button></a>
        </div>
        <div id ="l3" class ="lesson-card">
            <div class ="icon-holder"><img src ="../assets/images/up_DkBl.png"></div>
            <h4>Lesson Three</h4>
            <p>Sorting, searching, and reading from files</p>
            <a href ="<?php echo $prefix;?>pages/lesson3.php"><button>Begin</button></a>
        </div>
    </div>
<!--    end lessons-dir div-->
    <h1 id ="quizzes-h1">Quizzes</h1>
    <div id ="quizzes-dir">
        <div id ="q1" class ="quiz-card">
            <div class ="icon-holder"><img src ="../assets/images/monitor_LtBl.png"></div>
            <h4>Quiz One</h4>
            <p>Basic commands in Unix</p>
            <a href ="<?php echo $prefix;?>pages/quiz1.php"><button>Begin</button></a>
        </div>
        <div id ="q2" class ="quiz-card">
            <div class ="icon-holder"><img src ="../assets/images/cp_LtBl.png"></div>
            <h4>Quiz Two</h4>
            <p>File manipulation</p>
            <a href ="<?php echo $prefix;?>pages/quiz2.php"><button>Begin</button></a>
        </div>
        <div id ="q3" class ="quiz-card">
            <div class ="icon-holder"><img src ="../assets/images/up_LtBl.png"></div>
            <h4>Quiz Three</h4>
            <p>Advanced Unix commands</p>
            <a href ="<?php echo $prefix;?>pages/quiz3.php"><button>Begin</button></a>
        </div>
    </div>
</div>


<?php include "../foot.php"; ?>