<?php 
    $title = "Quiz 1";
    $content ="Unix Quiz 1";
    $filename = "quiz1.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="script.js";

    include "../head.php"; 

    require "../../../../dbConnect.inc";


//get questions
if ($mysqli) {
    $sql = 'select QuizID, Title from Quizzes where LessonID = "1";';

        $res=$mysqli->query($sql);

        if($res){
            while($rowHolder = $res->fetch_assoc()){
                $quiz[] = $rowHolder;
            }
        }
    }

//get answers
if ($mysqli) {
    $sql = 'select AnswerID, QuizID, AnswerText, Correct from Answers where LessonID = "1";';

        $res=$mysqli->query($sql);

        if($res){
            while($rowHolder = $res->fetch_assoc()){
                $ans[] = $rowHolder;
            }
        }
    }

//split questions into numbers 
//question 1 ($q1) goes with answers in $a1, etc
$q1 = $quiz[0];
$q2 = $quiz[1];
$q3 = $quiz[2];
$q4 = $quiz[3];
$q5 = $quiz[4];

//shuffle questions


//arrays to hold answers for each question
$a1 = [];
$a2 = [];
$a3 = [];
$a4 = [];
$a5 = [];

//push answer to correct answer group
foreach($ans as $a){
   if($a['QuizID']==$q1['QuizID']){
       array_push($a1, $a);
   } else if ($a['QuizID']==$q2['QuizID']){
       array_push($a2, $a);
   } else if ($a['QuizID']==$q3['QuizID']){
       array_push($a3, $a);
   } else if ($a['QuizID']==$q4['QuizID']){
       array_push($a3, $a);
   } else if ($a['QuizID']==$q5['QuizID']){
       array_push($a3, $a);
   }
}

//shuffle answers
shuffle($a1);
shuffle($a2);
shuffle($a3);
shuffle($a4);
shuffle($a5);
$answers =[$a1, $a2, $a3, $a4, $a5];

function buildQuestion($quest, $aSet, $num){
    $qText = $quest['Title'];
    $an1 = [$aSet[0]['AnswerText'],$aSet[0]['Correct']];
    $an2 = [$aSet[1]['AnswerText'], $aSet[1]['Correct']];
    $an3 = [$aSet[2]['AnswerText'], $aSet[2]['Correct']];
    $an4 = [$aSet[3]['AnswerText'], $aSet[3]['Correct']];
    
    $html = "<p>$qText</p><input id ='A$num-1' type = 'radio' name = 'Q$num' value ='$an1[1]'><label for = 'A$num-1'>$an1[0]</label><br><input id ='A$num-2' type = 'radio' name = 'Q$num' value ='$an2[1]'><label for = 'A$num-2'>$an2[0]</label><br><input id ='A$num-3' type = 'radio' name = 'Q$num' value ='$an3[1]'><label for = 'A$num-3'>$an3[0]</label><br><input id ='A$num-4' type = 'radio' name = 'Q$num' value ='$an4[1]'><label for = 'A$num-4'>$an4[0]</label><br>";
        
    return $html;
}

$QA = [[$q1,$a1],[$q2,$a2],[$q3,$a3],[$q4,$a4],[$q5,$a5]];
shuffle($QA);


?>

<div id ="quiz-wrap">
    <?php include"../assets/includes/sideMenu.php"; ?>
    <div id="rightColumn"> 
    <div class="content" >
        <h1> Quiz 1 </h1>
        <div class="lesson">
            <p>Questions go here</p>
            <p>Question 1:</p>
            <input id ='A1-1' type = 'radio' name = 'Q1' value ='0'><label for = 'A1-1'>1</label><br>
            <input id ='A1-2' type = 'radio' name = 'Q1' value ='0'><label for = 'A1-2'>1</label><br>
            <input id ='A1-3' type = 'radio' name = 'Q1' value ='0'><label for = 'A1-3'>1</label><br>
            <input id ='A1-4' type = 'radio' name = 'Q1' value ='0'><label for = 'A1-4'>1</label><br>

            
            <?php 
//                $i=1;
//                foreach($QA as $qa){
//                    echo (buildQuestion($qa[0],$qa[1],$i));
//                    $i++;
//                }
            echo (buildQuestion($q1,$a1,1));
            echo (buildQuestion($q2,$a2,2));
            echo (buildQuestion($q3,$a3,3));
//            echo (buildQuestion($q4,$a4,4));
//            echo (buildQuestion($q5,$a5,5));
            //echo ($a1[0]['AnswerText']);
            
            var_dump($q4);
            var_dump($q5);
            var_dump($a4);
            var_dump($a5);
            ?>

        </div> <!-- end of lesson -->
        <div class ="quiz">
            <button id ="quiz-btn" type="button"><a href="#">Submit</a></button>
        </div> <!-- end of quiz -->
    </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>
<?php include "../foot.php" ?>