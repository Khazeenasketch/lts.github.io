

<?php




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
$st_gender=$_POST["st_gender"];


$sql="INSERT INTO employe(br_code,names,email,passwords,phone_no,CNIC,adress,salary,dob,gender) VALUES ('$st_code','$st_name' , '$st_email' , '$st_password' , '$st_phone' , '$st_cnic' , '$st_address' ,  '$st_salary','$st_dob','$st_gender')";


if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Employee added")</script>';
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
