<?php 
if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['frmUsername']) && isset($_POST['frmPassword'])) {
    $frmUsername=$_POST['frmUsername'];
    $frmPassword=$_POST['frmPassword'];
    if (session_status()==PHP_SESSION_NONE) {
        session_start();
    }
    include 'db/db.php';
    $sql="SELECT * FROM tbluser WHERE username='".$frmUsername."'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)===0) {
        $_SESSION["ErrorMessage"]="Wrong username or password";
        header("location:login.php");
        exit();
    }
    $user=mysqli_fetch_assoc($result);
    if (password_verify($frmPassword,$user['password'])) {
        $_SESSION['UserLogin']=$user['username'];
        $_SESSION['Role']='0';
        header("location:hahahaha.php");
        exit();
    }
    else{
        $_SESSION['ErrorMessage']="Wrong username or password";
        header("location:login.php");
        exit();
    }
}   else{
        echo "Wrong way to open it";
        exit();
    }

?>