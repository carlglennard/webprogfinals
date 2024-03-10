<?php
    session_start();
    if (isset($_SESSION["users"])){
        header("Location: indeks.php");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        <div class="registration-box">
            <?php
            if(isset($_POST["Submit"])) {
                $email = $_POST["Email"];
                $password = $_POST["password"];
                $errors = array();

                if (empty($email) || empty($password)) {
                    array_push($errors, "Email and password are required");
                }

                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $user = mysqli_fetch_assoc($result);

                    if ($user && password_verify($password, $user['password'])) {
                        $_SESSION["user"] = $user;
                        header("Location: indeks.php");
                        exit();
                    } else {
                        array_push($errors, "Invalid email or password");
                    }
                } else {
                    array_push($errors, "Something went wrong");
                }

                if (count($errors) > 0){
                    foreach($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }
            }
            ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="Email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="Submit" value="Login">
                </div>
            </form>
            <div><p>Don't have an account? <a href="registration.php">Register Here</a></div>
        </div>
    </div>
</body>
</html>
