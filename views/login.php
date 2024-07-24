<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d0bdada029.js" crossorigin="anonymous"></script>
</head>

<body class="container">
    <?php require '../helpers/header.php'; ?>
    <main>
        <div class="row">
            <h2>Login Form</h2>
            <form action="../models/validate_login.php" method="post">
                <div>
                    <label for="username">Username:</label> <input type="email" name="username" id="username" required>
                </div>
                <div>
                    <label for="password">Password:</label> <input type="password" name="password" id="username" required>
                </div>
                <div>
                    <label for="userAccount">User Account:</label> <select name="accountType" id="userAccount">
                        <option value="student">Student</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="admin">Admin</option>
                    </select><br>
                </div>
                <div>
                    Do not have an account?<a href="../index.php">Register here</a>
                </div>
                <div class="buttons">
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