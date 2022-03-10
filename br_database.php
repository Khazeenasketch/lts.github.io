<?php

include 'add_new_branch.php';

$username="root";
$password="";
$db="lts_db";

$con=mysqli_connect('localhost',$username,$password,$db) ;

$br_name=$_POST["br_name"];
$br_code = $_POST["br_code"];
$br_manager = $_POST["br_manager"];
$address = $_POST["address"];
$city = $_POST["city"];
$contact=$_POST["contact"];

$sql="INSERT INTO branches(br_name,br_code,br_manager,adress,city,contact) VALUES ('$br_name' , '$br_code' , '$br_manager' , '$address' , '$city' , '$contact')";

$rs = mysqli_query($con, $sql ) or die("could not connect to mysql");

if($rs){
    echo '<script>alert("Branch inserted")</script>';
         }
 else{
    echo '<script>alert("Branch not inserted")</script>';
     }
?>