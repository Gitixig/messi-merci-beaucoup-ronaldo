<?php session_start(); ?>
<?php include '../layout/header.php'?>
<?php include '../db/db.php';
$sql="SELECT * FROM tbluser";
$userlist=mysqli_query($conn,$sql);
?>
<div class="information">
    <div class="List-User">
        List User
    </div>
    <table class="table">
    <thead>
    <tr> 
        <td>#</td>
        <td>Username</td>
        <td>Password</td>
    </tr>
       
    </thead>
    <tbody>
    <tr> 
        <?php foreach($userlist as $item){?>
           <td> <?php echo $item["Id"];?></td>
            <td><?php echo $item["username"];?></td>
            <td><?php echo $item["password"];?></td>

        
    </tr>
    <?php } ?>
    </tbody>

    </table>
</div>
<?php include '../layout/footer.php'?>

