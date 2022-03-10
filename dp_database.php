

<?php

/*

$username="root";
$password="";
$db="lts_db";

$con=mysqli_connect('localhost',$username,$password,$db) ;

if (isset($_POST)) {
$st_code=$_POST["br_code"];
$st_name = $_POST["st_name"];
$st_email = $_POST["st_email"];
$st_password= $_POST["st_password"];
$st_phone = $_POST["st_phone"];
$st_cnic=$_POST["st_cnic"];
$st_address = $_POST["st_address"];
$st_salary=$_POST["st_salary"];
$st_dob=$_POST["st_dob"];
$st_gender=$_POST["st_gender"];
$dp_reg=$_POST["reg_no"];
$dp_parcel=$_POST["parcel_id"];
}

$sql="INSERT INTO courier(br_codes,names,email,passwords,phone_no,CNIC,adress,salary,dob,gender,reg_no,parcel_id) VALUES ('$st_code','$st_name' , '$st_email' , '$st_password' , '$st_phone' , '$st_cnic' , '$st_address' ,  '$st_salary','$st_dob','$st_gender',12,12)";


$rs = mysqli_query($con, $sql ) or die("could not connect to mysql");

if($rs){
    echo '<script>alert("Branch inserted")</script>';
 
    
         }
 else{
    echo '<script>alert("Branch not inserted")</script>';
     }
  
*/

include 'db_connect.php';
$st_code=$_POST["br_code"];
$st_name = $_POST["st_name"];
$st_email = $_POST["st_email"];
$st_password= $_POST["st_password"];
$st_phone = $_POST["st_phone"];
$st_cnic=$_POST["st_cnic"];
$st_address = $_POST["st_address"];
$st_salary=$_POST["st_salary"];
$st_dob=$_POST["st_dob"];
$st_gender=$_POST["st_gender"];



$sql="INSERT INTO courier(br_codes,names,email,passwords,phone_no,CNIC,adress,salary,dob,gender) VALUES ('$st_code','$st_name' , '$st_email' , '$st_password' , '$st_phone' , '$st_cnic' , '$st_address' ,  '$st_salary','$st_dob','$st_gender')";


if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Employee added")</script>';
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
