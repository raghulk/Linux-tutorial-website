//script
/* Validates the form */
function checkForm() {
    cleanForm();

    // Get input values
    var testAmount = document.getElementById("test_amount").value;
    var visitDate = document.getElementById("visit_date").value;

    // Init variables
    var currentDate = new Date();
    var inputDate = new Date(visitDate);
    var valid = true;

    // Validates the amount of test
    if (testAmount === "") {
        var testAmountText = document.getElementById("test_amount_text");
        peopleAmountText.style.color = "#e60000";
        valid = false;
    }

    // Validates the visit date
    if (visitDate === "" || inputDate > currentDate) {
        var visitDateText = document.getElementById("visit_date_text");
        visitDateText.style.color = "#e60000";
        valid = false;
    }

    // No errors mean the form will be submitted
    if (!valid) {
        return false;
    }
}

/* Resets the form to default values */
function resetForm() {
    var testAmount = document.getElementById("test_amount");
    var visitDate = document.getElementById("visit_date");
    var rate = document.getElementById("rate");
    var rate_quiz = document.getElementById("rate");
    var comments = document.getElementById("comments");

    testAmount.value = "";
    visitDate.value = "";
    rate.value = 6;
    rate_quiz.vale = 6;
    comments.value = "";

    cleanForm();
}

/* Remove font color and warning message */
function cleanForm() {
    var testAmountText = document.getElementById("test_amount_text");
    var visitDateText = document.getElementById("visit_date_text");
    var warningMessage = document.getElementById("warning_message");

    testAmountText.style.color = "";
    visitDateText.style.color = "";
    warningMessage.innerHTML = "";
}
