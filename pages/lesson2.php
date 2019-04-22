<?php 
session_start();
session_name("login");

    $title = "Lesson 2";
    $content ="Unix Lesson 2";
    $filename = "lesson2.php";
    $prefix ="../"; 
    $styleFile ="lessonStyle.css";
    $script ="script.js";

    include "../head.php"; 

?>
<div id="lesson-wrap">
    <?php include"../assets/includes/sideMenu.php"; ?>
    <div id="rightColumn">
        <div class="content">
            <h1> Lesson 2 </h1>
            <div class="lesson">
                <h3>Title </h3>
                <p>Welcome to the second lesson. In this lesson you will learn a lot more of the basic commands and into so more advanced commands. These commands will basically be how you create, move and delete files and directories.<br>

                    Now that you know how to find a file and directory and how to create a file or directory now you need to know how to create a directory and you do that with the command <strong> mkdir filename </strong> after mkdir you put the name of the file.<br><br>


                    But what if you made one in the wrong file on accident? The best way to take care of that is to use <strong> rmdir filename </strong> which deletes and empty directory. Like mkdir put the filename after. If you need to delete a directory with content, you can use <strong> rm filename </strong> which will delete whatever you put next to it. If you mess up there is not an undo so be very careful as you can delete your root directory on accident. With great power comes great responsibility.<br><br>


                    To move a file or directory you would use <strong> mv filename directory </strong> and this command can also be used to rename a file to do this you do <strong> mv oldfilename newfilename </strong>. Be careful though as if you already have a file with that name that file will be deleted.<br><br>


                    Now each file as permission on who can view this file. These are set into 3 groups, owner, group and all others. To change these permissions, you use <strong> chmod permissions filename </strong> where permissions is a 3-digit number with all digits being 1-7. These digits all mean something different. 0 is no permission, 1 means you can only execute the file, 2 means you can only write the file, 3 mean you can both execute and write, 4 means you can only read a file, 5 means you can read and execute, 6 means you can read and write and 7 means that you can read, write and execute the file.<br><br>


                    To create a copy of the file you can use <strong> cp originalfilename newfilename </strong>. This means that you can create a copy of a file but be warned like with move if there is already a file with the new files name it will delete the old version.<br><br>


                    To create a new file, you can use the <strong> touch -c filename </strong> which if the file does not exist creates and empty file or <strong> cat > filename [enter] content </strong> you must hit the enter key between filename and content. Cat is short for concatenation and touch main purpose is to change timestamps, but both are used for creating files. Either creates a new file if the file already exist touch –c will do nothing while cat > will add to the end. If you use just <strong> cat filename </strong> it will show you the content of that file. Also with cat you can combine two files with <strong> cat oldfile1 oldfile2 > newfile </strong> You can list multiple files to see multiple files at once.<br><br>


                    Now you can go and practice these command on your own or go to take the quiz.
                </p>

            </div> <!-- end of lesson -->
            <div class="quiz">
                <h5>Ready to begin the quiz?</h5>
                <button id="quiz-btn" type="button"><a href="quiz2.php">Quiz 2</a></button>
            </div> <!-- end of quiz -->
        </div> <!-- end of content -->
    </div> <!-- end of right column -->
</div>
<?php include "../foot.php" ?>
