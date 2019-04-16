<?php 
session_start();
session_name("login");

    $title = "Lesson 1";
    $content ="Unix Lesson 1";
    $filename = "lesson1.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="script.js";

    include "../head.php"; 
?>

<div id ="lesson-wrap">
    <?php include"../assets/includes/sideMenu.php"; ?>
    <div id="rightColumn"> 
    <div class="content" >
        <h1> Lesson 1 </h1>
        <div class="lesson">
            <h3>Where am I and how to get where you want to be </h3>
            <p> Hello, welcome to your first Unix lesson. Let’s begin with terms that you will be seeing throughout the lessons.<br>
The terminal is the command line where you can use the Unix commands. Common terminals include putty or MobaXterm.<br><br>
The root directory is the top directory this will normally hold the executables and configuration files for bootup of the system(kernel files).<br><br>
A command is what you put into the computer to perform a specific task in each lesson you will learn the majority of the basic and some advanced commands.<br><br>
File Permissions are a three digit number that determines who has access to the file. We will get more detailed on file permissions in lesson 2.
are what are you allowed to do a certain file or directory.
The path is where the file is. You can use the absolute path which starts from the root directory and the relative path starts from where you are currently located in the directory structure. Normally you would want to use the relative path.<br><br>
A single . is a reference to where you are.<br><br>
                If you do .. is a reference to the directory directly above you.<br></p>
<h4>Now onto the commands.</h4>
            <p>Inside a Linux terminal, the first thing you will want to know is which folder you are in. To do this you type <span class ="cmd"> pwd </span> which stands for print working directory. This gives you the folder that you are currently in. You might want to do this every time you move to a different directory to make sure you are in the right directory that you are intended to.</p> 
            <p>Which brings us to the next part of the lesson, you now know where you are, but you need to be in a different folder, therefore, you must use the <span class ="cmd"> cd filename </span> command. You can use the absolute or relative paths. To go to the one level above the directory you are, use <span class ="cmd">cd ..</span> this will work even in the root directory but since there is nowhere up to go you will just stay in the root directory. Another tool to send you to the root directory would be <span class ="cmd"> cd /</span>. Once again this will work from anywhere including the root directory but you would stay in that root directory. After you do this, use the “pwd” to make sure it worked the way you wanted it to.</p>
            <p>
                Now you know where you are and how to get where you want to be, but another question emerges what is in the directory. To find this out use the <span class ="cmd"> ls </span> command. This will list all non-hidden files to get all files you need to use <span class ="cmd">ls -a</span> this will show you all the file names but to get more information on these files you would use <span class ="cmd"> ls -l </span> which lists all the files in long form giving you the most information. You can combine the two files to get the long form of the hidden files by <span class ="cmd"> ls -la </span>.<br>
                The final command of the lesson is the <span class ="cmd"> man [command name] </span>. This command is to look upon commands that you don’t know and it will explain how the command works. You can do this for any command. It will give you all the options that can be used along with the command as well. To get out of the manual hit “q”.
            </p>
<p>These are just the very basics. If you want to learn more continue with the other lessons but first check if you understand this lesson by taking the quiz. Click the button below when you're ready to begin.
</p>
	


        </div> <!-- end of lesson -->
        <div class ="quiz">
            <h5>Ready to begin the quiz?</h5>
            <button id ="quiz-btn" type="button"><a href="quiz1.php">Quiz 1</a></button>
        </div> <!-- end of quiz -->
    </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>
<?php include "../foot.php" ?>