<?php
    session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'planner_db');

    $update = false;
    $classname = "";
	$assignmenttype = "";
    $description = "";
    $id = 0;
    $duedate = "";
    $email = "";

  
    if (isset($_POST['add'])) {
        $classname =  $_POST['class_name'];
        $assignmenttype = $_POST['assignment_type'];
        $description = $_POST['assignment_description'];
        $duedate = $_POST['due_date'];
        $checkbox = $_POST['mark_as_completed'];
        
        mysqli_query($conn, "INSERT INTO planner_info(classname, assignmenttype, description, duedate, email) VALUES('$classname','$assignmenttype', '$description', '$duedate','$email')");
        header('location: studentAssignmentPlanner.php');
       
    }

    if (isset($_POST['confirm_edit'])) {
        $id = $_POST['id'];
        $classname =  $_POST['class_name'];
        $assignmenttype = $_POST['assignment_type'];
        $description = $_POST['assignment_description'];
        $duedate = $_POST['due_date'];
        $checkbox = $_POST['mark_as_completed'];
    
        mysqli_query($conn, "UPDATE planner_info SET classname='$classname', assignmenttype='$assignmenttype', description = '$description', duedate = '$duedate' WHERE id=$id");
        header('location: studentAssignmentPlanner.php');
    }

    if (isset($_GET['delete_button'])) {
        $id = $_GET['delete_button'];
        mysqli_query($conn, "DELETE FROM planner_info WHERE id=$id");
        header('location: studentAssignmentPlanner.php');
    }

   
   
?>
