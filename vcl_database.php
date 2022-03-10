<?php

$username="root";
$password="";
$db="lts_db";

$con=mysqli_connect('localhost',$username,$password,$db) ;
if($con){
    echo 'connected';
}

else{
echo 'not connected';
}

$type= $_POST["type"];
$reg= $_POST["reg#"];
$assign=$_POST["assign_to"];
$city= $_POST["city"];
$br_code= $_POST["br_code"];


$sql="INSERT INTO vehicles(Typ,reg_no,dps_id,city,branch) VALUES ('$type' , '$reg' , '$assign' , '$city' , '$br_code')";

$rs = mysqli_query($con, $sql) or die("could not connect to mysql");
if($rs){
    echo '<script>alert("Vehicle inserted")</script>';
       }
 else{
    echo '<script>alert("Vehicle not inserted")</script>';
     }
?>