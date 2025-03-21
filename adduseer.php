<?php include 'layout/header.php' ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Login</h4>
        </div>
        <div class="card-body">
            <style>
                .information {
                    text-align: center;
                }

                .information ul {
                    text-align: center;
                    padding-right: 50px;
                }

                .submit {
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
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>