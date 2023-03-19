<?php 

include("../connection/connect.php");

$iduser = $_GET['iduser'];

$password = $_POST['password'];

$newPassword = $_POST['Newpassword1'];

$confirm_newPassword = $_POST['Newpassword2'];

$sql = "SELECT * FROM users WHERE id = $iduser";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$checkPassword = $result['password'];

if(password_verify($password, $checkPassword)){
    if($newPassword == $confirm_newPassword) {
        $hash_newPassword = password_hash($newPassword, PASSWORD_DEFAULT); //เข้ารหัสผ่านใหม่
        $update_password = "UPDATE `users` SET `password`= :password WHERE id = :id";

        $stmt1 = $conn->prepare($update_password);

        $stmt1->bindParam(':password', $hash_newPassword, PDO::PARAM_STR);
        $stmt1->bindParam(':id', $iduser, PDO::PARAM_STR);

        if($stmt1->execute()) {
            echo "เปลี่ยนรหัสผ่านเรียบร้อยแล้วนะครับ";
            header("refresh: 2; url=http://localhost/crud/");  
        } else {
            echo "เปลี่ยนรหัสผ่านไม่สำเร็จครับ";
            header("refresh: 2; url=http://localhost/crud/");  
        }
    } else {
        echo "รหัสผ่านใหม่ไม่ตรงกัน";
        header("refresh: 2; url=http://localhost/crud/");  
    }
} else {
    echo "รหัสผ่านไม่ถูกต้อง";
    header("refresh: 2; url=http://localhost/crud/");  
}







?>