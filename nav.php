<?php

$login ='<li><a href ="'.$prefix.'pages/login.php">Login</a></li>';
if(!empty($_SESSION)){
    if (session_status()==PHP_SESSION_ACTIVE){
        $login ="<li><a href ='".$prefix."pages/logout.php'>Hi, ".$_SESSION['name']."! ( Logout)</a>";
    }
}
?>

<nav>
    <a href ="<?php echo $prefix ?>index.php"><img src ="<?php echo $prefix ?>assets/images/AltLogo%20(translucent%20no-tag).png" alt ="Basecamp Unix Logo" title ="Basecamp Unix"></a>
    <div class="screen-max-570">
        <ul>
            <?php echo $login; ?>
            <li><a href ="<?php echo $prefix ?>pages/glossary.php">Glossary</a></li>
            <li><a href ="<?php echo $prefix ?>pages/directory.php">Lessons and Quizzes</a></li>
            <li><a href ="#">About</a></li>
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
                        <div><a href ="#">Login</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/glossary.php">Glossary</a></div>
                        <div><a href ="<?php echo $prefix ?>pages/directory.php">Lessons and Quizzes</a></div>
                        <div><a href ="#">About</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>