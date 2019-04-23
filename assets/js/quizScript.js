    function checkRadSelected(x){
        var isSelected = false;
        var itemsLength = document.getElementsByName(x).length;
        var selectedItems = new Array();
        for(var j = 0; j < itemsLength; j++){
            if(document.getElementsByName(x)[j].checked){
                selectedItems.push(document.getElementsByName("fav_visited")[j].value);
            }
        } // end of for loop

        if(selectedItems.length > 0){
//            document.getElementsByTagName("legend")[0].style.color = "";
            isSelected = true;
        }
        else{
            isSelected = false;
        }

        return isSelected;
    }

    function validateQ1() {
		ispicked = checkRadSelected("Q1");
		if (document.getElementById("Q1").value == 0) {
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
    }
        
	function validateQ2() {
		ispicked = true;
		if (document.getElementById("Q1").value == Select) {
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
    }
	function validateQ3(){
		ispicked = checkRadselected("Q3");
		if (document.getElementById("Q1").value == Select) {
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
    
    }
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
        }
        
	function validateQ5(){
		ispicked = true;
		if (document.getElementById("Q1").value == null) {
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
		Q1=validateQ1();
		Q2=validateQ2();
		Q3=validateQ3();
		Q4=validateQ4();
		Q5=validateQ5();
        return (Q1 && Q2 && Q3 && Q4 && Q5);

	}
		

//    function correct(num, select){
//        let a1 ="A"+num+"-1";
//        let a2 ="A"+num+"-2";
//        let a3 ="A"+num+"-3";
//        let a4 ="A"+num+"-4";
//        
//        let l1 ="l"+num+"-1";
//        let l2 ="l"+num+"-2";
//        let l3 ="l"+num+"-3";
//        let l4 ="l"+num+"-4";
//        
//        let selection = "A"+num+"-"+select;
//        let selectLabel = "l"+num+"-"+select;
//        let correct = null;
//
//       // console.log("in correct");
//        let aArray = [a1,a2,a3,a4];
//        let lArray = [l1,l2,l3,l4];
//        
//        
//        for(let i =0; i<lArray.length; i++){
//            let curr = document.getElementById(lArray[i]);
//            curr.style.color = "black";
//        }
//        
//        for (let i =0; i<aArray.length; i++){
//            let curr = document.getElementById(aArray[i]);
//            if (curr.value ==0){
//                   // console.log("incorrect"+curr);
//            } else if (curr.value ==1){
//                    //console.log("correct"+curr);
//                    correct = aArray[i];
//            }
//        }
//
//
//
//        
//        if (selection ==correct){
//            document.getElementById(selectLabel).style.color = "green";
//        } else {
//            document.getElementById(selectLabel).style.color = "red";
//        }
//        
//
//    }
//                
////    var one = document.getElementsByName("A1");
////    var two =  document.getElementsByName("A2");
////    var three =  document.getElementsByName("A3");
////    var four =  document.getElementsByName("A4");
////    var five = document.getElementsByName("A5");
////                
////                
////    for (var x=0; x<one.length;x++){
////        one[x].onclick =()=>{correct(1);}
////    } 
////                
////    for (var x=0; x<two.length;x++){
////        one[x].onclick =()=>{correct(2);}
////    } 
////                
////    for (var x=0; x<three.length;x++){
////        one[x].onclick =correct(3);
////    }  
////                
////    for (var x=0; x<four.length;x++){
////        one[x].onclick =correct(4);
////    }    
////                
////    for (var x=0; x<five.length;x++){
////        one[x].onclick =correct(5);
////    }         
