<?php include '../layout/header.php'; ?>
<?php
if (!isset($_SESSION['Role'])||$_SESSION['Role']!="admin"
) {
    header("location:login.php");
    exit();
}
?>
<h1>Welcome back Admin</h1>

<?php include '../layout/footer.php'; ?>