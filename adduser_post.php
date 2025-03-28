<?php session_start()?>
<?php if(isset($_POST["name"])){
    include 'db/db.php';
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$hash_password=password_hash($password,PASSWORD_BCRYPT);
$sql="Insert Into tbluser(name,username,password) 
                                        values('$name','$username','$hash_password')";
mysqli_query($conn,$sql);
$_SESSION['UserLogin']=$username;
$_SESSION['Role']="user";
    header("location:login.php");
$conn->close();
}
else{
    die("Wrong way to open this file");
} ?>