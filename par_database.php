<?php

include 'db_connect.php';

$sen_name=$_POST["sen_name"];
$sen_address = $_POST["sen_address"];
$sen_contact = $_POST["sen_phone"];
$rec_name = $_POST["rec_name"];
$rec_address = $_POST["rec_address"];
$rec_contact=$_POST["rec_phone"];
$br_code=$_POST["br_code"];
$dp_name=$_POST['dp_name'];

$weight=$_POST["weight"];
$height = $_POST["height"];
$length= $_POST["length"];
$width = $_POST["width"];
$price = $_POST["price"];

$sql="INSERT INTO parcels(sen_name,sen_adress,sen_phone,rec_name,rec_phone,rec_adress,br_code,dp_name,weights,height,lengths,width,charges) VALUES ('$sen_name' , '$sen_address' , '$sen_contact' , '$rec_name' , '$rec_address' , '$rec_contact','$br_code','$dp_name','$weight','$height','$length','$width','$price')";



if(mysqli_query($conn, $sql )){
    echo '<script>alert("Parcel inserted")</script>';
         }
 else{
    echo mysqli_error($conn);
     }
?>