<?php
session_start();
session_name("login");

if(isset($_SESSION['name'])){
    $welcome = $_SESSION['name'];
}else{
    $welcome = '';
}

    $title = "About";
    $content ="content";
    $filename = "about.php";
    $prefix ="../";
    $styleFile ="about.css";
    $script ="script.js";

    include "../head.php";
    require '../../../../dbConnect.inc';

?>

<?php

        $sql = "SELECT * from HTMLContent;";
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


<?php include "../foot.php"; ?>
