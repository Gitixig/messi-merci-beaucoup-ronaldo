<?php  if (session_status()==PHP_SESSION_NONE) {
        session_start();}
if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['frmUsername']) && isset($_POST['frmPassword'])) {
    $frmUsername=$_POST['frmUsername'];
    $frmPassword=$_POST['frmPassword'];
   include 'db/db.php';
        if ($frmUsername=="admin" && $frmPassword=="admin123") {
        $_SESSION['Role']="admin";
        $_SESSION['UserLogin']=$frmUsername;
        header("location:loginadmin_and_admin_stuff/checkadmin.php");
        exit();
    } else {
        
    }

    
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
        header("location:hahahaha.php");
        exit();
    }
    else{
        $_SESSION['ErrorMessage']="Wrong username or password";
        header("location:login.php");
        exit();
    }
}

?>