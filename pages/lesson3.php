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
    require '../../../../dbConnect.inc';
    
?>

<?php

        $sql = "SELECT * from Lessons;";
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

            echo $records[2]['Content'];
?>

<?php include "../foot.php" ?>
