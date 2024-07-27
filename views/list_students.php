<?php
session_start();
$title = "Admin page";

require '../helpers/connection.php';
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
                        <li><a class="dropdown-item" href="#">Add Student</a></li>
                        <li><a class="dropdown-item" href="#">List all students</a></li>
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
            <h4>List all students</h4><hr>
            <?php
            // SQL query to fetch student data
            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-striped table-hover'>
            <tr>
                <th scope='col'>Student ID</th>
                <th scope='col'>First Name</th>
                <th scope='col'>Last Name</th>
                <th scope='col'>Date of Birth</th>
                <th scope='col'>Gender</th>
                <th scope='col'>Phone Number</th>
                <th scope='col'>Email</th>
                <th scope='col'>Emergency Phone</th>
            </tr>";
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["student_id"] . "</td>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["date_of_birth"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["phone_number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["emergency_phone"] . "</td>";
                    echo "</tr>";
                }
                echo "
        </table>";
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </main>
    <?php require '../helpers/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>