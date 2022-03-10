<?php
include 'db_connect.php';
$cus_name=$_POST["cus_name"];
$cus_phone = $_POST["cus_phone"];
$cus_address = $_POST["cus_address"];
$cus_id= $_POST["cus_id"];
$cus_email = $_POST["cus_email"];
$cus_city=$_POST["cus_city"];
$br_code = $_POST["br_code"];
$cus_cnic=$_POST['cnic'];




$sql="INSERT INTO customers(names,email_cus,cust_id,phone_no,CNIC_cus,city,code,adress) VALUES ('$cus_name','$cus_email' , '$cus_id' , '$cus_phone' ,  '$cus_cnic' , '$cus_city' ,  '$br_code ','$cus_address')";


if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Customer added")</script>';
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
