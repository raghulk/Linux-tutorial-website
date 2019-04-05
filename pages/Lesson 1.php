<?php 
    $title = "Homepage";
    $content ="content";
    $prefix =""; 
    $styleFile ="homepageCSS.css";
    $script ="script.js";

    include "head.php"; 
?>
<div id="leftColumn"> 
<div class="sideMenu" >
	<h5>Lessons</h5>
		<p><a href="#">Lesson 1</a> </p>
		<p><a href="#">Lesson 2</a> </p>
		<p><a href="#">Lesson 3</a> </p>
	<h5>Quizzes</h5>
		<p><a href="#">Quiz 1</a> </p>
		<p><a href="#">Quiz 2</a> </p>
		<p><a href="#">Quiz 3</a> </p>
	<h5>References</h5>
		<p><a href="#">Glossary</a> </p>
</div> <!-- end of side menu -->
</div>
<div id="rightColumn"> 
<div class="content" >
	<h1> Lesson 1 </h1>
	<div class="lesson">
		<h3>Where am I and how to get where you want to be </h3>
		<p> Inside a linux terminal the first thing you will want to know is which folder you are in. 
		To do this you type <strong> pwd </strong> which stands for print working directory. 
		This gives you the folder that you are currently in. 
		You should do this every time you move to a different directory to make sure you are in the right place. 
		Which brings us to the next part of the lesson you now know where you are but you need to be in a different folder therefore you must use the <strong> cd </strong> command. 
		You can use the absolute or relative paths. To go to the next level up you would use <strong>cd ..</strong> this will work even in the root directory but since there is no where up to go you will just stay in the root directory.
		Now you know where you are and how to get where you want to be but another question emerges what is in the directory.
		To find this out use the <strong> ls </strong> command.
		This will list all non hidden files</p>

	</div> <!-- end of lesson -->
	<div class ="quiz">
		<h5> Quiz 1  <a href="#"><button type="button">quiz 1</button></a></h5>
	</div> <!-- end of quiz -->
</div> <!-- end of content -->
</div> <!-- end of right column -->
<?php include "foot.php" ?>