<?php
if (isset($_POST['fldFullName']) && isset($_POST['Id'])) {
    include "../db/db.php";

    $Id = $_POST['Id'];
    $fldFullName = $_POST['fldFullName'];
    $frmUsername = $_POST['frmUsername'];
    $frmPass = ['frmPass'];

    $sql = "UPDATE `tbluser` SET `Name`='$fldFullName', `username`='$frmUsername', `password`='$frmPass' WHERE `Id`='$Id'";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("location:listuser.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
} else {
    die("Truy cập không hợp lệ");
}
