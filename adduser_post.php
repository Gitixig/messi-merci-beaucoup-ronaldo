<?php if(isset($_POST["name"])){
    include 'db/db.php';
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$hash_password=password_hash($password,PASSWORD_BCRYPT);
$sql="Insert Into tbluser(name,username,password) 
                                        values('$name','$username','$password')";
mysqli_query($conn,$sql);
header("location:hahahaha.php");
$conn->close();
}
else{
    die("Wrong way to open this file");
} ?>