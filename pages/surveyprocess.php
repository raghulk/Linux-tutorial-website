<?php
require_once("../../../../dbConnect.inc");
if(isset($_SESSION['name'])){
    $welcome = $_SESSION['name'];
}else{
    $welcome = '';
}

function sanitize($str) {
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlentities($str);
    $str = strip_tags($str);
    return $str;
}
function returnInfoEncode($return_info){
    $return_info_encode = json_encode($return_info);
    echo $return_info_encode;
}

if($_POST){
    $test_amount = sanitize($_POST["test_amount"]);
    $complete_date = sanitize($_POST["complete_date"]);
    $rate = sanitize($_POST["rate"]);
    $rate_quiz = sanitize($_POST["rate_quiz"]);
    $comment = sanitize($_POST["comment"]);

    if($test_amount == ""){
        $return_info = array(
            'status' => "400",
            'message' => "Enter the number of the quizzes you took.*",
            'id' => "test_amount_text");
        returnInfoEncode($return_info);
        die();
    }

    elseif(!ctype_digit($test_amount) && !(int)$test_amount >= 0){
        $return_info = array(
            'status' => "400",
            'message' => "Enter the valid number of the quizzes you took.*",
            'id' => "test_amount_text");
        returnInfoEncode($return_info);
        die();
    }
    // Must be a valid date such as 2019-04-21
    if (!preg_match('([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))', $complete_date)) {
        $return_info = array(
            'status' => "400",
            'message' => "Enter a valid date.*",
            'id' => "complete_date_text");
        returnInfoEncode($return_info);
        die();
    }
    // Must be present or past date based on the complete date
    elseif(new DateTime() < new DateTime($complete_date)){
        $return_info = array(
            'status' => "400",
            'message' => "The date cannot be after the current date!",
            'id' => "complete_date_text");
        returnInfoEncode($return_info);
        die();
    }
    if($rate == ""){
        $return_info = array(
            'status' => "400",
            'message' => "Please rate our website.*",
            'id' => "rate_text");
        returnInfoEncode($return_info);
        die();
    }
    elseif(!ctype_digit($rate)){
        $return_info = array(
            'status' => "400",
            'message' => "Enter a valid website rating.*",
            'id' => "rate_text");
        returnInfoEncode($return_info);
        die();
    }
    if($rate_quiz == ""){
        $return_info = array(
            'status' => "400",
            'message' => "Please rate our quizzes.*",
            'id' => "rate_text");
        returnInfoEncode($return_info);
        die();
    }
    elseif(!ctype_digit($rate)){
        $return_info = array(
            'status' => "400",
            'message' => "Enter a valid quizzes rating*",
            'id' => "rate_text");
        returnInfoEncode($return_info);
        die();
    }

    //MySQLi
    $date = new DateTime();
    $datetime = $date->format("Y-m-d H:i:s"); // DateTime of survey completion

    //Convert from String to Integer
    $test_amount = (int)$test_amount;
    $rate = (int)$rate;
    $rate_quiz = (int)$rate_quiz;

    $stmt = $mysqli->prepare("INSERT INTO survey_group VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('isiiss', $test_amount, $complete_date, $rate, $rate_quiz, $comment, $datetime);
    $stmt->execute();

    $return_info = array(
        'status' => "200",
        'message' => "Your survey has been submitted successfully!");
    returnInfoEncode($return_info);
}