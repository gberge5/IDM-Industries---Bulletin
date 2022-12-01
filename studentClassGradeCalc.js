function calcGrade()
{
    //Row 1
    var B1 = fixNothingEntered(document.classGradeCalc.b1.value);
	var C1 = fixNothingEntered(document.classGradeCalc.c1.value);

    //Row 2
    var B2 = fixNothingEntered(document.classGradeCalc.b2.value);
	var C2 = fixNothingEntered(document.classGradeCalc.c2.value);

    //Row 3
    var B3 = fixNothingEntered(document.classGradeCalc.b3.value);
	var C3 = fixNothingEntered(document.classGradeCalc.c3.value);

    //Row 4
    var B4 = fixNothingEntered(document.classGradeCalc.b4.value);
	var C4 = fixNothingEntered(document.classGradeCalc.c4.value);

    //Row 5
    var B5 = fixNothingEntered(document.classGradeCalc.b5.value);
	var C5 = fixNothingEntered(document.classGradeCalc.c5.value);

    //Row 6
    var B6 = fixNothingEntered(document.classGradeCalc.b6.value);
	var C6 = fixNothingEntered(document.classGradeCalc.c6.value);

    //Row 7
    var B7 = fixNothingEntered(document.classGradeCalc.b7.value);
	var C7 = fixNothingEntered(document.classGradeCalc.c7.value);

    //Row 8
    var B8 = fixNothingEntered(document.classGradeCalc.b8.value);
	var C8 = fixNothingEntered(document.classGradeCalc.c8.value);

    //Calculations
	totalWeight = C1 + C2 + C3 + C4 + C5 + C6 + C7 + C8;
    var classGrade = ((B1 * C1 / 100) + (B2 * C2 / 100) + (B3 * C3 / 100) + (B4 * C4 / 100) + (B5 * C5 / 100) + (B6 * C6 / 100) + (B7 * C7 / 100) + (B8 * C8 / 100)) * 100 / totalWeight;

    if(totalWeight > 100)
    {
        alert("Error, the weight % column is above 100, please make sure it is less than 100");

    }else{
        //Send back to table
	    document.classGradeCalc.Weight.value = totalWeight;
	    document.classGradeCalc.classGradeResult.value = classGrade;
    }
    
}


function calcGradeCategory(){
    //Row 1
    var E1 = fixNothingEntered(document.classGradeCalc.e1.value);
    var F1 = fixNothingEntered(document.classGradeCalc.f1.value);

    //Calculations 
    var gradeCatAvg = (E1/F1);
    document.classGradeCalc.gca.value = gradeCatAvg;

}


function fixNothingEntered(input)
{
	if (input == "")
		return 0;
	else
		return parseFloat(input);	
}