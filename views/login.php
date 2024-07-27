<?php
$title = "Login page";
?>

<html lang="en">
<?php require '../helpers/head.php'; ?>

<body class="container">
    <?php require '../helpers/header.php'; ?>
    <main>
        <div class="row">
            <h2>Login Form</h2><hr>
            <form action="../models/validate_login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="userAccount" class="form-label">User Account:</label> <select name="accountType" class="form-select" id="userAccount">
                        <option value="student">Student</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="admin">Admin</option>
                    </select><br>
                </div>
                <div class="mb-3">
                    Do not have an account?<a href="../index.php">Register here</a>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">LOGIN</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </div>
            </form>
        </div>
    </main>
    <?php require '../helpers/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>