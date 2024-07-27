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
                    <li><a href="#" style="color: black;"><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Home page">home</i></a></li>
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
        <div class="row  text-center" style="margin-bottom: 20px;">
            <!--first col-->
            <div class="col" style="background-color: #F0F8FF; padding: 20px 0; margin-right: 20px; border-radius: 5px">
                <div>
                    <span><i class="bi bi-mortarboard-fill" style="color: blue; font-size: 34px"></i></span>
                </div>
                <div>
                    Total Students <br>
                    6000
                </div>
            </div>
            <!--second col-->
            <div class="col" style="background-color: #F0F8FF; padding: 20px 0; margin-right: 20px; border-radius: 5px">
                <div>
                    <span><i class="bi bi-book" style="color: blue; font-size: 34px"></i></span>
                </div>
                <div>
                    Total Lecturers <br>
                    6000
                </div>
            </div>
            <!--third col-->
            <div class="col" style="background-color: #F0F8FF; padding: 20px 0; margin-right: 20px; border-radius: 5px">
                <div>
                    <span><i class="bi bi-people-fill" style="color: blue; font-size: 34px"></i></span>
                </div>
                <div>
                    Total Employees <br>
                    6000
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 25px;">
            <div class="col-4" id="myChart" style="border: 1px solid black; height:400px; margin: 0 auto; border-radius: 10px"></div>
            <div class="col-7" id="myChart2" style="border: 1px solid black; margin: 0 auto; border-radius: 10px"></div>
        </div>
    </main>
    <?php require '../helpers/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../js/student-population.js"></script>
    <script src="../js/student-attendance.js"></script>
</body>

</html>