<?php 
include("../connection/connect.php");

$iduser = $_GET['iduser'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$role = $_POST['role'];

$sql = "UPDATE `users` SET `fname`=:fname,`lname`=:lname,`role`=:role WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
$stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
$stmt->bindParam(':role', $role, PDO::PARAM_STR);
$stmt->bindParam(':id', $iduser, PDO::PARAM_STR);

if($stmt->execute()) {
    echo "แก้ไขข้อมูลผู้ใช้งานสำเร็จแล้ว";
    header("refresh: 2; url=http://localhost/crud/");  
} else {
    echo "แก้ไขข้อมูลผู้ใช้งานไม่สำเร็จ";
    header("refresh: 2; url=http://localhost/crud/");  
}

?>