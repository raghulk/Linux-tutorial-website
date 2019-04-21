<?php
session_start();
session_name("login");

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

<?php
// User click submit
if (isset($_POST['submit'])) {
?>
<div class="survey">
  <span class="survey_message">Thank you for submitting!</span>
</div>
<?php
//If user didn't fill out the requirement then return to this
} else {
?>
<form action="survey.php" method="post" onsubmit="return checkForm()" name="survey_form">
  <div class="survey">
    <div class="warning_message" id="warning_message"></div>

    <div class="input_group">
      <span id="test_amount_text">How many quizzes did you take?<span class="astric">*</span> </span>
      <input type="number" name="test_amount" min="1" max="3" id="test_amount" />
    </div>

    <div class="input_group">
      <span id="visit_date_text">When did you finish them?<span class="astric">*</span></span>
      <input type="date" name="visit_date" id="visit_date" />
    </div>


    <div class="input_group">
      <span id="rate_text">Rate this website (1 - 10):</span>
      <input type="range" name="rate" id="rate" min="1" max="10" />
    </div>

    <div class="input_group">
      <span id="rate_text">How hard were the quizzes, on average? (1 - 10):</span>
      <input type="range" name="rate" id="rate_quiz" min="1" max="10" />
    </div>


    <div class="input_group">
      <span id="comments_text"></span>
      <textarea rows="8" name="comment" id="comments" placeholder="Any other comments?"></textarea>
    </div>

    <div class="input_group1">
      <input type="submit" name="submit" id="submit" value="Submit" />
      <input type="button" name="reset" id="reset" value="Reset" onclick="resetForm()" />
    </div>
  </div>
</form>
<?php
}
?>


<?php include "../foot.php"; ?>
