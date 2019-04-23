<?php 
session_start();
session_name("login");
if($_SESSION['login'] != true){
    header("Location: login.php");
}else{
    $welcome = $_SESSION['name'];
}

    $title = "Quiz 1";
    $content ="Unix Quiz 1";
    $filename = "quiz1.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="quizScript.js";

    include "../head.php"; 

    require "../../../../dbConnect.inc";

$name = $_SESSION['name'];
$temail=$_SESSION['teacher-email'];


//get questions
if ($mysqli) {
    $sql = 'select QuestionID, Question from Questions where LessonID = "1";';

        $res=$mysqli->query($sql);

        if($res){
            while($rowHolder = $res->fetch_assoc()){
                $quiz[] = $rowHolder;
            }
        }
    }

//get answers
if ($mysqli) {
    $sql = 'select AnswerID, QuestionID, AnswerText, Correct from Answers where LessonID = "1";';

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
//returns HTML block
function buildQuestion($quest, $aSet, $num){
    $qText = $quest['Question'];
    $an1 = [$aSet[0]['AnswerText'],$aSet[0]['Correct']];
    $an2 = [$aSet[1]['AnswerText'], $aSet[1]['Correct']];
    $an3 = [$aSet[2]['AnswerText'], $aSet[2]['Correct']];
    $an4 = [$aSet[3]['AnswerText'], $aSet[3]['Correct']];
    
    //NOTE: a value of 1 means a correct answer. 0 is wrong. These are auto populated when the question is built
    
    $html = "<p>$qText</p><input id ='A$num-1' type = 'radio' name = 'Q$num' value ='$an1[1]' onclick ='correct($num, 1)'><label id = 'l$num-1' for = 'A$num-1'>$an1[0]</label><br><input id ='A$num-2' type = 'radio' name = 'Q$num' value ='$an2[1]' onclick ='correct($num, 2)'><label id = 'l$num-2' for = 'A$num-2'>$an2[0]</label><br><input id ='A$num-3' type = 'radio' name = 'Q$num' value ='$an3[1]' onclick ='correct($num, 3)'><label id = 'l$num-3' for = 'A$num-3'>$an3[0]</label><br><input id ='A$num-4' type = 'radio' name = 'Q$num' value ='$an4[1]' onclick ='correct($num, 4)'><label id = 'l$num-4' for = 'A$num-4'>$an4[0]</label><br>";
        
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
        <h1> Quiz 1 </h1>
        <div class="lesson quiz-sec">
            <form action="quiz1.php" method="POST" onsubmit="return validateForm();">
                <?php 
                    $i=1;
                //build each question and echo
                    foreach($QA as $qa){
                        echo (buildQuestion($qa[0],$qa[1],$i));
                        $i++;
                    }

                ?>
            <button id ="quiz-btn" type="submit">Submit</button>
            </form>
        </div> <!-- end of lesson -->
    <?php 
    echo "Correct Questions";
	$score = 0;
//        var_dump($_POST);
	if (!empty($_POST['Q1'])){
		if($_POST['Q1']) {
            $score+=1;
            echo "Question 1 ";
            }
        }
	if (!empty($_POST['Q2'])){
		if($_POST['Q2']) {
            $score+=1;
            echo "Question 2 ";
            }
        }
	if (!empty($_POST['Q3'])){
		if($_POST['Q3']) {
            $score+=1;
            echo "Question 3 ";
            }
        }
	if (!empty($_POST['Q4'])){
		if($_POST['Q4']) {
            $score+=1;
            echo "Question 4 ";
            }
        }
//		if($_POST['Q4']==0) {
	if (!empty($_POST['Q5'])){
		if($_POST['Q5']) {
            $score+=1;
            echo "Question 5 ";
            }
        }
    $names=$_SESSION['name'];
		$lesson=1;
		$scores=$score;
    //$emailAddress = "RITISTprofessor@gmail.com";
//	$emailAddress = "rk2384@rit.edu";
	$emailSubject = "Quiz $lesson Score";
    $emailBody = "Name is $names \n";
//	$emailBody .= "LessonID is 1 \n";
	$emailBody .= "Score is $scores \n";
	mail($temail, $emailSubject, $emailBody);
		
	$stmt = "DELETE FROM UserScore WHERE Username='".$names."' AND LessonID='".$lesson."'";
    $mysqli->query($stmt);
    $stmt = $mysqli->prepare("INSERT INTO UserScore(Username, LessonID, Score) VALUES (?,?,?)");
	$stmt->bind_param("sii", $names, $lesson, $scores); 
	$stmt->execute();
	$stmt->close(); ?>
        </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>

<?php include "../foot.php" ?>
