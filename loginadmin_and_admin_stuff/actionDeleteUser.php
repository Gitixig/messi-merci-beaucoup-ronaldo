<?php
if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST['frmDeleteId'])
) {
    include "../db/db.php";
    $Id = $_POST['frmDeleteId'];


    $sql = "DELETE FROM tbluser WHERE Id = " . $Id;


    // echo $sql;
    // die;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("location:listuser.php");
} else {
    die("Wrong open page");
}
