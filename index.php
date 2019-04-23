        <?php 
            session_start();
            session_name("login");
            
            if(isset($_SESSION['name'])){
                $welcome = $_SESSION['name'];
            }else{
                $welcome = '';
            }
        
            $title = "Basecamp-Unix";
            $content ="content";
            $filename = "index.php";
            $prefix =""; 
            $styleFile ="basecamp-unix.css";
            $script ="script.js";

            include "head.php";
            require '../../../dbConnect.inc';
        
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

            echo $records[0]['Content'];
    ?>
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
    

<?php include "foot.php" ?>