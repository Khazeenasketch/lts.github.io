<?php

$conn = new mysqli('localhost', 'root', '', 'lts_db') or die(mysqli_error());
    
if($conn){
    echo 'connected';
}
else
echo 'not connected';// Using database connection file here

$cust_id = $_GET['cust_id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM customers WHERE cust_id = '$cust_id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:list_customers.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
