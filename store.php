<?php include './connection.php';
$ma = $_POST['ma']??'';
$ten = $_POST['ten']??'';
$email = $_POST['email']??'';
if($ma != ''){
    $sql = 'insert into sinhvien(ma, ten, email) values(:ma, :ten, :email)';
    $arr = [':ma'=>$ma,':ten'=>$ten,'email'=>$email];
    $stm = $pdo->prepare($sql);
    $stm->execute($arr);
    $n = $stm->rowCount();
    echo 'Đã thêm: ' . $n . ' dòng . <a href="index.php">Tiếp tục</a>';
}
else
    header('location:index.php');