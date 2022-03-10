<?php

$conn = new mysqli('localhost', 'root', '', 'lts_db') or die(mysqli_error());
    
if($conn){
    echo 'connected';
}
else
echo 'not connected';// Using database connection file here

$parcel_id = $_GET['parcel_id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM parcels WHERE parcel_id = '$parcel_id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:list_parcels.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
