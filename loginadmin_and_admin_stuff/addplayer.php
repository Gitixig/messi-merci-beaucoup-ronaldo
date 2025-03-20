<?php session_start();?>
<?php if (!isset($_SESSION['Role'])||$_SESSION['Role']!=="admin") {
    header("location:login.php");
    exit();
}
?>
<h1>Thêm cầu thủ mới</h1>
<input type="text" name="name" placeholder="Tên cầu thủ">
<input type="Date" name="date">
<input type=""

