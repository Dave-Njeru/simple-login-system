<!--view-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d0bdada029.js" crossorigin="anonymous"></script>
</head>

<body class="container">
    <?php require 'helpers/header.php'; ?>
    <main>
        <div class="row">
            <h4>Registration</h4>
            <form action="models/registration.php" method="post">
                <div>
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" id="firstName" pattern="[A-Za-z]{1,32}" placeholder="First Name" title="Only alphabet letters are allowed" required><br>
                </div>
                <div>
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" id="lastName" pattern="[A-Za-z]{1,32}" placeholder="Last Name" title="Only alphabet letters are allowed" required><br>
                </div>
                <div>
                    <label for="username">Username:</label>
                    <input type="email" name="username" id="username" placeholder="example@xyz.com" required><br>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" maxlength="12" autocomplete="new-password" required><br>
                </div>
                <div>
                    <label for="userAccount">User Account:</label> <select name="accountType" id="userAccount">
                        <option value="student">Student</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="admin">Admin</option>
                    </select><br>
                </div>
                <div>
                    Already registered?<a href="views/login.php">Sign in</a>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn btn-success">SIGN UP</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </div>
            </form>
        </div>
    </main>
    <?php require 'helpers/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>