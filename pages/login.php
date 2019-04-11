<?php 
    session_start();
    session_name("login");

    $title = "Login";
    $content ="Login";
    $prefix ="../"; 
    $styleFile ="login.css";
    $script ="pageScript.js";

    

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

		if (password_verify($_POST['pass'], $res)) {
			$_SESSION['login']=true;
			$_SESSION['name']=$_POST['name'];
			header("Location: ../index.php");
            //echo "logged in";
		} else{
            //echo "failed";
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
        <p id ="errorName"></p><!-- show any error w/name -->
        
<!--        passwords-->
        <label for ="pass">Password: </label><input id ="pass" type = "text" name = "pass" placeholder = "Password"><br>
        <p id ="errorPass"></p><!-- show any error w/passwords -->
        
        <input type ="submit" value = "Submit" id ="submit-btn">
    
    </form>
    <div id ="register-link">
        <p><a href ="register.php">Don't have an account? Register here.</a></p>
    </div>
</div><!--end of register-container-->




<?php include "../foot.php"; ?>