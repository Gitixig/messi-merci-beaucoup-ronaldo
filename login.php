<?php include 'layout/header.php'?>
<form action="login_post.php" method="Post">
    <div class="from-group">
        <label id="Name" >Name</label>
        <input id="Name" type="text" name="Name" class="form-control">
    </div>
    <div class="from-group">
        <label id="Username" >Username</label>
        <input id="Username" type="text" name="Username" class="form-control">
    </div>
    <div class="from-group">
        <label id="Password" >Password</label>
        <input id="Password" type="text" name="Password" class="form-control">
    </div>
    <div class="from-group">
        <input id="submit" type="submit" name="submit" class="btn btn-primary btn-bg-success bt" value="login" >
    </div>
</form>
<?php include 'layout/footer.php'?>