<?php 
    session_start();
    session_name("login");
    if(isset($_SESSION['name'])){
        $welcome = $_SESSION['name'];
    }else{
        $welcome = '';
    }

    $title = "Login";
    $content ="Login";
    $filename = "login.php";
    $prefix ="../"; 
    $styleFile ="login.css";
    $script ="login.js";

$error = "";

    

if(!empty($_POST['name']) && !empty($_POST['pass']) ){
		//connect to database
	   require $prefix.'../../../dbConnect.inc';

		$stmt=$mysqli->prepare("SELECT Password FROM Login WHERE Username=?");
		//bind
		$stmt->bind_param("s",$_POST['name']);
		//execute
		$stmt->execute();
		//store results
		$stmt->bind_result($res);
		$stmt->fetch();
        //if password matches, login true 
		if (password_verify($_POST['pass'], $res)) {
			$_SESSION['login']=true;
			$_SESSION['name']=$_POST['name'];
			header("Location: profile.php");
            //echo "logged in";
		} else{
            $error = "Wrong username or password.";
        }

		$stmt->close();
	}else{
		//echo 'Missing username or pass';
	}

//include header file if user isn't redirected to a new page
include "../head.php";

?>

<div id ="login-container" class ="login">
    <h3>Login</h3>
    <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST" onsubmit ="return validateForm();">
<!--        name-->
        <label for ="name">Username: </label><input id ="name" type ="text" name = "name" placeholder = "username"><br>
        
<!--        passwords-->
        <label for ="pass">Password: </label><input id ="pass" type = "password" name = "pass" placeholder = "Password"><br>
        <p id ="error-login"><?php echo $error ?></p>
        
        <input type ="submit" value = "Submit" id ="submit-btn">
    
    </form>
    <div id ="register-link">
        <p><a href ="register.php">Don't have an account? Register here.</a></p>
    </div>
</div><!--end of register-container-->




<?php include "../foot.php"; ?>