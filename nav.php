<!-- Checking to see if the user is logged in-->
<!-- if the user is logged in, change the "Login" on the nav to be a message custom to the user name (and will log user out)-->
<?php
$login ='<li><a href ="'.$prefix.'pages/login.php">Login</a></li>';
$loginMobile ='<a href ="'.$prefix.'pages/login.php">Login</a>';
if(!empty($_SESSION)){
    if (session_status()==PHP_SESSION_ACTIVE){
        $login ="<li><a href ='".$prefix."pages/profile.php'>Hi, ".$_SESSION['name']."!</a></li>";
        $loginMobile ="<a href ='".$prefix."pages/profile.php'>Hi, ".$_SESSION['name']."!</a>";
    }
}

//$welcome = '';
?>
<!-- src="assets/js/welcome.js" -->
<script type="text/javascript">
    function welcome()
    {
        var idElement =document.getElementById("id");
        var name = "<?php echo $welcome;?>";
         console.log(name);
        if(name != ''){
            var child = document.getElementById("id").innerHTML = "Hi, " + name;
//            idElement.appendChild(child);
        }
        else{
            var child = document.getElementById("id").innerHTML= "Login";
//            var child = document.createTextNode("Login");
//            idElement.appendChild(child);
        }
    }
</script>

<nav>
    <a href ="<?php echo $prefix ?>index.php"><img src ="<?php echo $prefix ?>assets/images/AltLogo%20(translucent%20no-tag).png" alt ="Basecamp Unix Logo" title ="Basecamp Unix"></a>
    <div class="screen-max-570">
        <ul>
<!--            <?php echo $login; ?>-->

            <li><a id ="id" href ="<?php echo $prefix ?>pages/profile.php"<?php echo (isset($title) && $title=='Login') ? ' class="active"' : ''; ?>><?php echo "<script>welcome();</script>";?></a></li>
            <li><a href ="<?php echo $prefix ?>pages/comments.php"<?php echo (isset($title) && $title=='Comments') ? ' class="active"' : ''; ?>>Comments</a></li>
            <li><a href ="<?php echo $prefix ?>pages/survey.php"<?php echo (isset($title) && $title=='Survey') ? ' class="active"' : ''; ?>>Survey</a></li>
            <li><a href ="<?php echo $prefix ?>pages/glossary.php"<?php echo (isset($title) && $title=='Glossary') ? ' class="active"' : ''; ?>>Glossary</a></li>
            <li><a href ="<?php echo $prefix ?>pages/directory.php"<?php echo (isset($title) && $title=='Lessons and Quizzes') ? ' class="active"' : ''; ?>>Lessons and Quizzes</a></li>
            <li><a href ="<?php echo $prefix ?>pages/about.php"<?php echo (isset($title) && $title=='About') ? ' class="active"' : ''; ?>>About</a></li>
        </ul>
    </div>
    <div class="screen-min-570">
        <div class="nav">
            <div class="burger-menu">
                <div class="burger-menu-block">
                    <div class="burger-float-block-right">
                        <div class="burger-float-right">
                            <div class="burger"></div>
                            <div class="burger"></div>
                            <div class="burger"></div>
                        </div>
                    </div>
                    <!-- .div menu -->
                    <div class="li">
                        <div><a href ="<?php echo $prefix ?>pages/profile.php">Login</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/directory.php"<?php echo (isset($title) && $title=='Lessons and Quizzes') ? ' class="active"' : ''; ?>>Lessons and Quizzes</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/glossary.php"<?php echo (isset($title) && $title=='Glossary') ? ' class="active"' : ''; ?>>Glossary</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/survey.php"<?php echo (isset($title) && $title=='Survey') ? ' class="active"' : ''; ?>>Survey</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/comments.php"<?php echo (isset($title) && $title=='Comments') ? ' class="active"' : ''; ?>>Comments</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/about.php"<?php echo (isset($title) && $title=='About') ? ' class="active"' : ''; ?>>About</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>