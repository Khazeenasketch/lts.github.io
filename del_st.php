<?php

$conn = new mysqli('localhost', 'root', '', 'lts_db') or die(mysqli_error());
    


$emp_id = $_GET['emp_id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM employe WHERE emp_id = '$emp_id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:list_staff.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
