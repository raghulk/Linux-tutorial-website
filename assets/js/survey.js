//script
function submitSurveyForm(e) {
    e.preventDefault();

    var elements = document.getElementsByClassName("formVal");
    var formData = new FormData();
    for(var i = 0; i < elements.length; i++){
        formData.append(elements[i].name, elements[i].value);
    }
    var http = new XMLHttpRequest();
    /*
        STATUS 4 - REQUEST FINISHED AND RESPONSE IS READY
        STATUS 200 - DONE
     */
    http.onreadystatechange = function(){
        // Success
        if(http.readyState == 4 && http.status == 200){
            var obj = JSON.parse(http.responseText);
            if(obj.status == "200"){
                clearRedColor();
                document.getElementById("warning_message").innerText = "";
                document.getElementById("survey_message").innerText = obj.message;
//                document.getElementById("survey").classList.add("survey");

                setTimeout(function(){
                    location.reload();
                }, 2000);
            }
            else if(obj.status == "400"){
                clearRedColor();
                var objText = document.getElementById(obj.id.toString());
                objText.className = "redColor";
                document.getElementById("warning_message").innerText = obj.message;
            }

        }
    }
    //Open and send the POST data
    http.open("POST", "surveyprocess.php", true);
    http.send(formData);
}

function clearRedColor(){
    //Clear the current red selector from <span> based on the length
    if(document.getElementsByClassName("redColor").length > 0){
        document.getElementsByClassName("redColor")[0].classList.remove("redColor")
    }
}