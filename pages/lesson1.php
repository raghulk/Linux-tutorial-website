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

<?php

        $sql = "SELECT * from Lesson;";
            if($results = $mysqli->query($sql)){

            }
            else{
                echo 'issue with query';
                die;
            }

            if($results){
                while($rowHolder = mysqli_fetch_array($results, MYSQLI_ASSOC)){
                    $records[] = $rowHolder; //puts objects into array
                }
            }

            echo $records[1]['Content'];
?>

<?php include "../foot.php" ?>
