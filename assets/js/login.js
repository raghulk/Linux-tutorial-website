var error = "";

function validateInput(id){
    var complete = null;
    var field = document.getElementById(id);
    
    //change style if no value 
    if (field.value==""){
        field.style.border = "2px solid red";
        field.style.backgroundColor = "pink";
        complete = false;
    } else {
        //reset style if value present
        field.style.border ="2px solid #78a347";
        field.style.backgroundColor ="white";
        complete =true;
    }
    console.log(id+" validated as " + complete);
    return (complete);
}

function matches(){
    validateInput("pass");
    validateInput("pass2");
    
    let pass = document.getElementById("pass").value;
    let pass2 = document.getElementById("pass2").value;
    
    if (pass === pass2){
        return true;
    } else{
        error ="Passwords do not match";
        return false;
    }
    
}

function validateForm(){
    let vName = validateInput("name");
    let vPass =validateInput("pass");
    let pass2 = document.getElementById("pass2");
    let match = true;
    let errorDiv = document.getElementById("error-login");
    
    if (pass2 != null){
        match = matches();
    }
    
    if (vName==false || vPass ==false){
        error = "Please fill out all fields.";
    }
    
    if (!(vName&&vPass&&match)){
        errorDiv.innerHTML = error;
        errorDiv.style.border ="2px solid red"; errorDiv.style.backgroundColor ="pink";
        errorDiv.style.color ="black";
        errorDiv.style.padding =".5em";
    } else{
        errorDiv.style =null;
    }
    
    return (vName && vPass && match);
    
}

function validateTeacher(){
    let valid = null;
    var field = document.getElementById("t-email");
    
    //change style if no value 
    if (field.value==""){
        field.style.border = "2px solid red";
        field.style.backgroundColor = "pink";
        valid = false;
    } else {
        //reset style if value present
        field.style.border ="2px solid #78a347";
        field.style.backgroundColor ="white";
        valid =true;
    }
    console.log("email validated as " + valid);
    return (valid);
}

document.getElementById("change").addEventListener("click",()=>{
    document.getElementById("changeEmail").style.display = "block";
    console.log("clicked");
    
})