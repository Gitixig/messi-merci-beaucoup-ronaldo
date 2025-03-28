<?php include_once "../layout/header.php"; ?>

<div class="panel panel-success">
    <div class="panel-heading">ADD MORE USER</div>
    <div class="panel-body" style="margin: 10px;">
        <form action="Update_POST.php" method="POST">
            <input type="hidden" name="Id" value="<?php echo isset($_GET['Id']) ? $_GET['Id'] : ''; ?>">

            <div class="form-group">
                <label for="fldFullName">FULL NAME</label>
                <input id="fldFullName" name="fldFullName" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="frmUsername">USER NAME</label>
                <input id="frmUsername" name="frmUsername" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="frmPass">PASSWORD</label>
                <input id="frmPass" name="frmPass" type="password" class="form-control">
            </div>

            <div class="form-group">
                <input id="frmsubmit" name="frmsubmit" type="submit" class="btn btn-primary" value="Thêm Người Dùng Mới">
            </div>
        </form>
    </div>
</div>

<?php include_once "../layout/footer.php"; ?>
