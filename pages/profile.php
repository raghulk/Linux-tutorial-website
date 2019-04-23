<?php 
    session_start();
    session_name("login");
    if(isset($_SESSION['name'])){
        $welcome = $_SESSION['name'];
    }else{
        $welcome = '';
    }

    //check if they should have access
	if(!$_SESSION['login']){
		header('Location: login.php');
	}
    else{
        $welcome = $_SESSION['name'];
    }
    
    $title = "Profile";
    $content ="Profile";
    $filename = "profile.php";
    $prefix ="../"; 
    $styleFile ="profile.css";
    $script ="login.js";

    require $prefix.'../../../dbConnect.inc';

    //get quiz scores
    if ($mysqli) {
        
        $sql = 'select teacher from Login WHERE Username ="'.$_SESSION['name'].'"';

        $res=$mysqli->query($sql);

        if($res){
            while($rowHolder = $res->fetch_assoc()){
                $teacher = $rowHolder;
            }
        }
    }

    //if there's no teacher email in database 
    // OR if there's a teacher email entered in post
    // update record in database 
    if (empty($teacher['teacher']) || !empty($_POST['t-email'])){
            require $prefix.'../../../dbConnect.inc';
            $stmt=$mysqli->prepare("UPDATE Login SET teacher = ? WHERE Username =?");
            //bind
            $stmt->bind_param("ss",$_POST['t-email'],$_SESSION['name']);
            //execute
            $stmt->execute();

            //session set to newly entered email
            $_SESSION['teacher-email']=$_POST['t-email'];
        
    } else {
        //session set to what's in database
        $_SESSION['teacher-email'] = $teacher['teacher'];
    }

    

    //get quiz scores
    if ($mysqli) {
        
        $sql = 'select LessonID, Score from UserScore WHERE Username ="'.$_SESSION['name'].'"';

        $res=$mysqli->query($sql);

        if($res){
            while($rowHolder = $res->fetch_assoc()){
                $quizScore[] = $rowHolder;
            }
        }
    }

    //var_dump($quizScore);

    //scores for each lesson
    $score1 = "N/A";
    $score2 = "N/A";
    $score3 = "N/A";
//    var_dump($quizScore);
    //sort scores into appropriate lesson variables 
    if(isset($quizScore)){
        foreach($quizScore as $score){
//            var_dump($score['Score']);
            if($score['LessonID']==1){
                $score1 =$score['Score'];
            }
            else if ($score['LessonID']==2){
                $score2 =$score['Score'];
            }
            else if ($score['LessonID']==3){
                $score3 =$score['Score'];
            }
        }
    }

    
    

    include "../head.php";
        
?>
<div id ="profile-wrap">
    <h1>Profile</h1><hr>
    <div id ="profile-cont">
        <h4><span class ="title">Your name:</span>&emsp;<?php echo $_SESSION['name'];?></h4>
        <?php 
            if (!isset($_SESSION['teacher-email'])){
                echo '<form action ='.$_SERVER["PHP_SELF"].' method ="POST" onsubmit = "return validateTeacher();">
                <label for ="t-email">Teacher\'s email: </label><input id ="t-email" type ="email" name = "t-email" placeholder = "Your teacher\'s email"><br>
                <p>If you enter a teacher\'s email, they will be notified of your score when you complete a quiz.</p>
                <input type = "submit">
                </form>';
            } else{
                echo '<h4 id ="email"><span class ="title">Teacher\'s email:</span>&emsp;'.$_SESSION['teacher-email'].'</h4><p style="cursor: pointer;" id ="change">Change teacher\'s email</p>';
            }
        ?>
        <form action ='<?php $_SERVER["PHP_SELF"]?>' method ="POST" onsubmit = "return validateTeacher();" id = "changeEmail">
            <label for ="t-email">Teacher's email:</label><input id ="t-email" type ="email" name = "t-email" placeholder = "Your teacher's email"><br>
            <p>If you enter a teacher's email, they will be notified of your score when you complete a quiz.</p>
            <input type = "submit" value ="Submit">
        </form>
        <div id = "records">
        <h4>Quiz Records</h4>
            <p id ="note">Note: only your most recent score is saved.</p>
            <h5 class ="quiz-record"><span class ="title">Quiz 1:</span>&emsp;<?php 
                //check if score is in database; show if it is
                if($score1 =="N/A"){echo "You haven't taken this quiz yet! Start it <a class = 'quizLink' href ='quiz1.php'>here.</a>";
                } else{
                    echo "<span class ='score'>".$score1."/5</span>";
                } ?></h5>
            <h5 class ="quiz-record"><span class ="title">Quiz 2:</span>&emsp;<?php if ($score2 =="N/A"){echo "You haven't taken this quiz yet! Start it <a class = 'quizLink' href ='quiz2.php'>here.</a>";
                } else{
                    echo "<span class ='score'>".$score2."/5</span>";
                } ?></h5>
            <h5 class ="quiz-record"><span class ="title">Quiz 3:</span>&emsp;<?php if ($score3 =="N/A"){echo "You haven't taken this quiz yet! Start it <a class = 'quizLink' href ='quiz3.php'>here.</a>";
                } else{
                    echo "<span class ='score'>".$score3."/5</span>";
                } ?></h5>
        </div>

        <button><a id ="out" href ="logout.php">Logout</a></button>    
    </div>
</div>
	



<?php include "../foot.php"; ?>