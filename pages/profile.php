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
    $styleFile ="style2.css";
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

    

    include "../head.php";
        
?>
<div id ="profile-wrap">
    <h1>Profile</h1>
    <a href="logout.php">Logout</a>

    <h4>Your name:<?php echo $_SESSION['name'];?></h4>
    <?php 
        if (!isset($_SESSION['teacher-email'])){
            echo '<form action ='.$_SERVER["PHP_SELF"].' method ="POST" onsubmit = "return validateTeacher();">
            <label for ="t-email">Teacher\'s email: </label><input id ="t-email" type ="email" name = "t-email" placeholder = "Your teacher\'s email"><br>
            <p>If you enter a teacher\'s email, they will be notified of your score when you complete a quiz.</p>
            <input type = "submit">
            </form>';
        } else{
            echo '<h4>Teacher\'s email:'.$_SESSION['teacher-email'].'<h4>';
        }
    ?>
    <h4>Quiz Records</h4>

</div>
	



<?php include "../foot.php"; ?>