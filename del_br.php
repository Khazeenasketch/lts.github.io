<?php

$conn = new mysqli('localhost', 'root', '', 'lts_db') or die(mysqli_error());
    
if($conn){
    echo 'connected';
}
else
echo 'not connected';// Using database connection file here

$br_code = $_GET['br_code']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM branches WHERE br_code = '$br_code'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:list_all_branches.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
