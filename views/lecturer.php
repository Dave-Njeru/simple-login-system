<?php
session_start();
$title = "Lecturer page";
?>

<!doctype html>
<html lang="en">
<?php require '../helpers/head.php'; ?>

<body class="container">
    <!--header-->
    <?php require '../helpers/header.php'; ?>
    <nav>
        <div class="row" style="margin: 20px 0;">
            <div class="col-2">
                <p>Welcome Back &#x1F44B;</p>
            </div>
            <div class="col-4" style="font-size: 12 !important;">
                <span class="dropdown">
                    <span class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Assign
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Post assignment</a></li>
                        <li><a class="dropdown-item" href="#">Grade assignment</a></li>
                    </ul>
                </span>
                <span class="dropdown">
                    <span class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Course
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Upload content</a></li>
                        <li><a class="dropdown-item" href="#">Announcement posting</a></li>
                    </ul>
                </span>
                <span class="dropdown">
                    <span class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Communicate
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Email student</a></li>
                        <li><a class="dropdown-item" href="#">Online forums</a></li>
                    </ul>
                </span>
            </div>
            <div class="col-4">
                <ul>
                    <li><a href="../helpers/logout.php" style="color: black;"><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Log out">exit_to_app</i></a> </li>
                    <li><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Settings">settings</i></li>
                    <li><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Notifications">notifications</i></li>
                    <li><i class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Messages">email</i></li>
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
            <div class="col" id="myChart" style="border: 1px solid black; height:400px; border-radius: 10px"></div>
        </div>
    </main>
    <?php require '../helpers/footer.php'; ?>
    <!--javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="../js/unit-performance.js"></script>
</body>

</html>