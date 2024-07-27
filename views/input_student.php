<?php
session_start();
$title = "Admin page";

?>

<!doctype html>
<html lang="en">
<?php require '../helpers/head.php' ?>

<body class="container">
    <?php require '../helpers/header.php'; ?>
    <nav>
        <div class="row" style="margin: 20px 0;">
            <div class="col-3">
                <p>Welcome Back &#x1F44B;</p>
            </div>
            <div class="col-3 text-center">
                <span class="dropdown">
                    <span class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Students
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="input_student.php">Add Student</a></li>
                        <li><a class="dropdown-item" href="list_students.php">List all students</a></li>
                    </ul>
                </span>
                <span class="dropdown">
                    <span class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lecturers
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Add Lecturer</a></li>
                        <li><a class="dropdown-item" href="#">List all Lecturer</a></li>
                    </ul>
                </span>
            </div>
            <div class="col-4">
                <ul>
                    <li><a href="../helpers/logout.php" style="color: black;"><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Log out">exit_to_app</i></a> </li>
                    <li><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Settings">settings</i></li>
                    <li><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Notifications">notifications</i></li>
                    <li><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Messages">email</i></li>
                    <li><a href="admin.php" style="color: black;"><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Home page">home</i></a></li>
                </ul>
            </div>
            <div class="col-1 text-center">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="blank profile" class="img-fluid rounded-circle" width=30%;>
            </div>
            <div class="col-1 text-center" style="font-size: 12px; font-weight: bold">
                <span><?= $_SESSION['firstName'] ?> | <?= $_SESSION['accountType'] ?></span>
            </div>
        </div>
    </nav>
    <main>
        <div class="row">
            <div class="col">
                <h2>Student Registration Form</h2>
                <hr>
                <form action="../models/store_students.php" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" id="first_name" class="form-control" name="first_name" pattern="[A-Za-z]{1,32}" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" id="last_name" class="form-control" name="last_name" pattern="[A-Za-z]{1,32}" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth:</label>
                        <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>

                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male" class="form-label">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female" class="form-label">Female</label>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number:</label>
                        <input type="tel" id="phone_number" name="phone_number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="emergency_phone" class="form-label">Emergency Phone:</label>
                        <input type="tel" id="emergency_phone" name="emergency_phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">SUBMIT</button>
                        <button type="reset" class="btn btn-danger">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php require '../helpers/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>