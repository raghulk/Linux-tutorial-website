        <?php 
            session_start();
            session_name("login");

            $title = "Basecamp-Unix";
            $content ="content";
            $prefix =""; 
            $styleFile ="basecamp-unix.css";
            $script ="script.js";

            include "head.php";
        
        ?>
    
    <div id="mainLogo">
        <img src="assets/images/MAIN-LOGO.png">    
    </div>

    <div id="homeRect">
        <p>Prepare to start your Unix journey by learning the basics here!</p>
    </div>
    
        <h1>ANY QUESTIONS?</h1>
   
    <div id="home-img">
        <img src="assets/images/home.jpg" alt ="boy at computer" title ="Boy at computer">    
    </div>
    
    <div class="section">
        <div class="row">
            <div class ="icon-holder dot"><img src ="../assets/images/Monitor.png"></div>

            <div class="smallRect">
                <h4>Why learn Unix?</h4>
                <p>Unix is the basis of many computer systems such as iOS, Android, and Mac OSX. Even a basic familiarity with Unix will be helpful when trying to learn more complicated computing technologies.</p>
            </div>
        </div><br>
        
        <div class="row">
            <div class ="icon-holder dot"><img src ="../assets/images/commandPrompt.png"></div>

            <div class="smallRect">
                <h4>How hard will these lessons be?</h4>
                <p>Not very! We're aiming to give you a brief overview of basic Unix commands to get you on your way to learning more in-depth material. We want to get you to the level where if someone types cd you don't think of the kind you play.</p>
            </div>
        </div><br>
        
        <div class="row">
            <div class ="icon-holder dot"><img src ="../assets/images/up.png"></div>

            <div class="smallRect">
                <h4>Can this be used in the classroom?</h4>
                <p>Of course! Once users create an account, their scores on the quizzes will be stored. If they want a teacher to receive their scores, they'll be able to add an email address that will send their results real-time!</p>
            </div>
        </div><br>
    </div>
    
        <div class="head2">
        <h1>READY TO START?</h1>
        </div>
    <div id ="cards">
        <div id ="lessons-dir">
        <div id ="l1" class ="lesson-card">
            <div class ="icon-holder"><img src ="../assets/images/Monitor.png"></div>
            <h4>Lesson One</h4>
            <p>A very short lesson description.</p>
            <a href ="pages/Lesson%201.php"><button>Begin</button></a>
        </div>
        <div id ="l2" class ="lesson-card">
            <div class ="icon-holder"><img src ="../assets/images/commandPrompt.png"></div>
            <h4>Lesson Two</h4>
            <p>A very short lesson description.</p>
            <button>Begin</button>
        </div>
        <div id ="l3" class ="lesson-card">
            <div class ="icon-holder"><img src ="../assets/images/up.png"></div>
            <h4>Lesson Three</h4>
            <p>A very short lesson description.</p>
            <button>Begin</button>
        </div>
    </div>
    </div>
<!--
    <div class="card">
        <p>Wow, what a placeholder.</p>
    </div>
    
    <div class="card">
        <p>Wow, what a placeholder.</p>
    </div>
    
    <div class="card">
        <p>Wow, what a placeholder.</p>
    </div>
    
-->
    <footer>
        <div class="bigRect"></div>
    </footer>

<?php include "foot.php" ?>