	function checkRadselected(x){
        var isSelected = false;
        var itemsLength = document.getElementsByName(x).length;
        var selectedItems = new Array();
        for(var j = 0; j < itemsLength; j++){
            if(document.getElementsByName(x)[j].checked){
                selectedItems.push(document.getElementsByName(x)[j].value);
            }
        } // end of for loop

        if(selectedItems.length > 0){
//            document.getElementsByTagName("fieldset")[0].style.borderColor = "";
//            document.getElementsByTagName("legend")[0].style.color = "";
            isSelected = true;
        }
        else{
//            document.getElementsByTagName("fieldset")[0].style.borderColor = "#C15132";
//            document.getElementsByTagName("legend")[0].style.color = "#C15132";
            isSelected=false;
        }

        return isSelected;

    }
    
    function validateQ1() {
		ispicked = checkRadselected("Q1");
		if (!ispicked) {
//			document.getElementById("Q1").style.borderColor = "red";
			document.getElementById("Q1").style.color = "red";
			document.getElementById("Q1").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q1").style = null;
			document.getElementById("Q1").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
    }
	function validateQ2() {
		ispicked = checkRadselected("Q2");
//		ispicked = true;
		if (!ispicked) {
//			document.getElementById("Q2").style.borderColor = "red";
			document.getElementById("Q2").style.color = "red";
			document.getElementById("Q2").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q2").style = null;
			document.getElementById("Q2").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
    }
	function validateQ3(){
		ispicked = checkRadselected("Q3");
//		ispicked = true;
		if (!ispicked) {
//			document.getElementById("Q3").style.borderColor = "red";
			document.getElementById("Q3").style.color = "red";
			document.getElementById("Q3").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q3").style = null;
			document.getElementById("Q3").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
    }
		function validateQ4(){
		ispicked = checkRadselected("Q4");
//		ispicked = true;
		if (!ispicked) {
//			document.getElementById("Q4").style.borderColor = "red";
			document.getElementById("Q4").style.color = "red";
			document.getElementById("Q4").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q4").style = null;
			document.getElementById("Q4").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
        }
	function validateQ5(){
		ispicked = checkRadselected("Q5");
//		ispicked = true;
		if (!ispicked) {
//			document.getElementById("Q5").style.borderColor = "red";
			document.getElementById("Q5").style.color = "red";
			document.getElementById("Q5").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q5").style = null;
			document.getElementById("Q5").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
	}
	function validateForm() {

        Q1 = false;
		Q2 = false;
		Q3= false;
		Q4 = false;
		Q5= false;
		Q1=validateQ1();
		Q2=validateQ2();
		Q3=validateQ3();
		Q4=validateQ4();
		Q5=validateQ5();
        return (Q1 && Q2 && Q3 && Q4 && Q5);

	}
		