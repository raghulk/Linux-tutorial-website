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
    $prefix ="../"; 
    $filename = "register.php";
    $styleFile ="login.css";
    $script ="login.js";

    $error = "";
    //check if passwords match
    function passMatch(){
        if(strcmp($_POST['pass'], $_POST['pass2']) ==0){
            return true;
        } else{
            return false;
        }
    }


if(!empty($_POST)){
    //if none of the variables are empty and the passwords match
    if ($_POST['name']!='' && $_POST['pass']!='' && $_POST['pass2']!='' && passMatch()){
        include $prefix."../../../dbConnect.inc";
        
        $stmt=$mysqli->prepare("SELECT Password FROM Login WHERE Username=?");
		//bind
		$stmt->bind_param("s",$_POST['name']);
		//execute
		$stmt->execute();
		//store results
		$stmt->bind_result($res);
		$stmt->fetch();
        //if password matches, login true 
		if ($res) {
			$error = "**This username is already taken.**";
            header("Location: register.php?error=$error");
		} else{
            //prepare
            $stmt = $mysqli->prepare("INSERT INTO Login (Username, Password) VALUES (?,?)");

            $passHash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            //bind
            $stmt -> bind_param("ss",$_POST['name'],$passHash);
            //execute and close
            $stmt -> execute();
            $stmt -> close();

            //redirect to login page
            header('Location: login.php');
            
            
        }
        
        
    }


}

//if they aren't redirected, load header
include "../head.php";
?>

<div id ="register-container" class ="login">
    <h3>Register</h3>
    <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST" onsubmit ="return validateForm();">
<!--        name-->
        <label for ="name">Username: </label><input id ="name" type ="text" name = "name" placeholder = "username"><br>
        
        
<!--        passwords-->
        <label for ="pass">Password: </label><input id ="pass" type = "password" name = "pass" placeholder = "Password"><br>
        
        <label for ="pass2">Password (re-enter): </label><input id ="pass2" type = "password" name = "pass2" placeholder = "Password (re-enter)"><br>
        <p id ="error-login"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p><!-- show any error w/login -->
        
        <div id ="register-btns">
<!--            <input type ="reset" value ="Reset Form" id ="reset-btn">-->
            <input type ="submit" value = "Submit" id ="submit-btn">
        </div><!--end of register-btns-->
    
    </form>
</div><!--end of register-container-->




<?php include "../foot.php"; ?>