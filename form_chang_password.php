<?php
include("layout.php");
include("connection/connect.php");
$iduser = $_GET['iduser'];

$sql = "SELECT * FROM users WHERE id = $iduser";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<div class="container mt-3">
    <div class="d-flex align-items-center">
        <h1>แก้ไขรหัสผ่าน <span class="btn btn-danger"><?=$result['fname'];?>  <?=$result['lname'];?></span></h1>
        <a href="index.php">
            <button type="button" class="btn btn-outline-success btn-sm mx-3">กลับ</button>
        </a>
    </div>
    <form action="services/chang_password.php?iduser=<?=$result['id'];?>" method="post">

        <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่านเก่า</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="mb-3">
            <label for="Newpassword1" class="form-label">รหัสผ่านใหม่</label>
            <input type="password" class="form-control" name="Newpassword1" id="Newpassword1">
        </div>

        <div class="mb-3">
            <label for="Newpassword2" class="form-label">ยืนยันรหัสผ่านใหม่</label>
            <input type="password" class="form-control" name="Newpassword2" id="Newpassword2">
        </div>


        <button type="submit" class="btn btn-primary form-control">ยืนยัน</button>
    </form>
</div>