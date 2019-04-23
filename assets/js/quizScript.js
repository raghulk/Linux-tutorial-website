	function validateQ1() {
		ispicked = true;
		if (document.getElementById("Q1").value == null) {
			document.getElementById("Q1").style.borderColor = "red";
			document.getElementById("Q1").style.color = "red";
			document.getElementById("Q1").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q1").style = null;
			document.getElementById("Q1").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
	function validateQ2() {
		ispicked = true;
		if (document.getElementById("Q2").value == Select) {
			document.getElementById("Q2").style.borderColor = "red";
			document.getElementById("Q2").style.color = "red";
			document.getElementById("Q2").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q2").style = null;
			document.getElementById("Q2").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
	function validateQ3(){
		ispicked = true;
		if (document.getElementById("Q3").value == Select) {
			document.getElementById("Q3").style.borderColor = "red";
			document.getElementById("Q3").style.color = "red";
			document.getElementById("Q3").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q3").style = null;
			document.getElementById("Q3").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
			function validateQ4(){
		ispicked = true;
		if (document.getElementById("Q4").value == null) {
			document.getElementById("Q4").style.borderColor = "red";
			document.getElementById("Q4").style.color = "red";
			document.getElementById("Q4").style.backgroundColor = 'pink';
			ispicked = false;
		} else {
			document.getElementById("Q4").style = null;
			document.getElementById("Q4").style="width:5em;";
			ispicked = true;
		}
		return (ispicked);
	function validateQ5(){
		ispicked = true;
		if (document.getElementById("Q5").value == null) {
			document.getElementById("Q5").style.borderColor = "red";
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
		Q1=validateQ5();
		Q1=validateQ5();
		Q1=validateQ5();
		Q1=validateQ5();
		Q1=validateQ5();
        return (Q1 && Q2 && Q3 && Q4 && Q5);

	}
		