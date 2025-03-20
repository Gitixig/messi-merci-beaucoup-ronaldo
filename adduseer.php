<?php include 'layout/header.php' ?>
<style>
    .information{
        text-align: center;
    }
    .information ul{
        text-align: center;
        padding-right: 50px;
    }
    .submit{
        text-align: center;
    }
</style>
<form action="adduser_post.php" method="post">
    <div class="information">
    <ul>Name</ul>
    <input type="text" name="name" placeholder="Name">
    <ul>Username</ul>
    <input type="text" name="username" placeholder="Username">
    <ul>Password</ul>
    <input type="password" name="password" placeholder="password">
</div>
<div class="submit">
    <button type="submit">Đăng kí</button>
</div>
</form>
<?php include 'layout/footer.php' ?>