<?php

$conn = new mysqli('localhost', 'root', '', 'lts_db') or die(mysqli_error());
    


$dp_id = $_GET['dp_id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM courier WHERE dp_id = '$dp_id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:list_dp.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

