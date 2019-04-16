<?php 
    session_start();
    session_name("login");

    //check if they should have access
	if(!$_SESSION['login']){
		header('Location: login.php');
	}
    
    $title = "Profile";
    $content ="Profile";
    $filename = "profile.php";
    $prefix ="../"; 
    $styleFile ="profile.css";
    $script ="login.js";

    if(!empty($_POST['t-email'])){
        require $prefix.'../../../dbConnect.inc';
        $stmt=$mysqli->prepare("UPDATE Login SET teacher = ? WHERE Username =?");
		//bind
		$stmt->bind_param("ss",$_POST['t-email'],$_SESSION['name']);
		//execute
		$stmt->execute();
        
        $_SESSION['teacher-email']=$_POST['t-email'];
    }

    //get quiz scores
    if ($mysqli) {
    $sql = "select LessonID, Score from UserScore where Username =".$_SESSION['name'].";";

        $res=$mysqli->query($sql);

        if($res){
            while($rowHolder = $res->fetch_assoc()){
                $quizScore[] = $rowHolder;
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
                echo '<h4 id ="email"><span class ="title">Teacher\'s email:</span>&emsp;'.$_SESSION['teacher-email'].'</h4><p id ="change">Change teacher\'s email</p>';
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
            <h5 class ="quiz-record"><span class ="title">Quiz 1:</span>&emsp;</h5>
            <h5 class ="quiz-record"><span class ="title">Quiz 2:</span>&emsp;</h5>
            <h5 class ="quiz-record"><span class ="title">Quiz 3:</span>&emsp;</h5>
        </div>

        <button><a id ="out" href ="logout.php">Logout</a></button>    
    </div>
</div>
	



<?php include "../foot.php"; ?>