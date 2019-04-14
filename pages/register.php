<?php 
        
    $title = "Login";
    $content ="Login";
    $prefix ="../"; 
    $filename = "register.php";
    $styleFile ="login.css";
    $script ="login.js";

    
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
        <p id ="error-login"></p><!-- show any error w/login -->
        
        <div id ="register-btns">
<!--            <input type ="reset" value ="Reset Form" id ="reset-btn">-->
            <input type ="submit" value = "Submit" id ="submit-btn">
        </div><!--end of register-btns-->
    
    </form>
</div><!--end of register-container-->




<?php include "../foot.php"; ?>