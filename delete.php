<?php include './connection.php';
$ma = $_POST['ma']??'';
if($ma != ''){
    $sql = "delete from sinhvien where ma=?";
    $stm = $pdo->prepare($sql);
    $stm->execute([$ma]);
}
header('location:index.php');