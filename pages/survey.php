<?php
session_start();
session_name("login");

if(isset($_SESSION['name'])){
  $welcome = $_SESSION['name'];
}else{
    $welcome = '';
}

    $title = "Survey";
    $content ="content";
    $filename = "survey.php";
    $prefix ="../";
    $styleFile ="survey.css";
    $script ="survey.js";

    include "../head.php";

?>

<!-- Title -->
<h1 class ="center">Survey</h1>

<!-- Content -->
<form action="" method="post" onsubmit="return submitSurveyForm(event)" name="survey_form">
  <div class="survey">
<span id="survey_message" class="survey_message"></span>
    <div class="warning_message" id="warning_message"></div>

    <div class="input_group">
      <span id="test_amount_text">How many quizzes did you take?<span class="astric">*</span></span>
      <input class= "formVal" type="number" min="1" max="3" name="test_amount"/>
    </div>

    <div class="input_group">
      <span id="complete_date_text">When did you finish them?<span class="astric">*</span></span>
      <input class= "formVal" type="date" name="complete_date"/>
    </div>


    <div class="input_group">
      <span id="rate_text">Rate this website (1 - 10):</span>
      <input class= "formVal" type="range" name="rate" min="1" max="10" />
    </div>

    <div class="input_group">
      <span id="rate_text">How hard were the quizzes, on average? (1 - 10):</span>
      <input class= "formVal" type="range" name="rate_quiz" min="1" max="10" />
    </div>


    <div class="input_group">
      <span id="comments_text"></span>
      <textarea class= "formVal" placeholder="Any other comments?" rows="6" cols="60" name="comment"></textarea>
    </div>

    <div class="input_group">
      <input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="Reset"/>
    </div>
  </div>
</form>

<?php include "../foot.php"; ?>
