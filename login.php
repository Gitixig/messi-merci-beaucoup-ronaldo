<?php include 'layout/header.php'; ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Login</h4>
        </div>
        <div class="card-body">
            <?php
            if (isset($_SESSION["ErrorMessage"])) {
                echo "<div class='alert alert-danger'>" . $_SESSION['ErrorMessage'] . "</div>";
                unset($_SESSION['ErrorMessage']);
            }
            ?>
            <form action="login_post.php" method="POST">
                <div class="mb-3">
                    <label for="frmName" class="form-label">Name</label>
                    <input type="text" name="frmName" id="frmName" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="frmUsername" class="form-label">Username</label>
                    <input type="text" name="frmUsername" id="frmUsername" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="frmPassword" class="form-label">Password</label>
                    <input type="password" name="frmPassword" id="frmPassword" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" name="frmsubmit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'layout/footer.php'; ?>