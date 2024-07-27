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
            <h4>Registration</h4> <hr>
            <form action="models/registration.php" method="post">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name:</label>
                    <input type="text" name="firstName" class="form-control" id="firstName" pattern="[A-Za-z]{1,32}" placeholder="First Name" title="Only alphabet letters are allowed" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name:</label>
                    <input type="text" name="lastName" class="form-control" id="lastName" pattern="[A-Za-z]{1,32}" placeholder="Last Name" title="Only alphabet letters are allowed" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="example@xyz.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" maxlength="12" placeholder="Enter password" autocomplete="new-password" required>
                </div>
                <div class="mb-3">
                    <label for="userAccount" class="form-label">User Account:</label> <select name="accountType" class="form-select" id="userAccount">
                        <option value="student">Student</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="mb-3" >
                    Already registered?<a href="views/login.php">Sign in</a>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">SIGN UP</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </div>
            </form>
            <hr>
        </div>
    </main>
    <?php require 'helpers/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>