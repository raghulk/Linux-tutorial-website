<?php
session_start();
session_name("login");

    $title = "About";
    $content ="content";
    $filename = "about.php";
    $prefix ="../";
    $styleFile ="about.css";
    $script ="script.js";

    include "../head.php";

?>
<div id ="wrapper">
    <h1 id ="about-h1">About</h1>

    <div class = "boxComment">
    <p>BaseCamp UNIX is designed to introduce UNIX to the beginner students, who do not have a background in UNIX, or possibly in computing. While not extremely widely used,
      basic knowledge of UNIX commands is important for navigating file structures through terminals or terminal emulators, and is a valuable skill for anyone studying or
      interested in computing. However, not everyone will need to develop in-depth knowledge about UNIX; some will only use the basics throughout their study or programming career.
      This site is designed to teach high schoolers the basics about UNIX so they can use these commands either in current classwork or in college, if they choose to study computing.
      Basecamp Unix will provide a grounding for students to further explore Unix and its functionality, and to be able to keep up if UNIX commands are
      referenced in further coursework or in other online resources. It is a great opportunity for them to grow their knowledge in UNIX operating system.
      UNIX is not a graphical user interface; therefore, it requires you to use the commands to perform the tasks. However, it is easier to automate keyboard tasks than mouse tasks. T
      his site is intended to provide helpful content to guide the beginning user to better understand the Unix/Linux commands that allow them to perform the multiple tasks, such as navigating the file system or moving,
      copying, and editing files.
      Based on the Unix system, the versions of Unix has the four basics are following: kernel, shell, commands and utilities, and files and directories.
      The kernel plays the significant role in operating system. It acts as a heart that interacts with the hardware.  The shell’s role is interpreting the commands and process your
      request to perform the tasks. The commands and utilities come with 250 standard commands and extra commands through the 3rd party software. The files and directories are
      represented as a tree-like structure that allows the data to be organized into files. </p>
   </div>

    <h3 class ="subheading-h3">Overview</h3>
    <div class = "boxComment">
    <p>The site is aimed at providing three lessons to expand understanding of what Linux is and how beginners can start to use it.
      The beginners will need to have access to a Unix/Linux system in order to learn how to play around with Linux commands through the lessons on the site.
      They should be able to run a terminal program on their computer machines. Additionally, each lesson will be accompanied by a short quiz to test their understanding
      and identify areas of weakness. This site is not designed as a comprehensive overview of all of Unix; instead, it aims to be a jumping off point through which users
       completely unfamiliar with the operating system can learn the basics and explore. If they are interested in learning more about Unix, we will direct them to
       more in depth resources. This is Basecamp Unix - we provide the necessary tools and knowledge to begin a journey into Unix, then let the user go off on their own path.
      </p>
   </div>

    <h3 class ="subheading-h3">Contact us</h3>

    <div class = "boxComment">
    <p>Tariq Afoke tba8537@rit.edu</p>
    <p>Arber Deski ad9238@rit.edu</p>
    <p>Raghul Krishnan rk2384@rit.edu</p>
    <p>Christine McCullough cxm1880@rit.edu</p>
    <p>Christopher St Denny crs2417@rit.edu</p>
    <p>WeiBin Yang wy9077@rit.edu</p>
   </div>
 </div>


<?php include "../foot.php"; ?>
