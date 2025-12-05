<?php include './connection.php';
$ma = $_GET['ma']??'';
$sql = 'select * from sinhvien where ma like ? ';
$arr = ["%$ma%"];
$stm = $pdo->prepare($sql);
$stm->execute($arr);
$n = $stm->rowCount();
$data = $stm->fetchAll(PDO::FETCH_OBJ);
?>
<style>table form{display: inline;}</style>
<h1>Thêm sinh viên: </h1>
<form action="store.php" method="post">
    Mã: <input type="text" name="ma"> <br>
    Tên: <input type="text" name="ten"> <br>
    Email: <input type="text" name="email"> <br>
    <input type="submit" value="Them">
</form>
<h1>Tìm kiếm sinh viên: </h1>
<form action="index.php" method="get">
    <input type="text" name="ma"> <input type="submit" value="tim kiem">
</form>
<h1>Thông tin sinh viên</h1>
<table>
    <tr>
        <td>Mã</td>
        <td>Tên</td>
        <td>Email</td>
    </tr>
    <?php
    foreach($data as $item){
        ?>
        <tr>
            <td><?php echo $item -> ma ?></td>
            <td><?php echo $item -> ten ?></td>
            <td><?php echo $item -> email ?></td>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="ma" value="<?php echo $item->ma ?>">
                    <input type="submit" value="Xoa">
                </form>
            </td>
        </tr>
        <?php
    }
    ?>
</table>