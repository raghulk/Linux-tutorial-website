<?php 
session_start();
session_name("login");

    $title = "Lesson 3";
    $content ="Unix Lesson 3";
    $filename = "lesson3.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="script.js";

    include "../head.php"; 
    
?>
<div id="lesson-wrap">
    <?php include"../assets/includes/sideMenu.php"; ?>
    <div id="rightColumn">
        <div class="content">
            <h1> Lesson 3 </h1>
            <div class="lesson">
                <h3>Title</h3>
                <p>
                    Welcome to lesson 3
                    This lesson will go over more advanced commands that specifically deal with reading and writing to the file and searching
                    The first thing we will go over is what if you want to combine multiple unix commands to do this we will use the <strong> | </strong> command. This is called piping and it will give allow two commands to be mixed. An example of how it can be used is <strong> mkdir newFile | chmod 777 newFile </strong> if you remember the previous lesson this will create a new file called newFile and then change the permission of it so everyone can read write and execute this directory. Do not do this as normally you don’t want everyone to be able to access the file.
                    Another that you want to sort a file it is very simple. You use the <strong> sort filename </strong> and that will show the lines in a file in alphabetical order. This is a great tool for sorting small things but more advanced search tools will not be covered on this site.
                    The next part of this lesson would be the search function. To search use <strong> egrep searchCondition filename </strong>. This will allow you to search for the first character or a word in the file by using ‘’. To search for multiple words, you can use the piping command as an or. Other important characters in searches . means a single character, + means must appear one or more times, $ means they must be at the end of the line and ^ means that it must be at the beginning of the line. If you put use {n} then it must be appear n at least times and if it is listed as {n,m} means it would need to appear at least n times but not more than m times. Examples or some of these <strong> egrep $ ‘end’ filename </strong> which would mean the file would be looking for end at the end of the line.
                    Next to learn how to get input from a file with stdin which can be written as <strong> > filename </strong>. This is where you can put an input in for an application. For instance, if you want a wordcount for a file you can use <strong> wc -w > filename </strong>. In the same way stdout is how to send an output to a file but it is used by not writing stdout but instead <strong> > filename </strong>. This will allow you to put the content of the into that file so you can connect it to a ls or an egrep to write the results to a file. An example of this would be <strong> ls >filename </strong> A warning though this will overwrite what is inside the file. Now this work great if there are no errors but if there are errors to handle those by doing <strong> 2> filename </strong>. An example of this would be <strong> ls -l 2> filename </strong>. To combine the stdout and the stderr you would have to <strong> ls -l > filename 2>&1 </strong>.
                    That is the final lessons thank you for visiting our site and make sure to take the final quiz.
                </p>


            </div> <!-- end of lesson -->
            <div class="quiz">
                <h5>Ready to begin the quiz?</h5>
                <button id="quiz-btn" type="button"><a href="quiz3.php">Quiz 3</a></button>
            </div> <!-- end of quiz -->
        </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>
<?php include "../foot.php" ?>
