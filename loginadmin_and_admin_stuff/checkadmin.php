<?php include '../layout/header.php'; ?>
<?php
if (
    !isset($_SESSION['Role']) || $_SESSION['Role'] != "admin"
) {
    header("location:login.php");
    exit();
}
?>
<style>
    body {
        background-image: url(../uploads/1742660101_download.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<h1 style="text-align: center; margin-top: 50px; margin-bottom: 50px; color: black">Welcome back Admin</h1>