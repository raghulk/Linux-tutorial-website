<?php 
    $title = "Quiz 2";
    $content ="Unix Quiz 2";
    $filename = "quiz2.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="script.js";

    include "../head.php"; 

    require "../../../../dbConnect.inc";

//get questions
if ($mysqli) {
    $sql = 'select QuestionID, Question from Questions where LessonID = "2";';

        $res=$mysqli->query($sql);

        if($res){
            while($rowHolder = $res->fetch_assoc()){
                $quiz[] = $rowHolder;
            }
        }
    }

//get answers
if ($mysqli) {
    $sql = 'select AnswerID, QuestionID, AnswerText, Correct from Answers where LessonID = "2";';

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
   if($a['QuestionID']==$q1['QuestionID']){
       array_push($a1, $a);
   } else if ($a['QuestionID']==$q2['QuestionID']){
       array_push($a2, $a);
   } else if ($a['QuestionID']==$q3['QuestionID']){
       array_push($a3, $a);
   } else if ($a['QuestionID']==$q4['QuestionID']){
       array_push($a4, $a);
   } else if ($a['QuestionID']==$q5['QuestionID']){
       array_push($a5, $a);
   }
}



//shuffle answers
shuffle($a1);
shuffle($a2);
shuffle($a3);
shuffle($a4);
shuffle($a5);

//array of shuffled answers
$answers =[$a1, $a2, $a3, $a4, $a5];

//puts questions and answers into their HTML format 
//@param $quest = question array holding question and ID 
//@param $aSet = answer array holding all answers and their values
//@param num = number of of question in page for IDs and names 
function buildQuestion($quest, $aSet, $num){
    $qText = $quest['Question'];
    $an1 = [$aSet[0]['AnswerText'],$aSet[0]['Correct']];
    $an2 = [$aSet[1]['AnswerText'], $aSet[1]['Correct']];
    $an3 = [$aSet[2]['AnswerText'], $aSet[2]['Correct']];
    $an4 = [$aSet[3]['AnswerText'], $aSet[3]['Correct']];
    
    //NOTE: a value of 1 means a correct answer. 0 is wrong. These are auto populated when the question is built
    
    $html = "<p>$qText</p><input id ='A$num-1' type = 'radio' name = 'Q$num' value ='$an1[1]'><label for = 'A$num-1'>$an1[0]</label><br><input id ='A$num-2' type = 'radio' name = 'Q$num' value ='$an2[1]'><label for = 'A$num-2'>$an2[0]</label><br><input id ='A$num-3' type = 'radio' name = 'Q$num' value ='$an3[1]'><label for = 'A$num-3'>$an3[0]</label><br><input id ='A$num-4' type = 'radio' name = 'Q$num' value ='$an4[1]'><label for = 'A$num-4'>$an4[0]</label><br>";
        
    return $html;
}

//3D array pairing questions with answers 
$QA = [[$q1,$a1],[$q2,$a2],[$q3,$a3],[$q4,$a4],[$q5,$a5]];

//shuffle questions
shuffle($QA);


?>

<div id ="quiz-wrap">
    <?php include"../assets/includes/sideMenu.php"; ?>
    <div id="rightColumn"> 
    <div class="content" >
        <h1> Quiz 2 </h1>
        <div class="lesson quiz-sec">
            <form>
                <?php 
                    $i=1;
                //build each question and echo
                    foreach($QA as $qa){
                        echo (buildQuestion($qa[0],$qa[1],$i));
                        $i++;
                    }

                ?>
            </form>
        </div> <!-- end of lesson -->
        <div class ="quiz">
            <button id ="quiz-btn" type="button"><a href="#">Submit</a></button>
        </div> <!-- end of quiz -->
    </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>
<?php include "../foot.php" ?>