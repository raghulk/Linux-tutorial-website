<?php 
    session_start();

    $title = "Login";
    $content ="Login";
    $prefix ="../"; 
    $styleFile ="login.css";
    $script ="pageScript.js";

    include "../head.php";

if(!empty($_POST)){
        
    if($_POST['name']!='' && $_POST['pass']!=''){
        include $prefix."../../../dbConnect.inc";
        
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE username=? AND password=?");
        
        $stmt->bind_param("ss",$_POST['name'],$_POST['pass']);
        
        $stmt -> execute();
        $stmt -> store_result();
        
        if($stmt->num_rows>0){
            $_SESSION['login']=true;
            $_SESSION['name']=$_POST['name'];
            header("Location: page.php");
        }else{
            echo "login failed";
            var_dump($_POST);
        }
        $stmt ->close();
        
    }else{
        echo "missing username or pass";
    }
}
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