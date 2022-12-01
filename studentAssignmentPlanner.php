<?php 
    @include 'config.php';
    @include 'planner_database.php';
   
    
?>


<?php

	if (isset($_GET['edit_button'])) {
		$id = $_GET['edit_button'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM planner_info WHERE id=$id");

		if ($record) {
			$fetchstoredassignmentinfo = mysqli_fetch_array($record);
			$classname = $fetchstoredassignmentinfo['classname'];
			$assignmenttype = $fetchstoredassignmentinfo['assignmenttype'];
            $description = $fetchstoredassignmentinfo['description'];
            $duedate = $fetchstoredassignmentinfo['duedate'];
		}
	}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Planner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="studentAssignmentPlanner.css"/>
</head>
<body>
    <nav class="header-out">
        <img class="BulletinLogo" src="https://i.imgur.com/aNeZokY.jpeg">
        <a class= "nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/home.php">Home</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentCalendar.php">Student Calendar</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentAssignmentPlanner.php">Student Planner</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentRunOrganizations.php">Student-Run Organizations</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentGradeCalculator.php">Student Grade Calculator</a>
        <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/account1.php">Account</a>
    </nav>
    <main>
        <?php $result = mysqli_query($conn, "SELECT * FROM planner_info"); ?>
        <div id="Title">
            <p style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; top: 50%; font-size: 30px"> Bulletin's Student Assignment Planner</p><br>
        </div>
        <div id="planner-header" name="planner-header" style="text-align: center; margin: 0; padding-bottom: 30px; padding: 0px; position: relative; background: black; margin-left: 70px; width: 1350px; border: 1px black; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; "><br>
        <h1 style="font-family: 'Open Sans', sans-serif; color:white; margin-right: 410px;">Assignment Planner</h1>
        <p style="font-family: 'Open Sans', sans-serif; color: white; text-align: center;"> Welcome to Bulletin's Student Assignment Planner! Fill out the required assignment information needed and then click the Add Assignment button. Your assignment and its information should pop up in the table. From there, you can edit or delete the assignment.</p>
        <table class="panel" style="background: #232526; padding: 20px; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 40px; ">
	        <tbody>
		        <tr>
                    <td>
                        <table style="padding:0px; width: 1284px; margin-left: 0px; border-collapse: collapse;">
                            <tbody>
                                <tr valign="top">
                                    <td align="center">
                                        <strong style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;">Class Name</strong><br><br>
                                    </td>
                                    <td align="center">
                                        <strong style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;">Assignment Type</strong><br><br>
                                    </td>
                                    <td align="center">
                                        <strong style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;">Description of Assignment</strong><br><br>
                                    </td>
                                    <td align="center">
                                        <strong style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;">Due Date</strong><br>
                                    </td>
                                    <td align="center">
                                        <strong style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;">Edit/Delete Assignment</strong><br><br>
                                    </td>
                                </tr>
                            </tbody>
                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                <tr style="margin-left: 220px;">
                                <td style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;"> <?php echo $row['classname']; ?></td>
                                <td style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;"> <?php echo $row['assignmenttype']; ?></td>
                                <td style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;"> <?php echo $row['description']; ?></td>
                                <td style="font-family: 'Open Sans', sans-serif; color:white; text-align: center;"> <?php echo $row['duedate']; ?></td>
                                <td>
                                    
                                    <a href="studentAssignmentPlanner.php?edit_button=<?php echo $row['id']; ?>"  style="display: inline-block; text-decoration: none; 
                                    font-family: 'Open Sans', sans-serif; color:white; text-align: center; 
                                    background-color: black; font-size: 15px; border: 2px solid white; -webkit-border-radius: 4px;  
                                    -moz-border-radius: 4px; border-radius: 4px; cursor: pointer; padding: 2px 0px; width: 100px; height: 20px; margin-left: -140px;" >Edit</a>
                                </td>
                                <td>
                                    <a href="planner_database.php?delete_button=<?php echo $row['id']; ?>" style="display: inline-block; text-decoration: none; 
                                    font-family: 'Open Sans', sans-serif; color:white; text-align: center; 
                                    background-color: black; font-size: 15px; border: 2px solid white; -webkit-border-radius: 4px;  
                                    -moz-border-radius: 4px; border-radius: 4px; cursor: pointer; padding: 2px 0px; width: 100px; height: 20px; margin-left: -160px;">Delete</a>
                                </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <br>
        <br>
        <br>
        <form method="post" action="studentAssignmentPlanner.php" style= "display: flex; flex-direction: row; background-color: black; width: 1200px; height: 115px; padding: 30px; margin-left: 120px; -webkit-border-radius: 20px;">
            <div class="input_assignment_information">
                <input type="hidden" name="id" value="<?php echo $id;?>">
            </div>
            <div class="input_assignment_information">
                <label style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 15px; margin-left: 55px;">Class Name</label>
                <input type="text" name="class_name" placeholder="Enter in Class Name" style="font-family: 'Open Sans', sans-serif; text-align: center; font-size: 13px; font-color: black; margin-right: 25px; width: 190px; height: 15px;" value="<?php echo $classname; ?>" required>
            </div>
            <div class="input_assignment_information">
                <label style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 15px; margin-left: 145px;">Assignment Type</label><br>
                <input type="text" name="assignment_type" placeholder="Enter in Assignment Type (e.g. Exams, Homework, Labs, etc)" style="font-family: 'Open Sans', sans-serif; color:black; text-align: center; font-size: 13px; width: 400px; height: 15px; margin-right: 27px;" value="<?php echo $assignmenttype; ?>"required>
            </div>
            <div class="input_assignment_information">
                <label style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 15px; margin-left: 72px">Assignment Description</label><br>
                <input type="text" name="assignment_description" placeholder="Enter in a Description of the Assignment" style="font-family: 'Open Sans', sans-serif; color:black; text-align: center; font-size: 13px; width: 300px; height: 15px; margin-right: 20px" value="<?php echo $description; ?>"required>
            </div>
            <div class="input_assignment_information">
                <label style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 15px; margin-left: 72px;">Due Date</label><br>
                <input type="datetime-local" name="due_date" style="font-family: 'Open Sans', sans-serif; color: black; text-align: center; font-size: 13px; width: 200px; height: 17px; margin-right: 50px;" value="<?php echo $duedate; ?>"required>
            </div>
            <div class="input_assignment_information_btn">
                <br>
                <br>
                <br>
                <br>
                
                 <?php if($update == true): ?>
                    <button type="submit" name="confirm_edit" id="confirm_edit_assignment_btn" class="confirm_edit_assignment_button" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; background-color: black; font-size: 15px; border: 2px solid white; -webkit-border-radius: 4px;  -moz-border-radius: 4px; border-radius: 4px; cursor: pointer; width: 250px; height: 35px; margin-left: -750px;">Confirm Assignment Edit</button>
                <?php else: ?>
                    <button type="submit" name="add" id="add_assignment_btn" class="add_assignment_button" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; background-color: black; font-size: 15px; border: 2px solid white; -webkit-border-radius: 4px;  -moz-border-radius: 4px; border-radius: 4px; cursor: pointer; width: 250px; height: 35px; margin-left: -750px;">Add Assignment</button>
                <?php endif ?> 
            </div> 
        </form>
    </main>
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

    <footer id="footer">
        <p> While using Bulletin, you agree to have read and accepted our terms of use, cookie and privacy policy.<br>
            Copyright 2022-2023 by IDM Industries. All Rights Reserved.<br>
            Bulletin is Powered by IDM Industries.</p>
    </footer>
</body>
</html>