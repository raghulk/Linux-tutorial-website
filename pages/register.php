<?php 
    $title = "Login";
    $content ="Login";
    $prefix ="../"; 
    $styleFile ="login.css";
    $script ="pageScript.js";

    include "../head.php";

    if ($_POST['name']!='' $$ $_POST['pass']!='' && $_POST['pass2']!='' && passMatch()){
        include $prefix."../../../dbConnect.php";
        
        $stmt = $conn -> prepare("INSERT INTO users (name, pass) VALUES (?,?)");
        
        $stmt -> bind_param("ss",$_POST['name'], crypt($_POST['pass'],"$5$rounds=90962$n5.G/ugEDIleE4gE$D.JGtTUuy6mqb42TCr7cRkpFnm4Fc.svdyBNg5W7Oc0"));
        
        $stmt -> execute();
        $stmt -> close();
        
        header('Location: login.php');
    }

    function passMatch(){
        if(strcmp($_POST['pass'], $_POST['pass2']) ==0){
            return true;
        } else{
            return false;
        }
    }
        
?>

<div id ="register-container" class ="login">
    <h3>Register</h3>
    <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST" onsubmit ="return validateForm();">
<!--        name-->
        <label for ="name">Username: </label><input id ="name" type ="text" name = "name" placeholder = "username"><br>
        <p id ="errorName"></p><!-- show any error w/name -->
        
<!--        passwords-->
        <label for ="pass">Password: </label><input id ="pass" type = "text" name = "pass" placeholder = "Password"><br>
        
        <label for ="pass2">Password (re-enter): </label><input id ="pass2" type = "text" name = "pass2" placeholder = "Password (re-enter)"><br>
        <p id ="errorPass"></p><!-- show any error w/passwords -->
        
        <div id ="register-btns">
<!--            <input type ="reset" value ="Reset Form" id ="reset-btn">-->
            <input type ="submit" value = "Submit" id ="submit-btn">
        </div><!--end of register-btns-->
    
    </form>
</div><!--end of register-container-->




<?php include "../foot.php"; ?>