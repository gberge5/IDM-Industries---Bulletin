<!DOCTYPE html>
<html lang="en">
<head>
<title> Bulletins Grade Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <script src="studentClassGradeCalc.js"></script>
</head>
    <nav class="header-out">
        <img class="BulletinLogo" src="https://i.imgur.com/aNeZokY.jpeg">
        <a style="text-decoration: none;" href="http://localhost/bulletin/home.php">Home</a>
        <a style="text-decoration: none;" href="http://localhost/bulletin/studentCalendar.php">Student Calendar</a>
        <a style="text-decoration: none;" href="http://localhost/bulletin/studentAssignmentPlanner.php">Student Planner</a>
        <a style="text-decoration: none;" href="http://localhost/bulletin/studentRunOrganizations.php">Student-Run Organizations</a>
        <a style="text-decoration: none;" href="http://localhost/bulletin/studentGradeCalculator.php">Student Grade Calculator</a>
        <a style="text-decoration: none;" href="http://localhost/bulletin/account1.php">Account</a>
</nav>
<body>
<main>
    <div id="Title"><p>Bulletin's Student Grade Calculator</p></div>
    <div id="class-grade-header" style="margin-left: 170px; height: 265px; width:552px"><h1>Class Grade Calculator</h1><br><h2>Use this calculator, to find out your exact grade
    in your class based on the weighted averages your teacher has assigned. Enter in your grade category (e.g. Assignments, Exams, Homework, etc). Then head over to
    the grade category average calculator and type in the required information. Then paste the result in the grade category average column. Then type in the weight for 
    that category. Make sure the weighted category does not total more 
    than 100 or you will be prompted with an error. Your class grade will be displayed in the class grade result table.</h2></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form name=classGradeCalc action="">
        <table style="margin-left: 170px;">
            <tbody>
                <tr>
                    <td>Grading Category</td>
                    <td>Grading Category Average</td>
                    <td>Weight%</td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a1 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b1 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c1 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a2 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b2 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c2 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a3 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b3 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c3 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a4 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b4 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c4 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a5 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b5 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c5 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a6 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b6 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c6 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a7 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b7 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c7 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=a8 defaultValue="" placeholder="Enter in Grade Category"></td>
	                <td align="center"><input size=12 name=b8 defaultValue="" placeholder="Enter in GCA"></td>
                    <td align="center"><input size=13 name=c8 defaultValue="" placeholder="Enter in Weight%"></td>
                </tr>
                <tr>
                    <td colspan=2 style="text-align: left;"><br><input style="font-family: 'Open Sans', sans-serif; background: black; color: white; border-radius: 4px; height: 35px; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px;" type=button name=Calculate value="Calculate Class Grade" onClick="calcGrade()"></td>
	                <td colspan=1 style="text-align: center;"><br><input style="font-family: 'Open Sans', sans-serif; background: black; color: white; border-radius: 4px; height: 35px; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px;" type=reset name=resetCalcTable value="Reset Class Grade Table"></td>
                </tr>
            </tbody>
        </table>
        <div id="class-grade-header" style="height: 190px; width: 435px; margin-left: 120px; margin-top: -305px"><h1>Grade Category Average Calculator</h1><br><h2>
            Use this calculator first to calculate each grade categories average. Then copy the grade category average result from the table and 
            paste into the Grading Category Average section of the class grade calculator.</h2></div>
        <table style="margin-left: 120px; width: 200px; margin-top: -75px;">
            <tbody>
                <tr>
                    <td>Grading Category</td>
                    <td>Points You Earned</td>
                    <td>Max Points</td>
                </tr>
                <tr>
                    <td align="center"><input size=19 name=d1 defaultValue="" placeholder="Enter in GC"></td>
	                <td align="center"><input size=12 name=e1 defaultValue="" placeholder="Enter in PYE"></td>
                    <td align="center"><input size=13 name=f1 defaultValue="" placeholder="Enter in MP"></td>
                </tr>
                <tr>
                    <td>Grading Category Average</td>
                    <td><input size=15 name=gca defaultValue=""></td>
                    <td colspan=2 style="text-align: center;"><input style="font-family: 'Open Sans', sans-serif; background: black; color: white; border-radius: 4px; height: 35px; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px;"  type=button name=Calculate value="Calculate" onClick="calcGradeCategory()"></td>
                </tr>
            </tbody>
        </table>
        <div id="class-grade-header" style="height: 200px; width: 380px; margin-left: 160px; margin-top: 50px"><h1>Class Grade Result</h1><br><h2>This table shows your class grade based on the values you've entered. 
        Since, every teacher has different letter grading scales, you will have to take the class grade and align it with your classes letter 
        grading scale found in your syllabus for that class.</h2></div>
        <table style="margin-left: 922px; width: 420px;">
            <tbody>
                <tr>
                    <td>Your Class Grade</td>
                    <td>Total Weight %</td>
                </tr>
                <tr>
                    <td><input size=15 name=classGradeResult defaultValue=""></td>
                    <td><input size=5 name=Weight defaultValue=""></td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>                               
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>                               
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </form>
</main>
<footer id="footer">
    <p style="font-size: 15px"> While using Bulletin, you agree to have read and accepted our terms of use, cookie and privacy policy.<br>
      Copyright 2022-2023 by IDM Industries. All Rights Reserved.<br>
      Bulletin is Powered by IDM Industries.</p>
</footer>
</body>
</html>




<style>
html, body
{
    margin: 0;
    padding: 0;
    background: #232526;
    background: -webkit-linear-gradient(to right, #414345, #232526);
    background: linear-gradient(to right, #414345, #232526);
    overflow-x: hidden;
    height: 100%;
}

main
{
    animation: fade-in-move-down 1.2s;
}

@keyframes fade-in-move-down
{
  0%
  {
    opacity: 0;
    transform: translateY(-3rem);
  }
  100%
  {
    opacity: 1;
    transform: translateY(0);
  }
}


a::before
{
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    border-radius: 4px;
    background-color: white;
    bottom: 20px;
    left: 0;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .3s ease-in-out;
}

a:hover::before
{
    transform-origin: left;
    transform: scaleX(1);
}

.BulletinLogo
{
    display: inline-block;
    vertical-align: top;
    width: 225px;
    height: 115px;
    margin-right: 45px;
    margin-top: -20px;
}

#class-grade-header
{
    float: left;
    margin-left: -400px;
    padding: 20px;
    height: 240px;
    position: relative;
    background: black;
    width: 542px;
    border: 1px black;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
     border-radius: 4px;
}

tr, td{
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: white;
}

table{
    float: left;
    padding: 15px;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: white;
    margin-top:0px;
    background: #232526;
}

input::placeholder{
    text-align: center;
    font-family: 'Open Sans', sans-serif;

}

#Title
{
    font-family: 'Open Sans', sans-serif;
    color: white;
    font-size: 40px;
    text-align: center;
}

.header-out
{
    margin: 0;
    padding: 35px;
    background: black;
    width: 1500px;
}

.header-out > a
{
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 15px;
    height: 80px;
    line-height: 80px;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    color:white;
}

h1{
    font-family: 'Open Sans', sans-serif;
    color: white;
    font-size: 23px;
    text-align: center;
}

h2{
    font-family: 'Open Sans', sans-serif;
    color: white;
    font-size: 15px;
    text-align: center;
}


h3
{
    font-size: 28px;
    color: white;
}

h4
{
    font-size: 28px;
}

p
{
    font-family: 'Open Sans', sans-serif;
    color: white;
    font-size: 30px;
    text-align: center;
}




#class_grade_buttons
{
    background: black;
    height: 120px;
    margin-left: 300px;
    width: 913px;
    border: 1px black;
    text-align: center;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
     border-radius: 4px;
}

#footer
{
    margin-bottom: 0px;
    padding: 20px;
    background: black;
    position: relative;
    height: 110px;
    width: 1500px;
    font-family: 'Open Sans', sans-serif;
    color: white;
    font-size: 15px;
    text-align: center;
}
</style>
