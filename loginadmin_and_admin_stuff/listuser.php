<?php session_start(); ?>
<?php include '../layout/header.php' ?>
<?php include '../db/db.php';
$sql = "SELECT * FROM tbluser";
$userlist = mysqli_query($conn, $sql);
?>
<div class="information">
    <div class="List-User">
        List User
    </div>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>FullName</td>
                <td>Username</td>
                <td>Password</td>
                <td>Action</td>
            </tr>

        </thead>
        <tbody>
            <tr>
                <?php foreach ($userlist as $item) { ?>
                    <td> <?php echo $item["Id"]; ?></td>
                    <td> <?php echo $item["Name"]; ?></td>
                    <td><?php echo $item["username"]; ?></td>
                    <td><?php echo $item["password"]; ?></td>
                    <td>
                        <form action="actionDeleteUser.php"
                            method="POST" id="frmDeleteUser_<?= $item['Id'] ?>"
                            style="display: inline-block;">
                            <input name="frmDeleteId" value="<?= $item['Id'] ?>" type="hidden">
                            <i class="bi bi-x-circle"
                                onclick="confirmDeleteUser(<?= $item['Id'] ?>)"></i>
                        </form>

                        <form action="actionUpdateUser.php"
                            method="POST" id="frmUpdateUser_<?= $item['Id'] ?>"
                            style="display: inline-block;">
                            <input name="frmUpdateId" value="<?= $item['Id'] ?>" type="hidden">
                            <i class="bi bi-pencil-fill"
                                onclick="confirmUpdateUser(<?= $item['Id'] ?>)"></i>
                        </form>
                    </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>
</div>
<script>
    function confirmDeleteUser(userID) {
        if (confirm("DO YOU WANT to delete user")) {
            document.getElementById("frmDeleteUser_" + userID).submit();
        }
    }

    function confirmUpdateUser(userID) {
        if (confirm("DO YOU WANT to Update user")) {
            document.getElementById("frmUpdateUser_" + userID).submit();
        }
    }
</script>
<?php include '../layout/footer.php' ?>