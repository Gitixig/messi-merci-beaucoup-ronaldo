<?php include 'layout/header.php' ?>
<style>
    .card {
        max-width: 500px;
        height: fit-content;
        align-items: center;
        margin: auto;
    }



    .button {
        align-items: center;
    }
</style>
<div class="container">
    <div class="card">
        <div class="card-header bg-info text-white" style="width: 400px;;">
            <h4 class="text">Login</h4>
        </div>
        <div class="card-body">
            <table class="table table-dark table-striped-columns">
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
            </table>
        </div>
    </div>
</div>
<?php
include 'layout/footer.php' ?>