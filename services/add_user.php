<?php 

include("../connection/connect.php");

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$role = $_POST['role'];

$sql = "INSERT INTO `users`(`email`, `password`, `fname`, `lname`, `role`) VALUES (:email, :password, :fname, :lname, :role)";

$stmt = $conn->prepare($sql);

$hashPassword = password_hash($password, PASSWORD_DEFAULT); //เข้ารหัส


$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':password', $hashPassword, PDO::PARAM_STR);
$stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
$stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
$stmt->bindParam(':role', $role, PDO::PARAM_STR);

if($stmt->execute()) {
    // true
    echo "เพิ่มข้อมูลสำเร็จแล้ว";
    header("refresh: 2; url=http://localhost/crud/");  
} else {
    // false
    echo "เพิ่มข้อมูลไม่สำเร็จ";
    header("refresh: 2; url=http://localhost/crud/");  
}

?>